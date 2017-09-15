<?php
/**
 * zoo_user表控制器
 */
class userControl extends baseControl{
	public function __construct(){
		parent::__construct();
		if(!$this->isLogin()){
			header('location:index.php?control=login&action=index');
		}
	}
	//
	function index()//查询个人主页数据  zoo_user
	{

		$model = $this->model();

		$zoo_user = $model->getInfo();

		$this->assign('view_data',$zoo_user);
		
		$this->display();
	}

	// 保存
	function save()
	{ 
		$model = $this->model();
		$model->saveInfo();

		// list语法，如果有分割，就可以用它直接赋值
		// 第一个参数：分割后的数组0下标值，
		// 第二个参数：分割后的数组1下标值，
		// ........
		// list($parent_id,$level) = explode("_", $_POST['parent_id']);
		$control = $_REQUEST['control'];
		header("location:index.php?control=$control&action=index");
	}

	// 删除
	function delete()
	{
		$id=1;
		$model = $this->model();

		$model->delInfo();
		$control = $_REQUEST['control'];
		header("location:index.php?control=$control&action=index");
	}
}


?>