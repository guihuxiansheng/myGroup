<?php
/**
 * 个人介绍控制器
 */
class personControl extends baseControl{

	// 列表
	function index()
	{ 
		$this->smarty->caching = true;
		$this->smarty->setCacheDir('cache');

		if(!$this->smarty->isCached('person/person.html'))
		{
			// 查询出来
			$model = $this->model();
			
			$person_list = $model->getInfo();

			$this->assign('view_data',$person_list);
		} 

		$this->display();
	}
}


?>