<?php
class Home extends SENE_Controller{
	var $page = '';
	
	public function __construct(){
    parent::__construct();
		$this->setTheme('front');
		$this->page = 'home';
	}
	public function index(){
		$data = array();
		$data['page'] = $this->page;
		
		$this->putThemeContent("home/home",$data);
		
		$this->loadLayout('col-2-left',$data);
		$this->render();
	}
	public function col_2_left(){
		$data = array();
		$data['page'] = 'col_2_right';
		
		$this->putThemeContent("home/home",$data);
		
		$this->loadLayout('col-2-left',$data);
		$this->render();
	}
	public function col_2_right(){
		$data = array();
		$data['page'] = 'col_2_right';
		
		$this->putThemeContent("home/home",$data);
		
		$this->loadLayout('col-2-right',$data);
		$this->render();
	}
	public function col_1(){
		$data = array();
		$data['page'] = 'col_1';
		
		$this->putThemeContent("home/home",$data);
		
		$this->loadLayout('col-1',$data);
		$this->render();
	}

}
