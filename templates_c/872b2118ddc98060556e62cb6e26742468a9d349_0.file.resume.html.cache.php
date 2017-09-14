<?php
/* Smarty version 3.1.30, created on 2017-09-14 11:05:25
  from "D:\wamp64\www\20170914\myGroup\view\person\resume.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba62755f3484_33056001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '872b2118ddc98060556e62cb6e26742468a9d349' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\resume.html',
      1 => 1505387036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba62755f3484_33056001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2656859ba62754ed450_88342996';
?>
<style type="text/css">
	.resume{
		text-align: center;
		min-height: 500px;
		padding-top: 120px;
	}
	.resume.container>h1{
		font-size: 30px;
	    text-transform: uppercase;
	    font-weight: 700;
	    line-height: 22px;
	    margin-bottom: 50px;
	    position: relative;
	    display: inline-block;
	    vertical-align: top;
	    padding: 0 15px;
	    color: #282528;
		margin-top: 0;
		position: relative;
	}
	.resume.container>h1::after{
		content:'';
		display: inline-block;
		width: 80px;
		height: 1px;
		background-color: #ff4081;
		margin-left: 10px;
		position: relative;
		top:-11px;
	}
	.resume.container>h1::before{
		content:'';
		display: inline-block;
		width: 80px;
		height: 1px;
		background-color: #ff4081;
		margin-right: 10px;
		position: relative;
		top:-11px;
	}
	.resume.container .row{
		text-align:left; 
	}
	.resume.container .row h2{
		position: relative;
		margin-bottom: 50px;
	}
	.resume.container .row h2::after{
		content:'';
		display: inline-block;
		width: 40px;
		height: 1px;
		background-color: #ff4081;
		margin-left: 10px;
		position: absolute;
		top:20px;
	}
	.resume .resume_time{
		display: block;
		width:86px;
		height: 26px;
		line-height: 26px;
		background-color: #ff4081;
		color: #fff;
		text-align: center;
		margin-bottom: 15px;
	}
	.resume .subtitle{
		font-size: 16px;
	    font-weight: 400;
	    margin-bottom: 10px;
	    text-transform: capitalize;
	    color: #282528;
		margin-top: 0;
	}
	.resume .subtitle>span{
		font-weight: 600;
		color: #3f51b5;
	}
</style>
<div class="container resume">
	<h1>My RESUME</h1>
	<div class="row">
		<div class="col-md-6">
			<h2>eduction</h2>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_data']->value['edu'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
			<div>
				<span class="resume_time"><?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
</span>
				<h3 class="subtitle"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</h3>
				<p><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</p>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
		<div class="col-md-6">
			<h2>experiens</h2>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_data']->value['exp'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
			<div>
				<span class="resume_time"><?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
</span>
				<h3 class="subtitle"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</h3>
				<p><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</p>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
	</div>
</div><?php }
}
