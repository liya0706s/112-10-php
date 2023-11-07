<?php
$Weekday = gmdate("l");
switch ($Weekday) {
    case "Sunday":
        $Bg = "../calendar_img/jan.jpeg";
        $Weekdayname = "星期日($Weekday)";
        break;
    case "Monday":
        $Bg = "../calendar_img/feb.jpeg";
        $Weekdayname = "星期一($Weekday)";
        break;
    case "Tuesday":
        $Bg = "../calendar_img/983.jpeg";
        $Weekdayname = "星期二($Weekday)";
        break;
    case "Wednesday":
        $Bg = "../calendar_img/march.jpeg";
        $Weekdayname = "星期三($Weekday)";
        break;
    case "Thursday":
        $Bg = "../calendar_img/april.jpeg";
        $Weekdayname = "星期四($Weekday)";
        break;
    case "Friday":
        $Bg = "../calendar_img/xmas.jpeg";
        $Weekdayname = "星期五($Weekday)";
        break;
    case "Saturday":
        $Bg = "../calendar_img/may.jpeg";
        $Weekdayname = "星期六($Weekday)";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-repeat: no-repeat;
        }
    </style>
</head>
<body background="<?php echo $Bg;?>">
    <p>今天為 <?php echo gmdate("Y/n/j"); ?> <?php echo $Weekdayname; ?> </p>
    <p>今天的背景圖為 <?php echo $Bg; ?> </p>
</body>
</html>
