<?php
	class skillModel extends baseModel
	{
		protected $base_name = 'zoo_skill';
		public function saveInfo()
		{
			$this->insert([
				'uid'=>$_POST['uid'],
				'skills'=>$_POST['skills'],
				'score'=>$_POST['score']
			]);
		}
		public function getInfo()
		{
			$skill_user_list = $this->query("select * from zoo_user");
			$skill_skill_list = $this->query("select * from zoo_skill");

			return [
				'user'=>$skill_user_list,
				'skill'=>$skill_skill_list
			];
		}
	}
?>