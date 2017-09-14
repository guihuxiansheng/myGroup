<?php
/* Smarty version 3.1.30, created on 2017-09-14 11:05:25
  from "D:\wamp64\www\20170914\myGroup\view\person\person.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba62751de661_74908620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec4dfd450c69bc3d7b1228a639b87a25f38cc41' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\person.html',
      1 => 1505387036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/public/header.html' => 1,
    'file:person/head.html' => 1,
    'file:person/about.html' => 1,
    'file:person/resume_before.html' => 1,
    'file:person/resume.html' => 1,
    'file:person/pic.html' => 1,
    'file:person/service.html' => 1,
    'file:person/blog_before.html' => 1,
    'file:person/blog.html' => 1,
    'file:person/foot.html' => 1,
    'file:view/public/footer.html' => 1,
  ),
),false)) {
function content_59ba62751de661_74908620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3233559ba6275057bc9_57166771';
$_smarty_tpl->_subTemplateRender("file:view/public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
            <?php $_smarty_tpl->_subTemplateRender("file:person/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>

        <!-- page02 -->
        <div class="section page02" id="ABOUT">
            <div>
                <?php $_smarty_tpl->_subTemplateRender("file:person/about.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("file:person/resume_before.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
        <div class="section page03"   id="RESUME">
            <?php $_smarty_tpl->_subTemplateRender("file:person/resume.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <div class="section page04"   id="PORTFOLIO">
            <?php $_smarty_tpl->_subTemplateRender("file:person/pic.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <div class="section page05"   id="SERVICE">
            <?php $_smarty_tpl->_subTemplateRender("file:person/service.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("file:person/blog_before.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <div class="section page06"   id="BLOG">
            <?php $_smarty_tpl->_subTemplateRender("file:person/blog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <div class="section page07"   id="CONTACT">
            <?php $_smarty_tpl->_subTemplateRender("file:person/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>

    </div>

<?php $_smarty_tpl->_subTemplateRender("file:view/public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php echo '<script'; ?>
 type="text/javascript " src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="data/css/animate.css">
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/jquery-one-page-nav/3.0.0/jquery.nav.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
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

<?php echo '</script'; ?>
>
    <?php }
}
