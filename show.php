<?php

if(!empty($_GET)){

    if($_GET['account']!="" &&  $_GET['password']!=""){
        $account=$_GET['account'];
        $password=$_GET['password'];

        header("location:login.php?acc=$account&pw=$password");
       
    }else{
        header("location:login.php?m=請輸入合法的帳密");
    }

}else{  

    header("location:login.php?m=請輸入必要的帳密");

}

?>