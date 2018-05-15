<cms:pages masterpage="globals.php" >
<cms:set g_site_logo=site_logo 'global' />
<cms:set g_luongltd_link=luongltd_link 'global' />
<cms:set g_phone_number=phone_number 'global' />
<cms:set g_slogun=slogun 'global' />
</cms:pages>
<header class="header header-two">
	<div class="header-wrapper" style="height: 0px;">
		<div class="container" style="height: 120px;">
			<div class="row">
				<div class="col-xs-6 col-md-2 col-lg-3 logo-box">
					<div clPass="logo">
						<a href="<cms:show g_luongltd_link />">
						<img src="<cms:show g_site_logo />" class="logo-img" style="height: 90px;" alt="">
					</a>
				</div>
			</div><!-- .logo-box -->

			<div class="col-xs-6 col-md-10 col-lg-9 right-box">
				<div class="right-box-wrapper">
					<div class="header-icons">
						<div class="phone-header hidden-600">
							<a href="#">
								<svg x="0" y="0" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
									<path d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
									c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
									M11.001,12H5V2h6V12z"></path>
									<image src="img/png-icons/phone-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
									</svg>
								</a>
							</div><!-- .phone-header -->
						</div><!-- .header-icons -->

						<div class="primary">
							<div class="navbar navbar-default" role="navigation">
								<button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
									<span class="text">Menu</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<nav class="collapse collapsing navbar-collapse">
									<ul class="nav navbar-nav navbar-center">
										<cms:pages masterpage="menu.php" orderby='publish_date' order='asc'>
										<li class="parent current">
											<a href="<cms:show menu_link />" >
											<cms:show menu_name />

										</a>
									</li>
								</cms:pages>

							</ul>
						</nav>
					</div>
				</div><!-- .primary -->
			</div>
		</div>

		<div class="phone-active col-sm-9 col-md-9">
			<a href="#" class="close"><span>Đóng</span>×</a>
			<span class="title">Số điện thoại : </span> <strong><cms:show g_phone_number /></strong>
		</div>
	</div><!-- .header-wrapper -->
	<div class="col-sm-3 col-md-3">
		</div>
	<div class="col-sm-9 col-md-9" style="margin-top: -20px;">
			<marquee><cms:show g_slogun /></marquee>
		</div>
				</header><!-- .header -->