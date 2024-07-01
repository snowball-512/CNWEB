<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tài liệu</title>
    <!-- thêm thư viện bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- thêm thư viện bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        form {
            width: 30%;
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
            Thêm tài liệuu
        </h3>

        <form action="?controller=addPatient" method="post">
        
            <div class="mb-3">
                <label for="tentailieu" class="form-label">Tên món</label>
                <input type="text" class="form-control" id="tentailieu" name="tentailieu" placeholder="Điền tên món" required>
            </div>
            <div class="mb-3">
                <label for="tacgia" class="form-label">Đơn giá</label>
                <input type="text" class="form-control" id="tacgia" name="tacgia" placeholder="Điền đơn giá" required>

            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Đơn vị tính</label>
                <input type="text" class="form-control" id="mota" name="mota" placeholder="Điền đơn vị tính" required>

            </div>
            <button type="submit" class="btn btn-primary" name="btn_create">Thêm</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- <script>
        // validate select options
        document.querySelector('form').addEventListener('submit', function (e) {
            if (document.querySelector('#gender').value === '') {
                e.preventDefault();
                alert('Vui lòng chọn giới tính');
            }
        });
    </script> -->
</body>

</html>