<?php
namespace Home\Model;
use Think\Model;
class KnowledgeBaseModel extends Model {
	protected $tableName = 'knowledge_base_admin';
	
	public function getAll(){
		return M() -> query("call kb('".$_SESSION['SYSTEM_USER_ID']."')");
	}
	
	public function updateFlag($like_flag,$article_id){
		return M() -> execute("call change_flag('".$_SESSION['SYSTEM_USER_ID']."','".$like_flag."','".$article_id."')");
	}
	
	public function addArticle($author,$title,$url,$subject,$create_date){
		return M() -> execute("call add_article('".$_SESSION['SYSTEM_USER_ID']."','".$author."','".$title."','".$url."','".$subject."','".$create_date."')");
	}
	
}