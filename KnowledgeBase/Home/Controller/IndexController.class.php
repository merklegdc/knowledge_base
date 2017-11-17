<?php
namespace Home\Controller;
use Think\Controller;
use Home\Common\SimpleUtil;
class IndexController extends CommonController {
    public function index(){
		$this -> display('index');
    }
	
	public function getAll(){
		$result['data'] =  $this -> model -> getAll();
		$this->ajaxReturn($result);
	}
	
	public function updateFlag($like_flag,$article_id){
		$result['data'] =  $this -> model -> updateFlag($like_flag,$article_id);
		$this->ajaxReturn($result);
	}

	protected function _initialize() {
		parent::_initialize();
		$this->model = D('KnowledgeBase');
	}
	
	public function addArticle($author,$title,$url,$subject,$create_date){
		if(isset($_SERVER['HTTP_X_ORIGINAL_URL'])){
                    $name=urldecode(substr($_SERVER['HTTP_X_ORIGINAL_URL'],strrpos($_SERVER['HTTP_X_ORIGINAL_URL'],'/')+1)); 
         }
		var_dump($_SERVER);
		$result['data'] =  $this -> model -> addArticle($author,$title,$url,$subject,$create_date);
		$this->ajaxReturn($result);
	}
	
}