<?php
    // simpan dengan nama koneksi.php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "novelku";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);
    
    // Check connection
    if($conn == false) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>



<?php
    // tandai pake gelang
    define("GELANG",1);
    
    require_once "koneksi.php";