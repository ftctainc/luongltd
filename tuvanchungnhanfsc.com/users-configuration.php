<?php require_once( 'couch/cms.php' ); ?>

<cms:template title="Danh sách chúc mừng khách hàng" clonable="1">
<cms:editable name="user_configuration_description" type="richtext" />
<cms:editable name="user_configuration_text_color" label="Text color" type="text" >Red</cms:editable>
</cms:template>
<?php COUCH::invoke(); ?>