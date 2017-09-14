<?php
/**
 * 商品分类控制器
 */
class expControl extends baseControl{
	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model();

		$exp_list = $model->getInfo();

		$this->assign('view_data',$exp_list);

		$this->display();
	}

	// 添加教育背景
	function add()
	{
		// 添加数据进入教育页面
		$model = $this->model();

		$model->saveInfo();

		$exp_list = $model->getInfo();

		$this->assign('view_data',$exp_list);

		$this->display();
	}

	// 删除
	function delete()
	{
		$model = $this->model();
		$model->delInfo();

		$exp_list = $model->getInfo();
		$this->assign('view_data',$exp_list);

		$this->display();
	}
}


?>