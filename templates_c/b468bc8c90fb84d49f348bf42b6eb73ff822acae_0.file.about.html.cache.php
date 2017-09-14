<?php
/* Smarty version 3.1.30, created on 2017-09-14 12:16:47
  from "D:\wamp64\www\20170914\myGroup\view\person\about.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba732fe5b7c2_55887340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b468bc8c90fb84d49f348bf42b6eb73ff822acae' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\about.html',
      1 => 1505391396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba732fe5b7c2_55887340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2012859ba732fb48222_61784593';
?>

	<style type="text/css">
		.about{
			text-align: center;
			padding-top: 120px;
			min-height: 500px;
		}
		.about.container>h1{
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
		.about.container>h1::after{
			content:'';
			display: inline-block;
			width: 80px;
			height: 1px;
			background-color: #ff4081;
			margin-left: 10px;
			position: relative;
			top:-11px;
		}
		.about.container>h1::before{
			content:'';
			display: inline-block;
			width: 80px;
			height: 1px;
			background-color: #ff4081;
			margin-right: 10px;
			position: relative;
			top:-11px;
		}
		.about.container>h1>span{
			color: #3f51b5;
		}
		.about.container .row{
			text-align:left; 
		}
		.about.container .row h2.about_skills{
			position: relative;
			margin-bottom: 20px;
		}
		.about.container .row h2.about_skills::after{
			content:'';
			display: inline-block;
			width: 40px;
			height: 1px;
			background-color: #ff4081;
			margin-left: 10px;
			position: absolute;
			top:20px;
		}
		.about.container .row img{
			width:100%;
		}
		/*进度条*/
		.about .progress{
			height: 3px;
			overflow: visible;
			background: transparent;
		}
		.about .progress .progress-bar-parent .progress-bar{
			position: relative;
			width: 0%;
			height: 3px; 
			opacity: 1;
			background: transparent linear-gradient(to right, #3f51b5, #ff4081);
			animation: wobblegg 3s 1 both;
		}
		.about .progress .progress-bar-parent .progress-bar::before{
			position: absolute;
		    right: 0;
		    top: -20px;
		    content: attr(data-present);
		    width: 20px;
		    height: 20px;
		    color: #333;
		    
		}
		
		@keyframes wobblegg {
		     from {
		     	width: 0;
		     }
		     to{
		     	width: 100%;
		     }
			}
		.about p.about_skills_title{
			margin: 0;
			padding: 0;
			font-weight: normal;
		    color: #333;
		    font-size: 14px;
		    font-style: normal;
		    font-weight: 400;
		    line-height: 24px;
		    visibility: visible;
		}
		.about .skills_title_right{
			float: right;
		}
	</style>
</head>
<body>
	<div class="container about mt-20" >
	<h1>关于<span>个人</span></h1>
	<div class="row">
		<div class="col-md-3 col-sm-5 mb-40">
			<img src="<?php echo $_smarty_tpl->tpl_vars['view_data']->value['user'][0]['iconimg'];?>
">
		</div>
		<div class="col-md-5 col-sm-7 mb-40">
			<h3 style="font-weight: 600;">我是 <?php echo $_smarty_tpl->tpl_vars['view_data']->value['user'][0]['name'];?>
</h3>
			<p class="about_skills_title"><?php echo $_smarty_tpl->tpl_vars['view_data']->value['user'][0]['intro'];?>
</p>
		</div>
		<div class="col-md-4 col-xs-12 mb-40">
			<h2 class="about_skills">skills</h2>
			<!-- 循环的部分 -->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_data']->value['skill'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
			<p class="about_skills_title"><?php echo $_smarty_tpl->tpl_vars['value']->value['skills'];?>
 </p>
			<div class="progress">
				<div class="progress-bar-parent" style="width: <?php echo $_smarty_tpl->tpl_vars['value']->value['score'];?>
%;height: 100%;">
					<div class="progress-bar" data-present="<?php echo $_smarty_tpl->tpl_vars['value']->value['score'];?>
%" >
					</div>
				</div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
	</div>
</div>
<div style="width: 100%;"></div>
<?php }
}
