<?php
/**
 * This PHP class should only read an iCal file (*.ics), parse it and return an
 * array with its content.
 *
 * PHP Version >= 5.3.0
 *
 * @category Parser
 * @package  ics-parser
 * @author   Martin Thoma <info@martin-thoma.de>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     https://github.com/MartinThoma/ics-parser/
 * @example  $ical = new ical('MyCal.ics'); print_r($ical->events());
 * @version  2.0.0
 */

namespace ICal;

use ICal\EventObject;

/**
 * This is the ICal class
 *
 * @param {string} filename The name of the file which should be parsed
 * @constructor
 */
class ICal
{
    /**
     * How many ToDos are in this iCal?
     * @var int
     */
    public $todoCount = 0;

    /**
     * How many events are in this iCal?
     * @var int
     */
    public $eventCount = 0;

    /**
     * How many freebusy are in this iCal?
     * @var int
     */
    public $freebusyCount = 0;

    /**
     * The parsed calendar
     * @var array
     */
    public $cal;

    /**
     * Which keyword has been added to cal at last?
     * @var string
     */
    private $lastKeyword;

    /**
     * The value in years to use for indefinite, recurring events
     * @var int
     */
    public $defaultSpan = 2;
    public $defaultWeekStart = 'SU';

    const UNIX_MIN_YEAR = 1970;

    const DATE_TIME_FORMAT = 'Ymd\THis';

    protected $dayOrdinals = array(
        1 => 'first',
        2 => 'second',
        3 => 'third',
        4 => 'fourth',
        5 => 'fifth',
        6 => 'last',
    );

    protected $weekdays = array(
        'SU' => 'sunday',
        'MO' => 'monday',
        'TU' => 'tuesday',
        'WE' => 'wednesday',
        'TH' => 'thursday',
        'FR' => 'friday',
        'SA' => 'saturday',
    );

    protected $monthNames = array(
        1  => 'January',
        2  => 'February',
        3  => 'March',
        4  => 'April',
        5  => 'May',
        6  => 'June',
        7  => 'July',
        8  => 'August',
        9  => 'September',
        10 => 'October',
        11 => 'November',
        12 => 'December',
    );

    protected $frequencyConversion = array(
        'DAILY'   => 'day',
        'WEEKLY'  => 'week',
        'MONTHLY' => 'month',
        'YEARLY'  => 'year',
    );

    /**
     * Creates the iCal Object
     *
     * @param mixed $filename The path to the iCal-file or an array of lines from an iCal file
     */
    public function __construct($filename = false, $weekStart = false)
    {
        if (!$filename) {
            return false;
        }

        if (is_array($filename)) {
            $lines = $filename;
        } else {
            $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        }

        if ($weekStart) {
            $this->defaultWeekStart = $weekStart;
        }

        $this->initLines($lines);
    }

    /**
     * Initializes lines from a URL
     *
     * @param string $url The url of the ical file to download and initialize.
     *
     * @return ICal
     */
    public function initURL($url)
    {
        $contents = file_get_contents($url);

        $lines = explode("\n", $contents);

        return $this->initLines($lines);
    }

    /**
     * Initializes lines from a string
     *
     * @param string $contents The contents of the ical file to initialize
     *
     * @return ICal
     */
    public function initString($contents)
    {
        $lines = explode("\n", $contents);

        return $this->initLines($lines);
    }

