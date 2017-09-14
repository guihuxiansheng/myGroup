<?php
	/**
	* 
	*/
	class blog_detailModel extends baseModel
	{
		
		public function getInfo()
		{
			$uid = $_GET['uid']?$_GET['uid']: 1;
			$id = $_GET['id']?$_GET['id']: 1;

			$user_list = $this->query("select * from zoo_user where id=".$uid);
			$blog_list = $this->query("select * from zoo_blog where id=".$id);

			return [
				'user'=> $user_list,
				'blog'=> $blog_list
			];
		}
	}
?>