<?php
/* Smarty version 3.1.30, created on 2017-09-12 09:17:37
  from "D:\wamp64\www\07180206\php\lesson_4\first_mvc\view\category\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b7a6318c0461_37999961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '509c02d9d117ee61d9a98213e317e61f07b2e44c' => 
    array (
      0 => 'D:\\wamp64\\www\\07180206\\php\\lesson_4\\first_mvc\\view\\category\\index.html',
      1 => 1505207433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b7a6318c0461_37999961 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品分类管理界面</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

</head>
<body>
<div class="container mt-3">
	<a href="index.php?control=category&action=add" class="btn btn-info">添加分类</a>
	<h2>商品分类管理界面</h2>
	 
	<table class="table">
		<tr>
			<th>编号</th>
			<th>分类名称</th>
			<th>操作</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['cate_name'];?>
</td>
			<td><a href="" class="btn btn-danger">删除</a></td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
	
	
		

	
</div>
	

</body>
</html><?php }
}
