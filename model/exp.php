<?php
	class expModel extends baseModel
	{
		protected $base_name = 'zoo_exp';

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
			$resum_exp_list = $this->query("select * from ".$this->base_name);
			$resume_user_list = $this->query("select * from zoo_user");

			return [
				'user'=>$resume_user_list,
				'exp'=>$resum_exp_list
			];
		}
		public function delInfo()
		{
			$this->delete($this->base_name,'id='.$_GET['id']);
		}
	}
?>