<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
<cms:set g_keywords=keywords 'global' />
<cms:set g_description=description 'global' />
</cms:pages>
<cms:template title="Tuyển dụng">

</cms:template>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tuyển dụng</title>
	
	<meta name="keywords" content="<cms:show g_keywords />">
	<meta name="description" content="<cms:show g_description />">
	<meta name="copyright" content="Luong LTD Online">
	<meta name="area" content="News">
	<meta name="page-topic" content=" CÔNG TY TNHH TƯ VẤN QUẢN LÝ LƯƠNG">

	<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<cms:embed '../../css_template.html' />
</head>
<body class="fixed-header">
	<div class="page-box">
		<div class="page-box-content">
			<cms:embed '../../header.php' />

			<div class="breadcrumb-box">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="<cms:link masterpage="index.php" />">Trang chủ</a> </li>
						<li class="active">Tuyển dụng</li>
					</ul>	
				</div>
			</div><!-- .breadcrumb-box -->

			<section id="main">
				<header class="page-header">
					<div class="container">
						<h1 class="title">Thông tin tuyển dụng</h1>
					</div>	
				</header>
				<div class="container">
					<div class="row">
						<cms:editable name="tuyendung_description" label="Nội dung tuyển dụng" type="richtext" />
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