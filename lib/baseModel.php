<?php
// PDO操作的相关类

class baseModel{
	// 公共变量
	private $dbhost;
	private $dbname;
	private $charset;
	private $dbuser;
	private $dbpwd;
	private $pdo;
	 
	// 构造函数
	function __construct()
	{
		global $CONFIG;

		$this->dbhost = $CONFIG['dbhost'];
		$this->dbname = $CONFIG['dbname'];
		$this->dbuser = $CONFIG['dbuser'];
		$this->dbpwd = $CONFIG['dbpwd'];
	 
		$dsn = "mysql:dbhost=".$this->dbhost.";dbname=".$this->dbname.";charset=utf8";
		$this->pdo =new  PDO($dsn,$this->dbuser,$this->dbpwd); 
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
	}

	/**
	 * 查询
	 * @param  string  $table_name 表名
	 * @param  int $page_num   页码
	 * @return array              数据列表
	 */
	function select($table_name,$page_num=5)
	{
		// isset 是判断值是否存在
		$page = isset($_GET['page'])?intval($_GET['page']):1; //当前页
		
		$start_limit = ($page-1)*$page_num;

		$sql = "select * from   $table_name limit $start_limit,$page_num";

		$pdoStat = $this->pdo->prepare($sql);

		$pdoStat->execute();

		return $pdoStat->fetchAll();
	}

	// 执行语句，并返回数据
	public function query($sql)
	{
		 $pdoStat = $this->pdo->prepare($sql);

		$pdoStat->execute();

		return $pdoStat->fetchAll();
	}

	/**
	 * 保存信息
	 * @param  string $table_name            表名
	 * @param  array $new_data_array 被保存的数据
	 */
	function insert($new_data_array='')
	{
		 $table_name = $this->base_name;
		if (!empty($new_data_array)) {
			 
			 $col_array = array_keys($new_data_array); 
			 $col_str =implode(",", $col_array);

			 $val_array = array_values($new_data_array);
			 $val_str = '';
			 $douhao = '';
			 foreach ($val_array as $key => $value) {
			 	 $val_str .= $douhao."'".$value."'";
			 	 $douhao = ",";
			 }

			$sql =  " insert into  $table_name ($col_str)  values($val_str)";

			$this->pdo ->exec($sql);
		}
	}
	
	/**
	 * 删除一条记录
	 * @param  string $table_name 表名
	 * @param  string $where_sql  删除的条件
	 * @return int             0/1
	 */
	function delete($table_name,$where_sql="")
	{ 
		 $sql = "delete from $table_name where $where_sql";
		return  $this->pdo->exec($sql);
	}
	public function saveFiles($file_data,$path){
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