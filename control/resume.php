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
		$resume_user_list = $model->query("select * from zoo_user");

		$edu_list = [
			'user'=>$resume_user_list,
			'edu'=>$resum_edu_list
		];

		$this->display("edu.php",$edu_list);
	}
	// 列表
	function indexexp()
	{ 
		// 查询出来
		$model = $this->model();

		$resum_exp_list = $model->query("select * from zoo_exp");
		$resume_user_list = $model->query("select * from zoo_user");

		$exp_list = [
			'user'=>$resume_user_list,
			'exp'=>$resum_exp_list
		];

		$this->display("exp.html",$exp_list);
	}

	// 添加教育背景
	function addedu()
	{
		// 添加数据进入教育页面
		$model = $this->model();

		$model->insert('zoo_edu',[
			'uid'=>$_POST['uid'],
			'time'=>$_POST['time'],
			'title'=>$_POST['title'],
			'content'=>$_POST['content'],
		]);

		// $this->display("edu.php",$cate_list);
		$this->indexedu();
	}
	// 添加经验背景
	function addexp()
	{
		// 添加数据进入教育页面
		$model = $this->model();

		$model->insert('zoo_exp',[
			'uid'=>$_POST['uid'],
			'time'=>$_POST['time'],
			'title'=>$_POST['title'],
			'content'=>$_POST['content'],
		]);

		// $this->display("exp.php",$cate_list);
		$this->indexexp();
	}

	// 删除
	function deleteedu()
	{
		$model = $this->model();
		$model->delete('zoo_edu','id='.$_GET['id']);

		// $this->display("category/add.html",$cate_list);
		$this->indexedu();
	}
	function deleteexp()
	{
		$model = $this->model();
		$model->delete('zoo_exp','id='.$_GET['id']);

		// $this->display("category/add.html",$cate_list);
		$this->indexexp();
	}
}


?>