<?php
// khai báo mảng 1 chiều;
$city_name1 = ["Huế", "Đà Nẳng", "Quảng Bình"];
$city_name2 = array("Hà Nội", "TP.Hồ Chí Minh","Hải Phòng");

// duyệt mảng 1 chiều
function shownameCity($city_name){
    foreach ($city_name as $name)
    echo $name . '<br/>';
}

// gọi hàm 
shownameCity($city_name1);
echo '<br/>';
echo 'gọi name2';
echo '<br/>';
shownameCity($city_name2);
echo '<br/>';

//khai báo mảng 2 Chiều
$customer1  = [
    ["Minh",20, "Hà Nội"],
    ["My",21,"Huế"],
    ["Nam",22,"TP.Hồ Chí Minh"]
];
$customer2 = array(
        array   (
     'name' => 'nguyễn văn A',
    'age' => ' 17 tuổi ',
    'city' => ' Hà Nội'
    ),
    array(
        'name' =>  'nguyễn Thị Hạnh ',
        'age' =>   ' 25t ',
        'city' =>  'HUế '
    )
    
    );
// duyệt mảng 2 Chiều
function showcustomer($customer){
    foreach ($customer as $key=> $value){
          print_r($value) ;
          echo '<br/>';
        //   echo $value['name'].'<br/>' $value['city];
        }
};
// Gọi hàm
showcustomer($customer1);
echo 'customer2'.'<br/>';
showcustomer($customer2);

//khai báo Mảng Đa Chiều 
$schools = array(
    'Students' => array(
        'SV01' => array(
            'name' => 'Phan Văn Cương',
            'birth' => '10/11/1988',
            'gender' => 'Nam'
        ),
        'SV02' => array(
            'name' => 'Nguyễn Văn Hoàng',
            'birth' => '04/12/1990',
            'gender' => 'Nam'
        )
    ),
    'Teacher' => array(
        'GV01' => array(
            'name' => 'Trần Thiện Thành',
            'birth' => '04/06/1982',
            'gender' => 'Nam'
        ),
        'GV02' => array(
            'name' => 'Nguyễn Văn Hiếu',
            'birth' => '05/10/1981',
            'gender' => 'Nam'
        )
    )
);
echo '<br/>';
// Duyệt Mảng đa Chiều 
foreach ($schools as $key => $value){
    echo $key . '<br/>';
    foreach ($value as $key1 => $name) {
        echo  $key1 . '<br/>';
        echo $name['name'] .'<br/>' .$name['birth'] . '<br/>' ;
    }
}  

echo '<br/>' .'Mảng đa chiều kết hợp Liên Hợp '. '<br/>';
echo '<br/>';
// Khai báo Mảng đa chiều kết hợp Liên Hợp
$schools = array(
    'Schools1'=>array(
        'Students1' => array(
        'SV01' => array(
            'name1' => 'Phan Văn Cương1',
            'birth1' => '10/11/1988',
            'gender1' => 'Nam'
        ),
        'SV02' => array(
            'name1' => 'Nguyễn Văn Hoàng1',
            'birth1' => '04/12/1990',
            'gender1' => 'Nam'
        )
    ),
    'Teacher1' => array(
        'GV01' => array(
            'name1' => 'Trần Thiện Thành1',
            'birth1' => '04/06/1982',
            'gender1' => 'Nam'
        ),
        'GV02' => array(
            'name1' => 'Nguyễn Văn Hiếu1',
            'birth1' => '05/10/1981',
            'gender1' => 'Nam'
            )
        )
    ),
    'Schools2'=>array(
        'Students2' => array(
        'SV01' => array(
            'name2' => 'Phan Văn Cương2',
            'birth2' => '10/11/1988',
            'gender2' => 'Nam'
        ),
        'SV02' => array(
            'name2' => 'Nguyễn Văn Hoàng2',
            'birth2' => '04/12/1990',
            'gender2' => 'Nam'
        )
    ),
    'Teacher2' => array(
        'GV01' => array(
            'name2' => 'Trần Thiện Thành2',
            'birth2' => '04/06/1982',
            'gender2' => 'Nam'
        ),
        'GV02' => array(
            'name2' => 'Nguyễn Văn Hiếu2',
            'birth2' => '05/10/1981',
            'gender2' => 'Nam'
            )
        )
    )
);

foreach ($schools as $key => $value){
    echo $key . '<br/>';
    echo '<br/>';
    foreach ($value as $key1 => $value1) {
        echo  $key1 . '<br/>';
        foreach ($value1 as $key2 =>$value2){
            echo $key2 . '<br/>';   
            foreach ($value2 as $key3 => $value3){
                echo $key3 . ' : ' . $value3 . '<br/>';
            }
        }    
    }
}  
?>