<?php
/* Smarty version 3.1.30, created on 2017-09-14 12:28:01
  from "D:\wamp64\www\20170914\myGroup\view\person\pic.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba75d1c493c7_53943126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abdcd71269d23503a5409deb1e193f72c307008f' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\pic.html',
      1 => 1505392077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba75d1c493c7_53943126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2385459ba75d1b0a814_58738260';
?>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css">
			.portfolio>.title h1 {
				position: relative;
				display: inline-block;
				font-size: 24px;
				font-weight: bold;
			}
			
			.portfolio>.title h1:before {
				content: '';
				width: 30px;
				height: 2px;
				background: pink;
				position: absolute;
				top: 50%;
				margin-top: -1px;
				left: -35px;
			}
			
			.portfolio>.title h1:after {
				content: '';
				width: 30px;
				height: 2px;
				background: pink;
				position: absolute;
				top: 50%;
				margin-top: -1px;
				right: -35px;
			}
			
			.portfolio>.pic .box {
				margin: 10px 0px;
				position: relative;
			}
			
			.portfolio>.pic .box .one {
				width: 100%;
				height: 100%;
			}
			
			.portfolio>.pic .box .one div {
				display: none;
			}
			
			.portfolio>.pic .box .one:hover div {
				display: block;
				width: 100%;
				height: 100%;
				opacity: 0.7;
				background: transparent linear-gradient(to right bottom, #3f51b5, #ff4081);
				/* 标准的语法 */
				position: absolute;
				left: 0px;
				top: 0px;
				text-align: center;
				color: #FFFFFF;
				animation: change 1s ease;
			}
			
			.portfolio>.pic .box div h3 {
				margin-top: 50px;
				line-height: 50px;
			}
			
			.portfolio>.pic .box div p {
				margin-bottom: 30px;
			}
			
			@keyframes change {
				from {
					width: 0px;
					height: 0px;
					left: 50%;
					top: 50%;
				}
				to {
					width: 100%;
					height: 100%;
					left: 0px;
					top: 0px;
				}
			}
			
			.portfolio>.xiao_title {
				margin: 30px 0px;
				font-size: 18px;
			}
			
			.portfolio>.xiao_title button {
				margin-left: 10px;
				border: none;
				background: transparent;
			}
			
			.active {
				color: hotpink;
			}
			
			#myModal>.modal-dialog>.modal-content {
				position: relative;
				font-size: 50px;
				line-height: 50px;
				color: #FFFFFF;
				text-align: center;
			}
			#myModal>.modal-dialog>.modal-content >div{
				width: 50px;
				height: 50px;
				background: rgba(0,0,0,0.5);
			}
			#myModal>.modal-dialog>.modal-content>.left {
				position: absolute;
				left: 0px;
				top: 50%;
				
			}
			
			#myModal>.modal-dialog>.modal-content>.right {
				position: absolute;
				right: 0px;
				top: 50%;
			}
			
