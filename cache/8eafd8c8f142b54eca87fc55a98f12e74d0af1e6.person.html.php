<?php
/* Smarty version 3.1.30, created on 2017-09-14 12:28:01
  from "D:\wamp64\www\20170914\myGroup\view\person\person.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba75d1d2e050_56038282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec4dfd450c69bc3d7b1228a639b87a25f38cc41' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\person.html',
      1 => 1505387036,
      2 => 'file',
    ),
    '402771f3ebb15fc94fc2c95beff259414a5bb297' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\public\\header.html',
      1 => 1505387987,
      2 => 'file',
    ),
    '5a100dd2ad7973e159ee0e059f2c479423be0210' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\head.html',
      1 => 1505387036,
      2 => 'file',
    ),
    'b468bc8c90fb84d49f348bf42b6eb73ff822acae' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\about.html',
      1 => 1505391396,
      2 => 'file',
    ),
    'b8c7f442e407cbf74b64f0adb08736d9ddb9f502' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\resume_before.html',
      1 => 1505387036,
      2 => 'file',
    ),
    '872b2118ddc98060556e62cb6e26742468a9d349' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\resume.html',
      1 => 1505387036,
      2 => 'file',
    ),
    'abdcd71269d23503a5409deb1e193f72c307008f' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\pic.html',
      1 => 1505392077,
      2 => 'file',
    ),
    'e7fb1d730d0063a3458b0158323f87f608dcd577' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\service.html',
      1 => 1505387036,
      2 => 'file',
    ),
    'ea65389a4916bc64e7052cb96113a753c6f95f5a' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\blog_before.html',
      1 => 1505391882,
      2 => 'file',
    ),
    'cacd9492182d55b59a5dca3154b7c598d33ae6f6' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\blog.html',
      1 => 1505387036,
      2 => 'file',
    ),
    '31960ba06073a14622e038d4ca3038630752d1b8' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\foot.html',
      1 => 1505390127,
      2 => 'file',
    ),
    '642ea15a26b2126ebffeb674f65783dfaa09abc9' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\public\\footer.html',
      1 => 1505387895,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59ba75d1d2e050_56038282 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>demo</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <!-- 顶部导航 -->
    <div class="top ">
        <!-- 导航左logo -->
        <div class="top-left ">
                <a href="#HOME">HEXA</a>
        </div>
        <!-- 导航右页面 -->
            <ul class="top-right">
                <li class="active"><a href="#HOME">HOME</a></li>
                <li><a href="#ABOUT">ABOUT</a></li>
                <li><a href="#RESUME">RESUME</a></li>
                <li><a href="#PORTFOLIO">PORTFOLIO</a></li>
                <li><a href="#SERVICE">SERVICE</a></li>
                <li><a href="#BLOG">BLOG</a></li>
                <li><a href="#CONTACT">CONTACT</a></li>
            </ul>
    </div>
    <div id="dowebok">
        <!-- page01 -->
        <div class="section page01" id="HOME">
            <style type="text/css">
    body{
    padding:0;
    margin:0;
    color: #333;
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 24px;
    visibility: visible;
    text-decoration:none;
}

.p1{
    width:100%;
    min-height:600px;
    background-color: #E3ADAD;
    background: url(data/image/bg.jpg) no-repeat ;
    background-size: 100% 100%;
    position:relative;
}

.p1::after{
    background: transparent linear-gradient(to right bottom, #3f51b5, #ff4081);
    bottom: 0;
    content: "";
    left: 0;
    opacity: 0.85;
    position: absolute;
    right: 0;
    top: 0;
    z-index:1;
}
.p1 .box{
    width: 100%;
    height:100%;
    z-index:2;
    position:relative;
}
.top{
    padding: 0 30px;
    height: 70px;
    width: 100%;
    z-index: 999;
    position: fixed;
}
.top-left{
    display: inline-block;
    font-size: 24px;
    font-weight: 700;
    line-height: 70px;
    text-transform: uppercase;
    margin-left: 35px
}
.top-left a{
    color:white
}
.top .top-right{
    float:right;
}

.top-right li {
    display: block;
    float: left;
    margin-left: 30px;
    padding: 23px 0;
    position: relative;
    
}
.top-right li a{
    color:white
}
.top-right li a:hover{
    color:#ff4081
}

.top .top-right li:active{
    color:#CB1313;
}

.top .top-right li:hover a{
   color: rgb(255,64,129);
   text-decoration: none;
}

.p1 .container{
    z-index:999;
    padding-top:140px;
    color:white
}
.p1 .container h1{
    font-size:59px;
    text-align: center;
    font-weight:bold;
    margin:30px 0
}
.p1 .container h2{
    text-align:center;
    z-index:999
}


.p1 .p1 .btn{
    width:20px;
    height:40px;
    border-radius: 20px;
    border: 2px solid white;
    position:absolute;
    left:50%;
    margin-left:-10px;
    bottom:-120px;
}
</style>
<div class="p1">
    <div class="box">
        <!-- 顶部导航 -->
    <!-- 首页内容 -->
    <div class="container">
            <h2>Hello I'm</h2>
            <h1>sdfsdfs</h1>
            <h2>Profesonal Web  Designer Developer</h2>
    </div>
    <!-- 翻页按钮 -->
    <div class="btn-box"> 
        <a href="#ABOUT" class="btn"></a>
    </div>
    </div>
</div>
        </div>

        <!-- page02 -->
        <div class="section page02" id="ABOUT">
            <div>
                
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
			<img src="data/img/1505256628134991.jpeg">
		</div>
		<div class="col-md-5 col-sm-7 mb-40">
			<h3 style="font-weight: 600;">我是 sdfsdfs</h3>
			<p class="about_skills_title">sdfsdfasdfasdf</p>
		</div>
		<div class="col-md-4 col-xs-12 mb-40">
			<h2 class="about_skills">skills</h2>
			<!-- 循环的部分 -->
						<p class="about_skills_title">html </p>
			<div class="progress">
				<div class="progress-bar-parent" style="width: 90%;height: 100%;">
					<div class="progress-bar" data-present="90%" >
					</div>
				</div>
			</div>
						<p class="about_skills_title">javascript </p>
			<div class="progress">
				<div class="progress-bar-parent" style="width: 78%;height: 100%;">
					<div class="progress-bar" data-present="78%" >
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<div style="width: 100%;"></div>

                
    <link rel="stylesheet" type="text/css" href="data/css/pe-icon-7-stroke.css"/>
<style type="text/css">
    .resume_before{
        background: url(data/image/4.jpg) no-repeat;
        background-size: cover;
        position: relative;
        padding: 100px 0 70px 0;
        color: white;
    }
    .resume_before::before{
        bottom: 0;
        content: "";
        left: 0;
        opacity: 0.85;
        position: absolute;
        right: 0;
        top: 0;
        background: transparent linear-gradient(to right bottom, #3f51b5, #ff4081);
    }
    .resume_before .col-xs-6 {
        width: 50%;
    }
    .resume_before .single-fact i {
        font-size: 46px;
        color: #fff;
        margin-bottom: 20px;
    }
  
</style>
    <div class="resume_before">
    <div class="container">
        <div class="row">
            <div class="single-fact text-center col-sm-3 col-xs-6 mb-30">
                <i class="pe-7s-like2"></i>
                <h1 class="counter">327</h1>
                <p>project done</p>
            </div>
            <div class="single-fact text-center col-sm-3 col-xs-6 mb-30">
                <i class="pe-7s-coffee"></i>
                <h1 class="counter">153</h1>
                <p>Cup of Coffee</p>
            </div>
            <div class="single-fact text-center col-sm-3 col-xs-6 mb-30">
                <i class="pe-7s-cup"></i>
                <h1 class="counter">37</h1>
                <p>Award Won</p>
            </div>
            <div class="single-fact text-center col-sm-3 col-xs-6 mb-30">
                <i class="pe-7s-smile"></i>
                <h1 class="counter">2715</h1>
                <p>Happy Clients</p>
            </div>
        </div>
        
    </div>
</div>
<script type="text/javascript">
    var Ocounter = document.querySelectorAll(".counter");
    console.log(Ocounter)
    resume_before_dataArr = [327,153,37,2715];

    function buff(){
    	var tim=[];
        for(var i=0;i<Ocounter.length;i++){
        	that = Ocounter[i];
           	that.target = resume_before_dataArr[i];
            that.speed=that.target/100;
            tim[i]={
            	'target':that.target,
            	'speed':that.speed,
            	'value':0
            }
            buff1(tim[i],i);
            console.log(that.target);
            console.log(that.speed);
        }
    }
    function buff1(tim,index){
    	console.log(tim);
    	
    	clearInterval(tim.timer);
            tim.timer = setInterval(function(){
                tim.value += tim.speed;
                
                var value=Math.floor(tim.value);
                console.log(tim.value)
                console.log(tim);
                if(tim.value >= tim.target){
                    tim.value=tim.target;
                    clearInterval(tim.timer)
                }
                Ocounter[index].innerText = value ;
            },30)
    }
    buff();
</script>


            </div>
        </div>
        <div class="section page03"   id="RESUME">
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
			
		</div>
		<div class="col-md-6">
			<h2>experiens</h2>
			
		</div>
	</div>
</div>
        </div>
        <div class="section page04"   id="PORTFOLIO">
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

			<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js "></script>
			<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js " integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa " crossorigin="anonymous "></script>

			<script type="text/javascript ">
				$('#myModal').on('shown.bs.modal', function() {
					$('#myInput').focus()
				})
			</script>
			<script type="text/javascript ">
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
			</script>
			 <script src="data/js/mixitup.min.js"></script>
			<script>
				var containerEl = document.querySelector('.mixitup');
				var mixer = mixitup(containerEl);
			</script>

        </div>
        <div class="section page05"   id="SERVICE">
            <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="data/css/pe-icon-7-stroke.css">
		<style type="text/css">
	.resume{
		text-align: center;
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
	.resume.container>h1>span{
		color: #3f51b5;
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
	    color: #282528;
		margin-top: 0;
		font-size: 16px;
	    text-transform: capitalize;
	    font-weight: 600;
	    margin-bottom: 10px;
	}
	.resume .resume_content{
		font-weight: normal;
		color: #333;
	    font-size: 14px;
	    font-style: normal;
	    font-weight: 400;
	    line-height: 24px;
	    visibility: visible;
	}

	.single-service > i {
	    font-size: 48px;
	    margin-bottom: 20px;
	    color: #ff4081;
	}
	.pe-7s-monitor:before{
		content: "\e634";
	}
	.pe-7s-tools:before {
    	content: "\e60a";
	}
	.pe-7s-phone:before {
		content: "\e627";
	}
	.pe-7s-paint:before {
		content: "\e62a";
	}
	.pe-7s-graph2:before {
		content: "\e64c";
	}
	.pe-7s-headphones:before {
		content: "\e6b5";
	}
</style>
</head>
<body>

<div class="container resume">

	<h1>我的<span>服务</span></h1>
	<div class="row">
		<div class="col-md-4 col-sm-6 col-sx-12">
			<div class="single-service">
				<i class="pe-7s-monitor"></i>
				<h3 class="subtitle">网页设计</h3>
				<p class="resume_content">根据企业希望向浏览者传递的信息（包括产品、服务、理念、文化），进行网站功能策划，然后进行的页面设计美化工作。作为企业对外宣传物料的其中一种，精美的网页设计，对于提升企业的互联网品牌形象至关重要。</p>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-sx-12">
			<div class="single-service">
				<i class="pe-7s-tools"></i>
				<h3 class="subtitle">Web开发</h3>
				<p class="resume_content">Web前端开发是一项很特殊的工作，涵盖的知识面非常广，既有具体的技术，又有抽象的理念。简单地说，它的主要职能就是把网站的界面更好地呈现给用户。</p>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-sx-12">
			<div  class="single-service">
				<i class="pe-7s-phone"></i>
				<h3 class="subtitle">应用程序开发</h3>
				<p class="resume_content">「重视理念」能不能找出这个应用（产品）的核心功能，让用户第一眼就知道「这是做什么的」再来能不能涵盖品牌精神，涵盖团队的梦想。</p>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-sx-12">
			<div  class="single-service">
				<i class="pe-7s-paint"></i>
				<h3 class="subtitle">品牌化</h3>
				<p class="resume_content">品牌化，是指对产品或服务设计品牌名、标识、符号、包装等可视要素，以及声音、触觉、嗅觉等感官刺激，以推动产品（或服务）具备市场标的和商业价值的整个过程。</p>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-sx-12">
			<div  class="single-service">
				<i class="pe-7s-graph2"></i>
				<h3 class="subtitle">市场营销</h3>
				<p class="resume_content">。市场营销是在创造、沟通、传播和交换产品中，为顾客、客户、合作伙伴以及整个社会带来经济价值的活动、过程和体系。主要是指营销人员针对市场开展经营活动、销售行为的过程。</p>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-sx-12">
			<div  class="single-service">
				<i class="pe-7s-headphones"></i>
				<h3 class="subtitle">客户支持</h3>
				<p class="resume_content">与客户联系最频繁的部门而且对保持客户满意度至关重要。由于与消费者的互动关系变得日益复杂，所以客户服务部门需要一个柔性好的、可扩展的、伸缩性好的并且集成度高的高技术基础设施来及时准确地满足客户需求。</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>
            <link rel="stylesheet" type="text/css" href="data/css/pe-icon-7-stroke.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
<style type="text/css">
    .blog_before{
        background: url(data/image/5.jpg) no-repeat;
        background-size: 100%;
        height: 500px;
        position: relative;
        padding: 100px 0 70px 0;
        color: #fff;
        margin: 50px auto 0px;
    }
    .blog_before::before{
        bottom: 0;
        content: "";
        left: 0;
        opacity: 0.85;
        position: absolute;
        right: 0;
        top: 0;
        background: transparent linear-gradient(to right bottom, #3f51b5, #ff4081);
    }
    .blog_before .blog_before_page{
        text-align: center;
        margin-top: 60px;
    }
    .blog_before .blog_before_page_child{
        margin-bottom: 40px;
    }
    .blog_before p{
        font-size: 16px;
        font-style: italic;
        font-weight: 300;
        line-height: 26px;
    }
    .blog_before_circular_out{
        background: transparent;
        border: 2px solid #fff;
        border-radius: 100%;
        padding: 10px;
        width: 20px;
        height: 20px;
        margin: auto;
    }
    .blog_before_circular_out .blog_before_circular_in{
        background: transparent;
        border: 2px solid #fff;
        border-radius: 100%;
        width: calc(100% - 4px);
        height: calc(100% - 4px);
        margin: auto;
    }
    .blog_before_line{
        width: 2px;
        height: 40px;
        background: #fff;
        margin: 5px auto;
    }
</style>
    <div class="blog_before">
    <div class="container">
       <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide blog_before_page">
                    <div class="blog_before_page_child">
                        <div class="blog_before_circular_out">
                            <div class="blog_before_circular_in"></div>
                        </div>
                        <div class="blog_before_line"></div>
                        <p>根据企业希望向浏览者传递的信息（包括产品、服务、理念、文化），进行网站功能策划，然后进行的页面设计美化工作。作为企业对外宣传物料的其中一种，精美的网页设计，对于提升企业的互联网品牌形象至关重要。</p>
                        <h5>—— 网页设计</h5>
                    </div>
                </div>
                <div class="swiper-slide blog_before_page">
                    <div class="blog_before_page_child">
                        <div class="blog_before_circular_out">
                            <div class="blog_before_circular_in"></div>
                        </div>
                        <div class="blog_before_line"></div>
                        <p>根据企业希望向浏览者传递的信息（包括产品、服务、理念、文化），进行网站功能策划，然后进行的页面设计美化工作。作为企业对外宣传物料的其中一种，精美的网页设计，对于提升企业的互联网品牌形象至关重要。</p>
                        <h5>—— 网页设计</h5>
                    </div>
                </div>
                <div class="swiper-slide blog_before_page">
                    <div class="blog_before_page_child">
                        <div class="blog_before_circular_out">
                            <div class="blog_before_circular_in"></div>
                        </div>
                        <div class="blog_before_line"></div>
                        <p>根据企业希望向浏览者传递的信息（包括产品、服务、理念、文化），进行网站功能策划，然后进行的页面设计美化工作。作为企业对外宣传物料的其中一种，精美的网页设计，对于提升企业的互联网品牌形象至关重要。</p>
                        <h5>—— 网页设计</h5>
                    </div>
                </div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
           
            <!-- 如果需要滚动条 -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
<script>        
  var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: true
  })        
  </script>


        </div>
        <div class="section page06"   id="BLOG">
            <style type="text/css">
		.blog.container{
			padding-top: 120px;
			text-align: center;
			padding-bottom: 30px;
		}
		.blog.container>h1{
		font-size: 30px;
	    text-transform: uppercase;
	    font-weight: 700;
	    line-height: 22px;
	    margin-bottom: 50px;
	    margin-left: auto;
	    margin-right: auto;
	    display: inline-block;
	    vertical-align: top;
	    padding: 0 15px;
	    color: #282528;
		margin-top: 0;
		display: inline-block;
	}
	.blog.container>h1::after{
		content:'';
		display: inline-block;
		width: 80px;
		height: 1px;
		background-color: #ff4081;
		margin-left: 10px;
		position: relative;
		top:-11px;
	}
	.blog.container>h1::before{
		content:'';
		display: inline-block;
		width: 80px;
		height: 1px;
		background-color: #ff4081;
		margin-right: 10px;
		position: relative;
		top:-11px;
	}
	.blog.container>h1>span{
		color: #3f51b5;
	}
	.blog .blog-post{

	}
	.blog-post .blog-media {
	    margin-bottom: 15px;
	    overflow: hidden;
	    position: relative;
	}
	.blog-post .blog-media a img {
	    width: 100%;
	    display: block;
	    -webkit-transition: all 0.3s ease 0s;
	    transition: all 0.3s ease 0s;
	}
	.blog-post .blog-media a img:hover {
	    transform: scale(1.2);
	}
	.blog-post .blog-media .cat {
	    position: absolute;
	    background-color: #ff4081;
	    font-size: 12px;
	    color: #fff;
	    line-height: 18px;
	    padding: 3px 10px;
	    display: inline-block;
	    margin-bottom: 10px;
	    text-transform: uppercase;
	    left: 15px;
	    top: 15px;
	    font-weight: 600;
	}
	.blog-post .blog-summery{
		text-align: left;
	}
	.blog-post .blog-summery a{
		text-decoration: none;
		font-size: 18px;
		color:#666;
	}
	.blog-post .blog-summery a:hover{
		color:#ff4081;
	}
	.blog-post .blog-summery .meta {
    	margin-bottom: 5px;
    	text-align: left;
    	padding-left: 0;
	}
	.blog-post .blog-summery .meta a{
		font-size: 16px;
	}
	.fix {
	    overflow: hidden;
	}
	ul, ol {
	    list-style: none;
	    margin: 0;
	}
	.blog-post .blog-summery .meta li {
	    display: block;
	    float: left;
	    margin-right: 10px;
	    font-size: 12px;
	    padding-right: 10px;
	    position: relative;
	    text-transform: uppercase;
	}
	.blog-post .blog-summery .meta li::before {
	    content: "|";
	    position: absolute;
	    right: -3px;
	    table-layout: -2px;
	}
	.blog-post .blog-summery .read-more {
    font-size: 14px;
    font-weight: 600;
    text-transform: capitalize;
}
</style>
<div class="container blog">
	<h1>最新博客</h1>
	<div class="row">
			
            <!--Blog Post-->
           <!--  <div class="blog-post col-md-4 col-sm-6 col-xs-12 mb-40">
                <div class="blog-media">
                    <a href="blog-details.html"><img src="data/image/77.jpg" alt=""></a>
                    <a href="#" class="cat">development</a>
                </div>
                <div class="blog-summery">
                    <h4 class="title"><a href="blog-details.html">Common Mistakes Developers Make</a></h4>
                    <ul class="meta fix">
                        <li>By <a href="#">admin</a></li>
                        <li>25 june 2017</li>
                    </ul>
                    <p>Sed ut perspiciatis unde omnis iste natus error accusantium doloremque laudantium, totam rem aperiam sit voluptatem.</p>
                    <a href="blog-details.html" class="read-more">read more <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog-post col-md-4 col-sm-6 col-xs-12 mb-40">
                <div class="blog-media">
                    <a href="blog-details.html"><img src="data/image/88.jpg" alt=""></a>
                    <a href="#" class="cat">UI &amp; UX</a>
                </div>
                <div class="blog-summery">
                    <h4 class="title"><a href="blog-details.html">how to grow up your ui ux knowledge</a></h4>
                    <ul class="meta fix">
                        <li>By <a href="#">admin</a></li>
                        <li>25 june 2017</li>
                    </ul>
                    <p>Sed ut perspiciatis unde omnis iste natus error accusantium doloremque laudantium, totam rem aperiam sit voluptatem.</p>
                    <a href="blog-details.html" class="read-more">read more <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div> -->
                
        </div>
</div>
        </div>
        <div class="section page07"   id="CONTACT">
            <style type="text/css">
.p2{
    width:100%;
    min-height:700px;
    background: url(data/image/3.jpg) no-repeat;
    background-size:100% 100%;
    position:relative;
    z-index:1;
    padding-top:20px;
}
.p2::after{
    background: transparent linear-gradient(to right bottom, #3f51b5, #ff4081);
    bottom: 0;
    content: "";
    left: 0;
    opacity: 0.85;
    position: absolute;
    right: 0;
    top: 0;
    z-index:2;
}

.p2 textarea{
    width: 100%;
    border: 1px solid #fff;
    color: #fff;
    padding: 5px 15px;
    background-color: transparent;
    margin-bottom: 20px;
    border-radius: 3px;
    height: 98px;
    resize: none;
    outline:none;
    appearance:none;
}
    }
.p2 .box2{
    width:100%;
    height:100%;
    position:relative;
    z-index:3;
}
.p2 h1 {
    text-align:center;
    margin-top: 100px;
}
.p2 h1 span{
    color:white;
    position:relative;
}

.p2 h1 span i{
    color:rgb(255,64,129);
    font-size:bold;
}
.p2 h1 span::before{
    position:absolute;
    right: 120%;
    width: 50px;
    height: 1px;
    content: "";
    top: 50%;
    background-color: white;
    border:1px solid white;

}
.p2 h1 span::after{
    position:absolute;
    left: 120%;
    width: 50px;
    height: 1px;
    content: "";
    top: 50%;
    border:1px solid white;
    background-color: white;
}

.p2 input{
    width: 100%;
    border: 1px solid #fff;
    color: #fff;
    height: 40px;
    padding: 7px 15px;
    background-color: transparent;
    margin-bottom: 20px;
    border-radius: 3px;
    outline:none;
    appearance:none;
}
.p2 input::-webkit-input-placeholder { /* placeholder字体颜色 */   
    color:white;
}

