<cms:pages masterpage="globals.php" >
<cms:set g_luongltd_link=luongltd_link 'global' />
<cms:set g_phone_number=phone_number 'global' />
<cms:set g_fax_number=fax_number 'global' />
<cms:set g_address=address 'global' />
<cms:set g_email_address=email_address 'global' />

</cms:pages>
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row sidebar">
				<aside class="col-xs-12 col-sm-6 col-md-3 widget social">
					<div class="title-block">
						<h3 class="title">Theo dõi chúng tôi </h3>
					</div>
					<div class="social-list">
						<a class="icon rounded icon-facebook" href="https://www.facebook.com/Luong-ltd-C%C3%94NG-TY-TNHH-T%C6%AF-V%E1%BA%A4N-QU%E1%BA%A2N-L%C3%9D-L%C6%AF%C6%A0NG-1898132090502740/"><i class="fa fa-facebook"></i></a>
						<a class="icon rounded icon-google" href="https://plus.google.com/u/1/communities/108151313164775497380"><i class="fa fa-google"></i></a>
					</div>
					<div class="clearfix"></div>
				</aside>

				<aside class="col-xs-12 col-sm-6 col-md-3 widget newsletter">
					<div class="title-block">
						<h3 class="title">Đăng kí bản tin mới</h3>
					</div>
					<div>
						<p>Đăng kí để nhận tin tức mới nhất</p>
						<div class="clearfix"></div>
						<form class="subscribe-form" method="post" action="php/subscribe.php">
							<input class="form-control email" type="email" name="subscribe">
							<button class="submit">
								<span class="glyphicon glyphicon-arrow-right"></span>
							</button>
							<span class="form-message" style="display: none;"></span>
						</form>
					</div>
				</aside><!-- .newsletter -->

				<aside class="col-xs-12 col-sm-6 col-md-3 widget links">
					<div class="title-block">
						<h3 class="title">Menu</h3>
					</div>
					<nav>
						<ul>
							<cms:pages masterpage="menu.php" orderby='publish_date' order='asc'>
							<li>
								<a href="<cms:show menu_link />">

								<cms:show menu_name />
							</a>
						</li>
					</cms:pages>
				</ul>
			</nav>
		</aside>

		<aside class="col-xs-12 col-sm-6 col-md-3 widget links">
			<div class="title-block">
				<h3 class="title">Email và số điện thoại</h3>
			</div>
			<nav>
				<ul>
					<li><a>Công ty TNHH Tư vấn Quản lý Lương</a></li>
					<li><a href="mailto:luongcompany@gmail.com">Email: <cms:show g_email_address /></a></li>
					<li><a href="tel:842839322883">Điện thoại: <cms:show g_phone_number /></a></li>
					<li><a>Fax: <cms:show g_fax_number /></a></li>
				</ul>
			</nav>
		</aside>
	</div>
</div>
</div><!-- .footer-top -->
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="copyright col-xs-12 col-sm-3 col-md-3">
				Copyright 2008 - 2017 © Luongltd.com . All rights reserved (hosted by <a href="https://songphi.com.vn/" target="_blank">songphi web solution</a>)
			</div>

			<div class="phone col-xs-6 col-sm-3 col-md-3">
				<div class="footer-icon">
					<svg x="0" y="0" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
						<path fill="#c6c6c6" d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
						c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
						M11.001,12H5V2h6V12z"></path>
					</svg>
				</div>
				<strong class="title">Điện thoại:</strong> <cms:show g_phone_number /> <br>
			</div>

			<div class="address col-xs-6 col-sm-3 col-md-3">
				<div class="footer-icon">
					<svg x="0" y="0" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
						<g>
							<g>
								<path fill="#c6c6c6" d="M8,16c-0.256,0-0.512-0.098-0.707-0.293C7.077,15.491,2,10.364,2,6c0-3.309,2.691-6,6-6
								c3.309,0,6,2.691,6,6c0,4.364-5.077,9.491-5.293,9.707C8.512,15.902,8.256,16,8,16z M8,2C5.795,2,4,3.794,4,6
								c0,2.496,2.459,5.799,4,7.536c1.541-1.737,4-5.04,4-7.536C12.001,3.794,10.206,2,8,2z"></path>
							</g>
							<g>
								<circle fill="#c6c6c6" cx="8.001" cy="6" r="2"></circle>
							</g>
						</g>
					</svg>
				</div>
				VP: <a href="https://www.google.com/maps/place/64+Tr%C6%B0%C6%A1ng+%C4%90%E1%BB%8Bnh,+ph%C6%B0%E1%BB%9Dng+7,+Qu%E1%BA%ADn+3,+H%E1%BB%93+Ch%C3%AD+Minh,+Vietnam/@10.7821233,106.6823313,17z/data=!3m1!4b1!4m5!3m4!1s0x31752f2efc93de2d:0x8dc827c647199d58!8m2!3d10.782118!4d106.68452"><cms:show g_address /></a>
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3">
				<a href="#" class="up">
					<span class="glyphicon glyphicon-arrow-up"></span>
				</a>
			</div>
		</div>
	</div>
</div><!-- .footer-bottom -->
<p id="siteLink" style="display: none"><cms:show k_site_link/></p>

<script type="text/javascript">
var siteLink = $("siteLink").text();
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500,domain:'tieuchuanfsc.com'};
(function() {
var _l = '';var _m = document.getElementsByTagName('meta');var _cl = '';for (i=0; i < _m.length; i++) {if ( _m[i].getAttribute('http-equiv') == 'content-language' ) {_cl = _m[i].getAttribute('content');}}if (document.documentElement.lang != '') _l = document.documentElement.lang;if (_cl != '' && _cl != _l) _l = _cl;if (_l == undefined || _l == '') {_l = 'vnm/';} else {_l = _l[0].toLowerCase() + _l[1].toLowerCase(); if ('eng' == _l) {_l = ''} else {_l = _l + '/';}}
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
console.log("location : " + location);
po.src = siteLink + 'couch/addons/chat/lhc_web/index.php/'+_l+'chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
<script type="application/ld+json">{"@context":"http://schema.org","@type":"Organization","name":"ACME","url":"https://tieuchuanfsc.com","sameAs":["https://www.facebook.com/Luong-ltd-C%C3%94NG-TY-TNHH-T%C6%AF-V%E1%BA%A4N-QU%E1%BA%A2N-L%C3%9D-L%C6%AF%C6%A0NG-1898132090502740/","https://plus.google.com/u/1/communities/108151313164775497380"]}</script>

</footer>