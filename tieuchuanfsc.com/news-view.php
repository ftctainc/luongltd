<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
<cms:set g_keywords=keywords 'global' />
<cms:set g_description=description 'global' />
</cms:pages>
<cms:template title="Tin tiêu điểm" clonable="1">
<cms:editable name="news_content" type="richtext" />
<cms:editable name="news_description" type="richtext" />
<cms:folder name="tieuchuanfsc" title="Tiêu chuẩn FSC" />	
<cms:folder name="tieuchuanhaccp" title="Tiêu chuẩn Haccp & GlobalGAP" />	
<cms:folder name="tieuchuankhac" title="Các tiêu chuẩn khác" />	
<cms:folder name="tintucsukien" title="Tin tức & Sự kiện" />	
</cms:template>
<cms:if k_is_page>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tin tiêu điểm</title>
	
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
						<li><a href="<cms:link masterpage="new-list.php" />">Tin tiêu điểm</a> </li>
						<li class="active"><cms:show k_page_title /> </li>
					</ul>	
				</div>
			</div><!-- .breadcrumb-box -->

			<section id="main">
				<header class="page-header">
					<div class="container">
						<h1 class="title"><cms:show k_page_title /> </h1>
					</div>	
				</header>
				<div class="container">
					<div class="row">
						<div class="content blog blog-post col-sm-9 col-md-9">
							<article class="post">
								<div class="entry-content">
									<p><cms:show news_content /> </p>
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
<cms:embed '../../js_template.html' />
<cms:embed '../../footer.php' />
<div class="clearfix"></div>

</body>
</html>
<cms:else />
<cms:embed '../../new-list.php' />
</cms:if>
<?php COUCH::invoke(); ?>