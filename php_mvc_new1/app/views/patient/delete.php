<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa thông tin món</title>
    <!-- thêm thư viện bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- thêm thư viện bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        form {
            width: 50%;
            margin: auto;
        }

        button {
            margin-top: 10px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center 
                    text-uppercase 
                    text-success 
                    mt-3 mb-3">
            Xóa món
        </h3>

        <form action="?controller=deletePatient&id=<?= $patient->getId() ?>" method="post">
        <div class="mb-3">
                <label for="tentailieu" class="form-label">Mã món</label>
                <input type="text" class="form-control" id="matailieu" value="<?= $patient->getId() ?>" name="matailieu" placeholder="Điền tên tài liệu" required>
            </div>
        <div class="mb-3">
                <label for="tentailieu" class="form-label">Tên món</label>
                <input type="text" class="form-control" id="tentailieu" name="tentailieu" 
                    value="<?= $patient->getten(); ?>" readonly>
            </div>
            
            <button type="submit" class="btn btn-danger" name="btn_delete">Xóa</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>