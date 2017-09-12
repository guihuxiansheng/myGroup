<?php
/**
 * 商品分类控制器
 */
class categoryControl extends baseControl{

	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model();

		$cate_list = $model->select("zh_category");

		$this->display("category/index.html",$cate_list);
	}

	// 添加
	function add()
	{
		// 一级菜单
		$model = $this->model();

		$cate_list = $model->query("select cate_name,id,level from zh_category where level<3");

		$this->display("category/add.html",$cate_list);
	}

	// 保存
	function save()
	{ 
		$model = $this->model();

		// list语法，如果有分割，就可以用它直接赋值
		// 第一个参数：分割后的数组0下标值，
		// 第二个参数：分割后的数组1下标值，
		// ........
		list($parent_id,$level) = explode("_", $_POST['parent_id']);

		$model->insert("zh_category",[
			'cate_name'=>$_POST['cate_name'],
			'parent_id'=>$parent_id,
			'level'=>++$level,
			]);
	}

	// 删除
	function delete()
	{
		
	}
}


?>