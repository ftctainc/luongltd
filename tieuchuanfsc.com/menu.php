<?php require_once( 'couch/cms.php' ); ?>

<cms:template title="Menu" clonable="1">
	<cms:editable name="menu_name" label='Tên menu' type="text" />
	<cms:editable name="menu_link" label='Đường dẫn ' type="text" />
</cms:template>

<?php COUCH::invoke(); ?>