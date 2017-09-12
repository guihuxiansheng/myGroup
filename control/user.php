<?php
/**
 * zoo_user表控制器
 */
class userControl extends baseControl{

	// 列表
	function index()//组主页
	{ 
		// 查询用户出来
		$model = $this->model();

		$zoo_user = $model->select("zoo_user");//查询所有

		// print_r($zoo_user);

		return $zoo_user;
		// $this->display("index/index.html",$user_list);
	}

	//
	function person()//查询个人主页数据  zoo_user
	{
		
		$id=$_POST['id'];
		
		// $id=2;

		$model = $this->model();

		$zoo_user = $model->query("select * from zoo_user where id=$id");//获取用户基本数据

		// print_r($zoo_user);

		return $zoo_user;
		
		// $this->display("person/person.html",$user_list);
	}

	// 保存
	function save()
	{ 
		$model = $this->model();

		// list语法，如果有分割，就可以用它直接赋值
		// 第一个参数：分割后的数组0下标值，
		// 第二个参数：分割后的数组1下标值，
		// ........
		// list($parent_id,$level) = explode("_", $_POST['parent_id']);
		$bigimg= json_encode($_POST['bigimg']);

		$model->insert("zoo_user",[
			'name'=>$_POST['name'],
			'intro'=>$_POST['intro'],
			'bigimg'=>$bigimg,
			'iconimg'=>$_POST['iconimg'],
			]);
	}

	// 删除
	function delete()
	{
		$id=1;
		$model = $this->model();

		$model->delete("zoo_user",'id='.$_POST['id']);
	}
}


?>