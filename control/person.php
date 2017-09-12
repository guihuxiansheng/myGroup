<?php
/**
 * 商品分类控制器
 */
class personControl extends baseControl{

	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model();

		$user_list = $model->query("select * from zoo_user");
		$skill_list = $model->query("select * from zoo_skill");
		$edu_list = $model->query("select * from zoo_edu");
		$edu_list = $model->query("select * from zoo_edu");
		$exp_list = $model->query("select * from zoo_exp");

		$person_list = [
			'user'=> $user_list,
			'skill'=> $skill_list,
			'edu'=> $edu_list,
			'exp'=> $exp_list,
		];

		$this->display("category/index.html",$person_list);
	}
}


?>