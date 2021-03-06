<?php
/**
 * 商品分类控制器
 */
class commentControl extends baseControl{
	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model();

		$comment_list = $model->getInfo();

		$this->assign('view_data',$comment_list);

		$this->display();
	}

	// 添加教育背景
	function add()
	{
		// 添加数据进入教育页面
		$model = $this->model();

		$model->saveInfo();

		$edu_list = $model->getInfo();

		$this->assign('view_data',$edu_list);

		$this->display();
	}

	// 删除
	function delete()
	{
		$model = $this->model();
		$model->delInfo();

		$comment_list = $model->getInfo();
		$this->assign('view_data',$comment_list);

		$this->display();
	}
}


?>