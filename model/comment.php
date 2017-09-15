<?php
	class commentModel extends baseModel
	{
		protected $base_name = 'zoo_comment';


		public function getInfo()
		{
			$comment_list = $this->query("select * from zoo_comment");

			return [
				'comment_list'=>$comment_list
			];
		}
		public function delInfo()
		{
			$this->delete($this->base_name,'id='.$_GET['id']);
		}
	}
?>