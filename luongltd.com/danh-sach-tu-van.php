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
                <h1>Tin tiêu điểm</h1>
                <nav class="bread-crumb">
                    <ul class="breadcrumb clearfix">
                        <li><a href="<cms:link masterpage='index.php' />">Trang chủ</a><span class="divider"></span></li>
                        <li>Tin tiêu điểm</li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-5 ">
                <div id="search" class="widget clearfix">
                    <form method="get" id="search-form" class="search-form" action="#">
                        <div>
                            <input type="text" name="s" id="search-text" placeholder="Search"/>
                            <input type="submit" id="search-submit" value=""/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-page clearfix">
<div class="container">
<div class="row">
<div class="col-lg-9 col-md-8">
    <div class="blog-post-listing clearfix"  >
    <cms:pages masterpage="chi-tiet-tu-van.php" paginate='1' limit='10' folder=k_folder_name 
							start_on=k_archive-date stop_before=k_next_archive_date>
        <!-- Post -->
        <article  class="post hentry clearfix">
            <div class="row">
                <!--post date and comments-->
                <div class="col-sm-2">
                    <div class="left_meta clearfix entry-meta">
                        <time class="entry-time updated"><cms:date k_archive_date format="m" /> <strong><cms:date k_archive_date format="d" /></strong></time>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="right-contents">
                        <header class="entry-header">
                            <!--post image-->
                            <figure>
                                <a href="<cms:show k_page_link />" title="<cms:show k_page_title />">
                                    <img src="<cms:show img_header />" class="wp-post-image" alt="<cms:show k_page_title />" />
                                </a>
                            </figure>
                            <!--post title-->
                            <h3 class="entry-title"><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h3>
                        </header>
                        <!--post content-->
                        <div class="entry-content">
                        <cms:excerptHTML count='75' ignore='img'><cms:show news_content /> </cms:excerptHTML>
                        </div>
                        <!--read more button-->
                        <a class="read-more" href="<cms:show k_page_link />">Chi tiết</a>
                    </div>
                </div>
            </div>
        </article>

        <cms:paginator prev_text="<" position="1" next_text=">" />
        </cms:pages>
    </div>
</div>

<cms:embed '../../news-page-sidebar.php' />

</div>
</div>
</div>

<cms:embed '../../footer.php' />

<a href="#top" id="scroll-top"></a>

<cms:embed '../../javascripts.php' />

</body>
</html>
<?php COUCH::invoke(); ?>
