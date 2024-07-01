<!DOCTYPE html>
<html>
    <body>
        <h1>Học lập trình PHP</h1>
        <?php echo "<hr>"?>
        <p>Tài liệu học HTML</p>
        <p>Tài liệu học CSS</p>
        <?php echo "<h2> Tài liệu học PHP </h2>";
              echo "<h3>Tài liêu học MySQL </h3>";
              echo "<h4>Tài liêu học JavaSript </h4>";
        ?>
        <hr>
        <?php 
            $text = "Từ cơ bản " . " đến nâng cao";
            echo $text;
        ?>
        <br>
        <?php 
        $text = " ở Hà Nội";
        echo "Tôi là ". "Nguyễn Văn A, " . "sinh năm" . 1990 . ",làm việc" . $text; 
        ?>
        <br>
        <?php
            $name = "Nguyễn Văn Tâm";
            $year = 2000;
            echo "<p>Họ và tên: $name</p>";
            echo "<p>Gưới tính của $name  là nam</p>";
            $new_year=$year +7;
            echo "<p>Năm sinh của $name</p>";
            echo var_dump($year);
            echo var_dump($new_year);
            $len = strlen($name);
            echo "<p>Độ dài của chuỗi $name là $len</p>";

            $a = str_word_count("HTML");
            $b = str_word_count("HTML CSS");
            echo"<p>Số từ của chuỗi HTML là $a</p>";
            echo"<p>Số từ của chuỗi HTML CSS là $b</p>";
            $c = str_word_count($name);
            echo"<p>Số từ của chuỗi $name là $c</p>";
            print_r(str_word_count($name, 1));
            echo "<br>";
            print_r(str_word_count($name, 1, 'ễăâ'));
        ?>
        <?php
        $number = 40;
        if($number>50){
            echo "<p>Tài liệu học HTML</p>";
            echo "<p>Tài liệu học CSS</p>";
        }
        else{
            echo "<p>Tài liệu học JavaSript</p>";
        }
        ?>
        <?php
        $day=getdate()["wday"];
        if($day ==0){
            echo"Hôm nay là Chủ Nhật";
        }elseif($day==1){
            echo"Hôm nay là Thứ Hai";
        }
        elseif($day==2){
            echo"Hôm nay là Thứ Ba";
        }
        elseif($day==3){
            echo"Hôm nay là Thứ Tư";
        }
        elseif($day==4){
            echo"Hôm nay là Thứ Năm";
        }
        elseif($day==5){
            echo"Hôm nay là Thứ Sáu";
        }
        else{
            echo"Hôm nay là Thứ Bảy";
        }
        ?>
        <br>
        <?php
         $money =1000;
         switch($money){
            case 2000:
                echo "Trà đá";
                break;
            case 8000:
                echo "Sting dâu";
                break;
            case 10000:
                echo "Cà phê sữa";
                break;
         }
        ?>
        <?php
         $season ="ha";
         switch($season){
            case "xuan":
                echo "<p>Mùa Xuân</p>";
                break;
            case "ha":
                echo "<p>Mùa Hạ</p>";
                break;
            case "thu":
                echo "<p>Mùa Thu</p>";
                break;
            case "Dong":
                echo "<p>Mùa Đông</p>";
                break;
         }
        ?>
        <?php 
            for($i = 0; $i <=5; $i++ ){
                echo"<p>Lập Trình Web $i</p?";
            }
        ?>
        <?php 
            for($i = 0; $i <5; $i++ ){
                echo"Số: " . ($i+1) . "<br/>";
            }
        ?>
        <style>
            .square{
                height: 20px;
                width: 20px;
                float: left;
                border: 1px solid gray;
                margin-left: 5px;
                margin-bottom: 5px;
            }
            </style>
            <?php
            for($i = 0; $i <5; $i++ ){
                for($j=0; $j<10; $j++){
                    echo"<div class='square'></div>";
                }
                echo"<div style='clear:both'></div>";
            }
            ?>
            <?php 
            $mobile=array("HTC", "Nokia","SamSung","LG","Apple");
            for($i=0; $i<count($mobile); $i++){
                echo $mobile[$i]."<br/>";
            }
            ?>
            <?php
            $data= array("HTML","CSS","JavaScript","MySQL", "PHP");
            foreach($data as $value){
                echo $value."<hr>";
            }
            ?>
            <?php $i=1;
            echo"<hr>";
            while($i<10){
                echo "<p>" . $i . "</p>";
                //echo"-" . $i . "-";
                $i++;
            }
            ?>
            <?php 
            echo"<hr>";
            $i=8;
            do{
                //echo "<p>" . $i . "</p>";
                echo"-" . $i . "-";
                $i--;
            }while($i>0);
            ?>
            <?php 
            echo"<hr>";
            $mobile=array("HTC", "Nokia","SamSung","LG","Apple","Lenovo");
            $i=0;
            while($i<count($mobile)){
                //echo "</p>" . $mobile[$i] . "</p>";
                echo "-" . $mobile[$i] . "-";
                $i++;
            }
            
            ?>
            <?php
            $salaries = ['A'=> 1000, 'B' =>2000, 'C' => 3000, 'D' =>4000];
            echo "<br/> salaries['A'] = ".$salaries['A'];
            ?>
            <?php function GioiThieuBanThan(){
                $name = "Nguyễn Văn Nam";
                $year=1993;
                echo "<p>Tôi tên là $name sinh năm $year</p>";
            }
            GioiThieuBanThan();
            ?>
            <?php function GioiThieuBanThanCoBien($name, $year){
                echo"<p>Tôi tên là $name sinh năm $year</p>";
               
            }
            GioiThieuBanThanCoBien("Trình Giảo Kim", 1993);
            GioiThieuBanThanCoBien("La Thành", 1989);
            GioiThieuBanThanCoBien("Trần Thúc Bảo", 1985);
            ?>
            <?php function number($a, $b){
                return pow($a+$b,2);

            }
            $a=5;
            $b=2;
            $result = number($a, $b);
            echo"<p>Tổng bình phương của $a và $b là $result</p>";

            ?>
            <?php 
    $a = 1;
    $b = 2;
    echo "a + b = " . ($a + $b);
?>  
<?php
function sum(){
    $s = 0;
    for($i = 1; $i <= 1000000; $i++){
        $s += $i;
    }
    return $s;
}

echo "Tổng từ 1 đến 1,000,000 là: " . sum();
?>
    </body>
</html>