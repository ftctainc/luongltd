<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
    <cms:set g_title_page=title_page 'global' />
    <cms:set g_site_logo=site_logo 'global' />
    <cms:set g_slogun=slogun 'global' />
    <cms:set g_open_time=open_time 'global'/>
    <cms:set g_phone_number=phone_number 'global'/>
    <cms:set g_news_background=news_background 'global' />
</cms:pages>
<cms:template title="Hình ảnh hoạt động" clonable="1">
    <cms:editable name="img" label='Link hình ảnh' desc='Đường dẫn link tới hình ảnh của hoạt động' type="text" />
    <cms:editable name="img_work_description" label='Mô tả nội dung' desc='Mô tả nội dung' type="richtext" />
    <cms:editable name="img_header" label='Hình ảnh bìa của hoạt động' desc='Ảnh bìa' type="image" />
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
                <h1>Ảnh hoạt động của công ty</h1>
                <nav class="bread-crumb">
                    <ul class="breadcrumb clearfix">
                        <li><a href="<cms:link masterpage='index.php' />">Trang chủ</a><span class="divider"></span></li>
                        <li><li class="active">Ảnh hoạt động của công ty</li>
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
                <!--column start-->
                <div class="isotope-item advanced-technology free-facilities col-md-3 col-sm-6 ">
                    <article class="common clearfix hentry four-col-gallery">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-11.jpg" title="Medical Record Keeping">
                                <img src="images/temp-images/gallery-11-670x500.jpg" alt="gallery-1" />
                            </a>
                            <a class="overlay" href="images/temp-images/gallery-11.jpg"><i class="top"></i> <i class="bottom"></i></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-record.html">Medical Record Keeping</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Advanced Technology</a>,
                                <a href="#">Free Facilities</a>
                            </div>
                        </div>
                    </article>
                </div>
                <!--column end-->

                <!--column start-->
                <div class="isotope-item free-facilities patient-care col-md-3 col-sm-6 ">
                    <article class="common clearfix hentry four-col-gallery">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-41.jpg" title="Blood Pressure Checkup">
                                <img src="images/temp-images/gallery-41-670x500.jpg"  alt="gallery-4" />
                            </a>
                            <a class="overlay" href="images/temp-images/gallery-41.jpg"><i class="top"></i> <i class="bottom"></i></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-checkup.html">Blood Pressure Checkup</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Free Facilities</a>,
                                <a href="#">Patient Caring facilities</a>
                            </div>
                        </div>
                    </article>
                </div>
                <!--column end-->

                <!--column start-->
                <div class="isotope-item health-counseling kids-care professional-staff col-md-3 col-sm-6 ">
                    <article class="common clearfix hentry four-col-gallery">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-31.jpg" title="Kids Treatment">
                                <img src="images/temp-images/gallery-31-670x500.jpg" alt="gallery-3" />
                            </a>
                            <a class="overlay" href="images/temp-images/gallery-31.jpg"><i class="top"></i> <i class="bottom"></i></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-treatment.html">Kids Treatment</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Health Counseling</a>,
                                <a href="#">Kids Care</a>,
                                <a href="#">Professional Staff</a>
                            </div>
                        </div>
                    </article>
                </div>
                <!--column end-->

                <!--column start-->
                <div class="isotope-item health-counseling patient-care col-md-3 col-sm-6 ">
                    <article class="common clearfix hentry four-col-gallery">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-5.jpg" title="Health Counseling">
                                <img src="images/temp-images/gallery-5-670x500.jpg"  alt="gallery-5" />
                            </a>
                            <a class="overlay" href="images/temp-images/gallery-5.jpg"><i class="top"></i> <i class="bottom"></i></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-counseling.html">Health Counseling</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Health Counseling</a>,
                                <a href="#">Patient Care</a>
                            </div>
                        </div>
                    </article>
                </div>
                <!--column end-->

                <!--column start-->
                <div class="isotope-item advanced-technology pharmaceutical-care col-md-3 col-sm-6 ">
                    <article class="common clearfix hentry four-col-gallery">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-6.jpg" title="Advanced Lab">
                                <img  src="images/temp-images/gallery-6-670x500.jpg"  alt="gallery-6" />
                            </a>
                            <a class="overlay" href="images/temp-images/gallery-6.jpg"><i class="top"></i> <i class="bottom"></i></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-lab.html">Advanced Lab</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Advanced Technology</a>,
                                <a href="#">Pharmaceutical Care</a>
                            </div>
                        </div>
                    </article>
                </div>
                <!--column end-->

                <!--column start-->
                <div class="isotope-item patient-care professional-staff col-md-3 col-sm-6 ">
                    <article class="common clearfix hentry four-col-gallery">
                        <figure class="overlay-effect">
                            <a href="images/temp-images/gallery-7.jpg" title="Well Trained Staff">
                                <img src="images/temp-images/gallery-7-670x500.jpg"  alt="gallery-7" />
                            </a>
                            <a class="overlay" href="images/temp-images/gallery-7.jpg"><i class="top"></i> <i class="bottom"></i></a>
                        </figure>
                        <div class="content clearfix">
                            <h4><a href="gallery-single-staff.html">Well Trained Staff</a></h4>

                            <div class="gallery-item-types">
                                <a href="#">Patient Care</a>,
                                <a href="#">Professional treatment Staff</a>
                            </div>
                        </div>
                    </article>
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
<cms:embed '../../hinh-anh-hoat-dong.php' />
</cms:if>
<?php COUCH::invoke(); ?>