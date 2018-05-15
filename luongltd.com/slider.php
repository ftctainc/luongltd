
<!--slider-->
<div class="home-slider clearfix">
    <div class="flexslider">
        <ul class="slides">

            <cms:pages masterpage="slider-generate.php" orderby='publish_date' order='asc'>
                <li class="flex-active-slide">
                    <img src="<cms:show slider_img />" alt="Medical Services That You Can Trust" draggable="false">
                    <div class="content-wrapper clearfix">
                        <div class="container">
                            <div class="slide-content clearfix">
                                <h1 style="color: <cms:show color_title />"><cms:show k_page_title  /></h1>
                                <p style="color: <cms:show color_description />"><cms:show description /></p>
                                <a class="slider-button" href="<cms:show link_page />">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                </li>
            </cms:pages>

        </ul>
        <!--directional nav-->
        <ul class="flex-direction-nav">
            <li><a class="flex-prev" href="#">Previous</a></li>
            <li><a class="flex-next" href="#">Next</a></li></ul>
    </div>
    <!--appointment form-->
    <div class="appointment clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6  ">
                    <span class="btn make-appoint"> Liên hệ tư vấn <i class="fa fa-caret-down"></i></span>
                </div>
            </div>
            <div class="clearfix">
                <div class="appointment-form clearfix animated">
                    <form class="clearfix" id="appointment_form_one" action="appointment_form_handler.php" method="post" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6 common">
                                <input type="text" name="name" id="app-name" class="required" placeholder="Họ và tên" />
                            </div>
                            <div class="col-md-3 col-sm-6 common">
                                <input type="text" name="number" id="app-number" class="required number" placeholder="Số điện thoại"/>
                            </div>
                            <div class="col-md-3 col-sm-6 common">
                                <input type="email" name="email" id="app-email" class="required email" placeholder="Email Address"/>
                            </div>
                            <div class="col-md-3 col-sm-6 common">
                                <input type="text" name="date" id="datepicker" class="required" placeholder="Ngày hẹn tư vấn"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-11 common">
                                <input type="text" name="message" id="app-message" class="required" placeholder="Nội dung" />
                            </div>
                            <div class="col-sm-1 common">
                                <input type="submit" name="Submit" class="btn form-submit-btn" value="SEND"/>
                            </div>
                        </div>

                        <img src="images/white-loader.gif" class="ajax-loader" id="appointment-loader" alt="Vui lòng đợi trong giây lát...">
                        <div id="response-container"></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--appointment form end-->
</div>
