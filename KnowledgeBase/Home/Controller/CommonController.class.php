<?php
namespace Home\Controller;
use Think\Controller;
import('Home.Common.CommonInclude');
//引入Employee类相关内容，否则无法反序列化
class CommonController extends Controller {

	protected $data;

	protected function _initialize(){
		$this -> refreshUserInfo();
		$this -> refreshBaseInfo();
		
		
		// echo urlencode($_SERVER['REQUEST_URI']);
	}

	private function refreshUserInfo(){
		if (!isset($_SESSION['SYSTEM_USER_ID']) )
		{	
			header('Location:/organization_system/login.php?fromsys=HR_RECRUITMENT&ref=' . urlencode($_SERVER['REQUEST_URI']) );
			die;
		}

	}

	private function refreshBaseInfo(){
		//dump($_SESSION)
		if (!isset($_SESSION['bu_code']) ){
			$baseInfo['bu_code'] = unserialize($_SESSION['SN_USER_INFO'])->bu_code;
			$_SESSION['bu_code'] = 	$baseInfo['bu_code'];
		}else{
			$baseInfo['bu_code'] = $_SESSION['bu_code'];
		}

		$this -> data['baseInfo'] = $baseInfo;

	}

}