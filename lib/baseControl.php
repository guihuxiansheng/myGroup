<?php
// 父类控制器
// 特点：
// 1、控制我们要去哪一个界面
// 2、总管理进行调动


class baseControl{

	// 启动整个mvc框架的函数
	protected static $control;
	protected static $action;
	protected $smarty;
	function __construct(){
		// smarty第二步:实例化
		 $this->smarty = new Smarty();

		 // smarty第三步：告诉它我们的视图层在哪一个目录
		 
		 $this->smarty->template_dir = "view";
	}
	public function run()
	{
		// 控制器
		$control = isset($_REQUEST['control'])?trim($_REQUEST['control']):'group'; 
		// 控制器里的函数/行为
		$action = isset($_REQUEST['action'])?trim($_REQUEST['action']):'index'; 

		// 引入
		include "control/$control.php";
		
		$controlClassName =$control.'Control';
		// 实例化控制器
		$controlObject = new $controlClassName();
		
		self::$control = $control;
		self::$action = $action;
	 	// 调用控制器具体的方法
		$controlObject->$action();

		
	}
	public function isLogin(){
		session_start();
		if (isset($_SESSION['flag']) && $_SESSION['flag']) {
			return true;
		}
		return false;
	}

	/**
	 * 显示视图
	 * @param  string $html_path 视图的路径
	 */
	public function display()
	{
		$html_path = self::$control.'/'.self::$control.'.html';

		 $this->smarty->display($html_path);
	}

	public function assign($var_name,$var_value)
	{
		  $this->smarty->assign($var_name,$var_value);
	}

 

	/**
	 * 实例化模型
	 * @return object pdo对象
	 */
	public function model($model_name='')
	{
		include 'model/'.self::$control.'.php';
		$model_class = self::$control.'Model';
		 return new $model_class();
	}


}
?>