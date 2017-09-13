<?php
/**
 * 小组首页控制器
 */
class groupControl extends baseControl{

	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model();

		$user_list = $model->query("select * from zoo_user");

		$this->display("group.html",$user_list);
	}
}


?>