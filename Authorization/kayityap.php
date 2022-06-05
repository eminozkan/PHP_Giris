<?php
include "Database.php";
$database = new Database();

$kAdi = $_POST['kAd'];
$parola = $_POST['parola'];


$database->dbname = "Giris";
$database->baglanti = mysqli_connect($database->host,$database->username,$database->password,$database->dbname);

if(isset($_POST['kayit_button'])){
    $result = mysqli_query($database->baglanti,"select kullanici_id from kullanici where kullanici_adi='" . $kAdi . "'");
    if($result->num_rows == 0) {
        mysqli_query($database->baglanti,"insert into kullanici (kullanici_adi,kullanici_parola) values ('" . $kAdi . "','" . $parola . "')");
        header("Location:giris.php");
    }else{
        echo "<script type='text/javascript'> alert('Kullanici mevcut')</script>";
        header("Location:index.php");

    }
}
?>
