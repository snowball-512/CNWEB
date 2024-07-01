<?php
    include_once('connect.php');
    if(isset($_REQUEST['mahang']) and $_REQUEST['mahang']!=""){
        $mahang=$_GET['mahang'];
        $sql = "DELETE FROM mathang WHERE mahang = '$mahang'";
        if($con->query($sql)===true){
            echo "Delete success";
        }else{
            echo"error updating record: " .$con->error;
        }
        $con->close();
    }
?>