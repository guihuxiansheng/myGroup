<?php
	class contactModel extends baseModel
	{
		protected $base_name = 'zoo_contact';
		public function saveInfo()
		{

			$this->insert([
				'name'=>$_POST['name'],
				'email'=>$_POST['email'],
				'subject'=>$_POST['subject'],
				'message'=>$_POST['message'],
				'concate'=>$_POST['concate']
			]);
		}

		public function getInfo()
		{
			$contact_list = $this->query("select * from zoo_contact");

			return [
				'contact_list'=>$contact_list
			];
		}
		public function delInfo()
		{
			$this->delete($this->base_name,'id='.$_GET['id']);
		}
	}
?>