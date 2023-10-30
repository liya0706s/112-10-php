<?php
date_default_timezone_set("Asia/Taipei");
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){

    setcookie("login","mackliu",time()+60);

    header("location:member.php");

}else{
    setcookie("error","帳號或密碼錯誤,請重新登入",time()+5);
    header("location:login.php");
}
?>