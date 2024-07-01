<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="/pj3_form/style_css/style_register.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>

</head>

<body>
    <form method="post" action="register.php" class="form" onsubmit="return validateForm()">
        <h2>Register member</h2>
        ID: <input type="text" name="id" id="username"  required>
        Username: <input type="text" name="username" id="username"  required><!-- pattern="[a-zA-Z0-9]{5,}" title="Username must be at least 5 characters long and contain only letters and digits" -->
        Password: <input type="password" name="password" id="password"  required/><!--pattern="^(?=.*[A-Z])(?=.*[a-z\d$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$" title="Password must be at least 8 characters long and contain at least one uppercase letter and one lowercase letter or special character"-->
        Email: <input type="email" name="email" value="" id = "email"required/>
        Phone: <input type="text" name="phone" id="phone" pattern="[0-9]{10,}" title="Phone number must contain at least 10 digits" value="" required/>
        <input type="submit" name="dangky" value="Đăng Ký" onclick="showMessage()"/>
        <!-- PHP validation will be handled in registerprocess.php -->
        <?php require 'registerprocess.php'; ?>
    </form>

    <!-- <script>
        function validateForm() {
            var username = document.forms["form"]["username"].value;
            var password = document.forms["form"]["password"].value;
            var phone = document.forms["form"]["phone"].value;

            // Validate Username
            if (username.length < 5 || !/^[a-zA-Z0-9]+$/.test(username)) {
                alert("Username must be at least 5 characters long and contain only letters and digits.");
                return false;
            }

            // Validate Password
            if (password.length < 8 || !/(?=.*[A-Z])(?=.*[a-z\d$@$!%*?&])/.test(password)) {
                alert("Password must be at least 8 characters long and contain at least one uppercase letter and one lowercase letter or special character.");
                return false;
            }

            // Validate Phone
            if (phone.length < 10 || !/^[0-9]+$/.test(phone)) {
                alert("Phone number must contain at least 10 digits and contain only numbers.");
                return false;
            }

            return true;
        }
        function showMessage(){
                alert('Sự kiện click xảy ra !');
                var username = document.getElementById('username').value;
                var password = document.getElementById('password').value;
                var email = document.getElementById('email').value;
                var phone = document.getElementById('phone').value;
                alert(username); 
                alert(phone);
                $.ajax({
                    type:"post",
                    url: "registerprocess.php",
                    //dataType: 'json',
                    data: {functionname: 'testAjax', username: username, password: password, email: email, phone: phone},
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
            if(isset($_POST['dangky'])){
                $username=$_POST['username'];
                $email=$_POST['phone'];
                echo $username. " ". $phone;
            }
        ?> -->
</body>

</html>
