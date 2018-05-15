<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
<cms:set g_keywords=keywords 'global' />
<cms:set g_description=description 'global' />
</cms:pages>
<cms:template title="Khách hàng" clonable="1">
<cms:editable name="user_description" type="richtext" />
<cms:editable name="user_logo" type="image" />
<cms:editable name="user_address" type="text" />

<cms:folder name="iso9000" title="Tiêu chuẩn ISO9000" />	
<cms:folder name="globalgap" title="Tiêu chuẩn GlobalGAP" />	
<cms:folder name="fscfm" title="Các tiêu chuẩn khác" />	
<cms:folder name="fsccoc" title="Tiêu chuẩn FSC-COC" />	
<cms:folder name="fsccw" title="Tiêu chuẩn FSC-CW" />	
<cms:folder name="orther" title="Các tiêu chuẩn khác" />	

<cms:editable name="user_text_color" label="Text color" type="text" >Red</cms:editable>
</cms:template>

<cms:if k_is_page>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Khách hàng</title>
	
	<meta name="keywords" content="<cms:show g_keywords />">
	<meta name="description" content="<cms:show g_description />">
	<meta name="copyright" content="Luong LTD Online">
	<meta name="area" content="News">
	<meta name="page-topic" content=" CÔNG TY TNHH TƯ VẤN QUẢN LÝ LƯƠNG">

	<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<cms:embed '../../css_template.html' />
</head>
<body class="fixed-header" oncopy="return false" oncut="return false" onpaste="return false">
	<div class="page-box">
		<div class="page-box-content">
			<cms:embed '../../header.php' />

			<div class="breadcrumb-box">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="<cms:link masterpage="index.php" />">Trang chủ</a> </li>
						<li class="active">Khách hàng</li>
					</ul>	
				</div>
			</div><!-- .breadcrumb-box -->

			<section id="main">
				<header class="page-header">
					<div class="container">
						<h1 class="title"><cms:show activities_description /></h1>
					</div>	
				</header>
				<div class="container">
					<div class="row">
						<div class="content blog blog-post col-sm-9 col-md-9">
							<article class="post">
								<div class="entry-content">
									<p><cms:show activities_content /> </p>
								</div>
							</article><!-- .post -->


						</div><!-- .content -->

						<div id="sidebar" class="sidebar col-sm-3 col-md-3">
							<aside class="widget list">
								<header>
									<h3 class="title">Tin tiêu điểm</h3>
								</header>
								<ul>
									<cms:folders masterpage="news-view.php" >
									<li><a href="<cms:show k_folder_link />"><cms:show k_folder_title /></a></li>
								</cms:folders>
							</ul>
						</aside><!-- .list -->

						<aside class="widget list">
							<header>
								<h3 class="title">Ngày đăng bài</h3>
							</header>
							<ul>
								<cms:archives masterpage="news-view.php">
								<li><a href="<cms:show k_archive_link />"><cms:date k_archive_date format="d/M/y" /></a></li>
							</cms:archives>
						</ul>
					</aside><!-- .list -->

				</div><!-- .sidebar -->
			</div>
		</div><!-- .container -->
	</section><!-- #main -->

</div><!-- .page-box-content -->
</div><!-- .page-box -->
<cms:embed '../../footer.php' />
<div class="clearfix"></div>
<cms:embed '../../js_template.html' />

</body>
</html>
<cms:else />
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Khách hàng</title>
	<meta name="keywords" content="HTML5 Template">
	<meta name="description" content="Progressive — Responsive Multipurpose HTML Template">
	<meta name="author" content="itembridge.com">
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
						<li class="active">Khách hàng</li>
					</ul>	
				</div>
			</div><!-- .breadcrumb-box -->

			<section id="main">
				
				<header class="page-header">
					<div class="container">
						<h1 class="title">Khách hàng</h1>
					</div>	
				</header>
<!-- <cms:if k_folder_pos='0' >
									<div class="panel panel-default active">
								<cms:else />
									<div class="panel panel-default">
								</cms:if> -->
				<div class="container">
							<div class="panel-group one-open" id="accordion" >
						<cms:folders masterpage="users.php" folder=k_folder_name 
						start_on=k_archive-date stop_before=k_next_archive_date >
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse<cms:show k_folder_id />">
												<cms:show k_folder_title /> 
											</a>
										</div>
									</div>
							<!-- </div> -->
									<div id="collapse<cms:show k_folder_id />" class="panel-collapse collapse">
										<div class="panel-body">
											<cms:pages masterpage="users.php" folder=k_folder_name>
												<img class="replace-2x col-sm-1 col-md-1" src="<cms:show user_logo/>"  class="alignleft" width="100" height="62" alt="">
												<p class="col-sm-11 col-md-11">
													
													<cms:show k_page_title />
													<br>
													<cms:show user_address />
												</p>
												<div class="clearfix"></div>
												<br>
											</cms:pages>
										</div>
									</div>
								</div>
						</cms:folders>
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
</cms:if>
<?php COUCH::invoke(); ?>