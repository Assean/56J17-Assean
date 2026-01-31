<?php 
$dsn="mysql:host=localhost;charset=utf8;dbname=funtech";
$pdo=new PDO($dsn,'root','');

$sql="INSERT INTO `users`(`account`,`password`,`name`,`email`,`address`) 
                   VALUES('{$_POST['account']}',
                          '{$_POST['password']}',
                          '{$_POST['name']}',
                          '{$_POST['email']}',
                          '{$_POST['address']}')";

$pdo->exec($sql);

header("location:index.php");

/* echo "<pre>";
print_r($_POST);
echo "</pre>"; */

?>