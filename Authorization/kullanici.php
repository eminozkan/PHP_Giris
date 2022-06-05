<?php
session_start();
echo $_SESSION['kID'] . "<br>";
echo $_SESSION['kAdi'] . " hoşgeldiniz!";


?>

<form action="cikisyap.php" method="post">
    <input type="submit" value="Çıkış yap" name="cikis">

</form>
