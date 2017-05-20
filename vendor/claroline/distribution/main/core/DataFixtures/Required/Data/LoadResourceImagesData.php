<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\CoreBundle\DataFixtures\Required\Data;

use Claroline\CoreBundle\Persistence\ObjectManager;
use Claroline\CoreBundle\Entity\Resource\ResourceIcon;
use Claroline\CoreBundle\DataFixtures\Required\RequiredFixture;

/**
 * Resource images data fixture.
 */
class LoadResourceImagesData implements RequiredFixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $coreIconWebDirRelativePath = 'bundles/clarolinecore/images/resources/icons/';
        $resourceImages = $this->container->get('claroline.manager.icon_manager')->getDefaultIconMap();

        foreach ($resourceImages as $resourceImage) {
            $rimg = new ResourceIcon();
            $rimg->setRelativeUrl($coreIconWebDirRelativePath.$resourceImage[0]);
            $rimg->setMimeType($resourceImage[1]);
            $rimg->setShortcut(false);
            $manager->persist($rimg);

            $this->container->get('claroline.manager.icon_manager')
                ->createShortcutIcon($rimg);
        }
    }

    public function setContainer($container)
    {
        $this->container = $container;
    }
}
