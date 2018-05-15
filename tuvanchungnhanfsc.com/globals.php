<?php require_once( 'couch/cms.php' ); ?>

<cms:template title="Global Settings" executable='0'>
<cms:editable name='site_logo' label='logo trang web' desc='logo dùng cho các trang trong trang web' type='image' />
<cms:editable name='luongltd_link' label='link toi trang luongltd' type='text' />
<cms:editable name='phone_number' label='your phone number' type='text' />
<cms:editable name='fax_number' label='your fax number' type='text' />
<cms:editable name='address' label='your company address' type='text' />
<cms:editable name='email_address' label='your email address' type='text' />
<cms:editable name='top100_title' label='Your page top 100 title' type='text' ></cms:editable>
<cms:editable name='top100_link' label='Your page top 100 link' type='text' ></cms:editable>
<cms:editable name='top100_description' label='Your page top 100 description' type='richtext' ></cms:editable>
<cms:editable name='news_logo' label='logo tin tuc trang chu' desc='logo dung cho trang chu' type='image' />
<cms:editable name='slogun' label='slogun' desc='slogun dùng cho các trang trong trang web' type='text' />
<cms:editable name='keywords' label='keywords' desc='keywords dùng cho các trang trong trang web' type='text' />
<cms:editable name='description' label='description' desc='keywords dùng cho các trang trong trang web' type='text' />
</cms:template>

<?php COUCH::invoke(); ?>