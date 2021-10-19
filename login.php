<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
    <center>
            <h1>ITS Biology</h1>
            <div class="loginForm">
            <form action="loginProcess.php" method="POST">
                <br>
                <h2>Login Form</h2>
                <br>
                <table>
                    <tr>
                        <td>
                            <label for="email">Email</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email" placeholder="Masukkan Email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password" placeholder="Masukkan Password">
                        </td>
                    </tr>
                    <td>
                        <td>
                            <?php if(isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                        </td>
                    </td>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" value="Login" name="Login" class="btnLogin">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <p>
                                Belum mempunyai akun? <a href="register.php" >Klik Disini</a>
                            </p>
                        </td>
                    </tr>
                </table>
                <br>
                <br>
            </form>  
        </div>
    </center>
</body>

<script src="script.js">
</script>
</html>