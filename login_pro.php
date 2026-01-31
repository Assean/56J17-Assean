<?php
$username = $_POST["username"];
$password = $_POST["password"];
if($username == "admin" AND $password == "1234"){
    echo "正確";
}else{
    echo "帳號或密碼錯誤";
}
?>