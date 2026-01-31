<?php 
$dsn="mysql:host=localhost;charset=utf8;dbname=funtech";
$pdo=new PDO($dsn,'root','');

$sql="INSERT INTO `contact_us`(`name`,`email_e`,`text`) 
                   VALUES('{$_POST['name']}',
                          '{$_POST['email_e']}',
                          '{$_POST['text']}')";

$pdo->exec($sql);
    // echo $_POST["email_e"];
    echo "<script>";
    // echo "alert('已送出');";
    echo "location.href='email.php'";
    echo "</script>";
// header("location:index.php");
?>