<?php
//session_set_cookie_params(null,'/','localhost',false,true); //aldığı değerler zaman yolu domain adresi https secure varsa true yap http only javascript ile session erişmemek için


//session kısmında sorun var düzelt
//burdaki amaç sql birinci tablodaki üye kayıt eposta ve şifreyi eğer deyip kayıtlı giriş varsa kaydet diyoruz
//özel karakter korumasını yap
//SESSİON VE COOKİE GELİŞMİŞ VERSİYONU TOKEN KESİNLİKLE TOKEN KULLAN
//$_SERVER işlemlerinde kullanıcının girdiği cihazın ip ve tarayıcının ismini veri tabanına kaydet
//session VERİ HIRSIZLIĞI OLMAMASI İÇİN https://www.youtube.com/watch?v=Fikq5x4ucwE 

//  echo !defined("zero.?") ? die("Buraya Ulaşma Yetkiniz Yok"):'null'; sayfanın en üstüne yazılır yetkisiz girişleri engeller
 
// Eğer daha önce giriş yapılmışsa ve "Beni Hatırla" seçeneği işaretlenmişse, kullanıcıyı otomatik olarak giriş yap

session_start();

// Eğer daha önce giriş yapılmışsa ve "Beni Hatırla" seçeneği işaretlenmişse, kullanıcıyı otomatik olarak giriş yap
if (isset($_COOKIE['beni_hatirla']) && $_COOKIE['beni_hatirla'] == 'evet' && isset($_COOKIE['email']) && isset($_COOKIE['sifre'])) {
    $_SESSION['email'] = $_COOKIE['email'];
    header("Location: index.php"); // Örnek bir ana sayfaya yönlendirme
    exit;
}

include("baglan.php");

$giris_basarili = false; // Giriş başarısız varsayalım
$hata_mesaji = ""; // Hata mesajını saklayacağımız değişken

if(isset($_POST["giris"]))
{
         
        $email = $_POST['email'];
        $sifre = $_POST['sifre'];
    
        $salt      = '@ilanteka_';
        $hashed    = hash('sha256', $sifre . $salt);
    
            $email = stripcslashes($email);  
            $hashed = stripcslashes($hashed);  
            $email = mysqli_real_escape_string($con, $email);  
            $hashed = mysqli_real_escape_string($con, $hashed);  
          
            $sql = "select * from kullanici where Kemail = '$email' and Ksifre = '$hashed'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                echo "<h1><center> Login successful </center></h1>"; 
                $giris_basarili = true;

        // Session'a kullanıcı adını kaydet
        $_SESSION['email'] = $email;
        
        // Eğer "Beni Hatırla" seçeneği işaretlenmişse, cookie oluştur
        if(isset($_POST['beni_hatirla']) && $_POST['beni_hatirla'] == 'evet') {
            setcookie('email', $email, time() + (86400 * 30), "/"); // 30 gün boyunca cookie geçerli
            setcookie('sifre', $sifre, time() + (86400 * 30), "/"); // 30 gün boyunca cookie geçerli
            setcookie('beni_hatirla', 'evet', time() + (86400 * 30), "/"); // 30 gün boyunca cookie geçerli
        }
                
            }  
            else{  
                echo "<h1><center>  Login failed. Invalid email or password.</center></h1>";  
                $hata_mesaji = "Geçersiz kullanıcı adı veya şifre";

            }   
            session_destroy();
}
    
    mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta charset="”utf-8″">
    <meta name="theme-color" content="#ffffff" />
    <! SAYFA RENGİ >
    <meta name="keywords" content="taha keskin, freelance, ta-ha, 5 taneden fazla girme" />
    <! ANAHTAR KELİME >
    <meta name="news_keywords" itemprop="keywords" content="5 taneden fazla girme" />
    <! ANAHTAR KELİME >
    <meta property="og:site_name" content="" />
    <! SİTE ADI >
    <meta name="twitter:site" content="@" />
    <! SİTE ADI >
    <meta name="generator" content="Optimist Hub" />
    <! SİTE ADI >
    <meta property="og:url" content="" />
    <! SİTE LİNKİ >
    <meta property="al:web:url" content="" />
    <! SİTE LİNKİ >
    <meta name="twitter:url" content="" />
    <! SİTE LİNKİ >
    <meta property="article:section_url" content="" />
    <! SİTE LİNKİ >
    <meta name="identifier-URL" content="" />
    <! SİTE LİNKİ >
    <meta property="article:publisher" content="" />
    <! SİTE LİNLİ >
    <meta property="og:title" content="" />
    <! SİTE AÇIKLAMA >
    <meta name="twitter:title" content="" />
    <! SİTE AÇIKLAMA >
    <meta property="og:description" content="" />
    <! SİTE AÇIKLAMA >
    <meta name="description" content="" />
    <! SİTE AÇIKLAMA >
    <meta name="twitter:description" content="" />
    <! SİTE AÇIKLAMA >
    <meta name="author" content="taha keskin" />
    <! KİM YAPTI >
    <meta property="article:author" content="taha keskin" />
    <! KİM YAPTI >
    <meta name="twitter:creator" content="@taha_keskin" />
    <! KİM YAPTI >
    <meta name="copyright" content="taha keskin" />
    <! TELİF HAKKI >
    <meta name="Abstract" content="" />
    <! SİTE ÖZETİ >
    <meta http-equiv="content-language" content="tr" />
    <! SİTE DİLİ >
    <meta property="og:locale" content="tr_TR" />
    <! KONUM >
    <meta property="og:type" content="article" />
    <! TÜRÜ >
    <meta property="og:type" content="website" />
    <! TÜRÜ >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <! SİTE MOBİL VE PC BOYUTU ORANLAR >
    <meta property="og:video:tag" content="" />
    <! VİDEO ADI >
    <meta name="og:image" content="" />
    <! SİTE RESMİ >
    <meta name="rating" content="general" />
    <! KİTLE >

    <title>Welcome</title>
    <link rel="shortcut icon" href="favicon32.ico" sizes="32x32" />
    <link rel="shortcut icon" href="favicon16.ico" sizes="32x32" />

    <script>
        console.log("----------------------");
        console.log("Ta-Ha");
        console.log("----------------------");
    </script>

    <noscript>
        <meta http-equiv="refresh" content="0 ; url=https://www.youtube.com/channel/UCbJFy2KTBclbYfcaQFKZapQ">
    </noscript>
    <script>
        setInterval("titletime ()", 1000)
        var time = 0;
        function titletime() {
            time++;
            if (time % 2 == 1) { document.title = "Ta-Ha" }
            else { document.title = "Freelance" }
        }
    </script>

    <script>
        setInterval("ok ()", 1000)
        function ok() {
            if (document.hasFocus()) { }
            else { document.title = "Come Back"; }
        }
    </script>
