<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bệnh nhân</title>
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
            Thêm bệnh nhân
        </h3>

        <form action="?controller=addPatient" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Họ tên</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Điền họ tên bệnh nhân . . ." required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Giới tính</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Chọn giới tính</option>
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary" name="btn_create">Thêm</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        // validate select options
        document.querySelector('form').addEventListener('submit', function (e) {
            if (document.querySelector('#gender').value === '') {
                e.preventDefault();
                alert('Vui lòng chọn giới tính');
            }
        });
    </script>
</body>

</html>