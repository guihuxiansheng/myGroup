<?php
/* Smarty version 3.1.30, created on 2017-09-14 11:05:25
  from "D:\wamp64\www\20170914\myGroup\view\person\head.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba62752cc124_40199451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a100dd2ad7973e159ee0e059f2c479423be0210' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\head.html',
      1 => 1505387036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba62752cc124_40199451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2736559ba627524b542_58030945';
?>
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
            <h1><?php echo $_smarty_tpl->tpl_vars['view_data']->value['user'][0]['name'];?>
</h1>
            <h2>Profesonal Web  Designer Developer</h2>
    </div>
    <!-- 翻页按钮 -->
    <div class="btn-box"> 
        <a href="#ABOUT" class="btn"></a>
    </div>
    </div>
</div><?php }
}
