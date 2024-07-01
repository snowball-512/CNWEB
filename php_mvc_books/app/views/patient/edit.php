<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin sách</title>
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
            Cập nhật thông tin sách
        </h3>

        <form action="?controller=editPatient&id=<?= $patient->getId() ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Tên sách</label>
                <input type="text" class="form-control" id="tensach" name="tensach" value="<?= $patient->getName(); ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="tacgia" class="form-label">Tác giả</label>
                <input type="text" class="form-control" id="tacgia" name="tacgia" value="<?= $patient->getTacgia(); ?>"
                    required>
            </div>
            <div class="mb-3">
            <label for="theloai" class="form-label">Thể loại</label>
                <select class="form-control" id="theloai" name="theloai" required>
                    <option value="">Chọn thể loại</option>
                    <option <?php if ($patient->getTheloai() == 'Tiểu thuyết') echo 'selected'; ?>>Tiểu thuyết</option>
                    <option <?php if ($patient->getTheloai() == 'Truyện tranh') echo 'selected'; ?>>Truyện tranh</option>
                </select>

            </div>
            <div class="mb-3">
                <label for="mota" class="form-label">Mô tả</label>
                <input type="text" class="form-control" id="mota" name="mota" placeholder="Điền mô tả" value="<?= $patient->getMota(); ?>"required>

            </div>
            <div class="mb-3">
                <label for="soluong" class="form-label">Số lượng</label>
                <input type="text" class="form-control" id="soluong" name="soluong" placeholder="Điền số lượng"value="<?= $patient->getsl(); ?>" required>

            </div>
            <button type="submit" class="btn btn-primary" name="btn_update">Cập nhật</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>