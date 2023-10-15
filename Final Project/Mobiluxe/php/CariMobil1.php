<?php
    session_start();

    $servername = "localhost:3306";
    $username = "root";
    $password = "eagle6803";

    $conn = mysqli_connect($servername, $username, $password);
    $selectalreadycreateddatabase = mysqli_select_db($conn, "mobiluxe"); 

    $sql = "SELECT * FROM `car`";
    $dataFromDb = mysqli_query($conn, $sql);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['submit'])) {

            $_SESSION["CariLokasi"] = $_POST['Lokasi'];
            $_SESSION["CariMulai"] = $_POST['Mulai'];
            $_SESSION["CariSelesai"] = $_POST['Selesai'];

            $_SESSION["CariKapasitas"] = $_POST['Kapasitas'];
            $_SESSION["CariTransmisi"] = $_POST['Transmisi'];
            $_SESSION["CariTipe"] = $_POST['Tipe'];

            header("location: /Mobiluxe/php/CariMobil2.php");
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>cari mobil</title>
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

        .middle-box {
            margin:auto;
            margin-bottom: 10px;
            width: 90%;
            background-color: #D9D9D9;
            border-radius: 20px;
        }

        .inner-box {
            margin: auto;
            padding-bottom: 10px;
            width: 95%;
            background-color: #ffffff;
            border-radius: 20px;
        }

        .form input{
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
          box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.3);

          margin-bottom: 1px; 
          margin-top: 1px;
          width: 100%;
        }

        .filter h1{
          font-weight: 400;
          margin-left: 8px; 
          font-size: 18px; 
          margin-bottom: 1px;
        }

        .submit img{
          background-color: #D9D9D9;
          padding: 6px  14px 6px 14px;
          border-radius: 15px;
        }
    </style>
  </head>
  <body>
    <div style="height: 40px;"></div>
    <div class="middle-box">
            <br>
            <div class="inner-box">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form" style="margin: auto; width: 90%;">
                <br>
                  <div style="display:flex; justify-content: center; margin-top: 15px;">                    
                    <img src="Bahan/logo.png" alt="Logo" style="width: 50px; height: 50px; align-items: center; margin-left: -10px;">
                    <h1 style="margin-top: 10px ;margin-left: 7px; font-family: 'Inter';">MOBILUXE</h1>
                  </div>

                  <div class="filter" style="margin-bottom: px;">

                  <h1>Lokasi Mobil</h1>
                  <input type="text" name="Lokasi"/>

                  <h1>Tanggal Mulai Rental</h1>
                  <input type="date" name="Mulai"/>
                  
                  <h1>Tanggal Selesai Rental</h1>
                  <input type="date" name="Selesai"/>

                  <h1>Kapasitas Penumpang</h1>
                  <input type="number" name="Kapasitas"/>
                  
                  <h1>Transmisi</h1>
                  <input type="text" name="Transmisi"/>
                  
                  <h1>Tipe Mobil</h1>
                  <input type="text" inamed="Tipe"/>
                  
                </div>
                  <!-- <input type="image" src="Search.png" alt="Gambar tombol"> -->
                  <div class="submit" style="text-align: right;">
                    <br>
                    <label for="submit" style="margin-right: 5px;"><img src="Bahan/Search.png" alt="Logo" style="width: 30px; height: 30px;"></label>
                    <input type="submit" id="submit" name="submit" style="display: none;"/>
                    <br>
                  </div>
                </form>
            </div>
            <br>
          </div>
      <br><br>
    </div>
    
    <div class="navbar" style="display: inline-block; text-align: center">
      <img src="Bahan/1.png" onclick="TransactionList()" style="height: 32px; padding-bottom: 18px; padding-top: 15px;" />
      <img src="Bahan/2.png" onclick="CarList()" style="height: 36px; padding-top: -20px; padding-bottom: 16px;" />
      <img src="Bahan/3.png" onclick="Home()" style="height: 35px; padding-bottom: 15px; padding-top: 16px;  background-color: #ededed;" />
      <img src="Bahan/4.png" onclick="CarLocation()" style="height: 37px; padding-bottom: 14px" />
      <img src="Bahan/5.png" onclick="UserPage()" style="height: 35px; width: 34px; padding-bottom: 15px;" />
    </div>
    <script>
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