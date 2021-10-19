<?php
    session_start();
    include "conn.php";

    if (isset($_POST['Register'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $studentName = validate($_POST['username']);
        $gender = validate($_POST['gender']);
        $day = validate($_POST['day']);
        $month = validate($_POST['month']);
        $year = validate($_POST['year']);
        $number = validate($_POST['number']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);


        $DOB =  $year."-".$month."-".$day;

        if (empty($studentName)){
            header("Location: register.php?error=Nama belum diiisi");
            exit();
        }else if($gender != "Male" && $gender != "Female"){
            header("Location: register.php?error=Gender belum dipilih");
            exit();
        }else if($DOB == "Tahun-Bulan-Hari"){
            header("Location: register.php?error=DOB belum dipilih");
            exit();
        }else if(empty($number)||!is_numeric($number)){
            header("Location: register.php?error=NO HP belum diisi");
            exit();
        }else if(empty($email)){
            header("Location: register.php?error=Email belum diisi");
            exit();
        }else if(empty($password)|| strlen($password)<8){
            header("Location: register.php?error=Password belum diisi");
            exit();
        }
        
        else{
            $sql = "SELECT * FROM student WHERE email ='$email'";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0) {
                header("Location: register.php?error=Email sudah pernah digunakan");
                exit();
            }else{
                $sql2 = "INSERT INTO student(studentName, gender, DOB, phoneNumber, email, password )  VALUES ('$studentName','$gender','$DOB','$number','$email','$password')";
                $result2 = mysqli_query($conn, $sql2);
                if($result2){
                    header("Location: register.php?success= Akun anda berhasil teregister");
                    exit();
                }else{
                    header("Location: register.php?error=Error");
                    exit();
                }
            }
        }
            
    }else{
        header("Location: register.php?error=Mohon isi Field yang kosong");
        exit();
    }
?>
