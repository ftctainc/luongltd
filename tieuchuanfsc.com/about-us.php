<?php require_once( 'couch/cms.php' ); ?>
<cms:template title="Giới thiệu" />
<cms:pages masterpage="globals.php" >
<cms:set g_top100_title=top100_title 'global' />
<cms:set g_top100_link=top100_link 'global' />
<cms:set g_top100_description=top100_description 'global' />
<cms:set g_keywords=keywords 'global' />
<cms:set g_description=description 'global' />
</cms:pages>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Giới thiệu</title>
	
	<meta name="keywords" content="<cms:show g_keywords />">
	<meta name="description" content="<cms:show g_description />">
	<meta name="copyright" content="Luong LTD Online">
	<meta name="area" content="News">
	<meta name="page-topic" content=" CÔNG TY TNHH TƯ VẤN QUẢN LÝ LƯƠNG">

	<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<cms:embed '../../css_template.html' />
</head>
<body  class="fixed-header" oncopy="return false" oncut="return false" onpaste="return false">
	<div class="page-box">
		<div class="page-box-content">

			<cms:embed '../../header.php' />
			<div class="breadcrumb-box">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="<cms:link masterpage="index.php" />">Trang chủ</a> </li>
						<li class="active">Giới thiệu</li>
					</ul>	
				</div>
			</div><!-- .breadcrumb-box -->

			<section id="main">
				<div class="container">
					<div class="row">
						<div class="bottom-padding col-sm-12 col-md-12">
							<div class="title-box">
								<h2 class="title">GIỚI THIỆU CÔNG TY</h2>
							</div>
							<cms:editable name="about_company_info" title="Gioi thieu cong ty content" type="richtext" />
						</div>

						<div class="clearfix"></div>

						<div class="content col-sm-12 col-md-12">
							<div class="row">
								<div class="col-sm-12 col-md-6 col-lg-4 bottom-padding">
									<blockquote class="no-margin">
										<cms:show g_top100_description />
									</blockquote>
								</div>

								<div class="col-sm-12 col-md-6 col-lg-8 bottom-padding">
									<div class="video-box vimeo">
										<iframe src="<cms:show g_top100_link />" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
									</div>
								</div>
							</div>

							<div class="clearfix"></div>

							<div class="bottom-padding col-sm-12 col-md-12">
								<div class="title-box">
									<h2 class="title">CHÍNH SÁCH CỦA CÔNG TY </h2>
								</div>
								<cms:editable name="about_company_policy" title="Chinh sach cua cong ty content" type="richtext" />
							</div>

							<div class="clearfix"></div>

							<div class="bottom-padding col-sm-12 col-md-12">
								<div class="title-box">
									<h2 class="title">TOÀN THỂ NHÂN VIÊN CTY TNHH TƯ VẤN QUẢN LÝ LƯƠNG CAM KẾT</h2>
								</div>
								<cms:editable name="about_company_commitment" title="Cam ket content" type="richtext" />
							</div>

							<div class="clearfix"></div>

							<div class="bottom-padding col-sm-12 col-md-12">
								<div class="title-box">
									<h2 class="title">LĨNH VỰC HOẠT ĐỘNG</h2>
								</div>
								<cms:editable name="about_company_services" title="Linh vuc hoat dong content" type="richtext" />
							</div>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				
			</section><!-- #main -->

		</div><!-- .page-box-content -->
	</div><!-- .page-box -->
	<cms:embed '../../js_template.html' />
	<cms:embed '../../footer.php' />
	<div class="clearfix"></div>
</body>
</html>
<?php COUCH::invoke(); ?>
