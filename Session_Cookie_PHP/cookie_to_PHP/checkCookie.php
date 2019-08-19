<!-- Kiểm tra nếu Cookies được kích hoạt
Ví dụ sau đây tạo một tập lệnh nhỏ để kiểm tra xem cookie có được bật hay không.
 Trước tiên, hãy thử tạo một cookie thử nghiệm với setcookie()hàm, sau đó đếm biến mảng $ _COOKIE: -->

<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
    echo "Cookies được kích hoạt
    .";
} else {
    echo "Cookies bị vô hiệu hóa..";
}
?>

</body>
</html>