<?php
$city_name1 = ["Đà Nẳng", "Hà Nội", "TP.Hồ Chí Minh"];
$city_name2= array("Huế", "Hải Phòng", "Đà Lạt");

function showname($city_name2){
        foreach ($city_name2 as $key => $name)
    {
        echo $name . '<br/>';
    }
};
//gọi hàm
showname($city_name1);
echo '<br/>';
echo 'name 2'. '<br/>';
showname($city_name2);
echo '<br/>';

$ageOfStudent = ["Trang" => 23, "Hong" => 18, "Huy" => 22];


$classA = [
    ["Trang", 23, "Female"],
    ["Hai", 20, "Male"],
    ["Anh", 22, "Female"]
];

// mảng đa chiều.
$customer1 = [
    ["Minh",20, "Hà Nội"],
    ["My",21,"Huế"],
    ["Nam",22,"TP.Hồ Chí Minh"]
];
$customers = array(
    array(
        '1' => 'nguyễn văn A',
        '2' => ' ng Huế',
        '3' => 'Đức'
    ),
    array(
        '4' => 'nguyễn văn B ',
        '5' => ' Hạnh',
        '6' => 'Rin '
    )
    );
    // echo '<pre>';

    function showcustomer($customers){
    foreach ($customers as $key=> $value){
         print_r($value) ;
         echo '<br/>';
        foreach($value as $k=> $v){
            echo $v.'<br/>';
        }
    }
};
showcustomer($customers);
echo "<br/>";
showcustomer($customer1);
    // echo '<pre/>';

    // duyệt mảng đa chiều .
$customerinfo = array(
    array(
        'name' => 'nguyễn văn A',
        'addr' => 'Huế',
        'phone' => '123456789'
    ),
    array(
        'name' => 'nguyễn văn B',
        'addr' => '.Huế',
        'phone' => '123456789'
    ),
    array(
        'name' => 'nguyễn văn C',
        'addr' => 'Hà Nội',
        'phone' => '123456789'
    )
);


echo '<ul>';
foreach ($customerinfo as $key => $customer)
{
    echo '<li>';
    echo 'Số TT: '. ++$key . '<br/>';
    echo 'Name: ' . $customer['name'] . '<br/>';
    echo 'addr: ' . $customer['addr'] . '<br/>';
    echo 'phone: ' . $customer['phone'] . '<br/>';
    
    echo '</li>';
}
echo '</ul>';
?>