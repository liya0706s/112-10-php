<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
<?php
// 登入是否成功，變數可以自取$_GET['自取名稱']    
if($_GET['success']==1){
    echo "<h3>登入成功</h3>";
    echo "<a href='login.php?success=1'>回登入頁</a>";
}else{
    header("location:login.php");
    // echo "沒有登入相關驗證，非法登入";
}
?>

</body>
</html>