<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            border-collapse: collapse;
            border:3px double #999;

        }

        td{
            border:1px solid #999;
            padding:5px 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php 

if(isset($_GET['month']) && isset($_GET['year'])){
    $month=$_GET['month'];
    $year=$_GET['year'];
}else{
    $month=date('m');
    $year=date("Y");
}

echo "<h3 style='text-align:center'>";
echo date("西元{$year}年{$month}月");
echo "</h3>";
$thisFirstDay=date("{$year}-{$month}-1");
$thisFirstDate=date('w',strtotime($thisFirstDay));
$thisMonthDays=date("t");
$thisLastDay=date("{$year}-{$month}-$thisMonthDays");
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
$firstCell=date("Y-m-d",strtotime("-$thisFirstDate days",strtotime($thisFirstDay)));
?>
<div style='width:264px;display:flex;margin:auto;justify-content:space-between'>
<?php
$nextYear=$year;
$prevYear=$year;
if(($month+1)>12){
    $next=1;
    $nextYear=$year+1;
}else{
    $next=$month+1;
}

if(($month-1)<1){
    $prev=12;
    $prevYear=$year-1;
}else{
    $prev=$month-1;
}

?>
    <a href="?year=<?=$prevYear;?>&month=<?=$prev;?>">上一個月</a>
    <a href="?year=<?=$nextYear;?>&month=<?=$next;?>">下一個月</a>
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
for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        $addDays=7*$i+$j;
        $thisCellDate=strtotime("+$addDays days",strtotime($firstCell));
        if(date('w',$thisCellDate)==0 || date('w',$thisCellDate)==6){
            echo "<td style='background:pink'>";

        }else{
            echo "<td>";
        }
        if(date("m",$thisCellDate)==date("m",strtotime($thisFirstDay))){
            echo date("j",$thisCellDate);
        }
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>    


</body>
</html>