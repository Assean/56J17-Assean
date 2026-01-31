<?php
    include "pdo.php";
    $sql="SELECT * FROM `contact_us`";
    $result=$pdo->query($sql)->fetchAll();
    // print_r($result);
    // header("location:email.php");