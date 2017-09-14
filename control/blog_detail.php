<?php
/**
 * 商品分类控制器
 */
class blog_detailControl extends baseControl{

	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model();

		$blog_list = $model->getInfo();
		$this->assign('view_data',$blog_list);

		$this->display();
	}

}
?>