<header>
    <a href="index.php">回首頁</a>
    
<?php
if(isset($_SESSION['success'])){
?>
    <a href="logout.php">登出</a>
    <a href="member.php">會員中心</a>
<?php
}else{
?>
    <a href="login.php">登入</a>
<?php
}    
?>
</header>