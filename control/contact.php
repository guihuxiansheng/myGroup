<?php
/**
 * 商品分类控制器
 */
class contactControl extends baseControl{
	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model();

		$contact_list = $model->getInfo();

		$this->assign('view_data',$contact_list);

		$this->display();
	}

	function save(){
		// 查询出来
		$model = $this->model();

		$model->saveInfo();

		header('location:index.php?control=person');
	}


	// 删除
	function delete()
	{
		$model = $this->model();
		$model->delInfo();

		$contact_list = $model->getInfo();
		$this->assign('view_data',$contact_list);

		$this->display();
	}
}


?>