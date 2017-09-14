<?php
/* Smarty version 3.1.30, created on 2017-09-14 11:05:25
  from "D:\wamp64\www\20170914\myGroup\view\person\resume_before.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba62754b0748_77929848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8c7f442e407cbf74b64f0adb08736d9ddb9f502' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\resume_before.html',
      1 => 1505387036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba62754b0748_77929848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1239559ba6275477af7_74271122';
?>

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
<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>

<?php }
}