    /**
     * Initializes lines from file
     *
     * @param array $lines The lines to initialize
     *
     * @return ICal
     */
    public function initLines($lines)
    {
        if (stristr($lines[0], 'BEGIN:VCALENDAR') !== false) {
            $component = '';
            foreach ($lines as $line) {
                $line = rtrim($line); // Trim trailing whitespace
                $add  = $this->keyValueFromString($line);

                if ($add === false) {
                    $this->addCalendarComponentWithKeyAndValue($component, false, $line);
                    continue;
                }

                $keyword = $add[0];
                $values  = $add[1]; // Could be an array containing multiple values

                if (!is_array($values)) {
                    if (!empty($values)) {
                        $values = array($values); // Make an array as not already
                        $blank_array = array(); // Empty placeholder array
                        array_push($values, $blank_array);
                    } else {
                        $values = array(); // Use blank array to ignore this line
                    }
                } else if (empty($values[0])) {
                    $values = array(); // Use blank array to ignore this line
                }

                $values = array_reverse($values); // Reverse so that our array of properties is processed first

                foreach ($values as $value) {
                    switch ($line) {
                        // http://www.kanzaki.com/docs/ical/vtodo.html
                        case 'BEGIN:VTODO':
                            $this->todoCount++;
                            $component = 'VTODO';
                            break;

                        // http://www.kanzaki.com/docs/ical/vevent.html
                        case 'BEGIN:VEVENT':
                            if (!is_array($value)) {
                                $this->eventCount++;
                            }
                            $component = 'VEVENT';
                            break;

                        // http://www.kanzaki.com/docs/ical/vfreebusy.html
                        case 'BEGIN:VFREEBUSY':
                            $this->freebusyCount++;
                            $component = 'VFREEBUSY';
                            break;

                        // All other special strings
                        case 'BEGIN:VCALENDAR':
                        case 'BEGIN:DAYLIGHT':
                            // http://www.kanzaki.com/docs/ical/vtimezone.html
                        case 'BEGIN:VTIMEZONE':
                        case 'BEGIN:STANDARD':
                        case 'BEGIN:VALARM':
                            $component = $value;
                            break;
                        case 'END:VALARM':
                        case 'END:VTODO': // End special text - goto VCALENDAR key
                        case 'END:VEVENT':
                        case 'END:VFREEBUSY':
                        case 'END:VCALENDAR':
                        case 'END:DAYLIGHT':
                        case 'END:VTIMEZONE':
                        case 'END:STANDARD':
                            $component = 'VCALENDAR';
                            break;
                        default:
                            $this->addCalendarComponentWithKeyAndValue($component, $keyword, $value);
                            break;
                    }
                }
            }

            $this->processRecurrences();
            $this->processDatesConversion();
        }
    }

    /**
     * Add to $this->ical array one value and key.
     *
     * @param string $component         This could be VTODO, VEVENT, VCALENDAR, ...
     * @param string|boolean $keyword   The keyword, for example DTSTART
     * @param string $value             The value, for example 20110105T090000Z
     *
     * @return void
     */
    protected function addCalendarComponentWithKeyAndValue($component, $keyword, $value)
    {
        if ($keyword == false) {
            $keyword = $this->lastKeyword;
        }

        switch ($component) {
            case 'VTODO':
                $this->cal[$component][$this->todoCount - 1][$keyword] = $value;
                break;
            case 'VEVENT':
                if (!isset($this->cal[$component][$this->eventCount - 1][$keyword . '_array'])) {
                    $this->cal[$component][$this->eventCount - 1][$keyword . '_array'] = array();
                }

                if (is_array($value)) {
                    // Add array of properties to the end
                    array_push($this->cal[$component][$this->eventCount - 1][$keyword . '_array'], $value);
                } else {
                    if (!isset($this->cal[$component][$this->eventCount - 1][$keyword])) {
                        $this->cal[$component][$this->eventCount - 1][$keyword] = $value;
                    }

                    $this->cal[$component][$this->eventCount - 1][$keyword . '_array'][] = $value;

                    // Glue back together for multi-line content
                    if ($this->cal[$component][$this->eventCount - 1][$keyword] != $value) {
                        $ord = (isset($value[0])) ? ord($value[0]) : null; // First char

                        if (in_array($ord, array(9, 32))) { // Is space or tab?
                            $value = substr($value, 1); // Only trim the first character
                        }

                        // Account for multiple definitions of current keyword (e.g. ATTENDEE)
                        if (is_array($this->cal[$component][$this->eventCount - 1][$keyword . '_array'][1])) {
                            // Concat value *with separator* as content spans multiple lines
                            $this->cal[$component][$this->eventCount - 1][$keyword] .= ';' . $value;
                        } else {
                            if ($keyword === 'EXDATE') {
                                // This will give out a comma separated EXDATE string as per RFC2445
                                // Example: EXDATE:19960402T010000Z,19960403T010000Z,19960404T010000Z
                                // Usage: $event['EXDATE'] will print out 19960402T010000Z,19960403T010000Z,19960404T010000Z
                                $this->cal[$component][$this->eventCount - 1][$keyword] .= ',' . $value;
                            } else {
                                // Concat value as content spans multiple lines
                                $this->cal[$component][$this->eventCount - 1][$keyword] .= $value;
                            }
                        }
                    }
                }
                break;
            case 'VFREEBUSY':
                $this->cal[$component][$this->freebusyCount - 1][$keyword] = $value;
                break;
            default:
                $this->cal[$component][$keyword] = $value;
                break;
        }
        $this->lastKeyword = $keyword;
    }

