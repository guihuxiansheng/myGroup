<?php
	/**
	* 
	*/
	class loginModel extends baseModel
	{
		protected $base_name = 'zoo_user';
		public function repaireUser(){
			$user = $_POST['name'];
			$login = $this->query('select * from '.$this->base_name." where name='$user'");
			if(count($login) != 0 && $login[0]['password'] == $_POST['password']){
				session_start();
				$_SESSION['flag'] = $login[0].id;
				header('location:index.php?control=user&action=index');
			}else{
				header('location:index.php?control=login&action=index');
			}
		}
		public function userLogOut(){
			session_start();
			session_unset();
			session_destroy();
			header('location:index.php?control=login&action=index');
		}
		
	}
?>