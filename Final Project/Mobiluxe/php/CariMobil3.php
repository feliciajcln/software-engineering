<?php
    session_start();

    $servername = "localhost:3306";
    $username = "root";
    $password = "eagle6803";

    $conn = mysqli_connect($servername, $username, $password);
    $selectalreadycreateddatabase = mysqli_select_db($conn, "mobiluxe"); 

    $carname = $_SESSION["CariCarname"];

    $sql = "SELECT * FROM `car` WHERE Carname = '$carname'";
    $dataFromDb = mysqli_query($conn, $sql);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['submit2'])) {
            $_SESSION["CariCarId"] = $_POST['submit2'];
            
            header("location: /Mobiluxe/php/CariMobil4.php");
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>list mobil 2</title>
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

        .navbar {
          overflow: hidden;
          background-color: rgba(217, 217, 217, 1);
          position: fixed;
          bottom: 0px;
          width: auto;
          border: 1px groove rgba(104, 104, 104, 0.516);
        }

      /* Tampilan untuk layar yang kurang dari atau sama dengan 768px */
      @media screen and (max-width: 451px) {
        body {
          display: block; /* Tampilkan halaman untuk layar yang lebih kecil */
        }

        .navbar {
          overflow: hidden;
          background-color: rgba(217, 217, 217, 1);
          position: fixed;
          bottom: 0px;
          left: 0px;
          width: 100%;
          border: 1px groove rgba(104, 104, 104, 0.516);
        }
      }

      .navbar img {
        display: inline-block;
        margin: auto;
        margin-bottom: -10px;
        margin-top: -8px;
        color: #f2f2f2;
        align-items: center;
        padding: 20px 25px 0px;
        text-decoration: none;
      }

      .navbar img:hover {
        background-color: #ededed;
        color: black;
        height: 100%;
      }

      .center {
        margin: auto;
        width: 85%;
        padding: 10px;
        padding-top: 10px;
      }

      .center div {
        display: inline-flex;
        margin-bottom: -9px;
      }

      .nama {
        width: 100%;

        background-color: rgba(217, 217, 217, 0.656);
        border-radius: 21px;

        margin-top: 26px;
        margin-bottom: 0px;

        padding-top: 15px;
        padding-bottom: 18px;
      }

      .center input {
        display: block;
        text-align: left;
        width: 100%;
        margin-bottom: 10px;

        border: 0px;
        border-radius: 21px;

        padding-left: 26px;
        padding-top: 7px;
        padding-bottom: 7px;
      }

      .center p {
        font-size: 20px;
        margin-top: 30px;
        margin-left: 31px;
        margin-bottom: 5px;
      }

      .center hr {
        border: 1px solid rgb(105, 105, 105);
        margin-top: 44px;
        margin-bottom: -5px;
        margin-left: 10px;
        margin-right: 10px;
      }
      input[type="email"],
        select {
            font-family: 'Inter';
            width: 105%;
            padding: 12px;
            height: 30px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            resize: vertical;
            border-radius: 9px;
            background: #D9D9D9;
            box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.3)
        }
        .outer-box {
            margin-top: 5%;
            margin-left: 5%;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 390px;
            height: 90px;
            border-radius: 20px;
        }

        .middle-box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 370px;
            height: 60px;
            background-color: #D9D9D9;
            border-radius: 25px;
        }

        .inner-box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 320px;
            height: 320px;
            background-color: #ffffff;
            border-radius: 20px;
        }
        input[type="image"] {
            margin-bottom: 6px;
            margin-left: 80%;
            width: 30px;
            height: 30px;
            border: none;
            background-color: #D9D9D9;
            cursor: pointer;
            padding: 3px;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 20px;
        }

        input[type="image"]:hover {
            opacity: 0.8;
        }

        input[type="image"] img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .btn-with-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 160px;
            background-color: #ffffff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            border-radius: 20px;
        }

        .btn-with-icon img {
            width: 20px;
            height: 20px;
        }
        
        .o-box {
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150px;
        }
        .m-box {
            display: flex;
            justify-content: left;
            align-items: center;
            width: 390px;
            height: 140px;
            background-color: #D9D9D9;
            border-radius: 20px;
        }

        .m-box h1{
          font-size: 25px;
          
        }

        .b-box{
          width: 180px; 
          height: 120px; 
          margin-left: 15px;
          background-color: #ffffff; 
          margin-right: 8%; 
          border-radius: 15px; 
          display: relative;
        }

        .ot-box {
            margin: auto;
            margin-bottom: 5px;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 93%;
            border-radius: 20px;
        }

        .button {
            display: inline-block;
            padding: 5px;
            width: 95%;
            background-color: #D9D9D9;
            color: rgb(0, 0, 0);
            font-size: 30px;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            font-weight: 1000;
            box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.3);
		    }
    </style>
  </head>
  <body>
        <div style="overflow-y: scroll;margin-left: 0.5%; margin-right: 0.5%;"></div>
            <div class="outer-box">
                <div class="middle-box">
                    <button onclick="back()" class="btn-with-icon">
                        <img src="Bahan/drop.png" alt="Gambar">
                    </button>
                </div>
            </div>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <?php
            $i = 0;
            while ($row = mysqli_fetch_assoc($dataFromDb)) {
                
                echo "<div class='o-box'>";
                echo "<label for='submit2'>";
                    echo "<div class='m-box'>";
                    echo "<div class='b-box'>";
                    echo"</div>";
                    echo "<h1>";
                    echo $row['UserId'];
                    $lol = $row['UserId'];
                    echo "</h1>";
                    echo "</div>";
                    echo "</label>";
                    echo "</div>";
                echo '<input style="display: none" type="submit" id="submit2" name="submit2" value="'.$lol.'">';
                $i++;
            }
        ?>
        </form>

    <?php
        if ($i >= 2){
        echo '<div  style="height: 65px">';
        echo '</div>';
        }   
    ?>
    <div class="navbar" style="display: inline-block; text-align: center">
      <img src="Bahan/1.png" onclick="TransactionList()" style="height: 32px; padding-bottom: 18px; padding-top: 15px;" />
      <img src="Bahan/2.png" onclick="CarList()" style="height: 36px; padding-top: -20px; padding-bottom: 16px;" />
      <img src="Bahan/3.png" onclick="Home()" style="height: 35px; padding-bottom: 15px; padding-top: 16px;  background-color: #ededed;" />
      <img src="Bahan/4.png" onclick="CarLocation()" style="height: 37px; padding-bottom: 14px" />
      <img src="Bahan/5.png" onclick="UserPage()" style="height: 35px; width: 34px; padding-bottom: 15px;" />
    </div>
    <script>
        function back() {
            window.location.href='CariMobil1.php';
      }
        function TransactionList() {
          window.location.href='ListTransaksi1.php';
      }
      function CarList() {
        window.location.href='ListMobil1.php';
      }
      function Home() {
        window.location.href='CariMobil1.php';
      }
      function CarLocation() {
        // window.location.href='menu_page_admin.html';
      }
      function UserPage() {
        window.location.href='halaman_user.php';
      }
    </script>
  </body>
</html>