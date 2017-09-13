<?php
/**
 * 个人介绍控制器
 */
class personControl extends baseControl{

	// 列表
	function index()
	{ 
		// 查询出来
		$model = $this->model('person');
		
		$person_list = $model->getInfo();

		$this->display("person.html",$person_list);
	}
}


?>