<?php
/**
 * 商品分类控制器
 */
class resumeControl extends baseControl{

	// 列表
	function indexedu()
	{ 
		// 查询出来
		$model = $this->model();

		$resum_edu_list = $model->query("select * from zoo_edu");

		$this->display("category/index.html",$cate_list);
	}
	// 列表
	function indexexp()
	{ 
		// 查询出来
		$model = $this->model();

		$resum_exp_list = $model->query("select * from zoo_exp");

		$this->display("category/index.html",$cate_list);
	}

	// 添加教育背景
	function addedu()
	{
		// 添加数据进入教育页面
		$model = $this->model();

		$model->insert('zoo_edu',[
			'uid'=>$_POST['user_id'],
			'time'=>$_POST['edu_time'],
			'title'=>$_POST['edu_title'],
			'content'=>$_POST['edu_content'],
		]);

		$this->display("category/add.html",$cate_list);
	}
	// 添加经验背景
	function addexp()
	{
		// 添加数据进入教育页面
		$model = $this->model();

		$model->insert('zoo_edu',[
			'uid'=>$_POST['user_id'],
			'time'=>$_POST['edu_time'],
			'title'=>$_POST['edu_title'],
			'content'=>$_POST['edu_content'],
		]);

		$this->display("category/add.html",$cate_list);
	}

	// 删除
	function deleteedu()
	{
		$model = $this->model();
		$model->delect('zoo_edu','id='.$_GET['id']);

		$this->display("category/add.html",$cate_list);
	}
	function deleteexp()
	{
		$model = $this->model();
		$model->delect('zoo_exp','id='.$_GET['id']);

		$this->display("category/add.html",$cate_list);
	}
}


?>