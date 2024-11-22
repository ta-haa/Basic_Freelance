<?php 
session_start(); 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


    <style>
        *{
            padding:0;
            margin:0;
        }
        

        header {
            width:100%;
            height:70px;
            position: fixed;
            top: 0;
            z-index: 5;
            margin:0 0 0 220px;
            
        }

        .hdrlogo {
            width:10%;
            height:100%;
            float:left;
            padding: 20px 0 0 0;

        }
        .hdrsearch {
            width:30%;
            height:100%;
            float:left;
            padding: 20px 0 0 0;
            
        }

        .frmsearch{
            width:90%;
            height:40px;
            border-radius:10px;
            margin:0 -10px 0 0;
            border:1px solid black;
            padding:0 10px 0 20px;
            font: 14px arial;
            color:gray;
            outline-style: none;

        }
        .frmbutton{
            width:11%;
            height:40px;
            border-radius:0 10px 10px 0;
            background:#1a1a1a;
            color:white
        }

        .hdrlink {
            width:60%;
            float:right;
            
        }
            header ul a {
                color: black;
                
            }

            header ul li {
                
                list-style: none;
                display: block;
                width: 150px;
                height: 50px;
                float: left;
                text-align: center;
                padding: 26px 0 0 0;
                color: black;
                font: bold 18px arial;
                transition:1s;
                margin:0 0 0 10px;

            }

                header ul li:hover {
                    
                    color: black;   
                    transform:translateY(10%);       
                    box-shadow: 0 0 10px gray;
                }

                header ul li ul {
                    display: none;
                    position: relative;
                    top: 28.5px;
                    width:100%;
                    
                }
            


        nav {
            width: 80%;
            height:;             
            position: relative;
            left: 2%;
            background: ;
            padding:0 50px 0 200px;
        }

        .arrow {
            border-radius: 20%;
            text-align: center;
            color: black;
            font: bold 20px comic sans ms;
            background: transparent;
            width: 30px;
            height: 30px;
            position: fixed;
            left: 90%;
            top: 80%;
            border-color: transparent;
            border-style: solid;
            border-width: 25px;
            box-shadow: 0 0 10px transparent,0 0 70px transparent,0 0 10px black;
            transform:rotate(270deg);
        }

            .arrow:hover {
                border-radius: 20%;
                background: transparent;
                color: black;
                box-shadow: 0 0 10px transparent,0 0 70px transparent,0 0 10px black;
                animation: arrowonmouse 1s linear infinite;
                animation-direction:alternate;
            }

            @keyframes arrowonmouse {
            0% {
                top:80%;
            }

            100% {
                top:79%;
            }
        }
    </style>
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

.flip-card {
  background-color: transparent;
  width: 220px;
  height: 280px;
  font-family: sans-serif;
  float:left;
  margin:0 30px 50px 0;
  text-transform:uppercase;
  transition:1s;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
}

.flip-card:hover {
  width:30%;
}

.flip-card-front {
  text-shadow:
    0 0 10px #000,
    0 0 50px #000;
    box-shadow:
    0 0 10px #000,
    0 0 20px #fff,
    0 0 50px #000;
  position: relative;
  width: 100%;
  height: 100%;
  border: 1px solid #fff;
  border-radius: 1rem;
}

.flip-card-front {
background-size: cover;
  color:white;
  background-color: black;
}


</style>
<style>

.profil-div {
    position: relative;
  display: inline-block;
    z-index: 6;
    position: fixed;
    left: 2.5%;
    transform: scale(0.8);
    transition:1s;
    
}

.profil-resim {
  width: 150px; 
  height: 150px; 
  border-radius:1rem;
  cursor: pointer; 
  background-repeat: no-repeat;
  background-size:cover;
  background-position: center;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  transition:1s;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
  transform:translate(10%);
}

.profil-div:hover {
    transform:scale(0.9);
}

.profil-div:hover .dropdown-content {
  display: block;
}


</style>

</head>
<body id="body">

    <a name="up"></a>

    

    <header>
        <div class="hdrlogo"></div>

        <div class="hdrsearch">
            <form>
            <input class="frmsearch" type="search" placeholder="Search" name="txtsearch">
            <button class="frmbutton" type="submit" name="btnsearch"><i class="fa fa-search"></i></button>
            </form>
        </div>



        <div class="hdrlink">
        <ul>
            <a href="index.php">
                <li>ANASAYFA
                </li>
            </a>

            <a href="sss.php">
                <li>SSS
                </li>
            </a>
            <a href="hakkimizda.php">
                <li>HAKKIMIZDA
                </li>
            </a>
            <a href="https://www.youtube.com/@TahaKeskin" target="_blank">
                <li>İLETİŞİM
                </li>
            </a>
        </ul>
    </div>
    
    
    </header>


    </div>



    <div class="profil-div" id="profil-div">

  <a href="admingiris.php"><div class="profil-resim" style="background-image: url('logo.png');"></div></a>

  <div class="dropdown-content">
            <div id="loginpanel">    
    <a href="giris.php"><div >Giris</div></a>

    <a href="uyeol.php"><div >Kayıt Ol</div></a>
            </div>
  </div>
