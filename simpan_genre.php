<?php
// filename: simpan_genre.php

if(defined("GELANG") === false)
{
    // tidak punya gelang
    die("Anda tidak boleh membuka halaman ini secara langsung!");
}

$genre = $_POST['genre'];

$sql = "INSERT INTO genre (nama_genre) VALUES ('$genre')";

mysqli_query($conn, $sql);

// redirect ...???

// next week

