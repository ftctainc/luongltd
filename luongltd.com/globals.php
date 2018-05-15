<?php require_once( 'couch/cms.php' ); ?>

<cms:template title="Global Settings" executable='0'>
<cms:editable name='title_page' label='Title của website' desc='Title của website' type='text' />
<cms:editable name='site_logo' label='Logo trang web' desc='Logo của công ty' type='image' />
<cms:editable name='slogun' label='Slogun' desc='Slogun của công ty' type='text' />
<cms:editable name='open_time' label='Open time' desc='Giờ mở cửa' type='text' />
<cms:editable name='phone_number' label='Số điện thoại liên hệ' desc="Số điện thoại liên hệ" type='text' />
<cms:editable name='slider_image1' label='Hình ảnh trên slider' desc='Hình ảnh trên slider (hình 1)' type='image' />
<cms:editable name='slider_image2' label='Hình ảnh trên slider' desc='Hình ảnh trên slider (hình 2)' type='image' />
<cms:editable name='news_background' label='Hình ảnh banner trang tin tức' desc='Hình ảnh banner trang tin tức' type='image' />

<cms:editable name='luongltd_link' label='link toi trang luongltd' type='text' />
<cms:editable name='fax_number' label='your fax number' type='text' />
<cms:editable name='address' label='your company address' type='text' />
<cms:editable name='email_address' label='your email address' type='text' />
<cms:editable name='top100_title' label='Your page top 100 title' type='text' ></cms:editable>
<cms:editable name='top100_link' label='Your page top 100 link' type='text' ></cms:editable>
<cms:editable name='top100_description' label='Your page top 100 description' type='richtext' ></cms:editable>
<cms:editable name='news_logo' label='logo tin tuc trang chu' desc='logo dung cho trang chu' type='image' />
<cms:editable name='keywords' label='keywords' desc='keywords dùng cho các trang trong trang web' type='text' />
<cms:editable name='description' label='description' desc='keywords dùng cho các trang trong trang web' type='text' />
</cms:template>

<?php COUCH::invoke(); ?>