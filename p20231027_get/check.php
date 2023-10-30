<?php
session_start();

if($_POST['acc']=='admin' && $_POST['pw']=='1234'){

    // 用SESSION儲存
    // 記錄acc的值也可以知道他是誰,不是只有success=1

    header("location:member.php?success=1");

}else{
    header("location:login.php?m=帳號或密碼錯誤");
}
?>