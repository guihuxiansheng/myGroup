<?php
// mvc特点：
// 1、只有一个入口
// 
include 'lib/common.php';
include 'config.php';
include 'lib/baseModel.php';
include 'lib/baseControl.php';
// smarty模版引擎
// 第一步：引入文件
include 'lib/smarty/Smarty.class.php';

// node jade ejs

$baseControl = new baseControl();

$baseControl->run();
?>