<?php
namespace Home\Controller;
use Think\Controller;
use Home\Common\SimpleUtil;
class TestController extends CommonController {
    	public function test(){
		$result['data'] =  $this -> model -> test();
		$this->ajaxReturn($_SESSION['SYSTEM_USER_ID']);
	}
	
	protected function _initialize() {
		parent::_initialize();
		$this->model = D('KnowledgeBase');
	}
	
}