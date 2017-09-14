<?php
	class blogModel extends baseModel
	{
		protected $base_name = 'zoo_blog';
		public function saveInfo()
		{
			$var_file_data = $_FILES;

			$filePath = $this->saveFiles($var_file_data['article_img'],'data/img/');
			$this->insert([
				'uid'=>$_POST['uid'],
				'title'=>$_POST['title'],
				'intro'=>$_POST['intro'],
				'content'=>$_POST['content'],
				'article_img'=>$filePath
			]);
		}
		public function getInfo()
		{
			$blog_user_list = $this->query("select * from zoo_user");
			$blog_blog_list = $this->query("select * from zoo_blog");

			return [
				'user'=>$blog_user_list,
				'blog'=>$blog_blog_list
			];
		}
	}
?>