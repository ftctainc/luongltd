<?php require_once( 'couch/cms.php' ); ?>

<cms:template title="Slider" clonable='1'>
    <cms:editable name="slider_img" label='Hình slide' type="image" />
	<cms:editable name="description" label='Chú thích' type="text" />
	<cms:editable name="color_title" label='Màu tiêu đề' type="text" />
	<cms:editable name="color_description" label='Màu chú thích' type="text" />
	<cms:editable name="link_page" label='Đường dẫn đến trang' type="text" />

	<cms:editable name="color" type="message">
        <script type="text/javascript" src="<cms:show k_site_link/>couch/addons/jscolor/jscolor.js"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                new jscolor.color(document.getElementById('f_' + 'color_title'), {});
                new jscolor.color(document.getElementById('f_' + 'color_description'), {});
            });
        </script>
    </cms:editable>
</cms:template>

<?php COUCH::invoke(); ?>