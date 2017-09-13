<?php
// 公共函数库 
 

/**
 * 获取分页布局
 * @param  int $total_num 总数量
 * @param  string $page_num   每一页显示的数量
 * @return array             [page_html:分页的html布局，page_after_data：分页后的数据]
 */
function getPage($total_num,$page_num='5')
{
	 
	$total_page =  ceil($total_num/$page_num); //总页数
	$page = intval($_GET['page'])>0?intval($_GET['page']):1; //当前页

	$up_disabled = $page == 1?'disabled':'';

	$page_html = '<ul class="pagination">
				<li class="page-item '.$up_disabled.'">
					<a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.($page-1).'" tabindex="-1">上一页</a>
				</li>';


	for ($i=1; $i <= $total_page; $i++) { 
		$class = '';
		if ($page == $i) {
			$class = 'active';
		}
		 $page_html.='<li class="page-item '.$class.'">
						<a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a>
					</li>
					 ';
	}
	
	$down_disabled = $page == $total_page?'disabled':'';
	$page_html.= '<li class="page-item '.$down_disabled.'">
					<a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.($page+1).'">下一页</a>
				</li>
			</ul>
		</nav>';
	return [
		'page_html'=>$page_html,
		'page_after_data'=>$page_after_data,
	]; 
}

/**
	 * [saveFiles description]
	 * @param  [object] $file_data [文件信息数据]
	 * @param  [string] $path      [保存路径]
	 * @return [string]            [文件完整路径名]
	 */
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
	};
 
?>