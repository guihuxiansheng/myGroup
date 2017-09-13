<?php
/**
 * 商品分类控制器
 */
class skillControl extends baseControl{

	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model();

		$skill_user_list = $model->query("select * from zoo_user");
		$skill_skill_list = $model->query("select * from zoo_skill");

		$skill_list = [
			'user'=>$skill_user_list,
			'skill'=>$skill_skill_list
		];

		$this->display("skill.php",$skill_list);
	}
	// 添加教育背景
	function add()
	{
		// 添加数据进入教育页面
		$model = $this->model();

		$model->insert('zoo_skill',[
			'uid'=>$_POST['uid'],
			'skills'=>$_POST['skills'],
			'score'=>$_POST['score']
		]);

		// $this->display("edu.php",$cate_list);
		$this->index();
	}

	// 删除
	function delete()
	{
		$model = $this->model();
		$_GET['id'];
		$model->delete('zoo_skill','id='.$_GET['id']);

		// $this->display("category/add.html",$cate_list);
		$this->index();
	}
}


?>