<?php
    echo "<form method='post' action='Halaman4.php'>";
    $matkul=[[
            "kode"=> "A001",
            "Matakuliah"=> "Pemrograman Web"
          ],
          [
            "kode"=> "A002",
            "Matakuliah"=> "Pemrograman Service"
          ],
          [
            "kode"=> "A003",
            "Matakuliah"=> "Desain Interface"
          ],
          [
            "kode"=> "A004",
            "Matakuliah"=> "Manajemen Database"
          ]
          ];

    session_start();
    $usr=$_SESSION["sid"];
    $_SESSION["mkl"]=$matkul;
    $mkl=$_SESSION["mkl"];


    echo "Selamat Datang &nbsp".$usr;
    echo "&nbsp [<a href='logout.php'>Logout</a>]";
    echo "<br><br><br><br><br><br>";

    echo "Silahkan Pilih Matakuliah : <br>";

    echo "
          <table border='1' cellpadding='3' width='500'>
          <tr style='background-color:#405de6'>
          <th><font color='white'>Kode</th>
          <th><font color='white'>Matakuliah</th>
          
          </tr>
    ";
    
    foreach($matkul as $mk){
        echo "<tr style='background-color:#2bb3f3'>
                <td align=center width=60>".$mk["kode"]."</td>
                <td align=center width=125>".$mk["Matakuliah"]."</td>
                      
        ";  
    };
    echo "</table>";  
    echo "<table border='1' cellpadding='3' width='100'>
          <tr style='background-color:#405de6'><th><font color='white'> kode</th>
          <th><font color='white'>Pilih</th></tr>
          <tr style='background-color:#2bb3f3'><td>A002</td><td align=center width=55><input type='checkbox' name='matk[]' value='A001 Pemrograman Web'></td>
          <tr style='background-color:#2bb3f3'><td>A002</td><td align=center width=55><input type='checkbox' name='matk[]' value='A002 Pemrograman Service'></td>
          <tr style='background-color:#2bb3f3'><td>A003</td><td align=center width=55><input type='checkbox' name='matk[]' value='A003 Desain Interface'></td>
          <tr style='background-color:#2bb3f3'><td>A004</td><td align=center width=55><input type='checkbox' name='matk[]' value='A004 Manajemen Database'></td>
    
    ";
    echo "</table>";

    echo "<br><input type='submit' value='submit'>";
    echo "<a href='Halaman4.php'>Next>><a/>";

?>