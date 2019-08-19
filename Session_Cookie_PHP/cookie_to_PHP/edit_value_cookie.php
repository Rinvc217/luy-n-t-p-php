<!-- Sửa đổi giá trị cookie
Để sửa đổi cookie, chỉ cần đặt (một lần nữa) cookie bằng setcookie()chức năng: -->
<?php
// Cookie là gì?
//     Một cookie thường được sử dụng để xác định người dùng.
//     Cookie là một tệp nhỏ mà máy chủ nhúng trên máy tính của người dùng. 
//     Mỗi lần cùng một máy tính yêu cầu một trang có trình duyệt, nó cũng sẽ gửi cookie.
//     Với PHP, bạn có thể tạo và lấy các giá trị cookie.
// cú pháp: setcookie(name, value, expire, path, domain, secure, httponly);
//     name là tham số bắt buộc, còn lại ta có thể tùy chọn.
// PHP Tạo / Lấy Cookie
// Ví dụ sau đây tạo một cookie có tên "user" với giá trị "John Doe".
//      Cookie sẽ hết hạn sau 30 ngày (86400 * 30, 864000<=>24 giờ) ."/" Có nghĩa là cookie có sẵn trong toàn bộ trang web 
//      (nếu không, hãy chọn thư mục bạn thích).
//      Sau đó, ta sẽ truy xuất giá trị của "người dùng"cookie (sử dụng biến toàn cục $ _COOKIE). 
//      ta sử dụng isset()chức năng để kiểm tra xem cookie có được đặt không:
$cookie_name ="UserOne";
// $cookie_value = "Chanh";
// $cookie_name ="UserOne111";
$cookie_value = "Chanh111";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' không được đặt!";
} else {
    echo "Cookie '" . $cookie_name . "' được đặt!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<p><strong>Note:</strong> Bạn có thể tải lại trang (F5) để xem giá trị của cookie..</p>
</body>
</html>
<!-- Lưu ý:-  Các setcookie()chức năng phải có TRƯỚC thẻ <html>.
    - Giá trị của cookie được tự động mã hóa URL khi gửi cookie 
và tự động giải mã khi nhận được (để ngăn chặn mã hóa URL, setrawcookie()thay vào đó hãy sử dụng ). -->