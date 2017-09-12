<?php
// 父类控制器
// 特点：
// 1、控制我们要去哪一个界面
// 2、总管理进行调动


class baseControl{

	// 启动整个mvc框架的函数
	public function run()
	{
		// 控制器
		$control = isset($_REQUEST['control'])?trim($_REQUEST['control']):'goods'; 
		// 控制器里的函数/行为
		$action = isset($_REQUEST['action'])?trim($_REQUEST['action']):'index'; 

		// 引入
		include "control/$control.php";
		
		$controlClassName =$control.'Control';
		// 实例化控制器
		$controlObject = new $controlClassName();

	 	// 调用控制器具体的方法
		$controlObject->$action();
	}

	/**
	 * 显示视图
	 * @param  string $html_path 视图的路径
	 */
	public function display($html_path,$view_data='')
	{
		 // smarty第二步:实例化
		 $smarty = new Smarty();

		 // smarty第三步：告诉它我们的视图层在哪一个目录
		 
		 $smarty->template_dir = "view";

		 $smarty->assign("view_data",$view_data);
		 $smarty->display($html_path);
	}

 

	/**
	 * 实例化模型
	 * @return object pdo对象
	 */
	public function model()
	{
		return new pdoClass("localhost","xiaomi","root","");
	}


}
?>