</style>
		<div class="container mixitup portfolio">
			<div class="col-xs-12 text-center title ">
				<h1>My <span >Portfolio</span></h1>
			</div>

			<div class="controls col-xs-12 text-center xiao_title">
				<button type="button" class="control" data-filter="all">All</button>
				<button type="button" class="control" data-filter=".aa">Green</button>
				<button type="button" class="control" data-filter=".bb">Blue</button>
				<button type="button" class="control" data-filter=".cc">Pink</button>
				<button type="button" class="control" data-filter=".dd">Pink</button>
			</div>
			<div class="row pic container ">
				<div class="mix aa one col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
					<div class="row box  " data-toggle="modal" data-target="#myModal">
						<div class="one">
							<img class="img-responsive " src="http://themeaone.com/hexa-preview/hexa/img/portfolio/big/8.jpg " alt="... ">
							<div>
								<h3>作品1</h3>
								<p>介绍</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mix bb one col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
					<div class="row box  " data-toggle="modal" data-target="#myModal">
						<div class="one">
							<img class="img-responsive " src="http://themeaone.com/hexa-preview/hexa/img/portfolio/big/8.jpg " alt="... ">
							<div>
								<h3>作品1</h3>
								<p>介绍</p>
							</div>
						</div>
					</div>
					
				</div>
				<div class=" mix cc one col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
					<div class="row box  " data-toggle="modal" data-target="#myModal">
						<div class="one">
							<img class="img-responsive " src="http://themeaone.com/hexa-preview/hexa/img/portfolio/big/8.jpg " alt="... ">
							<div>
								<h3>作品1</h3>
								<p>介绍</p>
							</div>
						</div>
					</div>
					
				</div>
				<div class="mix dd one col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
					<div class="row box " data-toggle="modal" data-target="#myModal">
						<div class="one">
							<img class="img-responsive " src="http://themeaone.com/hexa-preview/hexa/img/portfolio/big/8.jpg " alt="... ">
							<div>
								<h3>作品1</h3>
								<p>介绍</p>
							</div>
						</div>
					</div>
					
				</div>
				<div class="mix aa one col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
					<div class="row box  " data-toggle="modal" data-target="#myModal">
						<div class="one">
							<img class="img-responsive " src="http://themeaone.com/hexa-preview/hexa/img/portfolio/big/8.jpg " alt="... ">
							<div>
								<h3>作品1</h3>
								<p>介绍</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mix bb one col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
					<div class="row box  " data-toggle="modal" data-target="#myModal">
						<div class="one">
							<img class="img-responsive " src="http://themeaone.com/hexa-preview/hexa/img/portfolio/big/8.jpg " alt="... ">
							<div>
								<h3>作品1</h3>
								<p>介绍</p>
							</div>
						</div>
					</div>
					
				</div>
				<div class=" mix cc one col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
					<div class="row box  " data-toggle="modal" data-target="#myModal">
						<div class="one">
							<img class="img-responsive " src="http://themeaone.com/hexa-preview/hexa/img/portfolio/big/8.jpg " alt="... ">
							<div>
								<h3>作品1</h3>
								<p>介绍</p>
							</div>
						</div>
					</div>
					
				</div>
				<div class="mix dd one col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
					<div class="row box " data-toggle="modal" data-target="#myModal">
						<div class="one">
							<img class="img-responsive " src="http://themeaone.com/hexa-preview/hexa/img/portfolio/big/8.jpg " alt="... ">
							<div>
								<h3>作品1</h3>
								<p>介绍</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="left">
						<
					</div>
					<img class="img-responsive " src="http://themeaone.com/hexa-preview/hexa/img/portfolio/big/8.jpg " alt="... ">
					<div class="right">
						>
					</div>

					</div>
				</div>
			</div>

			<?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js "><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js " integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa " crossorigin="anonymous "><?php echo '</script'; ?>
>

			<?php echo '<script'; ?>
 type="text/javascript ">
				$('#myModal').on('shown.bs.modal', function() {
					$('#myInput').focus()
				})
			<?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 type="text/javascript ">
				var oBox = document.querySelectorAll(".portfolio> .pic .box");
				var oDiv = document.querySelectorAll(".portfolio > .pic .box div");
				var aBtn = document.querySelectorAll(".portfolio>.xiao_title button ");
				console.log(oDiv.length)
				//		
				for(var i = 0; i < aBtn.length; i++) {
					aBtn[i].onclick = function() {
						for(var i = 0; i < aBtn.length; i++) {
							aBtn[i].setAttribute("class", "");
						}
						this.setAttribute("class", "active");
					}
				}
			<?php echo '</script'; ?>
>
			 <?php echo '<script'; ?>
 src="data/js/mixitup.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
>
				var containerEl = document.querySelector('.mixitup');
				var mixer = mixitup(containerEl);
			<?php echo '</script'; ?>
>
<?php }
}
