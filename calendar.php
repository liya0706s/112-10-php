<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table,
        th,
        tr,
        td {
            border-collapse: collapse;
            border: 3px solid #999;
        }

        td {
            border: 1px solid #999;
            border-collapse: collapse;
            padding: 5px 10px;
            /* padding抓 1:2或1:3 */
            text-align: center;
            /* emmet:tac+tab */
        }

        a {
            display: inline;
            margin-bottom: 10px;
        }

        .weekend {
            background: pink;
        }

        .current-date {
            font-weight: bold;
        }
    </style>
</head>

<?php

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

<div style='width:264px;display:flex;margin:auto;justify-content:space-between'>

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

<table style='width:264px;display:block;margin:auto'>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>

    <?php
    for ($i = 0; $i < $weeks; $i++) {
        // 外部迴圈，用於迭代每一周
        // $weeks 是指這個的周數，用於確定要生成多少行
        echo "<tr>";
        // 在每週的開始，建立一個新的表格行
        for ($j = 0; $j < 7; $j++) {
            // 這是內部迴圈，用於迭代一週中的每一天（星期日到星期六）
            $addDays = 7 * $i + $j;
            // 以上這行代碼計算了$thisCellDate 的日期是在這個月的第幾天
            // 這是通過將星期數（$j）乘以7（一週七天）再加上週數（$i）來計算的
            $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
            // 計算 $thisCellDate，即表格單元格的日期
            // 它是從 $firstCell 開始的一個日期，加上 $addDays 天，以得到正確的日期
            // 以上兩行代碼的目的是計算:每個表格單元格中應該顯示的日期，以便填充整個月份的日曆
            // 以確保日曆顯示的日期是正確的

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

    // if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
    //     echo "<td style='background:pink'>";
    // } else {
    //     echo "<td>";
    // 如果不是週末，則建立一個標準的表格單元格
    // }

    // if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
    //     echo date("j", $thisCellDate);
    // 顯示 $thisCellDate 中的日期（月份中的第幾天）
    //         }
    //         echo "</td>";
    //     }
    //     echo "</tr>";
    // }

    echo "</table>";

    ?>