    /**
     * Get a key-value pair of a string.
     *
     * @param string $text which is like "VCALENDAR:Begin" or "LOCATION:"
     *
     * @return array
     */
    protected function keyValueFromString($text)
    {
        // Match colon separator outside of quoted substrings
        // Fallback to nearest semicolon outside of quoted substrings, if colon cannot be found
        // Do not try and match within the value paired with the keyword
        preg_match('/(.*?)(?::(?=(?:[^"]*"[^"]*")*[^"]*$)|;(?=[^:]*$))([\w\W]*)/', htmlspecialchars($text, ENT_QUOTES, 'UTF-8'), $matches);

        if (count($matches) == 0) {
            return false;
        }

        if (preg_match('/^([A-Z-]+)([;][\w\W]*)?$/', $matches[1])) {
            $matches = array_splice($matches, 1, 2); // Remove first match and re-align ordering

            // Process properties
            if (preg_match('/([A-Z-]+)[;]([\w\W]*)/', $matches[0], $properties)) {
                // Remove first match
                array_shift($properties);
                // Fix to ignore everything in keyword after a ; (e.g. Language, TZID, etc.)
                $matches[0] = $properties[0];
                array_shift($properties); // Repeat removing first match

                $formatted = array();
                foreach ($properties as $property) {
                    // Match semicolon separator outside of quoted substrings
                    preg_match_all('~[^\r\n";]+(?:"[^"\\\]*(?:\\\.[^"\\\]*)*"[^\r\n";]*)*~', $property, $attributes);
                    // Remove multi-dimensional array and use the first key
                    $attributes = (sizeof($attributes) == 0) ? array($property) : reset($attributes);

                    if (is_array($attributes)) {
                        foreach ($attributes as $attribute) {
                            // Match equals sign separator outside of quoted substrings
                            preg_match_all(
                                '~[^\r\n"=]+(?:"[^"\\\]*(?:\\\.[^"\\\]*)*"[^\r\n"=]*)*~',
                                $attribute,
                                $values
                            );
                            // Remove multi-dimensional array and use the first key
                            $value = (sizeof($values) == 0) ? null : reset($values);

                            if (is_array($value) && isset($value[1])) {
                                // Remove double quotes from beginning and end only
                                $formatted[$value[0]] = trim($value[1], '"');
                            }
                        }
                    }
                }

                // Assign the keyword property information
                $properties[0] = $formatted;

                // Add match to beginning of array
                array_unshift($properties, $matches[1]);
                $matches[1] = $properties;
            }

            return $matches;
        } else {
            return false; // Ignore this match
        }
    }

    /**
     * Return Unix timestamp from iCal date time format
     *
     * @param string $icalDate A Date in the format YYYYMMDD[T]HHMMSS[Z] or
     *                           YYYYMMDD[T]HHMMSS or
     *                           TZID=Timezone:YYYYMMDD[T]HHMMSS
     *
     * @return int
     */
    public function iCalDateToUnixTimestamp($icalDate)
    {
        /**
         * iCal times may be in 3 formats, ref http://www.kanzaki.com/docs/ical/dateTime.html
         * UTC:      Has a trailing 'Z'
         * Floating: No timezone reference specified, no trailing 'Z', use local time
         * TZID:     Set timezone as specified
         * Use DateTime class objects to get around limitations with mktime and gmmktime. Must have a local timezone set
         * to process floating times.
         */

        $pattern  = '/\AT?Z?I?D?=?(.*):?'; // 1: TimeZone
        $pattern .= '([0-9]{4})';          // 2: YYYY
        $pattern .= '([0-9]{2})';          // 3: MM
        $pattern .= '([0-9]{2})';          // 4: DD
        $pattern .= 'T?';                  //    Time delimiter
        $pattern .= '([0-9]{0,2})';        // 5: HH
        $pattern .= '([0-9]{0,2})';        // 6: MM
        $pattern .= '([0-9]{0,2})';        // 7: SS
        $pattern .= '(Z?)/';               // 8: UTC flag
        preg_match($pattern, $icalDate, $date);
        $tzone = str_replace(':', '', $date[1]);

        // Unix timestamp can't represent dates before 1970
        if ($date[2] <= self::UNIX_MIN_YEAR) {
            return false;
        }
        // Unix timestamps after 03:14:07 UTC 2038-01-19 might cause an overflow
        // if 32 bit integers are used.

        if ($date[8] == 'Z') {
            $convDate = new \DateTime('now', new \DateTimeZone('UTC'));
        } else if (!$tzone) {
            $defaultTimeZone = $this->calendarTimeZone();

            if (!$defaultTimeZone) {
                $convDate = new \DateTime('now');
            } else {
                $convDate = new \DateTime('now', new \DateTimeZone($defaultTimeZone));
            }
        } else {
            $convDate = new \DateTime('now', new \DateTimeZone($tzone));
        }

        $convDate->setDate((int) $date[2], (int) $date[3], (int) $date[4]);
        $convDate->setTime((int) $date[5], (int) $date[6], (int) $date[7]);
        $timestamp = $convDate->getTimestamp();

        return $timestamp;
    }

