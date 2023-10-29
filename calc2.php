<?php

if (!empty($_GET)) {
    $height = $_GET['height'];
    $weight = $_GET['weight'];

    echo "身高:" . $height;
    echo "體重:" . $weight;
}else{
    echo "請輸入正確資訊";
}

?>