{include 'view/public/header.html'}
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
			{include 'menu.php'}
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
			<div class="card mt-2">
				<div class="card-body">
					<div class="tab-content">
						<div class="tab-pane active" id="new">
							<form action="index.php" method="post">
								<select class="custom-select" name="uid">
									<option selected>选择人物</option>
									{foreach $view_data['user'] as $key => $value}
										<option value="{$value.id}">{$value.name}</option>
									{/foreach}
								</select>

								<div class="form-group">
									<label>技能</label>
									<input name="skills" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>打分</label>
									<input name="score" type="text" class="form-control">
								</div>
								<div class="form-group">
									<input type="hidden" name="control" value="skill">
									<input type="hidden" name="action" value="add">
									<button type="submit" class="btn btn-primary">提交</button>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="old">
							<div></div>
							<table class="table table-hover" >
								<tr>
									<th>技能</th>
									<th>分数</th>
									<th>操作</th>
								</tr>
								{foreach $view_data['user'] as $key => $value}
									{foreach $view_data['skill'] as $key01 => $value01}
										{if $value.id == $value01.uid}
											<tr>
												<td>{$value01.skills}</td>
												<td>{$value01.score}</td>
												<td><a class="btn btn-success active" href="index.php?control=skill&action=delete&id={$value01.id}">删除</a></td>
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
	{include 'view/public/footer.html'}