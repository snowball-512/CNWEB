<?php 
session_start();
//tiến hành ktra là ng dùng đã đn hay chưa
//nếu chưa chuyển hương ng dùng lại trang đn
if(!isset($_SESSION['username'])){
    header(('Loaction: pj3_form/login_php/loginCSDL.php'));
}
?>

<html>
    <head>
        <title>Trang chủ</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        Chúc mừng bạn có username là <?php echo $_SESSION['username']; ?> đã đăng nhập thành công !
    </body>
</html>