<?php
  session_start();
  $servername = "localhost:3306";
    $username = "root";
    $password = "eagle6803";

    $conn = mysqli_connect($servername, $username, $password);
    $selectalreadycreateddatabase = mysqli_select_db($conn, "mobiluxe"); 
    $carid = $_SESSION["CariCarId"];

    $sql = "SELECT * FROM `car` WHERE CarId = '$carid'";
    $dataFromDb = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($dataFromDb);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Rent History 2</title>
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
        left: 0px;
        width: 100%;
        border: 1px groove rgba(104, 104, 104, 0.516);
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

      .menu {
        width: 100%;
      }

      .center {
        margin: auto;

        height: fit-content;
        width: 90%;

        margin-top: 38px;

        background-color: rgba(217, 217, 217, 0.656);
        border-radius: 15px;
      }

      .box {
        margin: auto;
        height: 300px;
        width: 85%;

        background-color: white;
        border-radius: 15px;
      }

      .center h2 {
        padding-top: 33px;
        text-align: center;
      }

      .center p {
        margin-left: 38px;
        margin-bottom: -6px;

        font-weight: bold;
      }

      .center span {
        margin-left: 38px;
        margin-bottom: -3px;

        font-weight: normal;
      }

      .image {
        width: 90%;
        height: 90%;
      }

      .form label {
        display: block;
        width: 90%;

        margin: auto;
        margin-top: 15px;
        margin-bottom: 20px;
        padding: 1px;

        text-align: center;

        border: 0px;
        border-radius: 21px;
        background-color: rgba(217, 217, 217, 0.656);
      }
    </style>
  </head>
  <body>
    <div class="center" style="margin-bottom: 0px">
        <h2><?php echo $row['Carname'];?></h2>
        <div class="box">
            <div class="image"></div>
        </div>
        
      <p style="margin-top: 30px">Alamat<span style="margin-left: 10px">: <br><?php echo $row['CarTahun'];?></span></p>
      <p>Kontak<span style="margin-left: 33px">: <?php echo $row['CarTahun'];?></span></p>
      <p style="margin-top: 30px">Nama Mobil<span style="margin-left: 27px">: <?php echo $row['Carname'];?></span></p>
      <p>Tahun<span style="margin-left: 84px">: <?php echo $row['CarTahun'];?></span></p>
      <p>Transmisi<span style="margin-left: 28px">: <?php echo $row['CarTransmisi'];?></</span></p>

      <br />
    </div>

    
    <div class="navbar" style="display: inline-block; text-align: center">
      <img src="Bahan/1.png" onclick="TransactionList()" style="height: 32px; padding-bottom: 18px; padding-top: 15px;" />
      <img src="Bahan/2.png" onclick="CarList()" style="height: 36px; padding-top: -20px; padding-bottom: 16px; background-color: #ededed" />
      <img src="Bahan/3.png" onclick="Home()" style="height: 35px; padding-bottom: 15px; padding-top: 16px;" />
      <img src="Bahan/4.png" onclick="CarLocation()" style="height: 37px; padding-bottom: 14px" />
      <img src="Bahan/5.png" onclick="UserPage()" style="height: 35px; width: 34px; padding-bottom: 15px" />
    </div>

    <script>
      function EditTransaction() {
            var confirmed = confirm("Are you sure you want to edit this record?");
            if (confirmed) {
                alert("cool")
                // var form = document.getElementById("EditData");
                // form.action="Back/Rent_Confirmation_acc.php";
                
                // form.submit();
            }else{
                alert("wow")
                // var form = document.getElementById("EditData");
                // form.action="Back/Rent_Confirmation_dcc.php";
                
                // form.submit();
            }
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
            window.location.href='user.php';
        }
    </script>
  </body>
</html>
