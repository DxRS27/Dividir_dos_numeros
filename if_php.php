<?php

if (isset($_POST['num1'])) {

    $Num1 = $_POST['num1'];
    $Num2 = $_POST['num2'];

if ($Num2 >= 1) {
    $total_num = $Num1 / $Num2;
    
    echo " la divicion es ". $total_num;
} else {
    echo " la divicion no es posible ";

    }
}
?>