</div>



  


    <?php
if (isset($_SESSION['email'])) {


    include("baglan.php");

    $Semail = $_SESSION['email'];
    
    // SQL sorgusu
    $sql = "SELECT Kemail,Kfoto FROM kullanici WHERE Kemail='$Semail' ";
    $result = $con->query($sql);
    
    // Kullanıcı doğrulaması
    if ($result->num_rows > 0) {
        // Giriş başarılı
        $row = $result->fetch_assoc();

        echo '    <div class="profil-div">';

        if (!empty($row["Kfoto"])) {
            echo '<div class="profil-resim" style="background-image: url('.$row[ 'Kfoto' ].')"></div>';
        } else {
            echo "Profil resmi bulunamadı.";
        }

        echo '<div class="dropdown-content">';

        echo '<div>';
        echo "<a href=\"profil.php\"><div > $row[Kemail] </div></a>";

        echo "<a href=\"users.php\"><div >İlan</div></a>";

        echo "<a href=\"admingiris.php\"><div >Admin</div></a>";
    
        echo '<script type="text/javascript">';
        echo 'document.getElementById("profil-div").style.display = "none"';
        echo '</script>';
        
        echo "<a style='color:red' href=\"cikis.php\"><div >Çıkış</div></a>";

        echo '</div>';
    
        echo '</div>';
        echo '</div>';


    } else {
        echo "Kullanıcı bulunamadı.";
    }
    
    $con->close();
//////

/////

}
else {

}

?>

    <br/><br/><br/><br/><br/><br/><br/><br/>
    


    <div style="position:fixed;left:1%;top:25%;width:180px;height:300px;border:2px solid gray;z-index:1;padding:50px 0 0 10px;border-radius:5px">
    <div class="">
            <form>
            <input class="" type="search" placeholder="ilan Adı" name="SItxtsearch" style="width:170px;height:25px;border-radius:3px;border:0.5px solid gray">
            <br/>
            <input class="" type="submit" name="SIbtnsearch" value="ilan göster" style="width:170px;height:25px;border-radius:3px;border:0.5px solid gray;cursor:pointer">
            </form>
        </div>
        <br/>
        <div class="">
            <form>
            <input class="" type="search" placeholder="max fiyat" name="maxSItxtsearch" style="width:170px;height:25px;border-radius:3px;border:0.5px solid gray">
            <br/>
            <input class="" type="submit" name="FSIbtnsearch" value="fiyat aralığı göster" style="width:170px;height:25px;border-radius:3px;border:0.5px solid gray;cursor:pointer">
            </form>
        </div>
        <br/>
        <form>
            <input class="" type="submit" name="A_Zbtnsearch" value="A-Z" style="width:83px;height:25px;border-radius:3px;border:0.5px solid gray;cursor:pointer">
            <input class="" type="submit" name="Z_Abtnsearch" value="Z-A" style="width:83px;height:25px;border-radius:3px;border:0.5px solid gray;cursor:pointer">
            </form>
        </div>

<?php
////////////////////////////////////////////////////////////////////////////////////////////////////
include( "baglan.php" );

    $sqlflip = "SELECT * FROM ilan WHERE Iid and Ionay = 1";

    //$sqlflip = "SELECT distinct * FROM ilan WHERE Iid and Ionay = 1 group by Imeslek";

    $sonucflip = mysqli_query( $con, $sqlflip );



if (mysqli_num_rows($sonucflip) > 0) {

while ( $satir = mysqli_fetch_array( $sonucflip) ) {

    

  }

}
else{
}



mysqli_close($con);
    ?>

</div>









    
    <nav>
        

        <?php 
        //veri listeleme search
include( "baglan.php" );

