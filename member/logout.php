<?php
include_once "header.php";
session_start();
unset($_SESSION['success']);
header("location:login.php");
// 回首頁，這邊是登入頁