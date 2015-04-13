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
