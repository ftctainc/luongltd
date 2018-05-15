<div class="visible-lg">
    <div class="banner-slick" style="width: 98%">
        <cms:pages masterpage="users-configuration.php">
            <!-- <div style="border-width: 1px; border-style: solid; border-color: #7f7f7f; border-left: 0px;"> -->
                <a href="<cms:link masterpage='users.php' />" class="banner" style="text-align: center;" >
                    <h2 class="title" style="color: <cms:show user_configuration_text_color/> "><cms:show k_page_title /></h2>
                    <div class="description" style="color: <cms:show user_configuration_text_color/> "><cms:show user_configuration_description /></div>
                </a>
            <!-- </div> -->
        </cms:pages>
    </div>
</div>