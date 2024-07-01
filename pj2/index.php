<!DOCTYPE html>
<html>
    <body>
        <h1>Lập trình CSDL với PHP</h1>
        
        <!-- In dữ liệu -->
        <?php
            echo "Câu lệnh Select:"."<br/>";
            $connection = mysqli_connect('localhost','root','','testdb') or die ('Lỗi kết nối');
            mysqli_set_charset($connection,'utf8');
            $querySelect = "SELECT * FROM member";
            $results = mysqli_query($connection, $querySelect);
            if(mysqli_num_rows($results)>0){
                $members = mysqli_fetch_all($results, MYSQLI_ASSOC);
                foreach($members as $member){
                    // echo"id: {$member['id']}"."<br/>";
                    echo"username: {$member['username']}"."<br/>";
                    // echo"password: {$member['password']}"."<br/>";
                    echo"phone: {$member['phone']}"."<br/>";
                    // echo"email: {$member['email']}"."<br/>";
                    
                }
            }
            mysqli_close(($connection));
        ?>

        <!-- Thêm -->
        <!-- <?php
            // echo "Câu lệnh Insert:"."<br/>";
            // $connection = mysqli_connect('localhost','root','','testdb') or die ('Lỗi kết nối');
            // mysqli_set_charset($connection,'utf8');
            // $sqlInsert = "INSERT INTO member( username, password, phone, email) VALUES ('annv','12345','0989570230','annv@gmail.com')";
            // $isInsertTable = mysqli_query($connection, $sqlInsert);
            // if ($isInsertTable){
            //     echo"Insert dữ liệu thành công";

            // }
            // else{
            //     echo"Insert dữ liệu thất bại";

            // }
            // mysqli_close(($connection));
        ?> -->
        <!-- Sửa -->
        <?php
            echo "Câu lệnh Update:"."<br/>";
            $connection = mysqli_connect('localhost','root','','testdb') or die ('Lỗi kết nối');
            mysqli_set_charset($connection,'utf8');
            $sqlUpdate = "UPDATE member SET phone = '0981567898' WHERE id=11";
            $isUpdateTable = mysqli_query($connection, $sqlUpdate);
            if ($isUpdateTable){
                echo"Update dữ liệu thành công";

            }
            else{
                echo"Update dữ liệu thất bại";

            }
            mysqli_close(($connection));
        ?>
        <br>
        <!-- Xóa -->
        <?php
            echo "Câu lệnh Delete:"."<br/>";
            $connection = mysqli_connect('localhost','root','','testdb') or die ('Lỗi kết nối');
            mysqli_set_charset($connection,'utf8');
            $sqlDelete = "DELETE FROM member WHERE id=11";
            $isDeleteTable = mysqli_query($connection, $sqlDelete);
            if ($isDeleteTable){
                echo"Xóa dữ liệu thành công";

            }
            else{
                echo"Xóa dữ liệu thất bại";

            }
            mysqli_close(($connection));
         ?>
    <!-- Câu lệnh select PDO -->
         <?php 
            echo "<br/>"."Câu lệnh Select PDO:"."<br/>";
            const DB_DSN='mysql:host=localhost;dbname=testdb';
            const DB_USERNAME = 'root';
            const DB_PASSWORD = '';try{
                $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD );
                $sqlSelect = "Select * from member WHERE id =  ?";
                $querySelect= $connection->prepare($sqlSelect);
                $querySelect->bindParam(1,$id);
                //gan gia tri
                $id="5";
                //thuc thi
                $isSelect = $querySelect->execute();
                $members=$querySelect->fetchAll(PDO::FETCH_ASSOC);
                foreach($members as $member){
                    echo"username: {$member['username']}"."<br/>";
                }
                echo "Truy vấn dữ liệu PDO thành công";
            }
            catch(PDOException $e){
                echo"Connection failed: " . $e->getMessage();

            }
            $connection=null;
       ?>

       <!-- Câu lệnh insert PDO -->
         <?php
            echo "<br/>"."Câu lệnh Insert PDO:"."<br/>";
            try{
                $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
                $sqlInsert = "Insert INTO member(username, password, phone, email) VALUES (?,?,?,?)";
                $queryInsert = $connection->prepare($sqlInsert);
                $queryInsert->bindParam(1, $username);
                $queryInsert->bindParam(2, $password);
                $queryInsert->bindParam(3, $phone);
                $queryInsert->bindParam(4, $email);
                //gan gtri0
                $username = 'annv_PDO';
                $password = "12345";
                $phone = '0989570230';
                $email = 'annv_PDO@gmail.com';
                //thuc thi
                $isInsert = $queryInsert->execute();
                echo 'Thêm dữ liệu PDO thành công';
            }
            catch (PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            }
            $connection = null;
        ?> 
<?php
            echo "<br/>"."Câu lệnh Update PDO:"."<br/>";
            try{
                $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
                $sqlUpdate = "Update member SET username=? WHERE id=?";
                $queryUpdate = $connection->prepare($sqlUpdate);
                $queryUpdate->bindParam(1, $id);
                $queryUpdate->bindParam(2, $username);
                //gan gtri
                $username = 'annv_PDO_1';
                $id="13";
                //thuc thi
                $isUpdate = $queryUpdate->execute();
                echo 'Sửa dữ liệu PDO thành công';
            }
            catch (PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            }
            $connection = null;
            ?>
            <!-- <?php
            // echo "<br/>"."Câu lệnh Delete PDO:"."<br/>";
            // try{
            //     $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //     $sqlDelete = "Delete from member WHERE id=?";
            //     $queryDelete = $connection->prepare($sqlDelete);
            //     $queryDelete->bindParam(1, $id);
            //     //gan gtri
            //     $id="13";
            //     //thuc thi
            //     $isDelete = $queryDelete->execute();
            //     echo 'Xóa dữ liệu PDO thành công';
            // }
            // catch (PDOException $e){
            //     echo "Connection failed: " . $e->getMessage();
            // }
            // $connection = null;
            ?> -->
    </body>
</html>