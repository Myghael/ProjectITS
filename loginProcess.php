<?php
    session_start();
    include "conn.php";

    if (isset($_POST['email']) && isset($_POST['password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);

        if (empty($email)) {
            header("Location: login.php?error=Email harus diisi");
            exit();
        }else if(empty($password)){
            header("Location: login.php?error=Password harus diisi");
            exit();
        } else{
            $sql = "SELECT * FROM student WHERE email ='$email' AND password = '$password'";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) === 1) {
                $row  = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row['password'] === $password) {
                    header("Location: home.html");
                    exit();
                }else{
                    header("Location: login.php?error=Email/Password Anda Salah");
                    exit();
                }
            } else{
                header("Location: login.php?error=Email/Password Anda Salah");
                exit();
            }
        }
        
    }else{
         header("Location: login.php");
         exit();
    }
?>