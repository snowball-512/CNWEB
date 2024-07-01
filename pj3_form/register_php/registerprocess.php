<?php
header('Content-Type: text/html; charset=utf-8');

//Kết nối csdl

$conn = mysqli_connect('localhost', 'root','','testdb') or die('Lỗi kết nối'); 
mysqli_set_charset($conn, "utf8");
 //Dùng isset để ktra form
 if(isset($_POST['dangky'])){//ktra post đký có tồn tại ko nếu đã đc xét thì nhấn đkí thì biến post đã đc xét
    $id = trim($_POST['id']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    if(empty($id)){ //thực hiện ktra nhập chưa và ycaauf nhập
        array_push($errors, "ID is required");

    }
    if(empty($username)){ //thực hiện ktra nhập chưa và ycaauf nhập
        array_push($errors, "Username is required");

    }
    if(empty($email)){
        array_push($errors,"Email is required");

    }
    if(empty($phone)){
        array_push($errors, "Phone is required"); // Sửa lỗi ở đây
    }
    if(empty($password)){
        array_push($errors, "Two password do not match");
    }

    //ktra user or mail có bị trufg ko, ktra tk tồn tại chưa
    $sql = "SELECT * FROM member WHERE id='$id' OR username = '$username' OR email='$email'  ";
    
    //Thực thi câu truy vấn0
    $result = mysqli_query($conn, $sql);

    //nếu kq trả về >1 nghĩa là user name or mail đã tồn tại trong csdl
    if(mysqli_num_rows($result)>0){
        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location.href="/pj3_form/register_php/register.php";</script>';
    //dừng ctrinh
        die ();
    }
else{
    $sql = "INSERT INTO member (id, username, password, email, phone) VALUES ('$id', '$username', '$password', '$email','$phone')";
    if(mysqli_query($conn, $sql)){
        echo "Tên đăng nhập: ".$_POST['username']."<br/>";
        echo "Mật khẩu: ".$_POST['password']."<br/>";
        echo "Email đăng nhập: ".$_POST['email']."<br/>";
        echo "Số điện thoại: ".$_POST['phone']."<br/>";
        echo '<script type="text/javascript">
        alert("Đăng ký thành công!");window.location.href = "/pj3_form/login_php/loginCSDL.php";</script>';
    //     $funtionname = $_POST['dangky'];
    // $aResult = "null";
    // if($funtionname=='testAjax'){
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $aResult=$username." ".$password." ".$email." ".$phone;
    // }
    // echo $aResult;
    
    }
    else{
        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location.href="/pj3_form/register_php/register.php";</script>';
    }
}

}
