<!DOCTYPE html>
<html lang="tr">
<head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
    display: flex;
    align-items: center;
}

.profile-pic {
    flex: 0 0 150px;
}

.profile-pic img {
    width: 100%;
    border-radius: 50%;
}

.info {
    flex: 1;
    padding-left: 20px;
}

header h1 {
    margin: 0;
    font-size: 36px;
}

header p {
    margin: 5px 0;
    font-size: 18px;
    color: #777;
}

section {
    margin-bottom: 20px;
}

section h2 {
    margin-bottom: 10px;
    font-size: 24px;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 5px;
}

.about p {
    color: #333;
}

.skills ul {
    display: flex;
    flex-wrap: wrap;
}

.skills li {
    background-color: #4CAF50;
    color: white;
    padding: 5px 10px;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

</style>
<style>

*{
margin:0;
padding:0;
}

.flip-card {
  background-color: transparent;
  width: 190px;
  height: 254px;
  perspective: 1000px;
  font-family: sans-serif;
  float:left;
  margin:0 50px 50px 0;
  text-transform:uppercase;
  position: relative;
  left:10%;
  top:10%;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 1.5s;
  transform-style: preserve-3d;
  
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(-180deg);
}

.flip-card-front, .flip-card-back {
  

  text-shadow:
    0 0 10px #000,
    0 0 50px #000;
    box-shadow:
    0 0 10px #000,
    0 0 20px #fff,
    0 0 50px #000;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border: 1px solid #fff;
  border-radius: 1rem;
  ;width:150px;height:150px;
}

.flip-card-front {
  
  background-size: cover;
  color:white;
  background-color: black;
}

.flip-card-back {
  background: #000;
  color: white;
  transform: rotateY(180deg);
}

</style>
</head>
<body>
 
<div style="">


<?php

include("baglan.php");

$gelen_id=$_GET['Git'];


$sql = "SELECT *
        FROM kullanici
        INNER JOIN ilan ON kullanici.Kid = ilan.Ikid WHERE ilan.Iid = $gelen_id";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Veritabanından gelen her satırı döngü ile işleme
    while($row = $result->fetch_assoc()) {

        echo '<div class="container">';
        echo '<header>';
        echo '    <div class="profile-pic">';
        echo '<div class="flip-card-front" style="background-image: url('.$row[ 'Kfoto' ].')" >';
        echo '    </div>';
        echo '<br/>';
        echo '    <div class="info">';
        echo "        <h1>$row[Kad]</h1>";
        echo "        <p>$row[Imeslek]</p>";
        echo "        <p>Email: $row[Kemail]</p>";
        echo "        <p>Telefon: $row[Ktelefon]</p>";
        echo "        <p>Adres: $row[Ksehir]</p>";
        echo '    </div>';
        echo "<br/>";
        echo '   </header>';
        echo '   <section class="about">';
        echo '      <h2>Hakkımda</h2>';
        echo "      <p>$row[Kozet]</p>";
        echo ' </section>';
        echo '  <section class="education">';
        echo '     <h2>Eğitim</h2>';
        echo '    <ul>';
        echo "        <li>$row[Kokul]</li>";
        echo '    </ul>';
        echo ' </section>';
        echo ' <section class="experience">';
        echo '    <h2>Deneyim</h2>';
        echo '    <ul>';
        echo "       <li>$row[Kisdeneyimi]</li>";
        echo '   </ul>';
        echo ' </section>';
        echo ' <section class="skills">';
        echo '   <h2>Yetenekler</h2>';
        echo '   <ul>';
        echo "       <li>$row[Kyetenekler]</li>";
        echo '    </ul>';
        echo '  </section>';
        echo ' </div>'; 
    }
} else {
    echo "Sonuç bulunamadı.";
}

// Veritabanı bağlantısını kapat
$con->close();

?>

</div>



    
</body>
</html>

	