<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\CoreBundle\Command\Import;

use Claroline\CoreBundle\Command\Traits\BaseCommandTrait;
use Claroline\CoreBundle\Library\Logger\ConsoleLogger;
use Claroline\CoreBundle\Validator\Constraints\CsvHomeTextWidget;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Creates an user, optionaly with a specific role (default to simple user).
 */
class CreateTextWidgetFromCsvCommand extends ContainerAwareCommand
{
    use BaseCommandTrait;
    private $params = ['csv_widget_path' => 'Absolute path to the workspace file: '];

    protected function configure()
    {
        $this->setName('claroline:csv:home_text_widget')
            ->setDescription('Create widget from a csv file');
        $this->setDefinition(
            [new InputArgument('csv_widget_path', InputArgument::REQUIRED, 'The absolute path to the csv file.')]
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //validate the csv file...
        $validator = $this->getContainer()->get('validator');
        $file = $input->getArgument('csv_widget_path');

        $errors = $validator->validateValue($file, new CsvHomeTextWidget());

        if (count($errors)) {
            foreach ($errors as $error) {
                $output->writeln("<error> {$error->getMessage()} </error>");
            }
            throw new \Exception('The csv file is incorrect');
        }

        $consoleLogger = ConsoleLogger::get($output);

        $widgetManager = $this->getContainer()->get('claroline.manager.widget_manager');
        $widgetManager->setLogger($consoleLogger);
        $widgetManager->importTextFromCsv($file);
    }
}
