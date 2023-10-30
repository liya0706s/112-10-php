<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
        .login-block{
            padding:30px 40px;
            border:1px solid #999;
            box-shadow: 2px 2px 15px #999;
            margin:10px auto;
            width:280px;
        }
        .login-input {
            margin: 10px;
        }
        .login-input input[type='text']{
            border:1px solid blue;
        }
        .login-input input{
            font-size:20px;
            padding:5px;
        }
        .btn{
            text-align: center;
            margin-top:15px;
        }
        .btn input[type='reset'],
        .btn input[type='submit']{
            padding:5px 10px;
            border:1px solid green;
            border-radius: 5px;
            margin:5px;
        }
    </style>
</head>
<body>
<div class='login-block'>
    <?php
    date_default_timezone_set("Asia/Taipei");
    if(isset($_COOKIE['error'])){
        echo "<span style='color:red'>".$_COOKIE['error']."</span>";
        unset($_COOKIE['error']);
    }
    
    if(isset($_COOKIE['login']) && !empty($_COOKIE['login'])){
        echo $_COOKIE['login']." 歡迎你";
        echo "<a href='logout.php'>登出</a>";
    }else{
?>
<form action="check.php" method="post">
        <div class='login-input'>
            <label for="acc">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div class='login-input'>
            <label for="pw">密碼:</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div class='btn'>
            <input type="submit" value="登入">
            <input type="reset" value="重置">
        </div>
    </form>
<?php
    }

    ?>
    
</div>    
</body>
</html>