<?php
	class resumeModel extends baseModel
	{
		protected $table_name_1 = 'zoo_edu';
		protected $table_name_2 = 'zoo_exp';

		public function saveInfo()
		{
			$this->insert([
				'uid'=>$_POST['uid'],
				'time'=>$_POST['time'],
				'title'=>$_POST['title'],
				'content'=>$_POST['content'],
			]);
		}
		public function saveInfoExp()
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
		public function getInfoExp()
		{
			$resum_edu_list = $this->query("select * from zoo_exp");
			$resume_user_list = $this->query("select * from zoo_user");

			return [
				'user'=>$resume_user_list,
				'exp'=>$resum_edu_list
			];
		}
		public function delInfo()
		{
			delete($table_name_1,'id='.$_GET['id']);
		}
		public function delInfoExp()
		{
			delete($table_name_2,'id='.$_GET['id']);
		}
	}
?>