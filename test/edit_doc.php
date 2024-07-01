<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
    <?php 
        include_once('connect.php'); // Ensure connect.php file is correctly included
        $mahang = $_GET['mahang']; // Correct syntax to access $_GET variable
        $query = mysqli_query($con, "SELECT * FROM mathang WHERE mahang = '$mahang'");
        $row = mysqli_fetch_assoc($query);
    ?>
    <form name="memberForm" method="post" class="form" onsubmit="return valmah$mahangateForm()">
        <h2>Edit member</h2>
        <!-- <label>Mã hàng: <input type="text" value="<?php echo htmlspecialchars($row['mahang']); ?>" name="mahang"></label> -->
        <label>Tên hàng: <input type="text" value="<?php echo htmlspecialchars($row['tenhang']); ?>" name="tenhang"></label>
        <label>Mặt hàng: <input type="text" value="<?php echo htmlspecialchars($row['loaihang']); ?>" name="loaihang"></label>
        <label>Mô tả: <input type="text" value="<?php echo htmlspecialchars($row['mota']); ?>" name="mota"></label>
        <input type="submit" value="Update" name="update_set">

        <?php
            if(isset($_POST['update_set'])){ // Corrected form submission condition
                $mahang = $_GET['mahang']; // Correctly retrieve form values using $_POST
                $loaihang = $_POST['loaihang'];
                $tenhang = $_POST['tenhang'];
                $mota = $_POST['mota'];
        

                // Kiểm tra email trùng lặp, trừ email hiện tại
                // $checkEmail = $con->prepare("SELECT mahang FROM testtb WHERE loaihang != ?");
                // $checkEmail->bind_param("s", $loaihang);
                // $checkEmail->execute();
                // $checkEmail->store_result();

                // Kiểm tra số điện thoại trùng lặp, trừ số điện thoại hiện tại
                // $checkPhone = $con->prepare("SELECT id FROM testtb WHERE phone = ? AND id != ?");
                // $checkPhone->bind_param("si", $phone, $id);
                // $checkPhone->execute();
                // $checkPhone->store_result();

                // if($checkEmail->num_rows > 0) {
                //     echo "<p style='color:red;'>This email already exists.</p>";
                // } 
                // elseif($checkPhone->num_rows > 0) {
                //     echo "<p style='color:red;'>This phone number already exists.</p>";
                // }
                // else {
                    // Sử dụng câu lệnh chuẩn bị để cập nhật bản ghi trong cơ sở dữ liệu
                    $stmt = $con->prepare("UPDATE mathang SET tenhang = ?, loaihang = ?, mota = ? WHERE mahang = ?");
                    $stmt->bind_param("sssi", $tenhang, $loaihang, $mota, $mahang);

                    if($stmt->execute()){
                        echo "<script>alert('Record updated successfully');</script>";
                    } else {
                        echo "Error updating record: " . $stmt->error;
                    }

                    $stmt->close();
                // }

                // $checkEmail->close();
                // // $checkPhone->close();
                $con->close();
            }
        ?>
    </form>
</body>
</html>
