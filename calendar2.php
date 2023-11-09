<?php

if (isset($_GET['month'])) {
    $month = $_GET['month'];
} else {
    $month = date('m');
}

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
    case "04":
        $Bg = "april.jpeg";
        // $Weekdayname = "星期三($Weekday)";
        break;
    case "05":
        $Bg = "may.jpeg";
        // $Weekdayname = "星期四($Weekday)";
        break;
    case "06":
        $Bg = "june.jpeg";
        // $Weekdayname = "星期五($Weekday)";
        break;
    case "07":
        $Bg = "july.jpeg";
        // $Weekdayname = "星期六($Weekday)";
        break;
    case "08":
        $Bg = "aug.jpeg";
        // $Weekdayname = "星期六($Weekday)";
        break;
    case "09":
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
        * {
            font-family: 'Courier New', Courier, monospace;
        }

        body {
            /* background-image: url(/calendar_img/
             echo $Bg; 
            ); */
            background-size: cover;
        }

        .container {
            width: 100%;
            background-color: #DFDFDF;
            /* background-image: url('https://picsum.photos/id/25/5000/3333/'); */
            height: 85vh;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
            align-items: center;
            justify-content: space-evenly;
        }

        .table {
            /* background-color: lavender; */
            width: 600px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        table,
        tr,
        td {
            background-color: white;
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
            background-color: lightyellow;
            color: lightslategray;
        }

        /* .nav {
            display: flex;
            justify-content: space-around;
        } */

        a {
            display: inline;
            margin-bottom: 10px;
        }

        .table_tri {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .bt_left {
            /* background-color: lightgoldenrodyellow; */
        }

        .bt_right {
            /* background-color: lightpink; */
        }

        .bt_right>a,
        .bt_left>a {
            text-decoration: none;
            font-size: 40px;
            font-weight: bolder;
            color: whitesmoke;
        }

        .asider {
            /* background-color: lightseagreen; */
            align-items: center;
            padding: 20px;
        }

        .form {
            text-align: center;
        }

        .weekend {
            background: pink;
        }

        .current-date {
            font-weight: bolder;
            font-size: 20px;
        }

        .current-date:hover{
            color:black;
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
    echo "</h1>";
    $thisFirstDay = date("{$year}-{$month}-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    $thisMonthDays = date("t");
    $thisLastDay = date("{$year}-{$month}-$thisMonthDays");
    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    ?>

    <!-- <div class="nav"> -->
    <!-- <?php
            // $nextYear = $year;
            // $prevYear = $year;
            // if (($month + 1) > 12) {
            //     $next = 1;
            //     $nextYear = $year + 1;
            // } else {
            //     $next = $month + 1;
            // }

            // if (($month - 1) < 1) {
            //     $prev = 12;
            //     $prevYear = $year - 1;
            // } else {
            //     $prev = $month - 1;
            // }
            ?> 
        <a href="?year=<?= $prevYear; ?>&month=<?= $prev; ?>">上個月</a>

        <a href="?year=<?= $nextYear; ?>&month=<?= $next; ?>">下個月</a>
    </div> -->
    <!-- 原本是上下個月的a連結在網頁上方 -->

    <nav class="nav">
        <div class="form">
            <form action="check.php" method="get">
                <input type="text" placeholder="年份" name="year">
                <input type="text" placeholder="月份" name="month">
                <input type="submit" value="搜尋">
            </form>
        </div>

        <div class="home">
            <a href="calendar2.php">TODAY</a>
        </div>
    </nav>


    <div class="container">
        <div class="table_tri">
            <div class="bt_left">
                <?php
                $nextYear = $year;
                $prevYear = $year;
                // if (($month + 1) > 12) {
                //     $next = 1;
                //     $nextYear = $year + 1;
                // } else {
                //     $next = $month + 1;
                // }

                if (($month - 1) < 1) {
                    $prev = 12;
                    $prevYear = $year - 1;
                } else {
                    $prev = $month - 1;
                }
                ?>
                <a href="?year=<?= $prevYear; ?>&month=<?= $prev; ?>"> &lArr; </a>

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

                            // 以下檢查是否為當日日期，如果是，添加 CSS 樣式在style中
                            $todayDate = date("Y-m-d", $thisCellDate) === date("Y-m-d");

                            $isWeekend = date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6;

                            // 套用 CSS 類別
                            $tdClass = "";
                            if ($isWeekend) {
                                $tdClass .= "weekend";
                            }
                            if ($todayDate) {
                                $tdClass .= " current-date";
                            }

                            echo "<td class='$tdClass'>" . date("j", $thisCellDate) . "</td>";
                        }
                        echo "</tr>";
                    }


                    //         if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                    //             echo "<td style='color:red'>";
                    //         } else {
                    //             echo "<td>";
                    //         }

                    //         if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                    //             echo date("j", $thisCellDate);
                    //             // 月份中的日期
                    //         }
                    //         echo "</td>";
                    //     }
                    //     echo "</tr>";
                    // }
                    echo "</table>";
                    ?>
            </div>

            <div class="bt_right">
                <?php
                $nextYear = $year;
                $prevYear = $year;
                if (($month + 1) > 12) {
                    $next = 1;
                    $nextYear = $year + 1;
                } else {
                    $next = $month + 1;
                }

                // if (($month - 1) < 1) {
                //     $prev = 12;
                //     $prevYear = $year - 1;
                // } else {
                //     $prev = $month - 1;
                // }
                ?>

                <a href="?year=<?= $nextYear; ?>&month=<?= $next; ?>"> &rArr; </a>
            </div>
        </div>

        <asider class="asider">
            <img src="/calendar_img/<?php echo $Bg; ?>" alt="" width="850px">
        </asider>
    </div>

    <footer class="footer">
        footer
    </footer>

</body>