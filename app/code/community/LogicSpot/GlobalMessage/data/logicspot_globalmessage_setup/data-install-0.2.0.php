<?php
/**
 * LogicSpot_GlobalMessage
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @category    LogicSpot
 * @package     LogicSpot_GlobalMessage
 * @copyright   Copyright (c) 2015 LogicSpot (http://www.logicspot.com)
 * @license     http://www.gnu.org/licenses/gpl-3.0.txt GNU General Public License v3.0
 */

$content = <<<EOT
This is the test global message installed by default. You can change it in Magento Admin by going to CMS -> Static block and editing block with identifier "global_message"
EOT;

$cmsBlock = Mage::getModel('cms/block')->load('global_message', 'identifier');
if ($cmsBlock->isObjectNew()) {
    $cmsBlock->setIdentifier('global_message')
        ->setStores(array(0))
        ->setIsActive(true)
        ->setTitle('LogicSpot GlobalMessage block')
        ->setContent($content)
        ->save();
}

$msgConfig = new Mage_Core_Model_Config();
$msgConfig->saveConfig('logicspot_globalmessage/globalmessage/block_id', $cmsBlock->getId());