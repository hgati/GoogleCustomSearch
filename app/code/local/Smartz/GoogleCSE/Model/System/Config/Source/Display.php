<?php

class Smartz_GoogleCSE_Model_System_Config_Source_Display
{
    /**
     * Get display options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'store',
                'label' => Mage::helper('smartzgooglecse')->__('Only Store Results')
            ),
            array(
                'value' => 'google',
                'label' => Mage::helper('smartzgooglecse')->__('Only Google Results')
            ),
            array(
                'value' => 'both',
                'label' => Mage::helper('smartzgooglecse')->__('Store and Google Results')
            )
        );
    }
}