    /**
     * Return a date adapted to the calendar timezone depending to the event TZID
     *
     * @param array $event an event
     * @param string $key an event parameter (DTSTART or DTEND)
     *
     * @return string Ymd\THis date
     */
    public function iCalDateWithTimeZone($event, $key)
    {
        $defaultTimeZone = $this->calendarTimeZone();
        if (!$defaultTimeZone) {
            return false;
        }
        $date_array = $event[$key . '_array'];
        $date = $event[$key];

        if (isset($date_array[0]['TZID']) && preg_match('/[a-z]*\/[a-z_]*/i', $date_array[0]['TZID'])) {
            $timeZone = $date_array[0]['TZID'];
        } else {
            $timeZone = $defaultTimeZone;
        }

        $dateTime = new \DateTime($event[$key]);

        if (substr($date, -1) == 'Z') {
            $date = substr($date, 0, -1);
            $tz = new \DateTimeZone($defaultTimeZone);
            $offset = timezone_offset_get($tz, $dateTime);
        } else {
            $tz = new \DateTimeZone($defaultTimeZone);
            $offset1 = timezone_offset_get($tz, $dateTime);
            $tz = new \DateTimeZone($timeZone);
            $offset2 = timezone_offset_get($tz, $dateTime);
            $offset = $offset1 - $offset2;
        }

        if ($offset >= 0) {
            $offset = '+' . $offset;
        }

        $time = strtotime($date . " $offset seconds");

        return date('Ymd\THis', $time);
    }