if(isset($_REQUEST["btnsearch"])){
    
    $sql = "SELECT Iid,Imeslek,Iaciklama,Ifoto,Ifiyat FROM ilan WHERE Imeslek like ? and Ionay = 1";
    if($stmt = mysqli_prepare($con, $sql)){ 
        mysqli_stmt_bind_param($stmt, "s", $param_term);
         
        $param_term = '%'. $_REQUEST["txtsearch"] . '%';
         
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
             
            if(mysqli_num_rows($result) > 0){ 

                while ( $satir = mysqli_fetch_array( $result, MYSQLI_ASSOC) ) {

                    $id=$satir[ 'Iid' ];
                    echo "<a href='kullanicipage.php?Git=$id'>";
            
                    echo '<div class="flip-card">';
                    echo '<div class="flip-card-inner" >';
                    //sql girilen fotoğraf urlsi
                    echo '<div class="flip-card-front" style="background-image: url('.$satir[ 'Ifoto' ].')" ><br>';
              
                    echo "<h1>" . $satir[ 'Imeslek' ] . "</h1><br/><br/><br/><br/> ";
              
                  //sql girilen açıklama
            
                    echo "<h4 id='Iaciklama'>" . $satir[ 'Iaciklama' ] . "</h4><br/><br/><br/><br/> ";
            
            
            
                  //sql girilen para
                    echo "<h1>" . $satir[ 'Ifiyat' ] . "₺</h1>"; 
            
            
                    echo '</div>';
            
                    echo '</div>';
                    echo '</div>';
            
                    echo '</a>';
                  }


                    

            } else{
                die();
            }
        } else{
            echo "Hata $sql. " . mysqli_error($link);
        }
    }
      
    mysqli_stmt_close($stmt);

    
      


    }
  
    mysqli_close($con);

                     
?>   


<?php
//soldaki filtreleme ilan

include( "baglan.php" );

if(isset($_REQUEST["SIbtnsearch"])){
    
    $sql = "SELECT Iid,Imeslek,Iaciklama,Ifoto,Ifiyat FROM ilan WHERE Imeslek like ? and Ionay = 1";
    if($stmt = mysqli_prepare($con, $sql)){ 
        mysqli_stmt_bind_param($stmt, "s", $param_term);
         
        $param_term = '%'. $_REQUEST["SItxtsearch"] . '%';
         
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
             
            if(mysqli_num_rows($result) > 0){ 

                while ( $satir = mysqli_fetch_array( $result, MYSQLI_ASSOC) ) {

                    $id=$satir[ 'Iid' ];
                    echo "<a href='kullanicipage.php?Git=$id'>";
            
                    echo '<div class="flip-card">';
                    echo '<div class="flip-card-inner" >';
                    //sql girilen fotoğraf urlsi
                    echo '<div class="flip-card-front" style="background-image: url('.$satir[ 'Ifoto' ].')" ><br>';
              
                    echo "<h1>" . $satir[ 'Imeslek' ] . "</h1><br/><br/><br/><br/> ";
              
                  //sql girilen açıklama
            
                    echo "<h4 id='Iaciklama'>" . $satir[ 'Iaciklama' ] . "</h4><br/><br/><br/><br/> ";
            
            
            
                  //sql girilen para
                    echo "<h1>" . $satir[ 'Ifiyat' ] . "₺</h1>"; 
            
            
                    echo '</div>';
            
                    echo '</div>';
                    echo '</div>';
            
                    echo '</a>';
                  }


                    

            } else{
                die();
            }
        } else{
            echo "Hata $sql. " . mysqli_error($link);
        }
    }
      
    mysqli_stmt_close($stmt);

    
      


    }
  
    mysqli_close($con);

                     
?>
<?php
//soldaki filtreleme fiyat

include( "baglan.php" );

if(isset($_REQUEST["FSIbtnsearch"])){
    
$min_fiyat = 0;
$max_fiyat = $_GET["maxSItxtsearch"];

// SQL sorgusu
$sql = "SELECT * FROM ilan WHERE Ifiyat BETWEEN $min_fiyat AND $max_fiyat";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Veritabanından gelen verileri işleme
    while($row = $result->fetch_assoc()) {



    $id=$row[ 'Iid' ];
        echo "<a href='kullanicipage.php?Git=$id'>";

        echo '<div class="flip-card">';
        echo '<div class="flip-card-inner" >';
        //sql girilen fotoğraf urlsi
        echo '<div class="flip-card-front" style="background-image: url('.$row[ 'Ifoto' ].')" ><br>';
  
        echo "<h1>" . $row[ 'Imeslek' ] . "</h1><br/><br/><br/><br/> ";
  
      //sql girilen açıklama

        echo "<h4 id='Iaciklama'>" . $row[ 'Iaciklama' ] . "</h4><br/><br/><br/><br/> ";



      //sql girilen para
        echo "<h1>" . $row[ 'Ifiyat' ] . "₺</h1>"; 


        echo '</div>';

        echo '</div>';
        echo '</div>';

        echo '</a>';
        



    }
} else {
    echo "Belirtilen fiyat aralığında ürün bulunamadı.";
}
// Veritabanı bağlantısını kapatma
}
$con->close();

                     
?>
<?php
//soldaki filtreleme A-Z Z-A

