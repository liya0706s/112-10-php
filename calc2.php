<?php
if(!empty($_GET)){
    $height = (!empty($_GET['height']))?$_GET['height']:'請輸入正確的身高';
    $weight = (!empty($_GET['weight']))?$_GET['weight']:'請輸入正確的體重';

    // 體重（公斤）除以身高（公尺）的平方 

    $bmi=round($weight/($height*$height),2);

    echo "身高:" . $height;
    echo "<br>";
    echo "體重:" . $weight;
    echo "<br>";
    echo "BMI值:". $bmi;

}else{
    echo "請輸入正確的值";
}
    

?>