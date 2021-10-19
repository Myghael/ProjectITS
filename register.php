<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registerStyle.css">
</head>
<body>
    <center>
        <h1>ITS Biology</h1>
        <div class="registerForm">
            <form action="registerProcess.php" method="POST">
                <br>
                <h2>Register Form</h2>
                <br>
                <table>
                    <tr>
                        <td>
                            <label for="username">Student Name</label>
                        </td>
                        <td>
                            <input type="text" name="username" id="username" placeholder="Masukkan Nama">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="gender">Gender</label>
                        </td>
                        <td>
                            <input type="radio" name="gender" value="Male" id="gender" > Male
                            <input type="radio" name="gender" value="Female" id="gender" > Female                   
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="DOB">Date of Birth</label>
                        </td>
                        <td>
                            <select name="day" id="day">
                                <option value="Hari">Hari</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                        </select>
                        <select name="month" id="month">
                                    <option value="Bulan">Bulan</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                        </select>  
                        <select name="year" id="year">
                            <option value="Tahun">Tahun</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                    </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="phone">Phone Number</label>
                        </td>
                        <td>
                            <input type="text" name="number" placeholder="Masukkan no HP">
                        </td>
                    </tr>


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
                         <td colspan="2">
                            <?php if(isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <?php if(isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?><a href="login.php">Login Disini</a></p>
                            <?php } ?>
                        </td>
                    </td>   
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" value="Register" name="Register" class="btnRegister">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
            </form>  
        </div>
    </center>
</body>
</html>