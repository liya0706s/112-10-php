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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
            
        }

        h1 {
            /* font-family: Arial, Helvetica, sans-serif; */
            font-size: 50px;
            text-align: center;
            color: brown;
            /* line-height: 1.4; */
            margin-top: 35;
            margin-bottom: 35;
        }

        body {
            /* background-image: url(/calendar_img/
             echo $Bg; 
            ); */
            background-size: cover;
            background-image: url(./calendar_img/background-image-60.jpg);
            background-size: cover;
        }

        .container {
            width: 100%;
            /* background-color: #DFDFDF; */
            background-color: transparent;
            height: 85vh;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
            align-items: center;
            justify-content: space-evenly;
            margin-top: 0;
        }

        .table {
            background-color: white;
            width: 600px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .th {
            font-weight: bold;
            /* font-size: 50px; */
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
            font-size: 20px;
        }

        td:hover {
            background-color: lightyellow;
            color: lightslategray;
        }

        .nav {
            display: flex;
            width: 100%;
            margin:0;
        }

        .form {
            /* background-color: lightcyan; */
            width: 50%;
            height: 5vh;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            /* text-align: center; */   
        }

        [type="text"]{
            height: 2.5vh;
        }

        [type="submit"]{
            height: 3vh;
            font-size: 15.5px;
        }
        

        .home {
            /* background-color: brown; */
            display: flex;
            align-items: center;
            justify-content: center;
            /* margin: auto; */
            width: 50%;
            height: 2vh;
        }

        .home > a {
            text-decoration: none;
            font-size: 20px;
            border: 1px #f79400 solid;
            border-radius: 10px;
            padding: 5px;
            color: white;
            background-color: #f79400;
        }


        a {
            display: inline;
            margin-bottom: 10px;
        }

        /* 行事曆三人組 */
        .table_tri {
            /* background-color: lightgreen; */
            /* width: 700px; */
            display: flex;
            justify-content: space-around;
            align-items:center;
        }

        /* 行事曆加上表頭 */
        .table_two {
            display: flex;
            flex-direction: column;
        }

        /* table表頭 */
        h2 {
            text-align: center;
            margin: 5px;
            font-size: 40px;
        }

        /* 按鈕左右框 */
        .bt_left, .bt_right{
            background-color: #f79400;
            height:50vh;
            /* width: 30px; */
            display: flex;
            align-items: center;
        }


        /* 按鈕左右a連結 */
        .bt_right > a,
        .bt_left > a {
            font-size: 40px;
            font-weight: bolder;
            color: #C5C6C7;
            text-align: center;
        }
        
       
        /* 圖片 */
        .asider {
            background-color: red;
            /* align-items: center; */
            /* padding: 20px; */
            height: 60vh;
            box-sizing: border-box;
        }


        .weekend {
            background: pink;
        }

        .current-date {
            font-weight: bolder;
            font-size: 20px;
        }

        .current-date:hover {
            color: black; 
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

    // echo "<h1 style='text-align:center'>";
    // echo date("西元{$year}年{$month}月");
    // echo "</h1>";

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
    <h1 class="header">
        Calendar
    </h1>
    <nav class="nav">
        <div class="form">
            <form action="check.php" method="get">
                <input type="text" placeholder="年份" name="year">
                <input type="text" placeholder="月份" name="month">
                <button type="submit">Search
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <!-- <input type="submit" value="搜尋"> -->
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
                <a href="?year=<?= $prevYear; ?>&month=<?= $prev; ?>">
                    <i class="fa-solid fa-circle-left"></i>
                </a>

            </div>
            <div class="table_two">
                <h2 class="title">
                    <?php
                    if (isset($_GET['month']) && isset($_GET['year'])) {
                        $month = $_GET['month'];
                        $year = $_GET['year'];
                        // 使用 mktime 函數根據提供的月份和年份來建立日期
                        // mktime(h, m, s, month, day, y)
                        // 從 URL 參數中獲取的月份和年份。
                        // 這將建立一個時間戳，對應於指定的月份和年份的第一天（日期設置為 1，時間設置為午夜）
                        $date = mktime(0, 0, 0, $month, 1, $year);
                        echo date('F Y', $date);
                    } else {
                        // 如果未提供 URL 參數，則使用當前日期 
                        echo date('F Y');
                    }                
                    ?>
                </h2>

                <div class="table">
                    <table>
                        <tr class="th">
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
                                if (date('m', $thisCellDate) == date('m', strtotime($thisFirstDay))) {
                                    if ($month) {
                                        
                                    }

                                    if ($isWeekend) {
                                        $tdClass .= "weekend";
                                    }
                                    if ($todayDate) {
                                        $tdClass .= " current-date";
                                    }
                                }

                                echo "<td class='$tdClass'>" . date("j", $thisCellDate) . "</td>";
                                // $thisCellDate要在當月才出現??
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

                <a href="?year=<?= $nextYear; ?>&month=<?= $next; ?>">
                    <i class="fa-solid fa-circle-right"></i>
                </a>
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