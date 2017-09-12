

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<style type="text/css">
			.custom-file-control:lang(en):empty::after {
				content: "请选择文件...";
			}

			.custom-file-control:lang(en)::before {
				content: "浏览";
			}
		</style>
	</head>

	<body>
		<div class="container mt-3">
			<div class="row">
				<div class="col-md-3">
					<?php
						include 'menu2.php';
						?>
				</div>
				<div class="col-md-9">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#new">资料上传</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#old">个人资料已上传</a>
						</li>
	
					</ul>
					<div class="card mt-3">
						<div class="card-body">
							<div class="tab-content">
								<div class="tab-pane active" id="new">
									<form action="" method="post">
										<select class="custom-select">
											<option selected>选择人物</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
	
										<div class="form-group">
											<label>技能</label>
											<input name="goods_name" type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>打分</label>
											<input name="goods_name" type="text" class="form-control">
										</div>
										<div class="form-group">
											<button type="button" class="btn btn-primary">提交</button>
										</div>
									</form>
								</div>
								<div class="tab-pane" id="old">
									<table class="table table-hover" >
										<tr>
											<th>技能</th>
											<th>分数</th>
											<th>操作</th>
										</tr>
										<tr>
											<td>html</td>
											<td>100</td>
											<td><a class="btn btn-success active" href="">删除</a></td>
										</tr>
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