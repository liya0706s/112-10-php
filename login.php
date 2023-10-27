<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
        h1 {
            text-align: center;
        }
        .login-block {
            padding: 30px 40px;
            border: 1px solid #999;
            box-shadow: 2px 2px 15px #999;
            margin: 10px auto;
            /* 左右auto 置中 */
            width: 280px;
        }

        .login-input{
            margin: 10px;
        }
        .login-input input[type="text"]{
            border:blue 1px solid;
        }

        .login-input input{
            font-size: 20px;
            padding:5px;
        }
        .btn{
            text-align: center;
            margin-top: 15px;
        }

        .btn input[type="reset"], .btn input[type="submit"]{
            padding: 5px 10px;
            border:1px solid green;
            border-radius: 5px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <h1>請登入</h1>
        <div class="login-block">

        <?php
        if(isset($_GET['m'])){
            echo "<span style='color:red'>".$_GET['m']."</span>";
        }
        if(isset($_GET['success'])&& $_GET['success']==1){
            echo "<span style='color:pink'>"."歡迎你!"."</span>";
        }

        ?>


            <form action="check.php" method="post">
                <div class="login-input">
                    <label for="acc">帳號:</label>
                    <input type="text" name="acc" id="acc">
                </div>
                <div class="login-input">
                    <label for="pw">密碼:</label>
                    <input type="password" name="pw" name="pw">
                </div>
                <div class="btn">
                    <input type="submit" value="送出">
                    <input type="reset" value="重置">
                </div>
            </form>
        </div>
    
</body>

</html>