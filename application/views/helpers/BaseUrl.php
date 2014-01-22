<?php
class Zend_View_Helper_BaseUrl extends Zend_View_Helper_Abstract
{
	function baseUrl()
	{
		$base_url = Zend_Controller_Front::getInstance()->getBaseUrl();
		//$base_url = $request->getBaseUrl();
		//$base_url='sidrabi';
		return $base_url;
	}
}