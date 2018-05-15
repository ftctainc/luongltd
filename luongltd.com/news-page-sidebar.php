<!--sidebar-->
<div class="col-lg-3 col-md-4">
    <aside class="sidebar clearfix">
        <cms:if k_is_page="0" >
            <section  class="widget tabs-widget">
                <!--tabs widget sidebar-->
                <div class="tabs clearfix">
                    <div class = "tab-head active">
                        <h6>Tin hot</h6>
                    </div>
                    <div class = "tab-head ">
                        <h6>Ngày đăng</h6>
                    </div>
                    <div class = "tab-head ">
                        <h6>Sản phẩm</h6>
                    </div>

                    <!-- hot news -->
                    <div class="tabs-content clearfix">
                        <cms:pages masterpage="chi-tiet-tin-tuc.php" paginate='0' limit='5' folder='tin-hot'>
                            <div class="tab-post-listing clearfix">
                                <figure>
                                    <a href="<cms:show k_page_link />">
                                        <img src="<cms:show img_header />" class="tabs-thumb wp-post-image" alt="<cms:show k_page_title />" />
                                    </a>
                                </figure>
                                <div class="post-content">
                                    <h6><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h6>
                                    <span><cms:date k_archive_date format="d/m/y" /></span>
                                </div>
                            </div>
                        </cms:pages>
                    </div>

                    <!-- day news -->
                    <div class="tabs-content clearfix">
                        <cms:pages masterpage='chi-tiet-tin-tuc.php' paginate='0'>
                            <div class="tab-post-listing clearfix">
                                <figure>
                                    <a href="<cms:show k_archive_link />">
                                        <img src="<cms:show img_header />" class="tabs-thumb wp-post-image" alt="<cms:show k_page_title />" />
                                    </a>
                                </figure>
                                <div class="post-content">
                                    <h6><a href="<cms:show k_archive_link />"><cms:show k_page_title /></a></h6>
                                    <span><cms:date k_archive_date format="d/m/y" /></span>
                                </div>
                            </div>
                        </cms:pages>
                    </div>

                    <!-- products -->
                    <div class="tabs-content clearfix">
                        <cms:pages masterpage="chi-tiet-tin-tuc.php" paginate='0' limit='5' folder='san-pham'>
                            <div class="tab-post-listing clearfix">
                                <figure>
                                    <a href="<cms:show k_page_link />">
                                        <img src="<cms:show img_header />" class="tabs-thumb wp-post-image" alt="<cms:show k_page_title />" />
                                    </a>
                                </figure>
                                <div class="post-content">
                                    <h6><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h6>
                                    <span><cms:date k_archive_date format="d/m/y" /></span>
                                </div>
                            </div>
                        </cms:pages>
                    </div>
                </div>
            </section>
        </cms:if>

        <!--categories-->
        <section class="widget widget_categories">
            <h3 class="title">Tin tiêu điểm</h3>
            
            <ul>
                <cms:folders masterpage="chi-tiet-tin-tuc.php" exclude="san-pham, tin-hot, tags">
                    <li><a href="<cms:show k_folder_link />"><cms:show k_folder_title /></a></li>
                </cms:folders>
            </ul>
        </section>

        <!--tags sidebar-->
        <section class="widget widget_tag_cloud">
            <h3 class="title">Tags</h3>
            <div class="tagcloud">
            <cms:pages masterpage="chi-tiet-tin-tuc.php" folder='tags'>
                <a href="<cms:show k_page_link />"><cms:show k_page_title /></a>
            </cms:pages>
                
            </div>
        </section>
    </aside>
</div>