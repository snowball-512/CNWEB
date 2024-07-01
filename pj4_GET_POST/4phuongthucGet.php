<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="get">
            Tên: <input type="text" name="Ten" id="">
            Tuổi: <input type="text" name="Tuoi" id="">
            <input type="submit" value="Submit" name="btn_submit">
        </form>
        <?php
            if(isset($_GET['btn_submit'])){
                $Ten = $_GET['Ten'];
                $Tuoi = $_GET['Tuoi'];
                echo $Ten." ".$Tuoi;
            }

        ?>
         <?php require 'registerprocess.php'; ?>
    </body>
</html>