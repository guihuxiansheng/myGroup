<?php
/**
 * 商品分类控制器
 */
class blogControl extends baseControl{

	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model();

		$blog_list = $model->getInfo();
		$this->assign('view_data',$blog_list);

		$this->display();
	}
	// 添加教育背景
	function add()
	{
		// 添加数据进入教育页面
		$model = $this->model();

		$model->saveInfo();
		$blog_list = $model->getInfo();
		$this->assign('view_data',$blog_list);

		$this->display();
	}

	// 删除
	function delete()
	{
		$model = $this->model();
		$_GET['id'];
		$model->delete('zoo_blog','id='.$_GET['id']);

		// $this->display("category/add.html",$cate_list);
		$blog_list = $model->getInfo();
		$this->assign('view_data',$blog_list);

		$this->display();
	}
}


?>