<?php
	class userModel extends baseModel
	{
		protected $base_name = 'zoo_user';
		public function getInfo()
		{
			return $this->query("select * from ".$this->base_name);//获取用户基本数据
		}
		public function saveInfo()
		{
			$var_file_data = $_FILES;
			$file01 = $this->saveFiles($var_file_data['bigimg01'],'data/img/');
			$file02 = $this->saveFiles($var_file_data['bigimg02'],'data/img/');
			$file03 = $this->saveFiles($var_file_data['bigimg03'],'data/img/');
			$file04 = $this->saveFiles($var_file_data['iconimg'],'data/img/');
			$big_img = [
				$file01,
				$file02,
				$file03,
			];
			$bigimg= json_encode($big_img);

			$this->insert([
				'name'=>$_POST['name'],
				'intro'=>$_POST['intro'],
				'bigimg'=>$bigimg,
				'iconimg'=>$file04,
			]);
		}
		public function delInfo(){
			$this->delete($this->table_name,'id='.$_GET['id']);
		}
	}
?>