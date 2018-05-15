<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
    <cms:set g_title_page=title_page 'global' />
    <cms:set g_site_logo=site_logo 'global' />
    <cms:set g_slogun=slogun 'global' />
    <cms:set g_open_time=open_time 'global'/>
    <cms:set g_phone_number=phone_number 'global'/>
    <cms:set g_news_background=news_background 'global' />
</cms:pages>
<cms:template title="Danh sách khách hàng" clonable="1">
    <cms:editable name="customer_content" label='Nội dung' desc='Danh sách khách hàng theo dịch vụ' type="richtext" />
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
                        <li><li class="active"><cms:show k_page_title /></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="blog-page clearfix">
<div class="container">

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="title-box-header">
            <h2 class="title"><cms:show k_page_title /> </h2>
        </div>
        <cms:show customer_content/>
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
<cms:embed '../../khach-hang.php' />
</cms:if>
<?php COUCH::invoke(); ?>