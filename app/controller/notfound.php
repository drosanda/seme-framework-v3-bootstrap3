<?php
class Notfound extends SENE_Controller{
	public function __constructx(){
    parent::__construct();
		$this->setTheme('front');
	}
	public function index(){
		header("HTTP/1.0 404 Not Found");
		$data = array();
		$this->loadLayout('notfound',$data);
		$this->render();
	}
}
