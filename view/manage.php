<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ZOO介绍</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.bootcss.com/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<style type="text/css">
		/*修改文件上传组件的文字内容*/
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
					include "lib/menu.php";
				?>				
			</div>
			<div class="col-md-9">
				<ul class="nav nav-tabs">
					<li class="nav-item" >
						<a href="#list" class="nav-link active" data-toggle="tab">成员列表</a>
					</li>
					<li class="nav-item" >
						<a href="#add" class="nav-link" data-toggle="tab" >添加成员</a>
					</li>
				</ul>
				
				<div class="card mt-3">
					<div class="card-header">
						组员管理
					</div>
					<div class="card-body">
						<div class="tab-content">
						<!-- tab-pane：单个选项卡，默认是隐藏的 
							active：当前选项卡显示
						-->
							<div class="tab-pane active" id="list">
								<div class="card mt-3">
									<div class="card-header">
										成员<span>1</span>
									</div>
									<div class="card-body">
										<form>
											<div class="form-group"><!--姓名-->
												<label >姓名</label>
												<div class="card p-1">
													何臻荣
												</div>										
											</div>
											<div class="form-group"><!--自我介绍-->
												<label >自我介绍</label>
												<div class="card p-1">
													本人性格内外结合,适应能力强，为人诚实，有良好的人际交往能力，具备相关的专业知识和认真。细心、耐心的工作态度及良好的职业道德修养。相信团体精神的我对工作认真负责，总希望能把事情做得更好! 性格开朗，对文字语言和数字敏感，对生活充满希望，对工作充满热情! 能在短期间内适应新环境，有强烈的品质意识;对工作认真负责，上进心强! 懂电脑基本操作，熟练小键盘操作!
												</div>																			
											</div>
											<div class="form-group"><!--大图片-->
												<label >插入3张主页大图</label>
												<br />
												<div class="card">
													<img src="data/150468159068911.png"/>
												</div>
												<br />
												<div class="card">
													<img src="data/150468159068911.png"/>
												</div>	
												<br />
												<div class="card">
													<img src="data/150468159068911.png"/>
												</div>										
											</div>
											<div class="form-group"><!--头像-->
												<label >插入头像</label>
												<br />
												<div class="card">
													<img src="data/150468159068911.png"/>
												</div>																					
											</div>
										</form>
									</div>
								</div>
								
							</div>
							<!--表单：姓名name、自我介绍introduction、大照片bigPic_one,bigPic_two,bigPic_three、头像smallPic-->
							<div class="tab-pane " id="add">
								<form>
									<div class="form-group"><!--姓名-->
										<label >姓名</label>
										<input name="name" type="text" class="form-control">											
									</div>
									<div class="form-group"><!--自我介绍-->
										<label >自我介绍</label>
										<textarea name="name" class="form-control"></textarea>																				
									</div>
									<div class="form-group"><!--大图片-->
										<label >插入3张主页大图</label>
										<br />
										<label class="custom-file">
											<input type="file" id="file2" name="bigPic_one" class="custom-file-input">
											<span class="custom-file-control"></span>
										</label>	
										<br />
										<label class="custom-file mt-2">
											<input type="file" id="file2" name="bigPic_two" class="custom-file-input">
											<span class="custom-file-control"></span>
										</label>
										<br />
										<label class="custom-file mt-2">
											<input type="file" id="file2" name="bigPic_three" class="custom-file-input">
											<span class="custom-file-control"></span>
										</label>										
									</div>
									<div class="form-group"><!--头像-->
										<label >插入头像</label>
										<br />
										<label class="custom-file">
											<input type="file" id="file2" name="smallPic" class="custom-file-input">
											<span class="custom-file-control"></span>
										</label>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-secondary" value="保存组员信息">											
									</div>
								</form>
							</div>
						</div>						
					</div>
				</div>
				
			</div>
		</div>
	</div>

</div>

</div>
</body>
</html>