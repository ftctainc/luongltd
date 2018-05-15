<div class="banner-set load">
				<div class="container">
					<div class="banners">
						<cms:pages masterpage="users-configuration.php">
						<!-- <a href="<cms:show k_page_link />" class="banner"> -->
						<a href="<cms:link masterpage='users.php' />" class="banner">
							<h2 class="title" style="color: <cms:show user_configuration_text_color/> "><cms:show k_page_title /></h2>
							<div class="description" style="color: <cms:show user_configuration_text_color/> "><cms:show user_configuration_description /></div>
						</a>
					</cms:pages>
				</div><!-- .banners -->
				<div class="clearfix"></div>
			</div>
			<div class="nav-box">
				<div class="container">
					<a class="prev" href="#"><span class="glyphicon glyphicon-arrow-left"></span></a>
					<div class="pagination switches"></div>
					<a class="next" href="#"><span class="glyphicon glyphicon-arrow-right"></span></a>	
				</div>
			</div>
		</div><!-- .banner-set -->