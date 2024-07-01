<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="post">
            Tên: <input type="text" name="Ten" id="Ten">
            Tuổi:  <input type="text" name="Tuoi" id="Tuoi">
            <input type="submit" value="Submit" name="btn_submit" onclick="showMessage()">
        </form>
        <script>
            function showMessage(){
                alert('Sự kiện click xảy ra !');
                var ten = document.getElementById('Ten').value;
                var tuoi = document.getElementById('Tuoi').value;
                
                alert(ten); 
                alert(tuoi);
                $.ajax({
                    type:"post",
                    url: "xulyPhuongThucGet_Ajax.php",
                    //dataType: 'json',
                    data: {functionname: 'testAjax', name: ten, age: tuoi},
                    success:function(result, status, error){
                        alert(result);
                    },
                    error: function(req, status, error){
                        alert(req+""+status+""+error);
                    }

                })
            }
        </script>
        <?php
            if(isset($_POST['btn_submit'])){
                $Ten=$_POST['Ten'];
                $Tuoi=$_POST['Tuoi'];
                echo $Ten." ".$Tuoi;
            }
        ?>
    </body>
</html>
