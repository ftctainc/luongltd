<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
<cms:set g_top100_title=top100_title 'global' />
<cms:set g_top100_link=top100_link 'global' />
<cms:set g_top100_description=top100_description 'global' />
<cms:set g_news_logo=news_logo 'global' />
<cms:set g_keywords=keywords 'global' />
<cms:set g_description=description 'global' />
</cms:pages>
<cms:template title="Trang chủ" />
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><cms:editable name='title' label='Your page title' type='text' ></cms:editable></title>
	<meta name="keywords" content="<cms:show g_keywords />">
	<meta name="description" content="<cms:show g_description />">
	<meta name="copyright" content="Luong LTD Online">
	<meta name="area" content="News">
	<meta name="page-topic" content=" CÔNG TY TNHH TƯ VẤN QUẢN LÝ LƯƠNG">
	<!-- <meta name="author" content="itembridge.com"> -->
	<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<cms:embed '../../css_template.html' />

</head>
<body id="boxed-bg" class="boxed fixed-header">
	<div class="page-box">
		<div class="page-box-content">

			<cms:embed '../../header.php' />
			<cms:embed '../../slider.php' />
			<cms:embed '../../banner.php' />
			<div class="clearfix"></div>

			<section id="main">
				<article class="content">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-6 promo-partners bottom-padding">
								<div class="title-box">
									<h2 class="title">Dịch vụ</h2>
								</div>

								<cms:pages masterpage="services.php" style="margin-top: 10px">
								<div class="col-sm-12 col-md-12" >
									<div class="col-sm-4 col-md-4">
										<div class="caption">
											<!-- <img class="replace-2x" src="http://placehold.it/270x150" class="img-rounded" alt="" title=""> -->
											<img class="replace-2x" src="<cms:show services_image />" class="img-rounded" alt="" title="">
											<cms:show k_page_title />
										</div>
									</div>	
									<div class="text-small col-sm-8 col-md-8">
										<cms:show services_description />
									</div>
								</div>
							</cms:pages>
						</div><!-- .promo-partners -->

						<div class="col-sm-12 col-md-6">
							<div class="title-box">
								<a href="<cms:link masterpage='news-view.php' />" class="btn btn-default">Đọc thêm<span class="glyphicon glyphicon-arrow-right"></span></a>
								<h2 class="title">Tin tức</h2>
							</div>
							<ul class="latest-posts">
								<cms:pages masterpage="news-view.php" limit='3'>
								<li>
									<!-- content/img/product-1.jpg -->
									<img class="replace-2x image img-circle" src="<cms:show g_news_logo />" alt="" title="" width="84" height="84" data-appear-animation="rotateIn">
									<div class="meta">
										<a href="<cms:show k_page_link />" style="font-size: 18px;font-weight: bold;"><cms:show k_page_title /></a>
										<br>
										<span class="time" ><cms:date k_archive_date /></span>
									</div>
									<div>
										<a href="<cms:show k_page_link />">
										<cms:excerptHTML count='50' ignore='img'><cms:show news_content /> </cms:excerptHTML>
									</a>
								</div>
							</li>
						</cms:pages>
					</ul>
				</div>
			</div>
			<div class="title-box text-center col-sm-12 col-md-12">
				<h1 class="title">Các lĩnh vực hoạt động</h1>
			</div>

			<cms:pages masterpage="activities.php" orderby='publish_date' order='asc'>
			<div class="big-services-box col-sm-4 col-md-4">
				<a href="<cms:show k_page_link/>">
					<div class="big-icon bg" data-appear-animation="fadeInUp"><img style="max-height: 120px;max-width: 269px; margin-left: -87px"
						src="<cms:show activities_image />" /></div>
						<h4 class="title"><cms:show k_page_title /></h4>
					</a>
				</div><!-- .services-box-two -->
			</cms:pages>

			<div class="bottom-padding col-sm-12 col-md-12">


				<!-- <div class="title-box"> -->
					<div class="title-box text-center col-sm-12 col-md-12">
						<h1 class="title"><cms:show g_top100_title /></h1>
					</div>
					<div class="col-sm-6 col-md-6">

						<div class="video-box youtube">
							<iframe frameborder="0" allowfullscreen="" src="<cms:show g_top100_link />"></iframe>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<cms:show g_top100_description />
					</div>
				</div>

				<div class="row services">
					<div class="col-sm-4 col-md-4 text-small features-block">
						<a class="header-box" href="#">
							<div class="icon-box">
								<i class="fa fa-bullhorn"></i>
							</div>
							<h6><cms:editable name='policy_company' label='title Chinh sach cua cong ty' type='text' ></cms:editable></h6>
						</a>
						<div><cms:editable name='policy_company_detail' label='Chinh sach cua cong ty noi dung' type='richtext' ></cms:editable></div>
					</div><!-- .features-block -->

					<div class="col-sm-4 col-md-4 text-small features-block">
						<a class="header-box" href="#">
							<div class="icon-box">
								<i class="fa fa-thumbs-o-up"></i>
							</div>
							<h6><cms:editable name='professional_competence' label='title Nang luc chuyen mon' type='text' ></cms:editable></h6>
						</a>
						<div><cms:editable name='professional_competence_detail' label='Nang luc chuyen mon noi dung' type='richtext' ></cms:editable></div>
					</div><!-- .features-block -->

					<div class="col-sm-4 col-md-4 text-small features-block">
						<a class="header-box" href="#">
							<div class="icon-box">
								<i class="fa fa-user"></i>
							</div>
							<h6><cms:editable name='customer_title' label='title khach hang' type='text' ></cms:editable></h6>
						</a>
						<div><cms:editable name='customer_detail' label='khach hang noi dung' type='richtext' ></cms:editable></div>
					</div><!-- .features-block -->
					<!-- .features-block -->
				</div>


			</div>
		</article>
	</section><!-- #main -->

</div><!-- .page-box-content -->
</div><!-- .page-box -->
<cms:embed '../../js_template.html' />
<cms:embed '../../footer.php' />
<div class="clearfix"></div>

</body>
</html>
<?php COUCH::invoke(); ?>