<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
    <cms:set g_title_page=title_page 'global' />
    <cms:set g_site_logo=site_logo 'global' />
    <cms:set g_slogun=slogun 'global' />
    <cms:set g_open_time=open_time 'global'/>
    <cms:set g_phone_number=phone_number 'global'/>
    <cms:set g_news_background=news_background 'global' />
</cms:pages>
<cms:template title="Danh sách tư vấn" clonable="1">
    <cms:editable name="consult_content" label='Nội dung' desc='Nội dung tư vấn' type="richtext" />
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
                        <li><a href="<cms:link masterpage='dich-vu-dao-tao.php' />" title="Dịch vụ đào tạo">Dịch vụ đào tạo</a><span class="divider"></span></li>
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
    <div class="col-sm-12 col-md-12">
        <div class="title-box-header">
            <h2 class="title">Dịch vụ tư vấn</h2>
        </div>
        <cms:show consult_content/>
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
<cms:else />
<cms:embed '../../danh-sach-tu-van.php' />
</cms:if>
<?php COUCH::invoke(); ?>