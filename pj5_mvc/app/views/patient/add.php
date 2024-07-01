<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Patient</title>
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
                        <form id="patientForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
                        <h2>Thêm bệnh nhân</h2>   <br>     
                        <div class="mb-3">
                                <label for="name" class="form-label">Tên</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Tên" required >
                    
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Giới tính</label>
                                <input type="text" class="form-control" name="gender" id="gender" placeholder="Giới tính" required pattern="^(nam|nữ|Nam|Nữ)$">

                            </div>
                            <div class="d-grid">
                                <input type="submit" class="btn btn-success" value="Thêm" name="btn_add">
                            </div>
                            
                        </form>
                        <?php
// add.php

// Nếu có thông báo thành công, hiển thị nó
// add.php

// Other HTML code for the form...

if (!empty($successMessage)) {
    echo '<div class="alert alert-success" role="alert">' . $successMessage . '</div>';
}
?>

                        <!-- <?php
                        require_once ('../../config/config.php');
                        require_once('../../libs/DbConnection.php');

                        $conn = null;

                        if(isset($_POST['btn_add'])){
                            $name = $_POST['name'];
                            $gender = $_POST['gender'];
                            $dbConnection = new DBConnection();
                            $conn = $dbConnection->GetConnection();

                            if($conn) {
                                try {
                                    $sql_insert = "INSERT INTO patients (name, gender) VALUES (:name, :gender)";
                                    $stmt = $conn->prepare($sql_insert);
                                    $stmt->bindParam(':name', $name);
                                    $stmt->bindParam(':gender', $gender);
                                    $stmt->execute();
                                    echo "<div id='successMessage' class='alert alert-success mt-3'>Thêm thành công</div>";
                                } catch(PDOException $e) {
                                    echo "<div class='alert alert-danger mt-3'>Lỗi: " . $e->getMessage() . "</div>";
                                }
                            } else {
                                echo "<div class='alert alert-danger mt-3'>Thêm không thành công</div>";
                            }
                        }
                        ?> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        function validateForm() {
    const name = document.getElementById('name').value;
    const gender = document.getElementById('gender').value;
    const nameError = document.getElementById('nameError');
    const genderError = document.getElementById('genderError');

    let isValid = true;

    // Reset errors
    nameError.textContent = '';
    genderError.textContent = '';

    // Validate name
    if (name === '') {
        nameError.textContent = 'Tên không được để trống';
        isValid = false;
    } else if (!/^[a-zA-ZÀ-ỹ\s]+$/.test(name)) {
        nameError.textContent = 'Tên không được là số';
        isValid = false;
    }

    // Validate gender
    if (gender === '') {
        genderError.textContent = 'Giới tính không được để trống';
        isValid = false;
    } else if (gender.toLowerCase() !== 'nam' && gender.toLowerCase() !== 'nữ') {
        genderError.textContent = 'Giới tính phải là "nam" hoặc "nữ"';
        isValid = false;
    }

    return isValid;
}

    </script> -->
</body>
</html>
