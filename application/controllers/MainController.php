<?php

class MainController extends Zend_Controller_Action
{

	private $_content='init';
	private $_css='init';
	private $_js='init';
	private $_cssSliderPage = 'init';
	
    public function init()
    {
    	$saturs = $this->_request->getParam('saturs');
    	$this->_content = $saturs;
    	switch($saturs){
    		case 'ParSidrabiem':
    			$this->_css = 'parSidrabiem';
    			$this->_js = 'blank';
    			$this->_cssSliderPage = 'blank';
    			break;
    		case 'Piedavajumi':
    			$this->_css = 'parSidrabiem';
    			$this->_js = $saturs;
    			$this->_cssSliderPage = $saturs;
    			break;
    		case 'Pakalpojumi':
    			$this->_css = 'parSidrabiem';
    			$this->_js = 'Pakalpojumi';
    			$this->_cssSliderPage = 'Pakalpojumi';
    			break;	
    		default:
    			$this->_css = 'home';
    			$this->_js = 'blank';
    			$this->_cssSliderPage = 'blank';
    	}
    	
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function homeAction()
    {
    	$this->view->content = $this->_content;
    	$this->view->cssPage = $this->_css;
    	$this->view->jsPage = $this->_js;
    	$this->view->cssSliderPage = $this->_cssSliderPage;
	   //Zend_Cache::clean(Zend_Cache::CLEANING_MODE_ALL);
        // action body
        //$this->view->headLink()->appendStylesheet('css/Menu.css');
    }

    

}



