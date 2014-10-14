<?php

/**
 * New source model for config fields that allows to select cms block from list
 *
 * Class LogicSpot_GlobalMessage_Model_System_Config_Source_Cms_Block
 */
class LogicSpot_GlobalMessage_Model_System_Config_Source_Cms_Block
{

    protected $_options;

    /**
     * Retrieve and return option array of cms blocks
     *
     * @return array
     */
    public function toOptionArray()
    {
        if (!$this->_options) {
            $this->_options = Mage::getResourceModel('cms/block_collection')
                ->load()->toOptionArray();
        }
        return $this->_options;
    }

}
