<?php

if (isset($_GET['month']) && !empty($_GET['month'])) {
    $month = $_GET['month'];
} else {
    $month = date('m');
}

$month = date('m');
switch ($month) {
    case "1":
        $Bg = "jan.jpeg";
        // $Weekdayname = "星期日($Weekday)";
        break;
    case "2":
        $Bg = "feb.jpeg";
        // $Weekdayname = "星期一($Weekday)";
        break;
    case "3":
        $Bg = "march.jpeg";
        // $Weekdayname = "星期二($Weekday)";
        break;
    case "4":
        $Bg = "april.jpeg";
        // $Weekdayname = "星期三($Weekday)";
        break;
    case "5":
        $Bg = "may.jpeg";
        // $Weekdayname = "星期四($Weekday)";
        break;
    case "6":
        $Bg = "june.jpeg";
        // $Weekdayname = "星期五($Weekday)";
        break;
    case "7":
        $Bg = "july.jpeg";
        // $Weekdayname = "星期六($Weekday)";
        break;
    case "8":
        $Bg = "aug.jpeg";
        // $Weekdayname = "星期六($Weekday)";
        break;
    case "9":
        $Bg = "sep.jpeg";
        // $Weekdayname = "星期六($Weekday)";
        break;
    case "10":
        $Bg = "oct.jpeg";
        // $Weekdayname = "星期六($Weekday)";
        break;
    case "11":
        $Bg = "nov.jpeg";
        // $Weekdayname = "星期六($Weekday)";
        break;
    case "12":
        $Bg = "dec.jpeg";
        // $Weekdayname = "星期六($Weekday)";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上萬年曆</title>
    <style>
        body {
            background-image: url(/calendar_img/<?php echo $Bg; ?>);
        }

        .container {
            width: 80%;
            background-color: lightgray;
            /* background-image: url('https://picsum.photos/id/25/5000/3333/'); */
            height: 85vh;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
            /* justify-content: center; */
            align-items: center;
            /* justify-content: space-around; */
        }

        table {
            display: flex;
        }

        table,
        tr,
        td {
            background-color: white;
            border-collapse: collapse;
            /* border: 1px solid lightslategray; */
            margin: auto;
            text-align: center;
        }

        td {
            width: 80px;
            height: 50px;
            /* border: 1px solid #999; */
            /* border-collapse: collapse; */
            padding: 5px 5px;
            /* padding 內距 上下5px 左右5px */
            text-align: center;
        }

        td:hover {
            background-color: lightblue;
            color: lightslategray;
        }

        .nav {
            display: flex;
            justify-content: space-around;
        }

        a {
            display: inline;
            margin-bottom: 10px;
        }

        .bt_left {
            background-color: lightgoldenrodyellow;
            width: 75px;
            height: 75px;
        }

        .bt_right {
            background-color: lightseagreen;
            width: 75px;
            height: 75px;
        }

        @font-face {
            font-family: 'cwTeXYen';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/ea/cwtexyen/v3/cwTeXYen-zhonly.eot);
            src: url(//fonts.gstatic.com/ea/cwtexyen/v3/cwTeXYen-zhonly.eot?#iefix) format('embedded-opentype'),
                url(//fonts.gstatic.com/ea/cwtexyen/v3/cwTeXYen-zhonly.woff2) format('woff2'),
                url(//fonts.gstatic.com/ea/cwtexyen/v3/cwTeXYen-zhonly.woff) format('woff'),
                url(//fonts.gstatic.com/ea/cwtexyen/v3/cwTeXYen-zhonly.ttf) format('truetype');
        }
    </style>
</head>

<body>
    <?php

    if (isset($_GET['month']) && isset($_GET['year'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
    } else {
        $month = date('m');
        $year = date('Y');
    }

    echo "<h1 style='text-align:center'>";
    echo date("西元{$year}年{$month}月");
    echo "</h3>";
    $thisFirstDay = date("{$year}-{$month}-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    $thisMonthDays = date("t");
    $thisLastDay = date("{$year}-{$month}-$thisMonthDays");
    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    ?>

    <div class="nav">
        <!-- style='width:264px;display:flex;margin:auto;justify-content:space-between' -->

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
        <div class="bt_left">
            123
        </div>
        <div class="table">
            <table>
                <tr>
                    <td style='color:red'>SUN</td>
                    <td>MON</td>
                    <td>TUE</td>
                    <td>WED</td>
                    <td>THU</td>
                    <td>FRI</td>
                    <td style='color:red'>SAT</td>
                </tr>

                <?php
                for ($i = 0; $i < $weeks; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 7; $j++) {
                        $addDays = 7 * $i + $j;
                        $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
                        if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                            echo "<td style='color:red'>";
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
        </div>
        <asider class="bt_right">
            456
        </asider>
    </div>
    <footer class="footer">
        footer
    </footer>

</body>