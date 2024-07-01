<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
    <script>
        function validateForm() {
            let tenhang = document.forms["memberForm"]["tenhang"].value;
            let loaihang = document.forms["memberForm"]["loaihang"].value;
            let mota = document.forms["memberForm"]["mota"].value;
            // let email = document.forms["memberForm"]["email"].value;


            let nameRegex = /^[\p{L}\s]+$/u;  // Chỉ cho phép chữ cái và khoảng trắng
            // let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;  // Kiểm tra định dạng email
            // let phoneRegex = /^\d+$/;

            if (tenhang === "" || loaihang === "" || mota === "" ) {
                alert("Các trường trống");
                return false;
            }

            // if (!nameRegex.test(tenhang)) {
            //     alert("Username must not contain numbers");
            //     return false;
            // }

            // if (!emailRegex.test(email)) {
            //     alert("Invalid email format");
            //     return false;
            // }
            
            // if (!phoneRegex.test(phone)) {
            //     alert("Phone number must contain only digits");
            //     return false;
            // }

            // if (phone.length < 9) {
            //     alert("Phone number must be at least 9 digits long");
            //     return false;
            // }
            return true;
        }
    </script>
</head>
<body>
    <form name="memberForm" method="post" class="form" onsubmit="return validateForm()">
        <h2>Add member</h2>
        <label>Mã hàng: <input type="text" name="mahang" id=""></label>
        <label>Tên hàng: <input type="text" name="tenhang"></label>
        <label>Loại hàng: <input type="text" name="loaihang"></label>
        <label>Mô tả: <input type="text" name="mota"></label>
        <input type="submit" value="ADD" name="add_set">

        <?php
            if(isset($_POST['add_set'])) {
                $mahang = isset($_POST['mahang']) ? $_POST['mahang'] : '';
                $loaihang = $_POST['loaihang'];
                $tenhang = $_POST['tenhang'];
                $mota = $_POST['mota'];
                
                // if(!preg_match("/^[\p{L}\s]+$/u", $loaihang)) {
                //     echo "<p style='color:red;'>Userloaihang must not contain numbers.</p>";
                // } 
                // // elseif(!preg_match("/^[0-9]+$/", $phone)){
                // //     echo"Chỉ đc nhập số";
                // // }
                // // elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // //     echo "<p style='color:red;'>Invalid email format.</p>";
                // else {
                    // Tạo kết nối đến cơ sở dữ liệu
                    $con = new mysqli("localhost", "root", "", "testdatabase");
                    if($con->connect_error){
                        die("Connection failed: " . $con->connect_error);
                    }

                    // Kiểm tra email trùng lặp
                    // $checkEmail = $con->prepare("SELECT mahang FROM testtb WHERE email = ?");
                    // $checkEmail->bind_param("s", $email);
                    // $checkEmail->execute();
                    // $checkEmail->store_result();

                    // Check for duplicate mahang
                    $checkmahang = $con->prepare("SELECT mahang FROM mathang WHERE mahang = ?");
                    $checkmahang->bind_param("s", $mahang);
                    $checkmahang->execute();
                    $checkmahang->store_result();
                    if($checkmahang->num_rows > 0){
                        echo "<p style='color:red;'>This email already exists.</p>";
                    } 
                    // elseif ($checkId->num_rows > 0) {
                    //     echo "<p style='color:red;'>This ID already exists.</p>";
                    // }
                    else {
                        // Sử dụng câu lệnh chuẩn bị để thêm bản ghi mới vào cơ sở dữ liệu
                        $stmt = $con->prepare("INSERT INTO mathang (mahang, tenhang, loaihang, mota) VALUES (?, ?, ?, ?)");
                        $stmt->bind_param("ssss",$mahang, $tenhang, $loaihang, $mota);

                        if($stmt->execute()){
                            echo "<script>alert('Record added successfully');</script>";
                        } else {
                            echo "Error adding record: " . $stmt->error;
                        }

                        $stmt->close();
                    }

                    $checkmahang->close();
                    // $checkId->close();
                    $con->close();
                }
            // }
        ?>
    </form>
</body>
</html>
