<?php
/* Smarty version 3.1.30, created on 2017-09-14 11:55:28
  from "D:\wamp64\www\20170914\myGroup\view\person\foot.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba6e30a73578_14954227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31960ba06073a14622e038d4ca3038630752d1b8' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\foot.html',
      1 => 1505390127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba6e30a73578_14954227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '297959ba6e3095b503_85435899';
?>
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
    </div><?php }
}
