<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
    <cms:set g_news_background=news_background 'global' />
</cms:pages>
<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->

<cms:embed '../../head.php' />

<body>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<cms:embed '../../header.php' />

<div class="banner clearfix" style="background-image: url(<cms:show g_news_background />);"></div>
<div class="page-top clearfix">
    <!--page main heading and search area-->
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-7 ">
                <h1>Hình ảnh hoạt động</h1>
                <nav class="bread-crumb">
                    <ul class="breadcrumb clearfix">
                        <li><a href="<cms:link masterpage='index.php' />">Trang chủ</a><span class="divider"></span></li>
                        <li>Hình ảnh hoạt động</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="blog-page clearfix">
<div class="container">
<div class="gallery-page clearfix">
  
    <div class="container isotope-wrapper text-center">
        <div class="row">
            <div id="isotope-container" class="clearfix">
                <cms:pages masterpage="chi-tiet-hinh-anh-hoat-dong.php" paginate='0' limit='0'>
                    <!--column start-->
                    <div class="isotope-item advanced-technology free-facilities col-md-3 col-sm-6 ">
                        <article class="common clearfix hentry four-col-gallery">
                            <figure class="overlay-effect">
                                <a href="<cms:show img />" title="<cms:show k_page_title />">
                                    <img src="<cms:show img_header />" alt="<cms:show k_page_title />" />
                                </a>
                                <a class="overlay" href="<cms:show img />"><i class="top"></i> <i class="bottom"></i></a>
                            </figure>
                            <div class="content clearfix">
                                <h4><a href="<cms:show img />"><cms:show k_page_title /></a></h4>
                            </div>
                        </article>
                    </div>
                    <!--column end-->
                </cms:pages>
            </div>
        </div>
    </div>
</div>


</div>
</div>
</div>

<cms:embed '../../footer.php' />

<a href="#top" id="scroll-top"></a>

<cms:embed '../../javascripts.php' />

</body>
</html>
<?php COUCH::invoke(); ?>