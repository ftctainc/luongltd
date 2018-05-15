<!--page footer-->
<footer id="main-footer" class="site-footer clearfix">
    <div class="container">
        <div class="row">


            <!--about widget-->
            <div class="col-md-3 col-sm-6">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">Giới thiệu công ty</h3>
                    <div class="textwidget">
                        <cms:pages masterpage="gioi-thieu-cong-ty.php">
                            <cms:show des_about_content />
                        </cms:pages>
                    </div>
                </section>
            </div>


            <!--general services-->
            <div class="col-md-3 col-sm-6  ">
                <section class="widget animated fadeInLeft ae-animation-fadeInLeft">
                    <h3 class="title">Sản phẩm</h3>
                    <ul>
                        <cms:pages masterpage="chi-tiet-san-pham.php" paginate='0'>
                            <li><a href="<cms:show k_page_link />"> <cms:show k_page_title /></a></li>
                        </cms:pages>
                    </ul>
                </section>
            </div>

            <div class="clearfix visible-sm"></div>

            <!--recent posts-->
            <div class="col-md-3 col-sm-6  ">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">Tin tức mới nhất</h3>
                    <ul id="twitter_update_list">
                        <cms:pages masterpage="chi-tiet-tin-tuc.php" limit='3' 
                            folder='tieu-chuan-fsc, tieu-chuan-haccp, tieu-chuan-khac, tin-tuc-su-kien, tin-hot, san-pham, tags'>
                            <li><a href="k_page_link"><cms:show k_page_title  /></a></li>
                        </cms:pages>
                    </ul>
                </section>
            </div>
            <!--subscription form-->
            <div class="col-md-3 col-sm-6  ">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">Đăng kí nhận tin tức mới nhất</h3>
                    <div class="textwidget">Cập nhật những tin tức mới nhất từ chúng tôi</div>
                    <div>

                        <form name="subs-form" id="subs_form" class="subs-form" method="post" action="subscription-handler.php">


                            <label for="subs-name">Họ và tên:</label>
                            <input name="name" id="subs-name" class="required" type="text" title="* Please provide your name" /><br/>

                            <label for="subs-email">Email:</label>
                            <input name="email" class="required email" id="subs-email" type="text" title="* Please provide a valid email address" /><br/>

                            <input type="hidden" name="action" value="send_message">
                            <input type="hidden" name="nonce" value="">

                            <input id="subs-form-submit" name="Submit" type="submit" value="SUBMIT" />
                            <img src="<cms:show k_site_link/>images/loader3.gif" id="subs-loader" alt="Loading...">
                            <div id="subs-error-container"></div>
                            <div id="subs-response-container"></div>

                        </form>

                    </div>

                </section>
            </div>
        </div>
        <div class="footer-bottom animated fadeInDown clearfix">
            <div class="row">
                <div class="col-sm-7">
                    <p>&copy; Copyright 2016. All Rights Reserved by Medical Press</p>
                </div>
                <!--footer social icons-->
                <div class="col-sm-5 clearfix">
                    <ul class="footer-social-nav">
                        <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a target="_blank" href="skype:skypeusername?add"><i class="fa fa-skype"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>