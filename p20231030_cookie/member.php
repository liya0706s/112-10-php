<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
    echo "<h3>登入成功</h3>";
    echo "<a href='login.php'>回登入頁</a>";
    echo "<br>";
    echo "<a href='logout.php'>登出</a>";
}else{
    setcookie("error","帳號或密碼錯誤，重新登入",time()+5);
    // $_SESSION['error']="沒有登入相關驗證，非法登入";
    header("location:login.php");
    // 沒有session
    
}
?>

</body>
</html>