    /**
     * Processes recurrences
     *
     * @author John Grogg <john.grogg@gmail.com>
     * @return array
     */
    public function processRecurrences()
    {
        $array = $this->cal;
        $events = $array['VEVENT'];
        if (empty($events)) {
            return false;
        }
        foreach ($events as $anEvent) {
            if (isset($anEvent['RRULE']) && $anEvent['RRULE'] != '') {
                // Recurring event, parse RRULE and add appropriate duplicate events
                $rrules = array();
                $rruleStrings = explode(';', $anEvent['RRULE']);
                foreach ($rruleStrings as $s) {
                    list($k, $v) = explode('=', $s);
                    $rrules[$k] = $v;
                }
                // Get frequency
                $frequency = $rrules['FREQ'];
                // Get Start timestamp
                $startTimestamp = $this->iCalDateToUnixTimestamp($anEvent['DTSTART']);
                if (isset($anEvent['DTEND'])) {
                    $endTimestamp = $this->iCalDateToUnixTimestamp($anEvent['DTEND']);
                } else {
                    $endTimestamp = $this->iCalDateToUnixTimestamp($anEvent['DTSTART']);
                }
                $eventTimestampOffset = $endTimestamp - $startTimestamp;
                // Get Interval
                $interval = (isset($rrules['INTERVAL']) && $rrules['INTERVAL'] != '')
                    ? $rrules['INTERVAL']
                    : 1;

                $dayNumber = null;
                $weekDay = null;

                if (in_array($frequency, array('MONTHLY', 'YEARLY'))
                    && isset($rrules['BYDAY']) && $rrules['BYDAY'] != ''
                ) {
                    // Deal with BYDAY
                    $dayNumber = intval($rrules['BYDAY']);
                    if (empty($dayNumber)) { // Returns 0 when no number defined in BYDAY
                        if (!isset($rrules['BYSETPOS'])) {
                            $dayNumber = 1; // Set first as default
                        } else if (is_numeric($rrules['BYSETPOS'])) {
                            $dayNumber = $rrules['BYSETPOS'];
                        }
                    }
                    $dayNumber = ($dayNumber == -1) ? 6 : $dayNumber; // Override for our custom key (6 => 'last')
                    $weekDay = substr($rrules['BYDAY'], -2);
                }

                $untilDefault = date_create('now');
                $untilDefault->modify($this->defaultSpan . ' year');
                $untilDefault->setTime(23, 59, 59); // End of the day
                $untilDefault = date_format($untilDefault, self::DATE_TIME_FORMAT);

                if (isset($rrules['UNTIL'])) {
                    // Get Until
                    $until = strtotime($rrules['UNTIL']);
                } else if (isset($rrules['COUNT'])) {
                    $countOrig = (is_numeric($rrules['COUNT']) && $rrules['COUNT'] > 1) ? $rrules['COUNT'] : 0;
                    $count = ($countOrig - 1); // Remove one to exclude the occurrence that initialises the rule
                    $count += ($count > 0) ? $count * ($interval - 1) : 0;
                    $countNb = 1;
                    $offset = "+$count " . $this->frequencyConversion[$frequency];
                    $until = strtotime($offset, $startTimestamp);

                    if (in_array($frequency, array('MONTHLY', 'YEARLY'))
                        && isset($rrules['BYDAY']) && $rrules['BYDAY'] != ''
                    ) {
                        $dtstart = date_create($anEvent['DTSTART']);
                        for ($i = 1; $i <= $count; $i++) {
                            $dtstartClone = clone $dtstart;
                            $dtstartClone->modify('next ' . $this->frequencyConversion[$frequency]);
                            $offset = "{$this->dayOrdinals[$dayNumber]} {$this->weekdays[$weekDay]} of " . $dtstartClone->format('F Y H:i:01');
                            $dtstart->modify($offset);
                        }

                        /**
                         * Jumping X months forwards doesn't mean
                         * the end date will fall on the same day defined in BYDAY
                         * Use the largest of these to ensure we are going far enough
                         * in the future to capture our final end day
                         */
                        $until = max($until, $dtstart->format('U'));
                    }

                    unset($offset);
                } else {
                    $until = $this->iCalDateToUnixTimestamp($untilDefault);
                }

                if(!isset($anEvent['EXDATE_array'])){
                    $anEvent['EXDATE_array'] = array();
                }

                // Decide how often to add events and do so
                switch ($frequency) {
                    case 'DAILY':
                        // Simply add a new event each interval of days until UNTIL is reached
                        $offset = "+$interval day";
                        $recurringTimestamp = strtotime($offset, $startTimestamp);

                        while ($recurringTimestamp <= $until) {
                            // Add event
                            $anEvent['DTSTART'] = date(self::DATE_TIME_FORMAT, $recurringTimestamp);
                            $anEvent['DTEND'] = date(
                                self::DATE_TIME_FORMAT,
                                $recurringTimestamp + $eventTimestampOffset
                            );

                            $searchDate = $anEvent['DTSTART'];
                            $isExcluded = array_filter($anEvent['EXDATE_array'], function($val) use ($searchDate) {
                                return is_string($val) && strpos($searchDate, $val) === 0;
                            });

                            if (!$isExcluded) {
                                $events[] = $anEvent;

                                // If RRULE[COUNT] is reached then break
                                if (isset($rrules['COUNT'])) {
                                    $countNb++;

                                    if ($countNb >= $countOrig) {
                                        break 2;
                                    }
                                }
                            }

                            // Move forwards
                            $recurringTimestamp = strtotime($offset, $recurringTimestamp);
                        }
                        break;
                    case 'WEEKLY':
                        // Create offset
                        $offset = "+$interval week";

                        // Use RRULE['WKST'] setting or a default week start (UK = SU, Europe = MO)
                        $weeks = array(
                            'SA' => array('SA', 'SU', 'MO', 'TU', 'WE', 'TH', 'FR'),
                            'SU' => array('SU', 'MO', 'TU', 'WE', 'TH', 'FR', 'SA'),
                            'MO' => array('MO', 'TU', 'WE', 'TH', 'FR', 'SA', 'SU'),
                        );

                        $wkst = (isset($rrules['WKST']) && in_array($rrules['WKST'], array('SA', 'SU', 'MO'))) ? $rrules['WKST'] : $this->defaultWeekStart;
                        $aWeek = $weeks[$wkst];
                        $days = array('SA' => 'Saturday', 'SU' => 'Sunday', 'MO' => 'Monday');

                        // Build list of days of week to add events
                        $weekdays = $aWeek;

                        if (isset($rrules['BYDAY']) && $rrules['BYDAY'] != '') {
                            $bydays = explode(',', $rrules['BYDAY']);
                        } else {
                            $findDay = $weekdays[date('w', $startTimestamp)];
                            $bydays = array($findDay);
                        }

                        // Get timestamp of first day of start week
                        $weekRecurringTimestamp = (date('w', $startTimestamp) == 0)
                            ? $startTimestamp
                            : strtotime("last {$days[$wkst]} " . date('H:i:s', $startTimestamp), $startTimestamp);

                        // Step through weeks
                        while ($weekRecurringTimestamp <= $until) {
                            // Add events for bydays
                            $dayRecurringTimestamp = $weekRecurringTimestamp;

                            foreach ($weekdays as $day) {
                                // Check if day should be added

                                if (in_array($day, $bydays) && $dayRecurringTimestamp > $startTimestamp
                                    && $dayRecurringTimestamp <= $until
                                ) {
                                    // Add event to day
                                    $anEvent['DTSTART'] = date(self::DATE_TIME_FORMAT, $dayRecurringTimestamp);
                                    $anEvent['DTEND'] = date(
                                        self::DATE_TIME_FORMAT,
                                        $dayRecurringTimestamp + $eventTimestampOffset
                                    );

                                    $searchDate = $anEvent['DTSTART'];
                                    $isExcluded = array_filter($anEvent['EXDATE_array'], function($val) use ($searchDate) {
                                        return is_string($val) && strpos($searchDate, $val) === 0;
                                    });

                                    if (!$isExcluded) {
                                        $events[] = $anEvent;

                                        // If RRULE[COUNT] is reached then break
                                        if (isset($rrules['COUNT'])) {
                                            $countNb++;

                                            if ($countNb >= $countOrig) {
                                                break 2;
                                            }
                                        }
                                    }
                                }

                                // Move forwards a day
                                $dayRecurringTimestamp = strtotime('+1 day', $dayRecurringTimestamp);
                            }

                            // Move forwards $interval weeks
                            $weekRecurringTimestamp = strtotime($offset, $weekRecurringTimestamp);
                        }
                        break;
                    case 'MONTHLY':
                        // Create offset
                        $offset = "+$interval month";
                        $recurringTimestamp = strtotime($offset, $startTimestamp);

                        if (isset($rrules['BYMONTHDAY']) && $rrules['BYMONTHDAY'] != '') {
                            // Deal with BYMONTHDAY
                            $monthdays = explode(',', $rrules['BYMONTHDAY']);

                            while ($recurringTimestamp <= $until) {
                                foreach ($monthdays as $monthday) {
                                    // Add event
                                    $anEvent['DTSTART'] = date(
                                        'Ym' . sprintf('%02d', $monthday) . '\THis',
                                        $recurringTimestamp
                                    );
                                    $anEvent['DTEND'] = date(
                                        self::DATE_TIME_FORMAT,
                                        $this->iCalDateToUnixTimestamp($anEvent['DTSTART']) + $eventTimestampOffset
                                    );

                                    $searchDate = $anEvent['DTSTART'];
                                    $isExcluded = array_filter($anEvent['EXDATE_array'], function($val) use ($searchDate) {
                                        return is_string($val) && strpos($searchDate, $val) === 0;
                                    });

                                    if (!$isExcluded) {
                                        $events[] = $anEvent;

                                        // If RRULE[COUNT] is reached then break
                                        if (isset($rrules['COUNT'])) {
                                            $countNb++;

                                            if ($countNb >= $countOrig) {
                                                break 2;
                                            }
                                        }
                                    }
                                }

                                // Move forwards
                                $recurringTimestamp = strtotime($offset, $recurringTimestamp);
                            }
                        } else if (isset($rrules['BYDAY']) && $rrules['BYDAY'] != '') {
                            $startTime = date('His', $startTimestamp);

                            while ($recurringTimestamp <= $until) {
                                $eventStartDesc = "{$this->dayOrdinals[$dayNumber]} {$this->weekdays[$weekDay]} of " . date('F Y H:i:s', $recurringTimestamp);
                                $eventStartTimestamp = strtotime($eventStartDesc);

                                if ($eventStartTimestamp > $startTimestamp && $eventStartTimestamp < $until) {
                                    $anEvent['DTSTART'] = date('Ymd\T', $eventStartTimestamp) . $startTime;
                                    $anEvent['DTEND'] = date(
                                        self::DATE_TIME_FORMAT,
                                        $this->iCalDateToUnixTimestamp($anEvent['DTSTART']) + $eventTimestampOffset
                                    );

                                    $searchDate = $anEvent['DTSTART'];
                                    $isExcluded = array_filter($anEvent['EXDATE_array'], function($val) use ($searchDate) {
                                        return is_string($val) && strpos($searchDate, $val) === 0;
                                    });

                                    if (!$isExcluded) {
                                        $events[] = $anEvent;

                                        // If RRULE[COUNT] is reached then break
                                        if (isset($rrules['COUNT'])) {
                                            $countNb++;

                                            if ($countNb >= $countOrig) {
                                                break 2;
                                            }
                                        }
                                    }
                                }

                                // Move forwards
                                $recurringTimestamp = strtotime($offset, $recurringTimestamp);
                            }
                        }
                        break;
                    case 'YEARLY':
                        // Create offset
                        $offset = "+$interval year";
                        $recurringTimestamp = strtotime($offset, $startTimestamp);

                        // Check if BYDAY rule exists
                        if (isset($rrules['BYDAY']) && $rrules['BYDAY'] != '') {
                            $startTime = date('His', $startTimestamp);

                            while ($recurringTimestamp <= $until) {
                                $eventStartDesc = "{$this->dayOrdinals[$dayNumber]} {$this->weekdays[$weekDay]}"
                                    . " of {$this->monthNames[$rrules['BYMONTH']]} "
                                    . date('Y H:i:s', $recurringTimestamp);
                                $eventStartTimestamp = strtotime($eventStartDesc);

                                if ($eventStartTimestamp > $startTimestamp && $eventStartTimestamp < $until) {
                                    $anEvent['DTSTART'] = date('Ymd\T', $eventStartTimestamp) . $startTime;
                                    $anEvent['DTEND'] = date(
                                        self::DATE_TIME_FORMAT,
                                        $this->iCalDateToUnixTimestamp($anEvent['DTSTART']) + $eventTimestampOffset
                                    );

                                    $searchDate = $anEvent['DTSTART'];
                                    $isExcluded = array_filter($anEvent['EXDATE_array'], function($val) use ($searchDate) {
                                        return is_string($val) && strpos($searchDate, $val) === 0;
                                    });

                                    if (!$isExcluded) {
                                        $events[] = $anEvent;

                                        // If RRULE[COUNT] is reached then break
                                        if (isset($rrules['COUNT'])) {
                                            $countNb++;

                                            if ($countNb >= $countOrig) {
                                                break 2;
                                            }
                                        }
                                    }
                                }

                                // Move forwards
                                $recurringTimestamp = strtotime($offset, $recurringTimestamp);
                            }
                        } else {
                            $day = date('d', $startTimestamp);
                            $startTime = date('His', $startTimestamp);

                            // Step through years
                            while ($recurringTimestamp <= $until) {
                                // Add specific month dates
                                if (isset($rrules['BYMONTH']) && $rrules['BYMONTH'] != '') {
                                    $eventStartDesc = "$day {$this->monthNames[$rrules['BYMONTH']]} " . date('Y H:i:s', $recurringTimestamp);
                                } else {
                                    $eventStartDesc = $day . date('F Y H:i:s', $recurringTimestamp);
                                }

                                $eventStartTimestamp = strtotime($eventStartDesc);

                                if ($eventStartTimestamp > $startTimestamp && $eventStartTimestamp < $until) {
                                    $anEvent['DTSTART'] = date('Ymd\T', $eventStartTimestamp) . $startTime;
                                    $anEvent['DTEND'] = date(
                                        self::DATE_TIME_FORMAT,
                                        $this->iCalDateToUnixTimestamp($anEvent['DTSTART']) + $eventTimestampOffset
                                    );

                                    $searchDate = $anEvent['DTSTART'];
                                    $isExcluded = array_filter($anEvent['EXDATE_array'], function($val) use ($searchDate) {
                                        return is_string($val) && strpos($searchDate, $val) === 0;
                                    });

                                    if (!$isExcluded) {
                                        $events[] = $anEvent;

                                        // If RRULE[COUNT] is reached then break
                                        if (isset($rrules['COUNT'])) {
                                            $countNb++;

                                            if ($countNb >= $countOrig) {
                                                break 2;
                                            }
                                        }
                                    }
                                }

                                // Move forwards
                                $recurringTimestamp = strtotime($offset, $recurringTimestamp);
                            }
                        }
                        break;

                    $events = (isset($countOrig) && sizeof($events) > $countOrig) ? array_slice($events, 0, $countOrig) : $events; // Ensure we abide by COUNT if defined
                }
            }
        }

        $this->cal['VEVENT'] = $events;
    }

