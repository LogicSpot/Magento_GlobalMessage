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