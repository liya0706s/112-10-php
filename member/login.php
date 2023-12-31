<?php
include_once "session.php";
?>

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

        .login-input {
            margin: 10px;
        }

        .login-input input[type="text"] {
            border: blue 1px solid;
        }

        .login-input input {
            font-size: 20px;
            padding: 5px;
        }

        .btn {
            text-align: center;
            margin-top: 15px;
        }

        .btn input[type="reset"],
        .btn input[type="submit"] {
            padding: 5px 10px;
            border: 1px solid green;
            border-radius: 5px;
            margin: 10px;
        }
    </style>
</head>

<body>
<?php
include_once "header.php";
?>
    <div class="login-block">
        <?php
        if (isset($_SESSION['error'])) {
            echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
            echo $_SESSION['success']."歡迎你!";
        }else{
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

    <?php
        }
    ?>

</body>

</html>