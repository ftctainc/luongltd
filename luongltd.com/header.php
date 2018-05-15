<cms:pages masterpage="globals.php" >
<cms:set g_site_logo=site_logo 'global' />
<cms:set g_title_page=title_page 'global' />
</cms:pages>
<div class="header-top clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-5 ">
                <p><cms:show g_slogun /></p>
            </div>
            <!--opening hours-->
            <div class="col-md-7 text-right">
                <p>
                    Giờ mở cưả : <span><cms:show g_open_time /> </span>
                    <br class="visible-xs">Số điện thoại : <span><cms:show g_phone_number /></span>
                </p>
            </div>

        </div>
    </div>
</div>


<header id="header">
    <div class="container">

        <!-- Website Logo -->
        <div class="logo clearfix">
            <a href="index.html">
                <img src="<cms:show g_site_logo />" alt="<cms:show g_title_page/>">
            </a>
        </div>

        <!-- Main Navigation -->
        <nav class="main-menu">
            <ul class="header-nav clearfix" id="menu-main-menu">
                <cms:menu masterpage="menu.php" 
                depth='3' orderby='publish_date' order='asc'
                 selected_class='current-menu-item'
                />
            </ul>
        </nav>
        
        <div id="responsive-menu-container"></div>
    </div>
</header>