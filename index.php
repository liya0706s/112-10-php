<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網頁傳值</title>
</head>

<body>
    <h2>GET</h2>
    <form action="">
        <div>
            <label for="acc">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pw">密碼:</label>
            <input type="password" name="pw" name="pw">
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </form>

    <h2>POST</h2>
    <form action="?" method="post">
        <div>
            <label for="acc">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pw">密碼:</label>
            <input type="password" name="pw" name="pw">
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </form>

    <h2>檔案上傳</h2>
    <form action="?" method="post" enctype="multipart/form-data" >
        <div>
            <label for="acc">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pw">密碼:</label>
            <input type="password" name="pw" name="pw">
        </div>
        <div>
            <label for="img">檔案:</label>
            <input type="file" name="img" id="img">
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </form>
</body>

</html>