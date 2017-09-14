<?php
	/**
	* 
	*/
	class personModel extends baseModel
	{
		
		public function getInfo()
		{
			$id = $_GET['id']?$_GET['id']: 1;

			$user_list = $this->query("select * from zoo_user where id=".$id);
			$skill_list = $this->query("select * from zoo_skill where uid=".$id);
			$edu_list = $this->query("select * from zoo_edu where uid=".$id);
			$exp_list = $this->query("select * from zoo_exp where uid=".$id);
			$blog_list = $this->query("select * from zoo_blog where uid=".$id.' order by id desc limit 0,3');

			return [
				'user'=> $user_list,
				'skill'=> $skill_list,
				'edu'=> $edu_list,
				'exp'=> $exp_list,
				'blog'=> $blog_list
			];
		}
	}
?>