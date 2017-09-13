<?php
/**
 * 商品分类控制器
 */
class skillControl extends baseControl{

	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model('skill');

		$skill_list = $model->getInfo();

		$this->display("skill.php",$skill_list);
	}
	// 添加教育背景
	function add()
	{
		// 添加数据进入教育页面
		$model = $this->model('skill');

		$model->saveInfo();

		// $this->display("edu.php",$cate_list);
		$this->index();
	}

	// 删除
	function delete()
	{
		$model = $this->model('skill');
		$_GET['id'];
		$model->delete('zoo_skill','id='.$_GET['id']);

		// $this->display("category/add.html",$cate_list);
		$this->index();
	}
}


?>