<?php
include_once "session.php";

if($_POST['acc']=='admin' && $_POST['pw']=='1234'){

    $_SESSION['success']=$_POST['acc'];
    header("location:member.php");

}else{
    $_SESSION['error']="帳號或密碼錯誤";
    header("location:login.php");
}
?>