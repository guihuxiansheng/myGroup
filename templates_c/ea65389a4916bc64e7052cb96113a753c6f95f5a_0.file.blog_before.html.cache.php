<?php
/* Smarty version 3.1.30, created on 2017-09-14 12:24:47
  from "D:\wamp64\www\20170914\myGroup\view\person\blog_before.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba750fe2d103_54716677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea65389a4916bc64e7052cb96113a753c6f95f5a' => 
    array (
      0 => 'D:\\wamp64\\www\\20170914\\myGroup\\view\\person\\blog_before.html',
      1 => 1505391882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba750fe2d103_54716677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '912959ba750fd47b42_83876202';
?>
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
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>        
  var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: true
  })        
  <?php echo '</script'; ?>
>

<?php }
}
