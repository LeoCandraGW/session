<?php

    $mk=$_POST["matk"];

    session_start();
    $usr=$_SESSION["sid"];
    $_SESSION["smk"]=$mk;
    $mtk=$_SESSION["smk"];
    

    echo "Nama : ".$usr."[<a href='logout.php'>Logout]</a>";
    echo "<br>Daftar Matakuliah :";

    echo "<br>[<a href='Halaman3.php'>Clear and << back</a>]";
    echo "<br>";

    echo "<table border='1' cellpadding='3' width='500'>
                <tr style='background-color:#405de6'>
                <th><font color='white'>Matakuliah</th>
        ";

    for($i=0;$i<count($mtk);$i++){
        echo "<tr style='background-color:#2bb3f3'><td>".$mtk[$i]."</td></tr>";
    }
?>