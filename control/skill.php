<?php
/**
 * 商品分类控制器
 */
class skillControl extends baseControl{
	public function __construct(){
		parent::__construct();
		if(!$this->isLogin()){
			header('location:index.php?control=person&action=index');
		}
	}
	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model();

		$skill_list = $model->getInfo();
		$this->assign('view_data',$skill_list);

		$this->display();
	}
	// 添加教育背景
	function add()
	{
		// 添加数据进入教育页面
		$model = $this->model();

		$model->saveInfo();

		$skill_list = $model->getInfo();
		$this->assign('view_data',$skill_list);

		$this->display();
	}

	// 删除
	function delete()
	{
		$model = $this->model();
		$_GET['id'];
		$model->delete('zoo_skill','id='.$_GET['id']);

		$skill_list = $model->getInfo();
		$this->assign('view_data',$skill_list);

		$this->display();
	}
}


?>