<script src='https://www.google.com/recaptcha/api.js'>
    </script>
    <script type="text/javascript">
function ilan_action() {
var sgnv = grecaptcha.getResponse();
console.log("Resp" + sgnv);
if (sgnv == '') {
document.getElementById('dvcaptcha').innerHTML = "Robot Olmadığınızı Doğrulayın";
return false;
}
else {

var kemail=document.frmilankontrol.txtkemail.value;
var ksifre=document.frmilankontrol.txtksifre.value;

if(kemail.length=="" && ksifre.length=="" ) 
{
alert("Uyarı Boş Alan");
return false;
}
else
{
if (kemail.length=="") {
alert("Email field is empty");
return false;
}
if (ksifre.length=="") {
alert("Password field is empty");
return false;
}
}
return true;
}
}
</script>

<style>

::-webkit-scrollbar {
  width: 7px;

  
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px gray; 
  border-radius: 10px;

  
}

::-webkit-scrollbar-thumb {
  background: #1a1a1a; 
  border-radius: 10px;


}

::-webkit-scrollbar-thumb:hover {
  background: black; 

  
}
</style>
    <style>
         .dvfrm {
            width: 60%;
            height: ;
            background-color: white;
            border: 1px solid black;
            left: 37%;
            top: 20%;
            z-index: 6;
            border-radius: 20px;
            text-align: center; 
            margin:30px auto 0 auto;
            box-shadow:1px 1px 50px black;
        }

        .txtilan {
            width: 400px;
            height: 60px;
            border: 1px solid black;
            background-color: transparent;
            border-radius: 1000px;
            text-align: center;
            font: bold 25px comic sans ms;
            outline-style: none;
            animation: inputani 1s linear infinite;            
            color:gray;
            margin:0 10px 10px 0;
        }
        .dvrdoilan {
            font: bold 25px comic sans ms;
            color:gray;
            margin:0 10px 10px 0;
        }
        .rdoilan {
            width:20px;
            height:20px;
            font: bold 30px comic sans ms;

        }
         

        .btnilan {
            width: 250px;
            height: 50px;
            border: 1px solid black;
            background-color: transparent;
            border-radius: 1000px;
            font: bold 25px comic sans ms;
            animation: inputani 1s linear infinite;
        }

         
        
       </style>
