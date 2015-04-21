<?php

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