<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br/>
<form  method="post">
    <input type="text" name="nhapmang" placeholder="VD:1 2 3 4 hoac ky tu  " />
    <input type = "submit" id = "submit" value = "gửi"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array = $_POST["nhapmang"];
   echo 'mảng vửa nhập là :'. $array;
}
?>
</body>
</html>