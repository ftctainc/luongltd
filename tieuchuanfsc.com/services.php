<?php require_once( 'couch/cms.php' ); ?>

<cms:template title="Dịch vụ" clonable="1">
	<cms:editable name="services_image" type="image" />
	<cms:editable name="services_description" type="richtext" />
</cms:template>

<?php COUCH::invoke(); ?>