<?php

/**
 * Main block class for module
 *
 * Class LogicSpot_GlobalMessage_Block_Message
 */
class LogicSpot_GlobalMessage_Block_Message extends Mage_Core_Block_Template
{
    /**
     * Set custom template for block
     */
    public function __construct() {
        parent::__construct();
        $this->setTemplate('logicspot/globalmessage/message.phtml');
    }

    /**
     * Check if the module is enabled and send block html
     *
     * @return string
     */
    protected function _toHtml()
    {
        if (Mage::helper('logicspot_globalmessage')->isEnabled()) {
            return parent::_toHtml();
        } else {
            return '';
        }
    }

    /**
     * Get cms block and return content html
     *
     * @return string
     */
    public function getCmsBlockHtml() {
        /** @var Mage_Cms_Block_Block $block */
        $block = Mage::app()->getLayout()->createBlock('cms/block')->setBlockId(Mage::helper('logicspot_globalmessage')->getBlockId());
        return $block->toHtml();
    }
}