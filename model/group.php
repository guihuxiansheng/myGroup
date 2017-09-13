<?php
	/**
	* 
	*/
	class groupModel extends baseModel
	{
		
		public function getInfo()
		{
			return $this->query("select * from zoo_user");
		}
	}
?>