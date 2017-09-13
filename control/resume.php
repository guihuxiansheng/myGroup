<?php
/**
 * 商品分类控制器
 */
class resumeControl extends baseControl{

	// 列表
	function indexedu()
	{ 
		// 查询出来
		$model = $this->model('resume');

		$edu_list = $model->getInfo();

		$this->display("edu.php",$edu_list);
	}
	// 列表
	function indexexp()
	{ 
		// 查询出来
		$model = $this->model('resume');

		$exp_list = $model->getInfoExp();

		$this->display("exp.html",$exp_list);
	}

	// 添加教育背景
	function addedu()
	{
		// 添加数据进入教育页面
		$model = $this->model('resume');

		$model->saveInfo();

		// $this->display("edu.php",$cate_list);
		$this->indexedu();
	}
	// 添加经验背景
	function addexp()
	{
		// 添加数据进入教育页面
		$model = $this->model('resume');

		$model->saveInfoExp();

		// $this->display("exp.php",$cate_list);
		$this->indexexp();
	}

	// 删除
	function deleteedu()
	{
		$model = $this->model();
		$model->delInfo();

		// $this->display("category/add.html",$cate_list);
		$this->indexedu();
	}
	function deleteexp()
	{
		$model = $this->model();
		$model->delInfoExp();

		// $this->display("category/add.html",$cate_list);
		$this->indexexp();
	}
}


?>