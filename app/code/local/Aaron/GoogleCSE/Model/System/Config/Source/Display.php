<?php

class Aaron_GoogleCSE_Model_System_Config_Source_Display
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
                'label' => Mage::helper('aarongooglecse')->__('Only Store Results')
            ),
            array(
                'value' => 'google',
                'label' => Mage::helper('aarongooglecse')->__('Only Google Results')
            ),
            array(
                'value' => 'both',
                'label' => Mage::helper('aarongooglecse')->__('Store and Google Results')
            )
        );
    }
}
