<?php
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
    header("location:member.php?success=1");
}else{
    header("location:login.php?m=帳號或密碼錯誤");
}
?>