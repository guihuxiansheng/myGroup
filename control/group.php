<?php
/**
 * 小组首页控制器
 */
class groupControl extends baseControl{
	public function __construct(){
		parent::__construct();
		if(!$this->isLogin()){
			header('location:index.php?control=login&action=index');
		}
	}

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