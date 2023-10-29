<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
</head>

<body>
    <h2>計算BMI</h2>
    <form action="calc2.php" method="get">
    <div>
        <label for="height">身高(公尺):</label>
        <input type="text" name="height" id="height">
    </div>
    <div>
        <label for="weight">體重(公斤):</label>
        <input type="text" name="weight" id="weight">
    </div>
    <div>
        <input type="submit" value="計算BMI">
        <input type="reset" value="重置">
    </div>

    <!-- 體重（公斤）除以身高（公尺）的平方 -->

</body>
</form>

</html>