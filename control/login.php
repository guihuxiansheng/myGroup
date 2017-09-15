<?php
/**
 * 小组首页控制器
 */
class loginControl extends baseControl{
	public function __construct(){
		parent::__construct();
		if($this->isLogin()){
			header('location:index.php?control=user&action=index');
		}
	}

	// 列表
	function index()
	{
		$this->display();
	}

	function login(){
		$model = $this->model();
		$model->repaireUser();
	}
	function logout(){
		$model = $this->model();
		$model->userLogOut();
	}
}


?>