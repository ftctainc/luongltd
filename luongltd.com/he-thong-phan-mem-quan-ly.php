<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
    <cms:set g_title_page=title_page 'global' />
    <cms:set g_site_logo=site_logo 'global' />
    <cms:set g_slogun=slogun 'global' />
    <cms:set g_open_time=open_time 'global'/>
    <cms:set g_phone_number=phone_number 'global'/>
</cms:pages>
<cms:template title="Hệ thống phần mềm quản lý FSC" />

<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->
<cms:embed '../../head.php' />
<body>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<cms:embed '../../header.php' />
<cms:embed '../../slider.php' />
<cms:embed '../../banner.php' />
        
<div class="blog-page default-page full-width clearfix">
    <div class="container">
        Chức năng đang hoàn thiện
    </div>
</div>

<cms:embed '../../footer.php' />

<a href="#top" id="scroll-top"></a>
<cms:embed '../../javascripts.php' />

</body>
</html>
<?php COUCH::invoke(); ?>