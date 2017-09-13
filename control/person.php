<?php
/**
 * 个人介绍控制器
 */
class personControl extends baseControl{

	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model();

		$id = $_GET['id']?$_GET['id']: 1;

		$user_list = $model->query("select * from zoo_user where id=".$id);
		$skill_list = $model->query("select * from zoo_skill where uid=".$id);
		$edu_list = $model->query("select * from zoo_edu where uid=".$id);
		$exp_list = $model->query("select * from zoo_exp where uid=".$id);

		$person_list = [
			'user'=> $user_list,
			'skill'=> $skill_list,
			'edu'=> $edu_list,
			'exp'=> $exp_list,
		];

		$this->display("person.html",$person_list);
	}
}


?>