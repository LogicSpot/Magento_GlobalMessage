<?php

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