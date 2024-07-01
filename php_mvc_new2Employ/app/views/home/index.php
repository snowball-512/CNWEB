<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân viên</title>
    <!-- thêm thư viện bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- thêm thư viện bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <h3 class="text-center 
                    text-uppercase 
                    text-success 
                    mt-3 mb-3"> 
            Quản lý nhân viên
        </h3>
        <a href="?controller=addPatient" class="btn btn-success ">Thêm nhân viên mới</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên nhân viên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patients as $patient) { ?>
                    <tr>
                        <th scope="row"><?= $patient->getId(); ?></th>
                        <td><?= $patient->getten(); ?></td>
                        <td><?= $patient->getgioitinh(); ?></td>
                        <td><?= $patient->getmota(); ?></td>
                        <td>
                            <!-- <a href="<?= DOMAIN . 'app/views/patient/delete.php?id=' . $patient->getId() ?>"> -->
                            <!-- tôi muốn truyền vào href của <a> 2 biết ;à $container=editPatient và $id được lấy từ $patient->getid() -->
                            <a href="?controller=editPatient&id=<?= $patient->getId() ?>">
                            <i class="bi bi-pencil-square"></i>
                        </td>
                        <td>
                        <a href="?controller=deletePatient&id=<?= $patient->getId() ?>">
                        <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>