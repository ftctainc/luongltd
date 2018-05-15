<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
    <cms:set g_title_page=title_page 'global' />
    <cms:set g_site_logo=site_logo 'global' />
    <cms:set g_slogun=slogun 'global' />
    <cms:set g_open_time=open_time 'global'/>
    <cms:set g_phone_number=phone_number 'global'/>
</cms:pages>
<cms:template title="Trang chủ" />

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
        <div class="blog-page-single clearfix">
            <article  class=" page hentry  clearfix">
                <div class="full-width-contents">
                    <div class="entry-content">
                        <!--four columns-->
                        <div class="row">
                            <div class="col-sm-8">
                                <cms:pages masterpage="chi-tiet-tin-tuc.php" paginate='0' limit='1' folder='tieu-chuan-fsc'>
                                    <div class="col-sm-4">
                                        <img src="<cms:show img_header />" class="tabs-thumb wp-post-image" alt="<cms:show k_page_title />" />
                                    </div>
                                    <div class="col-sm-8">
                                        <a href="<cms:show k_page_link />"><h3><cms:show k_page_title /></h3></a>
                                        <p><cms:show news_description /></p>
                                        <a href="<cms:show k_page_link />" class="link-detail"> Chi tiết » </a>
                                        <br><br>
                                    </div>
                                </cms:pages>

                                <br><br>
                                
                                <div class="col-sm-6">
                                    <span class="celltop"></span>
                                    <cms:folders masterpage="chi-tiet-tin-tuc.php" exclude="tieu-chuan-haccp, tieu-chuan-khac, tin-tuc-su-kien, tin-hot, san-pham, tags">
                                        <p class="celltitle"><cms:show k_folder_title  /></p>
                                    </cms:folders>

                                    <cms:pages masterpage="chi-tiet-tin-tuc.php" paginate='0' limit='1' folder='tieu-chuan-fsc'>
                                        <a href="<cms:show k_page_link />"><h3><cms:show k_page_title /></h3></a>
                                        <p><cms:show news_description /></p>
                                        <a href="<cms:show k_page_link />" class="link-detail"> Chi tiết » </a>
                                    </cms:pages>
                                    <br>
                                    <div class="arrow-list-one">
                                        <ul>
                                            <cms:pages masterpage="chi-tiet-tin-tuc.php" paginate='0' limit='3' folder='tieu-chuan-fsc' offset='1'>
                                                <li><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></li>
                                            </cms:pages>
                                        </ul>
                                    </div>
                                    <br><br>
                                </div>


                                <div class="col-sm-6">
                                    <span class="celltop2"></span>
                                    <cms:folders masterpage="chi-tiet-tin-tuc.php" exclude="tieu-chuan-fsc, tieu-chuan-khac, tin-tuc-su-kien, tin-hot, san-pham, tags">
                                        <p class="celltitle"><cms:show k_folder_title  /></p>
                                    </cms:folders>
                                    
                                    <cms:pages masterpage="chi-tiet-tin-tuc.php" paginate='0' limit='1' folder='tieu-chuan-haccp'>
                                        <a href="<cms:show k_page_link />"><h3><cms:show k_page_title /></h3></a>
                                        <p><cms:show news_description /></p>
                                        <a href="<cms:show k_page_link />" class="link-detail"> Chi tiết » </a>
                                    </cms:pages>
                                    <br>
                                    
                                    <div class="arrow-list-one">
                                        <ul>
                                            <cms:pages masterpage="chi-tiet-tin-tuc.php" paginate='0' limit='3' folder='tieu-chuan-haccp' offset='1'>
                                                <li><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></li>
                                            </cms:pages>
                                        </ul>
                                    </div>
                                    <br><br>
                                </div>

                                <br><br>

                                <div class="clearfix"></div>

                                <div class="col-sm-6">
                                    <span class="celltop3"></span>
                                    <cms:folders masterpage="chi-tiet-tin-tuc.php" exclude="tieu-chuan-fsc, tieu-chuan-haccp, tin-tuc-su-kien, tin-hot, san-pham, tags">
                                        <p class="celltitle"><cms:show k_folder_title  /></p>
                                    </cms:folders>

                                    <cms:pages masterpage="chi-tiet-tin-tuc.php" paginate='0' limit='1' folder='tieu-chuan-khac'>
                                        <a href="<cms:show k_page_link />"><h3><cms:show k_page_title /></h3></a>
                                        <p><cms:show news_description /></p>
                                        <a href="<cms:show k_page_link />" class="link-detail"> Chi tiết » </a>
                                    </cms:pages>
                                    <br>
                                    
                                    <div class="arrow-list-one">
                                        <ul>
                                            <cms:pages masterpage="chi-tiet-tin-tuc.php" paginate='0' limit='3' folder='tieu-chuan-khac' offset='1'>
                                                <li><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></li>
                                            </cms:pages>
                                        </ul>
                                    </div>
                                    <br><br>
                                </div>

                                <div class="col-sm-6">
                                    <span class="celltop4"></span>
                                    <cms:folders masterpage="chi-tiet-tin-tuc.php" exclude="tieu-chuan-fsc, tieu-chuan-haccp, tieu-chuan-khac, tin-hot, san-pham, tags">
                                        <p class="celltitle"><cms:show k_folder_title  /></p>
                                    </cms:folders>

                                    <cms:pages masterpage="chi-tiet-tin-tuc.php" paginate='0' limit='1' folder='tin-tuc-su-kien'>
                                        <a href="<cms:show k_page_link />"><h3><cms:show k_page_title /></h3></a>
                                        <p><cms:show news_description /></p>
                                        <a href="<cms:show k_page_link />" class="link-detail"> Chi tiết » </a>
                                    </cms:pages>
                                    <br>
                                    <div class="arrow-list-one">
                                        <ul>
                                            <cms:pages masterpage="chi-tiet-tin-tuc.php" paginate='0' limit='3' folder='tin-tuc-su-kien' offset='1'>
                                                <li><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></li>
                                            </cms:pages>
                                        </ul>
                                    </div>
                                    <br><br>
                                </div>
                                
                            </div>

                            <div class="col-sm-4">
                                <div class="home-right-menu-boder">
                                    <h3 class="home-right-menu">Sản phẩm</h3>
                                    <cms:pages masterpage="chi-tiet-san-pham.php" paginate='0'>
                                        <span class="prd-lst">
                                            <a class="fa fa-chevron-circle-right" href="<cms:show k_page_link />"> <cms:show k_page_title /></a>
                                        </span>
                                    </cms:pages>
                                </div>
                                <div class="home-right-menu-boder" style="margin-top: 2em">
                                    <h3 class="home-right-menu" style="margin-top 20px;">Tổ chức chứng nhận</h3>
                                    <cms:pages masterpage="chi-tiet-to-chuc-chung-nhan.php" paginate='0'>
                                        <span class="prd-lst">
                                            <a class="fa fa-chevron-circle-right" href="<cms:show k_page_link />"> <cms:show k_page_title /></a>
                                        </span>
                                    </cms:pages>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </article>
        </div>

    </div>
</div>

<cms:embed '../../footer.php' />

<a href="#top" id="scroll-top"></a>
<cms:embed '../../javascripts.php' />

</body>
</html>
<?php COUCH::invoke(); ?>