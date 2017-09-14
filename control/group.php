<?php
/**
 * 小组首页控制器
 */
class groupControl extends baseControl{

	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model('group');

		$user_list = $model->getInfo();
		$this->assign('view_data',$user_list);

		$this->display();
	}
}


?>