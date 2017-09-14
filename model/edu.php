<?php
	class eduModel extends baseModel
	{
		protected $base_name = 'zoo_edu';

		public function saveInfo()
		{
			$this->insert([
				'uid'=>$_POST['uid'],
				'time'=>$_POST['time'],
				'title'=>$_POST['title'],
				'content'=>$_POST['content'],
			]);
		}
		public function getInfo()
		{
			$resum_edu_list = $this->query("select * from zoo_edu");
			$resume_user_list = $this->query("select * from zoo_user");

			return [
				'user'=>$resume_user_list,
				'edu'=>$resum_edu_list
			];
		}
		public function delInfo()
		{
			$this->delete($this->base_name,'id='.$_GET['id']);
		}
	}
?>