include( "baglan.php" );

if(isset($_REQUEST["A_Zbtnsearch"])){

// SQL sorgusu
$sql = "SELECT * FROM ilan WHERE Iid and Ionay = 1 ORDER BY Ifiyat ASC ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Veritabanından gelen verileri işleme
    while($row = $result->fetch_assoc()) {
        $id=$row[ 'Iid' ];
        echo "<a href='kullanicipage.php?Git=$id'>";

        echo '<div class="flip-card">';
        echo '<div class="flip-card-inner" >';
        //sql girilen fotoğraf urlsi
        echo '<div class="flip-card-front" style="background-image: url('.$row[ 'Ifoto' ].')" ><br>';
  
        echo "<h1>" . $row[ 'Imeslek' ] . "</h1><br/><br/><br/><br/> ";
  
      //sql girilen açıklama

        echo "<h4 id='Iaciklama'>" . $row[ 'Iaciklama' ] . "</h4><br/><br/><br/><br/> ";



      //sql girilen para
        echo "<h1>" . $row[ 'Ifiyat' ] . "₺</h1>"; 


        echo '</div>';

        echo '</div>';
        echo '</div>';

        echo '</a>';
    }
} else {
    echo "Belirtilen fiyat aralığında ürün bulunamadı.";
}
// Veritabanı bağlantısını kapatma
}
if(isset($_REQUEST["Z_Abtnsearch"])){
    
    // SQL sorgusu
    $sql = "SELECT * FROM ilan WHERE Iid and Ionay = 1 ORDER BY Ifiyat DESC ";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        // Veritabanından gelen verileri işleme
        while($row = $result->fetch_assoc()) {
            $id=$row[ 'Iid' ];
        echo "<a href='kullanicipage.php?Git=$id'>";

        echo '<div class="flip-card">';
        echo '<div class="flip-card-inner" >';
        //sql girilen fotoğraf urlsi
        echo '<div class="flip-card-front" style="background-image: url('.$row[ 'Ifoto' ].')" ><br>';
  
        echo "<h1>" . $row[ 'Imeslek' ] . "</h1><br/><br/><br/><br/> ";
  
      //sql girilen açıklama

        echo "<h4 id='Iaciklama'>" . $row[ 'Iaciklama' ] . "</h4><br/><br/><br/><br/> ";



      //sql girilen para
        echo "<h1>" . $row[ 'Ifiyat' ] . "₺</h1>"; 


        echo '</div>';

        echo '</div>';
        echo '</div>';

        echo '</a>';
        }
    } else {
        echo "Belirtilen fiyat aralığında ürün bulunamadı.";
    }
    // Veritabanı bağlantısını kapatma
    }
$con->close();

                     
?>
<?php
//veri listeleme 


include( "baglan.php" );
        $sqlflip = "SELECT Iid,Imeslek,Iaciklama,Ifoto,Ifiyat FROM ilan WHERE Iid and Ionay = 1";
        $sonucflip = mysqli_query( $con, $sqlflip );


if (mysqli_num_rows($sonucflip) > 0) {

    
    while ( $satir = mysqli_fetch_array( $sonucflip) ) {


        $id=$satir[ 'Iid' ];
        echo "<a href='kullanicipage.php?Git=$id'>";

        echo '<div class="flip-card">';
        echo '<div class="flip-card-inner" >';
        //sql girilen fotoğraf urlsi
        echo '<div class="flip-card-front" style="background-image: url('.$satir[ 'Ifoto' ].')" ><br>';
  
        echo "<h1>" . $satir[ 'Imeslek' ] . "</h1><br/><br/><br/><br/> ";
  
      //sql girilen açıklama

        echo "<h4 id='Iaciklama'>" . $satir[ 'Iaciklama' ] . "</h4><br/><br/><br/><br/> ";



      //sql girilen para
        echo "<h1>" . $satir[ 'Ifiyat' ] . "₺</h1>"; 


        echo '</div>';

        echo '</div>';
        echo '</div>';

        echo '</a>';



        
      }
    }
else{

}
mysqli_close($con);
    ?>
 
        
    </nav>
 

    <a href="#up">
        <div class="arrow" style="">&#187</div>
    </a>

    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>





</body>
</html>
