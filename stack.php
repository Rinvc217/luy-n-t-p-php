<?php
// Stack() là 1 cấu trúc dữ liệu, hoạt động theo cơ chế last in - first out (vào sau ra trước);
 function stack(){
    $number1 = array("");
    $number2 = array("");
    for ( $i = 1; $i <= 5; $i++ ){
    array_push( $number1,$i);
}
foreach ($number1 as $key=>$num1){
    echo $num1 . ',';
}
echo '<br/>';
$length = count($number1);
    for ($i = 0; $i < $length ; $i++)
    {
        // array_unshift($number2,$i);
        $number2 = array_pop($number1);
        echo $number2 . ' , ' ;
    }
    
    // foreach ($number2 as $key=>$num2){
    //     echo $num2 . ',';
    // }
}
 stack();
//  stack($number2);



?>