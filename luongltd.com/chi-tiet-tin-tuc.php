<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
    <cms:set g_title_page=title_page 'global' />
    <cms:set g_site_logo=site_logo 'global' />
    <cms:set g_slogun=slogun 'global' />
    <cms:set g_open_time=open_time 'global'/>
    <cms:set g_phone_number=phone_number 'global'/>
    <cms:set g_news_background=news_background 'global' />
</cms:pages>
<cms:template title="Tin tiêu điểm" clonable="1">
    <cms:editable name="news_content" label='Nội dung' desc='Nội dung' type="richtext" />
    <cms:editable name="news_description" label='Mô tả nội dung' desc='Mô tả nội dung' type="richtext" />
    <cms:editable name="img_header" label='Hình ảnh đầu trang' desc='Hình ảnh đầu trang' type="image" />
    <cms:folder name="tieu-chuan-fsc" title="Tiêu chuẩn FSC" />	
    <cms:folder name="tieu-chuan-haccp" title="Tiêu chuẩn Haccp & GlobalGAP" />	
    <cms:folder name="tieu-chuan-khac" title="Các tiêu chuẩn khác" />	
    <cms:folder name="tin-tuc-su-kien" title="Tin tức & Sự kiện" />	
    <cms:folder name="tin-hot" title="Tin hot" />	
    <cms:folder name="san-pham" title="Sản phẩm" />	
    <cms:folder name="tags" title="Tags" />	
</cms:template>
<cms:if k_is_page>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-7">
                <nav class="bread-crumb">
                    <ul class="breadcrumb clearfix">
                        <li><a href="<cms:link masterpage='index.php' />">Trang chủ</a><span class="divider"></span></li>
                        <li><a href="<cms:link masterpage='tin-tuc.php' />" title="Tin tiêu điểm">Tin tiêu điểm</a><span class="divider"></span></li>
                        <li><cms:breadcrumbs/><span class="divider"></span></li>
                        <li><li class="active"><cms:show k_page_title /></li>
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
<div class="blog-post-single clearfix">

<div class="row">
<div class="col-sm-2">
    <div class="left_meta clearfix entry-meta">
        <time class="entry-time"> <strong> Ngày <cms:date k_archive_date format="d" /></strong> Tháng <cms:date k_archive_date format="m" /> </time>
        <!-- <span class="comments_count clearfix entry-comments-link"><a href="#" title="Comment on Gallery Post Format">0</a></span> -->
    </div>
</div>
<div class="col-sm-10">
    <article class="post format-gallery hentry clearfix">
        <div class="right-contents">
            <header class="entry-header">

                <figure>
                    <a class="swipebox" href="<cms:show img_header />" title="Hình ảnh mô tả">
                        <img src="<cms:show img_header />" class="attachment-blog-page wp-post-image" alt="Hình ảnh mô tả" />
                    </a>
                </figure>

                <h1 class="entry-title"><cms:show k_page_title /></h1>
            </header>

            <div class="entry-content">
                <cms:show news_content />
            </div>

            <!-- <footer class="entry-footer">
                <p class="entry-meta">
                    <span class="entry-categories">
                        <i class="fa fa-folder-o"></i>&nbsp; <cms:breadcrumbs/>
                    </span>
                    <span class="entry-tags">
                        <i class="fa fa-tags"></i>&nbsp; <a href="#" rel="tag">blood pressure</a>,
                        <a href="#" rel="tag">clean environment</a>, <a href="#" rel="tag">friendly staff</a>,
                        <a href="#" rel="tag">kids health</a>
                    </span>
                </p>
            </footer> -->
        </div>
    </article>

    <div class="comments-wrapper">


        

    </div>


</div>
</div>

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
<cms:else />
<cms:embed '../../tin-tuc.php' />
</cms:if>
<?php COUCH::invoke(); ?>