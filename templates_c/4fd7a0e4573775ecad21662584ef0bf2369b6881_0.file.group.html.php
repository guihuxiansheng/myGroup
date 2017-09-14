<?php
/* Smarty version 3.1.30, created on 2017-09-14 11:05:20
  from "D:\wamp64\www\20170914\myGroup\view\group\group.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba627077d7f6_73250837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fd7a0e4573775ecad21662584ef0bf2369b6881' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\group\\group.html',
      1 => 1505387036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/public/header.html' => 1,
    'file:view/public/footer.html' => 1,
  ),
),false)) {
function content_59ba627077d7f6_73250837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="container">
		<div>
			<h1>我们的小组</h1>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;立志成才，我们无所畏惧，向未来的彼岸，奋勇航行。报效祖国，我们无所保留，向成功的巅峰，奋力攀登！<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;每个人都有一份属于自我的志向，也许远大、也许平凡，俗话说：“无志之人常立志，有志之人立大志”。立志是成功的动力，能让我们为实现人生目标而不懈地奋斗，凭借坚忍不拔的信念屹立在成功的巅峰眺望远方。立志贵在坚持，立志贵在立大志！而立大志，莫过于立志成才，照亮祖国未来的期望。</p>
			<h2>我们的组员</h2>
			<table class="table table-hover" >
				<tr>
					<th>姓名</th>
					<th>简介</th>
					<th></th>
				</tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_data']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
				
				<tr>
					<!-- <td>本科</td> -->
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['intro'];?>
</td>
					
					<td><a class="btn btn-success active" href="index.php?control=person&action=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">进入成员主页</a></td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</table>
		</div>
		<div>
		</div>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:view/public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
