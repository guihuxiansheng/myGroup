<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>demo</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
	.custom-file-control:lang(en):empty::after {
		content: "请选择文件...";
	}
	
	.custom-file-control:lang(en)::before {
		content: "浏览";
	}
</style>
	<div class="container mt-3">
		<div class="row">
		<div class="col-md-3">
				{include "menu.php"}
				
		</div>
		<div class="col-md-9">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#new">教育信息上传</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#old">教育信息浏览</a>
				</li>

			</ul>
			<div class="card mt-2">
				<div class="card-body">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="new">
							
							<form action="index.php" method="post">
								<select class="custom-select" name="uid">
									<option selected>选择人物</option>
									{foreach $view_data['user'] as $key => $value}
										<option value="{$value.id}">{$value.name}</option>
									{/foreach}
									
								</select>

								<!-- <div class="form-group">
									<label>教育程度</label>
									<input name="goods_name" type="text" class="form-control">
								</div> -->
								<div class="form-group">
									<label>时间</label>
									<input name="time" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>标题</label>
									<input name="title" type="text" class="form-control">
								</div>	
								<div class="form-group">
									<label>内容</label>
									<input name="content" type="text" class="form-control">
								</div>
								<div class="form-group">
									<input type="hidden" name="control" value="resume">
									<input type="hidden" name="action" value="addedu">
									<button type="submit" class="btn btn-primary">提交</button>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="old">
							<table class="table table-hover" >
								<tr>
									<!-- <th>教育程度</th> -->
									<th>时间</th>
									<th>标题</th>
									<th>内容</th>
									<th>操作</th>
								</tr>
								{foreach $view_data['user'] as $key => $value}
									{foreach $view_data['edu'] as $key01 => $value01}
										{if $value.id == $value01.uid}
											<tr>
												<!-- <td>本科</td> -->
												<td>{$value01.time}</td>
												<td>{$value01.title}</td>
												<td>{$value01.content}</td>
												
												<td><a class="btn btn-success active" href="index.php?control=resume&action=deleteedu&id={$value01.id}">删除</a></td>
											</tr>
										{/if}
									{/foreach}
								{/foreach}
							</table>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	</div>
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>