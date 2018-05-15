<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
<cms:set g_top100_title=top100_title 'global' />
<cms:set g_top100_link=top100_link 'global' />
<cms:set g_top100_description=top100_description 'global' />
<cms:set g_address=address 'global' />
<cms:set g_phone_number=phone_number 'global' />
<cms:set g_email_address=email_address 'global' />
<cms:set g_fax_number=fax_number 'global' />
<cms:set g_keywords=keywords 'global' />
<cms:set g_description=description 'global' />
</cms:pages>
<cms:template title="Liên hệ" />

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liên hệ</title>
	
	<meta name="keywords" content="<cms:show g_keywords />">
	<meta name="description" content="<cms:show g_description />">
	<meta name="copyright" content="Luong LTD Online">
	<meta name="area" content="News">
	<meta name="page-topic" content=" CÔNG TY TNHH TƯ VẤN QUẢN LÝ LƯƠNG">

	<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<cms:embed '../../css_template.html' />
</head>
<body class="fixed-header" >
	<div class="page-box">
		<div class="page-box-content">
			<cms:embed '../../header.php' />

			<div class="breadcrumb-box">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="<cms:link masterpage="index.php" />">Trang chủ</a> </li>
						<li class="active">Liên hệ</li>
					</ul>	
				</div>
			</div><!-- .breadcrumb-box -->

			<section id="main">
				<header class="page-header">
					<div class="container">
						<h1 class="title">Liên hệ với chúng tôi</h1>
					</div>	
				</header>
				<div class="container">
					<div class="row">
						<div class="content col-sm-12 col-md-12">
							<div class="row">
								<div class="col-sm-6 col-md-6 contact-info">
									<address>
										<div class="title">Địa chỉ</div>
										<cms:show g_address />
									</address>
									<div class="row">
										<address class="col-sm-6 col-md-6">
											<div class="title">Số điện thoại</div>
											<div><cms:show g_phone_number/></div>
											<div class="title">Fax</div>
											<div><cms:show g_fax_number/></div>
										</address>
										<address class="col-sm-6 col-md-6">
											<div class="title">Email</div>
											<div><cms:show g_email_address /></div>
										</address>
									</div>
									<hr>
								</div>
								<div class="map-box col-sm-6 col-md-6 bottom-padding">
									<div
									style="height: 276px;"
									class="map-canvas"
									data-zoom="15"
									data-lat="10.7821233"
									data-lng="106.6843974"
									data-title="CÔNG TY TNHH TƯ VẤN QUẢN LÝ LƯƠNG"
									data-content="Điện thoại: +842839322883<br>
									Fax: +842839322391<br>
									Email: luongcompany@gmail.com"></div>
								</div>
								
							</div>
						</div>
					</div>
				</div><!-- .container -->
			</section><!-- #main -->

		</div><!-- .page-box-content -->
	</div><!-- .page-box -->
	<cms:embed '../../js_template.html' />
	<cms:embed '../../footer.php' />
	<div class="clearfix"></div>
</body>
</html>
<?php COUCH::invoke(); ?>
