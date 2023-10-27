<?php
if($_POST['acc']=='admin'&& $_POST['pw']=='1234'){
    echo "登入成功!";
}else{
    echo "帳號密碼錯誤，請重新登入。";
}
?>