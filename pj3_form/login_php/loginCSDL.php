<html>
    <head>
        <title>Trang đăng nhập</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="/pj3_form/style_css/style_login.css">
    </head>
    <body>
        <form action="loginCSDL.php" method="POST" class="form">
            <fieldset>
                <legend>Đăng nhập</legend>
                <!-- <h2>Đăng nhập</h2> -->
                <table>
                    <tr>
                        <td>
                            Username 
                        </td>
                        <td><input type="text" name="username" size="30"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="password" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" > <input type="submit" value="Đăng nhập" name="btn_submit"></td>
                        <?php require 'loginprocessCSDL.php';?>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>