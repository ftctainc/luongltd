<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
    <cms:set g_title_page=title_page 'global' />
    <cms:set g_site_logo=site_logo 'global' />
    <cms:set g_slogun=slogun 'global' />
    <cms:set g_open_time=open_time 'global'/>
    <cms:set g_phone_number=phone_number 'global'/>
    <cms:set g_news_background=news_background 'global' />
    <cms:set g_top100_description=top100_description 'global' />
    <cms:set g_top100_link=top100_link 'global' />
    
</cms:pages>
<cms:template title="Giới thiệu công ty">
    <cms:editable name="about_content" label='Nội dung' desc='Nội dung' type="richtext" />
    <cms:editable name="des_about_content" label='Giới thiệu ngắn gọn' desc='Hiển thị ở footer' type="richtext" />
    <cms:editable name="img_header" label='Hình ảnh đầu trang' desc='Hình ảnh đầu trang' type="image" />
</cms:template>

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
                <h1>Giới thiệu công ty</h1>
                <nav class="bread-crumb">
                    <ul class="breadcrumb clearfix">
                        <li><a href="<cms:link masterpage='index.php' />">Trang chủ</a><span class="divider"></span></li>
                        <li><li class="active">Giới thiệu công ty</li>
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
            <h2 class="title">GIỚI THIỆU CÔNG TY</h2>
        </div>
        <cms:editable name="about_content" label="Giới thiệu công ty" type="richtext" />
    </div>
    <div class="clearfix"></div>

    <div class="col-sm-12 col-md-12">
        <div class="title-box">
            <h2 class="title">CHỨNG NHẬN SẢN PHẨM</h2>
        </div>

        <div class="video clearfix">
            <div class="video-wrapper clearfix">
                <iframe src="<cms:show g_top100_link />" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
            </div>
        </div>

        <div class="entry-content">
            <cms:show g_top100_description />
        </div>

    </div>

    <div class="clearfix"></div>

        <div class="bottom-padding col-sm-12 col-md-12">
            <div class="title-box">
                <h2 class="title">CHÍNH SÁCH CỦA CÔNG TY </h2>
            </div>
            <cms:editable name="about_company_policy" label="Chính sách của công ty" type="richtext" />
        </div>

        <div class="clearfix"></div>

        <div class="bottom-padding col-sm-12 col-md-12">
            <div class="title-box">
                <h2 class="title">TOÀN THỂ NHÂN VIÊN CTY TNHH TƯ VẤN QUẢN LÝ LƯƠNG CAM KẾT</h2>
            </div>
            <cms:editable name="about_company_commitment" label="Cam kết" type="richtext" />
        </div>

        <div class="clearfix"></div>

        <div class="bottom-padding col-sm-12 col-md-12">
            <div class="title-box">
                <h2 class="title">LĨNH VỰC HOẠT ĐỘNG</h2>
            </div>
            <cms:editable name="about_company_services" label="Lĩnh vực hoạt động" type="richtext" />
        </div>

        <div class="clearfix"></div>
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