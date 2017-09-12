<?php
/* Smarty version 3.1.30, created on 2017-09-12 09:23:01
  from "D:\wamp64\www\07180206\php\lesson_4\first_mvc\view\category\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b7a775cae213_79374009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f92cee133f100d9398e8c4448026d2c3824b9ba' => 
    array (
      0 => 'D:\\wamp64\\www\\07180206\\php\\lesson_4\\first_mvc\\view\\category\\add.html',
      1 => 1505208096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b7a775cae213_79374009 (Smarty_Internal_Template $_smarty_tpl) {
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
	 <form action="index.php" method="post">
	 	<div class="form-group">
	 		<label >分类名称</label>
	 		<input type="text" class="form-control" name="cate_name">
	 	</div>
	 	<div class="form-group">
	 		<label >上级分类</label>
	 		<select name="parent_id" id="">
	 			<option value="">请选择</option>
	 			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['value']->value['level'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['cate_name'];?>
</option>
	 			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	 		</select>
	 	</div>
	 	<div class="form-group">
	 		<input type="hidden" name="control" value="category">
	 		<input type="hidden" name="action" value="save">
	 		 <input type="submit" value="添加" class="btn btn-info">
	 	</div>
	 </form>
	 
</div>
	

</body>
</html><?php }
}
