<?php

class Smartz_GoogleCSE_Helper_Data extends Mage_Core_Helper_Abstract
{ 	
	const XML_PATH_ACTIVE = 'google/smartzgooglecse/active';
	const XML_PATH_ACCOUNT_ID = 'google/smartzgooglecse/account';
	const XML_PATH_DISPLAY_OPTIONS = 'google/smartzgooglecse/show';
	const XML_PATH_SEARCH_URL = 'google/smartzgooglecse/search_url';
	const XML_PATH_IFRAME_WIDTH = 'google/smartzgooglecse/width';
	const XML_PATH_IFRAME_HEIGHT = 'google/smartzgooglecse/height';

	public function active_bool(){
		return Mage::getStoreConfig(self::XML_PATH_ACTIVE);
	}

	public function account(){
		if (Mage::getStoreConfig(self::XML_PATH_ACCOUNT_ID) == '') {
			return;
		} else {
			return Mage::getStoreConfig(self::XML_PATH_ACCOUNT_ID);
		}
		
	}

	public function custom_search_url(){
		return Mage::getStoreConfig(self::XML_PATH_SEARCH_URL);
	}

	public function iframe_width(){
		return Mage::getStoreConfig(self::XML_PATH_IFRAME_WIDTH);
	}

	public function iframe_height(){
		return Mage::getStoreConfig(self::XML_PATH_IFRAME_HEIGHT);
	}

	public function display_options(){
		return Mage::getStoreConfig(self::XML_PATH_DISPLAY_OPTIONS);
	}
}