.p2 textarea::-webkit-input-placeholder { /* placeholder字体颜色 */   
    color:white;
}
.p2 .content_list{
    width:80%;
    height:100px;
    margin:100px auto 0px;
}

.p2 .content_list li{
    text-align:center;
    display:inline-block;
    width:30%;
}

.p2 .content_list li a{
    color:white;
    display:block;
    text-align:center;
}

.p2 .content_list li a:hover{
    color:rgb(255,64,129);
    text-decoration:none;
    cursor: pointer;
}

.p2 .content_list li span{
    color:white;
    font-size:30px;
    display:inline-block;
    margin:20px auto;
}
/*.p2 .msg{
    width:80%;
    margin:30px auto;
}*/
.p2  .ipt{
	margin-top: 130px;
	}
.p2 input[type="submit"]:hover{
    background: white;
    color:rgb(255,64,129)
}

.p2 .footer{
    margin-top:100px;
}
.p2 .footer a{
    border: 1px solid #fff;
    border-radius: 50%;
    color: #fff;
    display: inline-block;
    height: 30px;
    margin: 0 1px;
    width: 30px;
    text-align: center;
}
.p2 .footer a i{
    font-size:30px;
    color:white;
}
</style>
<div class="p2" >
        <div class="box2" style="position: relative;z-index: 3;margin-top: 30px;">
             <h1>
                <span>CONTENT <i>ME</i></span>
            </h1>
        <!--列表 -->
            <div class="container">
		        <ul class="content_list">
		            <li>
		                <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
		                <a>+300-663-7120</a>
		                <a>+300-671-8121</a>
		            </li>
		            <li>
		                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
		                <i></i>
		                <a >johnatan@domain.com</a>
		                <a >john@domain.com</a>
		            </li>
		            <li>
		                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
		                <i></i>
		                <a >121 King Street Melboune VIC 3000, </a>
		                <a >Australia</a>
		            </li>
		        </ul>
		        <!-- 联系人信息 -->
		        <div class="row ipt">
		            <div class="col-sm-6 col-xs-12">            
		                <input type="text" placeholder="Name">
		                <input type="email" placeholder="Email">
		                <input type="text" placeholder="Subject">
		            </div>
		            <div class="col-sm-6 col-xs-12">
		                <textarea placeholder="Message"></textarea>
		                <input type="submit" placeholder="SUBMIT" value="SUBMIT" > 
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
<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript " src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="data/css/animate.css">
<script type="text/javascript" src="https://cdn.bootcss.com/jquery-one-page-nav/3.0.0/jquery.nav.min.js"></script>

<script type="text/javascript">
    $(function(){
        $('.top-right').onePageNav();
        window.onscroll = function(){
            if(scroll().top>300){
                $('.top').css({
                    "box-shadow":"0 0 6px 0 #ccc"
                })
                $('.top a').css({
                    'color':'black'
                })
            }else{
                $('.top').attr('style','');
            }
        }
        function scroll() {
            if (document.body.scrollTop){
                return {
                    top:document.body.scrollTop,
                    left:document.body.scrollLeft
                }
            }
            else{
                return {
                    top:document.documentElement.scrollTop,
                    left:document.documentElement.scrollLeft
                }
            }
        }
    });

</script>
    <?php }
}
