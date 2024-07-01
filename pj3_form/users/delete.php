<?php
//$conn = mysqli_connect('localhost', 'root', '', 'testdb') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");
 include_once('connection.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
    $id=$_GET['id'];
    $sql = "DELETE FROM member WHERE id = '$id'";
    if($conn->query($sql)==TRUE){
        echo "Delete sucess!";

    }else{
        echo "Errorr updating record: " . $conn->error;
    }
    $conn->close();
}
?>