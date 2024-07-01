<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hospital management</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <h3 class="text-center text-upercase text-success mt-3">Quản lý bệnh nhân</h3>
            <a href="<?= DOMAIN.'app/views/patient/add.php';?>"class='btn btn-success'>Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Mã </th>
                    <th scope="col">Tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($patients as $patient)
                    {
                        ?>
                        <tr>
                            <th scope="row"><?= $patient->getId();  ?></th>
                            <td><?= $patient->getFullName();  ?></td>
                            <td><?= $patient->getGender();  ?></td>
                            <td>
                            <a href="<?= DOMAIN.'app/views/patient/edit.php?id='.$patient->getId(); ?>" style="color: black;"><i class="bi bi-pencil-square"></i></a>
                            </td>
                            <td>
                                <a href="<?= DOMAIN.'app/views/patient/delete.php?id='.$patient->getId();?>"style="color: black;"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>  
                    <?php    
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </body>
</html>