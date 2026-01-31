<?php


// POST抓出使用者輸入的驗證碼與 Session 存的正確答案
// v_code  -> 使用者輸入的驗證碼
// code  -> 生成的驗證碼
$SESSION = $_POST["SESSION"];
$v_code = $_POST["v_code"];
if($code == $SESSION){
    echo "<script>";
    echo "alert('你輸入的驗證碼正確');";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('你輸入的驗證碼錯誤');";
    echo "</script>";
    // echo $_POST["SESSION"]."You <br>";
    // echo $_POST["v_code"]."Me";
}

$dsn="mysql:host=localhost;charset=utf8;dbname=funtech"; //設定資料庫參數
$pdo=new PDO($dsn,'root',''); //連線資料庫
// insert into 新增
// update set 修改
// delete 刪除
// SELECT 查詢
$sql="SELECT count(*) FROM `users` WHERE `account`='{$_POST['account']}' AND `password`='{$_POST['password']}'";
$result=$pdo->query($sql)->fetchColumn();
if($result>0){
    session_start();
    $_SESSION['user']=$_POST['account'];
    // header("location:index.php");
    echo "<script>";
    echo "alert('歡迎登入');";
    echo "location.href='index.php'";
    echo "</script>";
    // echo "<script>location.href='index.php'</script>";
}else{
    echo "<script>";
    echo "alert('你輸入的帳號密碼錯誤,請重新輸入');";
    echo "location.href='login.php'";
    echo "</script>";
}



