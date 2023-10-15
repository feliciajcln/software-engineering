<?php
  // define variables and set to empty values
  $nameErr = $emailErr  = $passErr = "";
  $conf_passErr = $phoneErr  = $alamatErr = "";
  $daerahErr = $nikErr  = "";

  $name = $email  = $pass = "";
  $conf_pass = $phone  = $alamat = "";
  $daerah = $nik  = "";

  $user_photoErr = $id_photoErr = $cense_photoErr  = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["nama"];
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = $_POST["email"];
    }

    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
    } else {
        $pass = $_POST["pass"];
    }
    
    if (empty($_POST["conf_pass"])) {
        $conf_passErr = "Confirmation password is required";
    } elseif ($_POST["conf_pass"] != $_POST["pass"]) {
        $conf_passErr = "Confirmation password is wrong";
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
    } else {
        $phone = $_POST["phone"];
    }
    
    if (empty($_POST["alamat"])) {
        $alamatErr = "Alamat is required";
    } else {
        $alamat = $_POST["alamat"];
    }

    if (empty($_POST["daerah"])) {
        $daerahErr = "Daerah is required";
    } else {
        $daerah = $_POST["daerah"];
    }

    if (empty($_POST["nik"])) {
        $nikErr = "NIK is required";
    } else {
        $nik = $_POST["nik"];
    }

    if (!empty($name) && !empty($email) && !empty($pass) && !empty($phone) && !empty($alamat) && !empty($daerah) && !empty($nik)){
        $servername = "localhost:3306";
        $username = "root";
        $password = "eagle6803";
  
        $conn = mysqli_connect($servername, $username, $password);
        $selectalreadycreateddatabase = mysqli_select_db($conn, "mobiluxe");
        if (isset($_POST['submit'])) {
            $sql = "INSERT INTO `user`(`Username`, `UserEmail`, `UserPass`, `UserPhone`, `UserAddres`, `UserCity`, `UserNIK`) VALUES ('$name', '$email', '$pass', '$phone', '$alamat', '$daerah', '$nik')";
        
            if (mysqli_query($conn, $sql)) {
                header("location: /Mobiluxe/php/Login.php");
            } else {
                $emailErr = "Email already exist";
                $email = "";
            }
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Registration</title>
    <style>
        /* Tampilan untuk layar yang lebih besar dari 768px */
        @media screen and (min-width: 451px) {
            body {
                display: none; /* Sembunyikan halaman untuk layar yang lebih besar */
            }
        }

        /* Tampilan untuk layar yang kurang dari atau sama dengan 768px */
        @media screen and (max-width: 451px) {
            body {
                display: block; /* Tampilkan halaman untuk layar yang lebih kecil */
            }
        }
        body {
            padding: 30;
            font-family: Roboto-Regular, Roboto, Helvetica Neue, Helvetica, Tahoma, Arial, sans-serif;
        }

        input[type="file"]{
            background-color: #D9D9D9;
            color: white;
            padding: 40px;
            cursor: pointer;
            width: 10%;

            position: absolute; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            opacity: 0;
        }

        .form h1 {
            font-weight: 400;
            margin-left: 10px; 
            font-size: 18px; 
            margin-bottom: 1px;
        }

        .form input{
            font-family: 'Inter';
            width: 100%;
            /* height: 30px; */
            border: 1px solid #ccc;
            box-sizing: border-box;
            resize: vertical;
            border-radius: 9px;
            background: #e1e1e191;;

            margin-bottom: 0px; 
            margin-top: 1px; 
            padding: 10px;
            padding-left: 10px; 
        }

        .form label{
            background-color: #e1e1e191;
            color: black; 
            padding: 12px; 
            border-radius: 5px; 
            display: block;
            text-align: center; 
            box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.127);
            font-weight: 1000; 
        }

        .submit label{
            padding-top: 10px;
            padding-bottom: 10px;
            width: 45%;
            
            display: block;
            margin: auto;
            margin-top: 10px;
            font-size: 15px;

            background: #e1e1e191;
            color: black;

            font-weight: 600; 

            border: 1px solid #cccccc57;
            border-radius: 10px;
        }

        .form p{
            margin-top: 5px; 
            margin-left: 10px;
            color: red; 
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div style="margin-bottom: 5px">
      <img src="bahan/logo.png" alt="Logo" style="display: inline-flex; width: 25px; height: 25px; margin-top: 3px" />
      <!-- <h3 style="display: inline-flex; margin: 0px; padding-left: 3px; font-family: 'Inter'; font-size: 14px;">MOBILUXE</h3> -->
    </div>
    <div class="form" style="margin-top: 10px;">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div style="height: 60px"></div>
            <div style="position: relative; height: 100px; margin-bottom: 60px;">
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 150px; height: 150px; border-radius: 50%; background-color:  #e1e1e191;; text-align: center;"></div>
                <input type="file" name="photo" accept="image/*">      
            </div>
            <!-- <p style="margin-left: 0px; margin-bottom: 30px; text-align: center;"><?php echo $nameErr;?></p> -->
            <h1>Full Name</h1>
            <input type="nama" name="nama" value="<?php echo $name;?>"/>
            <p><?php echo $nameErr;?></p>
            
            <h1>Email</h1>
            <input type="email" name="email" value="<?php echo $email;?>"/>
            <p><?php echo $emailErr;?></p>
            
            <h1>Password</h1>
            <input type="password" name="pass"/>
            <p><?php echo $passErr;?></p>
            
            <h1>Confirm Password</h1>
            <input type="password" name="conf_pass"/>
            <p><?php echo $conf_passErr;?></p>
            
            <h1>Phone Number</h1>
            <input type="number" name="phone" value="<?php echo $phone;?>"/>
            <p><?php echo $phoneErr;?></p>
            
            <h1>Alamat</h1>
            <input type="text" name="alamat" value="<?php echo $alamat;?>"/>
            <p><?php echo $alamatErr;?></p>
            
            <h1>Daerah</h1>
            <input type="text" name="daerah" value="<?php echo $daerah;?>"/>
            <p><?php echo $daerahErr;?></p>
            
            <h1>NIK</h1>
            <input type="number" name="nik" value="<?php echo $nik;?>"/>
            <p><?php echo $nikErr;?></p>
            
            <h1>ID Card Photo</h1>
            <label for="photo1">+</label>
            <input type="file" id="photo1" name="photo1" style="display: none;" accept="image/*">
            <!-- <p><?php echo $nameErr;?></p> -->

            <h1>Driver License Photo</h1>
            <label for="photo2">+</label>
            <input type="file" id="photo2" name="photo2" style="display: none;" accept="image/*">
            <!-- <p><?php echo $nameErr;?></p> -->

            <br>
            <div class="submit" style="text-align: center; margin-top: 15px">
                <label for="submit">Save Data</label>
                <input type="submit" id="submit" name="submit" style="display: none;"/>
            </div>
            <div style="height: 10px"></div>
        </form>
    </div>
    <script>
        function validateForm() {
        //   alert("Hello! I am an alert box!");
        }
    </script>
</body>
</html>