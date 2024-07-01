<?php
if(isset($_POST['functionname'])){
    $funtionname = $_POST['functionname'];
    $aResult = "null";
    if($funtionname=='testAjax'){
        $Ten = $_POST['name'];
        $Tuoi = $_POST['age'];
        $aResult=$Ten." ".$Tuoi;
    }
    echo $aResult;
}
?>