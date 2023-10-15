<?php
  session_start();
  $nameErr = $emailErr  = $accErr = $email = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
      $nameErr = "Email is required";
    }
    
    if (empty($_POST["pass"])) {
      $emailErr = "Password is required";
    }
    
    if(!empty($_POST["email"]) && !empty($_POST["pass"])){
      $servername = "localhost:3306";
      $username = "root";
      $password = "eagle6803";

      $conn = mysqli_connect($servername, $username, $password);
      $selectalreadycreateddatabase = mysqli_select_db($conn, "mobiluxe"); 

      if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $valid = 0;

        $sql = "SELECT * FROM `user`";
        $dataFromDb = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($dataFromDb)) {
            if($row['UserEmail'] ==  $email && $row['UserPass'] ==  $password){              
              $_SESSION["UserId"] = $row['UserId'];
              header("location: /Mobiluxe/php/CariMobil1.php");
              
              $valid = 1;
              break;

            }else if($row['UserEmail'] ==  $email && $row['UserPass'] !=  $password){
              $valid = 2;
              break;
            }
        }

        if (mysqli_close($conn)) {
        }
      }

      
    
      if($valid == 0){
        $accErr = "No Account";
      } elseif($valid == 2){
        $emailErr = "Password is wrong";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Login</title>
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
        margin: 10;
        font-family: Roboto-Regular, Roboto, Helvetica Neue, Helvetica, Tahoma, Arial, sans-serif;
      }

      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 12px;
        padding-left: 20px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
      }

      button {
        background-color: #d9d9d9;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      .content h1 {
        font-family: "JetBrains Mono";
        font-weight: 400;
        margin-left: 20px;
        font-size: 20px;
        text-align: left;
        margin-bottom: 1px;
        margin-top: 35px;
      }

      .content p{
        margin-top: 5px; 
        color: red; 
        font-size: 13px
      }

      .content input[type="email"],
      input[type="password"] {
        padding: 10px;
        padding-left: 20px;
        margin-bottom: 0px;
        margin-top: 1px;

        background: #d9d9d938;
        border-radius: 33px;
        box-shadow: inset 0px 0px 10px rgba(90, 90, 90, 0.044);

        font-size: 15px;
      }

      .content input[type="submit"] {
        padding-top: 10px;
        padding-bottom: 10px;
        width: 60%;
        margin-top: 30px;

        font-size: 15px;

        background: #d9d9d95a;
        color: black;

        border: 1px solid #cccccc57;
        border-radius: 33px;
      }
    </style>
  </head>
  <body>
    <div style="margin-bottom: 20px">
      <img src="bahan/logo.png" alt="Logo" style="display: inline-flex; width: 25px; height: 25px; margin-top: 3px" />
      <!-- <h3 style="display: inline-flex; margin: 0px; padding-left: 3px; font-family: 'Inter'; font-size: 14px;">MOBILUXE</h3> -->
    </div>
    <br />

    <div class="content" style="margin: 15px; text-align: center">
      <h1 style="text-align: center; margin-left: 0px; font-size: 50px; letter-spacing: 5px; font-weight: 400; margin-bottom: 0px">Welcome!</h1>
      <h5 style="text-align: center; font-family: 'Inter'; font-size: 13px; margin-top: 0px">
        Don’t have an account?
        <span>
          <a href="Halaman_Register.php">Register Here</a>
        </span>
      </h5>
      <div style="margin-top: 55px">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <h1>Username</h1>
          <input type="email" name="email" placeholder="Enter your Username" value="<?php echo $email;?>"/>
          <p><?php echo $nameErr;?></p>

          <h1>Password</h1>
          <input type="password" name="pass" placeholder="Enter your Password" />
          <p><?php echo $emailErr;?></p>
            
          <input type="submit" name="submit"/>
          <p><?php echo $accErr;?></p>
        </form>
      </div>
    </div>

    <script>
      function validateForm() {
        alert("Hello! I am an alert box!");
      }
    </script>

  </body>
</html>
