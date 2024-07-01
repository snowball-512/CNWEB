<?php
$conn = mysqli_connect("localhost", "root", "", "testdb");
//check connection
if(mysqli_connect_errno()){
    echo "Failed to connect to MyySQL: " . mysqli_connect_error();
}
?>