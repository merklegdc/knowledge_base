<?php
namespace Home\Model;
use Think\Model;
class TestModel extends Model {
	protected $tableName = 'test';
	
	public function test(){
		return this -> select();
	}
	
}