<?php
date_default_timezone_get('Asia/Taipei');
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){

    setcookie("success","angielee",time()+60);
    // $_SESSION['success']=$_POST['acc'];
    // 用SESSION儲存
    // 記錄acc的值也可以知道他是誰,不是只有success=1

    header("location:member.php");

}else{
    $_SESSION['error']="帳號或密碼錯誤";
    header("location:login.php");
}
?>