<?php
if(isset($_POST['cikis'])){
    session_destroy();
    header("Location:index.php");
}

?>

