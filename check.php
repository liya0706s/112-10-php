<?php
// 首先檢查 $_GET['month'] 和 $_GET['year'] 是否存在。
// 只有在這兩個值都存在的情況下，我們才嘗試獲取它們的值

$year = $_GET['year'];
$month = $_GET['month'];

if (is_numeric($year) && is_numeric($month)) {
    // 檢查年份範圍（0 到 9999）
    if ($year >= 0 && $year <= 9999) {
        // 檢查月份範圍（1 到 12）
        if ($month >= 1 && $month <= 12) {
            // 年份和月份都在合法範圍內
            // 在這裡執行你的其他操作
            header("location:calendar2.php?year=$year&month=$month");
        } else {
            // 月份不在合法範圍內
            header("location:calendar2.php");
        }
    } else {
        // 年份不在合法範圍內
        header("location:calendar2.php");
    }
} else {
    // 輸入不是有效的數字
    header("location:calendar2.php");
}
