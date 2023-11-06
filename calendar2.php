<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        .container {
            background-color: lightgray;
            width: 80%;
            display: flex;
            flex-wrap: wrap;
            margin:auto;
            justify-content: center;
        }
        table{
            display: flex;
        }

        .asider {
        }

        .asider2 {
            margin:auto;
        }

        table,
        th,
        tr,
        td {
            background-color: white;
            border-collapse: collapse;
            border: 1px solid #999;
            margin: auto;
            text-align: center;
        }

        tr {
            padding: 5px 10px;
        }

        td {
            /* border: 1px solid #999; */
            /* border-collapse: collapse; */
            padding: 5px 10px;
            /* padding抓 1:2或1:3 */
            text-align: center;
            /* emmet:tac+tab */
        }

        a {
            display: inline;
            margin-bottom: 10px;
        }
    </style>
</head>

<?php

header("Cache-Control: no-cache, must-revalidate");

if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
} else {
    $month = date('m');
    $year = date('Y');
}

echo "<h3 style='text-align:center'>";
echo date("西元{$year}年{$month}月");
echo "</h3>";
$thisFirstDay = date("{$year}-{$month}-1");
$thisFirstDate = date('w', strtotime($thisFirstDay));
$thisMonthDays = date("t");
$thisLastDay = date("{$year}-{$month}-$thisMonthDays");
$weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
$firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
?>

<div style='width:264px;display:flex;margin:auto;justify-content:space-between' class="mid">

    <?php
    $nextYear = $year;
    $prevYear = $year;
    if (($month + 1) > 12) {
        $next = 1;
        $nextYear = $year + 1;
    } else {
        $next = $month + 1;
    }

    if (($month - 1) < 1) {
        $prev = 12;
        $prevYear = $year - 1;
    } else {
        $prev = $month - 1;
    }
    ?>
    <a href="?year=<?= $prevYear; ?>&month=<?= $prev; ?>">上個月</a>
    <a href="?year=<?= $nextYear; ?>&month=<?= $next; ?>">下個月</a>
</div>

<div class="container">
    <table style='width:264px;margin:auto' class="table">
        <tr>
            <td>SUN</td>
            <td>MON</td>
            <td>TUE</td>
            <td>WED</td>
            <td>THUR</td>
            <td>FRI</td>
            <td>SAT</td>
        </tr>

        <?php
        for ($i = 0; $i < $weeks; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                $addDays = 7 * $i + $j;
                $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
                if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                    echo "<td style='background:pink'>";
                } else {
                    echo "<td>";
                }

                if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                    echo date("j", $thisCellDate);
                    // 月份中的第幾天，没有補零	1 到 31
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <asider class="asider">
            <img src="./calendar_img/holiday.jpeg" alt="" width="400" height="450">
        </asider>
        <div style=width:264px class="asider2">
            <?php
            echo date("G:i:s");
            ?>
        </div>
</div>

<script>
    function updateTime() {
        var now = new Date();
        var timeString = now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
        document.getElementById("time").innerHTML = timeString;
    }

    setInterval(updateTime, 1000);
</script>

<div id="time"></div>