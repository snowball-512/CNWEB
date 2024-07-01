<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="post">
            Tên: <input type="text" name="Ten" id="" required>
            Tuổi: <input type="text" name="Tuoi" id="" required>
            <input type="submit" value="Submit" name="btn_submit">
        </form>
        <?php
            if(isset($_POST['btn_submit'])){
                $Ten = $_POST['Ten'];
                $Tuoi = $_POST['Tuoi'];
                echo $Ten." ".$Tuoi;
            }

        ?>
        <?php
$conn = mysqli_connect('localhost', 'root', '', 'testdatabase') or die('Lỗi kết nối: ' . mysqli_connect_error());
mysqli_set_charset($conn, "utf8");

// Xử lý khi nút submit được nhấn
if(isset($_POST['btn_submit'])){
    $Ten = $_POST['Ten'];
    $Tuoi = $_POST['Tuoi'];
    
    $sql_insert = "INSERT INTO post (name, tuoi) VALUES ('$Ten', '$Tuoi')";
    $result_insert = mysqli_query($conn, $sql_insert);

    if ($result_insert) {
       
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}

$sql_select = "SELECT * FROM post";
$result_select = mysqli_query($conn, $sql_select);

if (mysqli_num_rows($result_select) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Tên</th><th>Tuổi</th></tr>";
    while ($row = mysqli_fetch_assoc($result_select)) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["tuoi"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu ";
}

mysqli_close($conn);
?>



    </body>
</html>
<!-- post bảo mật tốt hơn so vs get -->