    /**
     * Processes dates conversion with timezone
     *
     * Add fields DTSTART_tz and DTEND_tz to each event
     * These fields contain dates adapted to the calendar timezone depending to the event TZID (Ymd\THis)
     * @return array
     */
    public function processDatesConversion()
    {
        $array = $this->cal;
        $events = $array['VEVENT'];

        if (empty($events)) {
            return false;
        }

        foreach ($events as $key => $anEvent) {
            $events[$key]['DTSTART_tz'] = $this->iCalDateWithTimeZone($anEvent, 'DTSTART');
            $events[$key]['DTEND_tz'] = $this->iCalDateWithTimeZone($anEvent, 'DTEND');
        }

        $this->cal['VEVENT'] = $events;
    }

    /**
     * Returns an array of arrays with all events. Every event is an associative
     * array and each property is an element it.
     *
     * @return array|EventObject[]
     */
    public function events()
    {
        $array = $this->cal;
        $array = isset($array['VEVENT']) ? $array['VEVENT'] : array();
        $events = array();

        if (!empty($array)) {
            foreach ($array as $event) {
                $events[] = new EventObject($event);
            }
        }

        return $events;
    }

    /**
     * Returns the calendar name
     *
     * @return string
     */
    public function calendarName()
    {
        return isset($this->cal['VCALENDAR']['X-WR-CALNAME']) ? $this->cal['VCALENDAR']['X-WR-CALNAME'] : '';
    }

