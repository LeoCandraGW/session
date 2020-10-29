<?php
    session_start();
    session_destroy();
    header("Location: Halaman1.php");
?>