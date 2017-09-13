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

		$zoo_user = $model->query("select * from zoo_user");//查询所有

		// print_r($zoo_user);

		$this->display("manage.php",$zoo_user);
	}

	//
	function person()//查询个人主页数据  zoo_user
	{
		
		$id=$_POST['id'];
		
		// $id=2;

		$model = $this->model();

		$zoo_user = $model->query("select * from zoo_user where id=$id");//获取用户基本数据

		// print_r($zoo_user);
		
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

		$model->insert("zoo_user",[
			'name'=>$_POST['name'],
			'intro'=>$_POST['intro'],
			'bigimg'=>$bigimg,
			'iconimg'=>$file04,
			]);
		$this->index();
	}

	// 删除
	function delete()
	{
		$id=1;
		$model = $this->model();

		$model->delete("zoo_user",'id='.$_POST['id']);
		$this->index();
	}

	function saveFiles($file_data,$path){
		// 获取文件临时路径
		$var_file_path = $file_data['tmp_name'];
		// 获取文件类型
		$file_type = explode('/', $file_data['type']);
		// 生成新的文件信息
		$save_file_path = $path.time().rand(100000,1000000).'.'.$file_type[1];
		// 保存图片
		copy($var_file_path,$save_file_path);

		return $save_file_path;
	}
}


?>