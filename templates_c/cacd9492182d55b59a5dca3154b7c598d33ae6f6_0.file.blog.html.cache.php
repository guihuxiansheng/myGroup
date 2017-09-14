<?php
/* Smarty version 3.1.30, created on 2017-09-14 11:05:25
  from "D:\wamp64\www\20170914\myGroup\view\person\blog.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba6275948b88_62396088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cacd9492182d55b59a5dca3154b7c598d33ae6f6' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\blog.html',
      1 => 1505387036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba6275948b88_62396088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1445259ba627581f764_30947399';
?>
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
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_data']->value['blog'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
			
            <div class="blog-post col-md-4 col-sm-6 col-xs-12 mb-40">
                <!--Blog Media-->
                <div class="blog-media">
                    <a href="index.php?control=blog_detail&action=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&uid=<?php echo $_smarty_tpl->tpl_vars['view_data']->value['user'][0]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['article_img'];?>
" alt=""></a>
                    <a href="#" class="cat">web design</a>
                </div>
                <!--BLog Summery-->
                <div class="blog-summery">
                    <h4 class="title"><a href="view/blog_detail.html"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h4>
                    <ul class="meta fix">
                        <li>By <a href="#"><?php echo $_smarty_tpl->tpl_vars['view_data']->value['user'][0]['name'];?>
</a></li>
                        <li>25 june 2017</li>
                    </ul>
                    <p><?php echo $_smarty_tpl->tpl_vars['value']->value['intro'];?>
</p>
                    <a href="view/blog_detail.html" class="read-more">read more <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
</div><?php }
}
