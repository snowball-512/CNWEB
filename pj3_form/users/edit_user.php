<!DOCTYPE html>
<html>
    <head>
        <title>Edititng data</title>
        <link rel="stylesheet" href="/pj3_form/style_css/style_edit_user.css">
    </head>
    <body>
        <?php
            //knoi db
           // $conn = mysqli_connect('localhost', 'root','','testdb') or die('Lỗi kết nối'); mysqli_set_charset($conn, 'utf8');
            include_once('connection.php');
            $id = $_GET['id']; //get id
            $query = mysqli_query($conn, "SELECT * from member where id='$id'");//truy vấn csdl
            $row = mysqli_fetch_assoc($query);

        ?>
        <form class="form" method="post"> <!--form post-->
            <h2>Edititng member</h2>
            <label >Username: <input type="text" name="username" id="" value="<?php echo $row['username']; ?>" ></label><br>
            <label>Email: <input type="text" name="email" value="<?php echo $row['email'] ?>"></label><br>
            <label>Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"></label><br>
            <input type="submit" value="Update" name="update_user">
            <?php
                if(isset($_POST['update_user'])){ //nếu biến này đc xét , ng dùng ycau cập nhật thông tin
                    $id=$_GET['id'];//lấy ra ttin
                    $username=$_POST['username'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    //create connection
                    // $conn=new mysqli("localhost","root", "", "testdb");
                    $conn = mysqli_connect('localhost', 'root', '', 'testdb') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");
                    //check connection
                    if($conn->connect_error){
                        die("Connection failed: " . $conn->connect_error);

                    }
                    $sql = "UPDATE member SET username = '$username', email = '$email', phone='$phone' WHERE id = '$id'";
                    if($conn->query ($sql) == TRUE){
                        echo" Record updated successfully";

                    }else{
                        echo "Error updating record: " . $conn->error;
                    }
                    $conn->close();
                }
            ?>

        </form>
    </body>
</html>