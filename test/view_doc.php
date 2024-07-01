<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="view_doc.php" class="form">
        <h2>Danh sách mặt hàng</h2>
        <a href="add_doc.php" class="btn btn-success">Thêm</a>
        <table border="1">
            <tr>
                <td>Mã hàng</td>
                <td>Tên hàng</td>
                <td>Loại hàng</td>
                <td>Mô tả</td>
                <td>Sửa</td>
                <td>Xóa</td>
            </tr>
            <?php 
                // Connect to the database
                $conn = mysqli_connect('localhost', 'root', '', 'testdatabase') or die ('Lỗi kết nối');
                mysqli_set_charset($conn, "utf8");

                // Execute SQL query to fetch users
                $sql = "SELECT * FROM mathang";
                $result = mysqli_query($conn, $sql);

                // Check if query executed successfully
                if ($result) {
                    // Loop through each row in the result set
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['mahang'] ?></td>
                            <td><?php echo $row['tenhang'] ?></td>
                            <td><?php echo $row['loaihang'] ?></td>
                            <td><?php echo $row['mota'] ?></td>
                            <!-- <td><a href="add_doc.php?id=<?php echo $row['mahang']; ?>">Add</a></td> -->
                            <td><a href="edit_doc.php?mahang=<?php echo $row['mahang']; ?>">Sửa</a></td>
                            <td><a href="delete_doc.php?mahang=<?php echo $row['mahang']; ?>">Xóa</a></td>
                        </tr>
                    <?php
                    }
                } else {
                    // Error handling if query fails
                    echo "Error: " . mysqli_error($conn);
                }
                // Close the database connection
                mysqli_close($conn);
            ?>                
        </table>
    </form>
</body>
</html>
