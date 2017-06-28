<?php

/**
 * Created by : Vincent SAISSET
 * Date: 21/08/13
 * Time: 15:00.
 */

namespace Innova\CollecticielBundle;

use Claroline\CoreBundle\Library\PluginBundle;
use Innova\CollecticielBundle\Installation\AdditionalInstaller;

class InnovaCollecticielBundle extends PluginBundle
{
    public function getRoutingPrefix()
    {
        return 'collecticiel';
    }

    public function getRequiredPlugins()
    {
        return ['Claroline\\AgendaBundle\\ClarolineAgendaBundle'];
    }

    public function getAdditionalInstaller()
    {
        return new AdditionalInstaller();
    }
}