    /**
     * Returns the calendar description
     *
     * @return calendar description
     */
    public function calendarDescription()
    {
        return isset($this->cal['VCALENDAR']['X-WR-CALDESC']) ? $this->cal['VCALENDAR']['X-WR-CALDESC'] : '';
    }

    /**
     * Returns the calendar timezone
     *
     * @return calendar timezone
     */
    public function calendarTimeZone()
    {
        if (isset($this->cal['VCALENDAR']['X-WR-TIMEZONE'])) {
            return $this->cal['VCALENDAR']['X-WR-TIMEZONE'];
        } else if (isset($this->cal['VTIMEZONE']['TZID'])) {
            return $this->cal['VTIMEZONE']['TZID'];
        } else {
            return 'UTC';
        }
    }

    /**
     * Returns an array of arrays with all free/busy events. Every event is
     * an associative array and each property is an element it.
     *
     * @return array
     */
    public function freeBusyEvents()
    {
        $array = $this->cal;
        return isset($array['VFREEBUSY']) ? $array['VFREEBUSY'] : '';
    }

    /**
     * Returns a boolean value whether the current calendar has events or not
     *
     * @return boolean
     */
    public function hasEvents()
    {
        return (count($this->events()) > 0) ? true : false;
    }

    /**
     * Returns false when the current calendar has no events in range, else the
     * events.
     *
     * Note that this function makes use of a UNIX timestamp. This might be a
     * problem on January the 29th, 2038.
     * See http://en.wikipedia.org/wiki/Unix_time#Representing_the_number
     *
     * @param boolean $rangeStart Either true or false
     * @param boolean $rangeEnd   Either true or false
     *
     * @return mixed
     */
    public function eventsFromRange($rangeStart = false, $rangeEnd = false)
    {
        $events = $this->sortEventsWithOrder($this->events(), SORT_ASC);

        if (!empty($events)) {
            return false;
        }

        $extendedEvents = array();

        if ($rangeStart === false) {
            $rangeStart = new \DateTime();
        } else {
            $rangeStart = new \DateTime($rangeStart);
        }

        if ($rangeEnd === false || $rangeEnd <= 0) {
            $rangeEnd = new \DateTime();
            $rangeEnd = $rangeEnd->modify('+20 years');
        } else {
            $rangeEnd = new \DateTime($rangeEnd);
        }

        $rangeStart = $rangeStart->format('U');
        $rangeEnd   = $rangeEnd->format('U');

        // Loop through all events by adding two new elements
        foreach ($events as $anEvent) {
            $timestamp = $this->iCalDateToUnixTimestamp($anEvent['DTSTART']);
            if ($timestamp >= $rangeStart && $timestamp <= $rangeEnd) {
                $extendedEvents[] = $anEvent;
            }
        }

        return $extendedEvents;
    }

    /**
     * @param array $events    An array with events.
     * @param int $sortOrder Either SORT_ASC, SORT_DESC, SORT_REGULAR, SORT_NUMERIC, SORT_STRING
     *
     * @return array
     */
    public function sortEventsWithOrder($events, $sortOrder = SORT_ASC)
    {
        $extendedEvents = array();
        $timestamp = array();

        // Loop through all events by adding two new elements
        foreach ($events as $anEvent) {
            if (!array_key_exists('UNIX_TIMESTAMP', $anEvent)) {
                $anEvent['UNIX_TIMESTAMP'] = $this->iCalDateToUnixTimestamp($anEvent['DTSTART']);
            }

            if (!array_key_exists('REAL_DATETIME', $anEvent)) {
                $anEvent['REAL_DATETIME'] = date('d.m.Y', $anEvent['UNIX_TIMESTAMP']);
            }

            $extendedEvents[] = $anEvent;
        }

        foreach ($extendedEvents as $key => $value) {
            $timestamp[$key] = $value['UNIX_TIMESTAMP'];
        }

        array_multisort($timestamp, $sortOrder, $extendedEvents);

        return $extendedEvents;
    }
}