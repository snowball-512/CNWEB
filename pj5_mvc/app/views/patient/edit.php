<!-- <html>
<head>
    <title>Sửa Patient</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
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
                                    $sql_select = "SELECT * FROM patients WHERE id=:id";
                                    $stmt = $conn->prepare($sql_select);
                                    $stmt->bindParam(':id', $id);
                                    $stmt->execute();
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                } catch(PDOException $e) {
                                    echo "<div class='alert alert-danger'>Lỗi: " . $e->getMessage() . "</div>";
                                }
                            }
                        }
                        ?>
                        <form class="form" method="post">
                            <h2 class="mb-3">Edit</h2>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>"  placeholder="Full Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="text" class="form-control" name="gender" value="<?php echo is_array($row) && isset($row['gender']) ? $row['gender'] : ''; ?>" placeholder="Gender" required>
                            </div>
                            <div class="d-grid">
                                <input type="submit" value="Update" class="btn btn-success" name="btn_update">
                            </div>
                        </form>
                        <?php
                        if(isset($_POST['btn_update'])) {
                            $name = $_POST['name'];
                            $gender = $_POST['gender'];

                            if($conn) {
                                try {
                                    $sqlUpdate = "UPDATE patients SET name=:name, gender=:gender WHERE id=:id";
                                    $stmt = $conn->prepare($sqlUpdate);
                                    $stmt->bindParam(':name', $name);
                                    $stmt->bindParam(':gender', $gender);
                                    $stmt->bindParam(':id', $id);

                                    if($stmt->execute()) {
                                        echo "<div class='alert alert-success mt-3'>Update thành công</div>";
                                    } else {
                                        echo "<div class='alert alert-danger mt-3'>Lỗi ko update </div>";
                                    }
                                } catch(PDOException $e) {
                                    echo "<div class='alert alert-danger mt-3'>Lỗi: " . $e->getMessage() . "</div>";
                                }
                            }
                        }
                        $conn = null; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> -->
<h1>Sửa</h1>