<?php

    include 'classes.php';
 
    //menangkap parameter yang dikirimkan dari detail.php
    $id = $_GET['id'];
 
    //perintah untuk melakukan hapus
    //melakukan penghapusan data berdasarkan ID
    $mhs->hapus_mhs($id);
    echo "<script>window.location='/smatrik'</script>";
 
 
?>