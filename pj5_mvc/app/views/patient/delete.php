<!-- 
<html>
    <head>
        <title>Xóa Patient</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    </head>
<body>
<?php
require_once ('../../config/config.php');
require_once('../../libs/DbConnection.php');

$conn = null; 
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $dbConnection = new DBConnection();
    $conn = $dbConnection->GetConnection();

    if($conn) {
        try {

            $sqldelete = "DELETE FROM patients WHERE id=:id";
            $stmt = $conn->prepare($sqldelete);
            $stmt->bindParam(':id', $id);
            if($stmt->execute()) {
                echo "Xóa thành công";
            } else {
                echo "Xóa không thành công";
            }
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}

$conn = null;
?>

</body>
</html> -->
<h1>Xóa</h1>