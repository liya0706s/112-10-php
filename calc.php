<?php
if (!empty($_GET)) {
// 判斷是不是空的，weight非數字狀態，顯示沒有資料
    $weight = (!empty($_GET['weight']))?$_GET['weight']:'沒有體重資料';
    $height = (!empty($_GET['height']))?$_GET['height']:'沒有身高資料';

    $bmi=round($weight/($height*$height),2);
    
    // echo "體重:" . $weight;
    // echo "身高:" . $height;
    // echo "<br>";
    // echo "BMI:". $bmi;

    header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");
    
}else{
    echo "請輸入必要的資訊~";
}

?>