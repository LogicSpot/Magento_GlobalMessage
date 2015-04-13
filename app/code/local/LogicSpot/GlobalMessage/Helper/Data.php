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
 * Main helper class
 *
 * Class LogicSpot_GlobalMessage_Helper_Data
 */
class LogicSpot_GlobalMessage_Helper_Data extends Mage_Core_Helper_Abstract
{
    /** XML paths to config values */
    const GLOBAL_MESSAGE_ENABLED    = 'logicspot/globalmessage/enable';
    const GLOBAL_MESSAGE_BLOCK      = 'logicspot/globalmessage/block_id';

    /**
     * Check and return if module is enabled in current store
     *
     * @return bool
     */
    public function isEnabled() {
        return Mage::getStoreConfigFlag(self::GLOBAL_MESSAGE_ENABLED);
    }

    /**
     * Return block id set for current store
     *
     * @return int
     */
    public function getBlockId() {
        return Mage::getStoreConfig(self::GLOBAL_MESSAGE_BLOCK);
    }
}