<?php
class Zend_View_Helper_CssHelper extends Zend_View_Helper_Abstract
{
    function cssHelper() {
        $request = Zend_Controller_Front::getInstance()->getRequest();
        $file_uri = 'media/css/' . $request->getControllerName() . '/' . $request->getActionName() . '.css';
       
       
        //echo $file_uri;
        if (file_exists($file_uri)) {
	        //echo $file_uri;
            $this->view->headLink()->appendStylesheet('/' . $file_uri);
        }
       
        return $this->view->headLink();
       
    }
}