<style>
input[type="checkbox"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-tap-highlight-color: transparent;
  cursor: pointer;
  margin: 0;
}

input[type="checkbox"]:focus {
  outline: 0;
}

.cbxhatirla {
  position: relative;
  width: 24px;
  height: 24px;
  top: calc(-3vh);
  left: calc(24.5vw);
}

.cbxhatirla input {
  position: relative;
  top: 0;
  left: 0;
  width: 24px;
  height: 24px;
  border: 2px solid #bfbfc0;
  border-radius: 50%;
  transition: all .2s ease;
}

.cbxhatirla input:hover {
  border-color: #9a9a9a;
}

.cbxhatirla label {
  width: 24px;
  height: 24px;
  background: none;
  border-radius: 50%;
  position: absolute;
  top: 0;
  left: 0;
  transform: translate3d(0,0,0);
  pointer-events: none;
}

.cbxhatirla svg {
  position: absolute;
  top: 5px;
  left: 4px;
  z-index: 1;
  pointer-events: none;
}

.cbxhatirla svg path {
  stroke: white;
  stroke-width: 3;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-dasharray: 19;
  stroke-dashoffset: 19;
  transition: all .4s ease;
}

.cbxhatirla input:checked + label {
  animation: splash 1.5s ease forwards;
}

.cbxhatirla input:checked + label + svg path {
  stroke-dashoffset: 0;
}

@keyframes splash {
  0% {
    transform: scale(1.1);
  }
  40% {
    transform: scale(1.1);
    background: rgba(76, 149, 247, 1);
    box-shadow: 0 -18px 0 -8px rgba(76, 149, 247, 1), 16px -8px 0 -8px rgba(76, 149, 247, 1), 16px 8px 0 -8px rgba(76, 149, 247, 1), 0 18px 0 -8px rgba(76, 149, 247, 1), -16px 8px 0 -8px rgba(76, 149, 247, 1), -16px -8px 0 -8px rgba(76, 149, 247, 1), -30px 0px 0 -10px rgba(76, 149, 247, 1), 30px 0px 0 -10px rgba(76, 149, 247, 1),0 30px 0 -10px rgba(76, 149, 247, 1),0 -30px 0 -10px rgba(76, 149, 247, 1);
  }
  100% {
    background: rgba(1, 149, 247, 1);
    box-shadow: 0 -32px 0 -10px transparent, 28px -16px 0 -10px transparent, 28px 16px 0 -10px transparent, 0 32px 0 -10px transparent, -28px 16px 0 -10px transparent, -28px -16px 0 -10px transparent;
  }
}
  
</style>

</head>

<body>

<div class="dvfrm">


<?php if($giris_basarili): ?>
        <h1>Hoş Geldiniz, <?php echo $_SESSION['email'];  echo '<script> setTimeout(function() { window.location = "giris.php"; }, 0); </script> ';?></h1>
        <h3><a href="giris.php">Anasayfa Git</a></h3>
    <?php else: ?>
        
        <?php if($hata_mesaji): ?>
            <p><?php echo $hata_mesaji; ?></p>
        <?php endif; ?>

<form method="POST" name="frmilankontrol" onsubmit = "return ilan_action()">
<br><br>

<input id="txtkemail" class="txtilan" type="text" placeholder="Email" require name="email">
 
<input id="txtksifre" class="txtilan" type="text" placeholder="Şifre" require name="sifre">

<br><br>
<div>Beni Hatırla</div>
<div class="cbxhatirla">
  <input id="cbx" type="checkbox" name="beni_hatirla" value="evet">
  <label for="cbx"></label>
  <svg width="16" height="13" viewBox="0 0 16 13" fill="none">
    <path d="M1 8.36364L6.23077 12L13 4"/>
  </svg>
</div>


<div id="dvcaptcha"></div>

<div id="lgnrcaptcha" style="background:transparent;position:relative;left:33%;" class="g-recaptcha" data-sitekey="6LeKyT8UAAAAAKXlohEII1NafSXGYPnpC_F0-RBS"></div>
<br>

<input class="btnilan" type="submit" class="" value="Giriş Yap" name="giris">

</form>

<?php endif; ?>
 

<br><br>
</div>
<br>  <br>  <br>  <br> 


</body>
</html>