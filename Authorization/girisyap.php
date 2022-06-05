<?php
include "Database.php";
$database = new Database();

$kAdi = $_POST['kAd'];
$parola = $_POST['parola'];


$database->dbname = "giris";
$database->baglanti = mysqli_connect($database->host,$database->username,$database->password,$database->dbname);

if(isset($_POST['giris_button'])){
    $result = mysqli_query($database->baglanti,"select kullanici_id from kullanici where kullanici_adi ='" . $kAdi . "' and kullanici_parola='" . $parola . "'");
    print_r($result);
    while($row = mysqli_fetch_assoc($result)) {
        session_start();
        $_SESSION["kID"] = $row['kullanici_id'];
        $_SESSION["kAdi"] = $kAdi;
        header("Location:kullanici.php");
    }


}

?>
