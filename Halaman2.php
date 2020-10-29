<?php
    $uid=$_POST["user"];
    $upw=$_POST["pass"];

    $dbu="672018073";
    $dbp="qwer";

    if($uid==$dbu && $upw==$dbp){
        session_start();
        $_SESSION["sid"]=$uid;
        $_SESSION["spw"]=$upw;
        header("Location: Halaman3.php");
    }else {
        header("Location: Halaman1.php");
    }
?>