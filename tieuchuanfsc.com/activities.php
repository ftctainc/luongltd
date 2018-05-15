<?php require_once( 'couch/cms.php' ); ?>
<cms:pages masterpage="globals.php" >
<cms:set g_top100_title=top100_title 'global' />
<cms:set g_top100_link=top100_link 'global' />
<cms:set g_top100_description=top100_description 'global' />
<cms:set g_news_logo=news_logo 'global' />
<cms:set g_keywords=keywords 'global' />
<cms:set g_description=description 'global' />
</cms:pages>

<cms:template title="Danh sách lĩnh vực hoạt động" clonable="1">
	<cms:editable name="activities_image" type="image" />
	<cms:editable name="activities_description" type="richtext" />
	<cms:editable name="activities_content" type="richtext" />
</cms:template>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lĩnh vực hoạt động</title>
	
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
						<li class="active">Lĩnh vực hoạt động</li>
					</ul>	
				</div>
			</div><!-- .breadcrumb-box -->

<cms:if k_is_page>

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

<cms:else />
<section id="main">
				<!-- <header class="page-header">
					<div class="container">
						<h1 class="title">Our Blog</h1>
					</div>	
				</header> -->
				<div class="container">
					<div class="row">
						<div class="content blog col-sm-9 col-md-9">
							
							<cms:pages masterpage="activities.php" paginate='1' limit='10' folder=k_folder_name 
							start_on=k_archive-date stop_before=k_next_archive_date>
							<article class="post">
								<h2 class="entry-title">
									<a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h2>

									<div class="entry-content">
										<!-- <cms:show activities_description /> -->
										<!-- <cms:excerptHTML count='75' ignore='img'><cms:show activities_content /> </cms:excerptHTML> -->
										<cms:excerptHTML count='75' ignore='img'><cms:show activities_content /> </cms:excerptHTML>
										<a href="<cms:show k_page_link />" style="float: right;color: #F6BC1C;">Chi tiết >></a>
										
									</div>
								</article><!-- .post -->

								<div class="pagination-box" style="float: right;">
									<ul class="pagination">
										<cms:if k_paginated_bottom >
										<cms:if k_paginate_link_prev>
										<li>
											<a href="<cms:show k_paginate_link_prev />">
											<cms:else />
											<li class="disabled">
												<a href="<cms:show k_paginate_link_prev />">
											</cms:if>
											<i class="fa fa-angle-left"></i>
										</a>
									</li>
									<cms:if k_paginate_link_next>
									<li>
										<cms:else />
										<li class="disabled">
										</cms:if>
										<a href="<cms:show k_paginate_link_next />">
										<i class="fa fa-angle-right"></i>
									</a>
								</li>
							</ul>
							<i class="pagination-text">Hiển thị từ bài <cms:show k_record_from /> đến bài <cms:show k_record_to /> (của <cms:show k_total_records /> bài)</i>
						</cms:if>
					</div><!-- .pagination-box -->
				</cms:pages>


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
</cms:if>

</div><!-- .page-box-content -->
</div><!-- .page-box -->

<cms:embed '../../js_template.html' />
<cms:embed '../../footer.php' />
<div class="clearfix"></div>

</body>
</html>
<?php COUCH::invoke(); ?>