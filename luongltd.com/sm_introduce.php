<?php require_once( 'couch/cms.php' ); ?>

<cms:template title="sub menu introduce" clonable="1">
	<cms:editable name="submenu_name" label='Tên menu con' type="text" />
	<cms:editable name="submenu_link" label='Đường dẫn' type="text" />
</cms:template>

<?php COUCH::invoke(); ?>