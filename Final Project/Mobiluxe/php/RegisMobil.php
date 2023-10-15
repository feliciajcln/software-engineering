<?php
    session_start();
  // define variables and set to empty values
  $_SESSION["UserId"] = 1;
  $nameErr = $tipeErr  = $tahunErr = "";
  $transmisiErr = $kapasitasErr = "";
  $platErr = $daerahErr  = "";

  $name = $tipe = $tahun = "";
  $transmisi = $kapasitas  = "";
  $daerah = $plat  = "";

  $user_photoErr = $id_photoErr = $cense_photoErr  = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["nama"];
    }
    
    if (empty($_POST["Tipe"])) {
      $tipeErr = "Tipe is required";
    } else {
      $tipe = $_POST["Tipe"];
    }

    if (empty($_POST["Tahun"])) {
        $tahunErr = "Tahun is required";
    } else {
        $tahun = $_POST["Tahun"];
    }
    
    if (empty($_POST["Transmisi"])) {
        $transmisiErr = "Transmisi password is required";
    } else {
        $transmisi = $_POST["Transmisi"];
    }

    if (empty($_POST["Kapasitas"])) {
        $kapasitasErr = "Kapasitas is required";
    } else {
        $kapasitas = $_POST["Kapasitas"];
    }
    
    if (empty($_POST["Plat"])) {
        $platErr = "Plat is required";
    } else {
        $plat = $_POST["Plat"];
    }

    if (empty($_POST["daerah"])) {
        $daerahErr = "Daerah is required";
    } else {
        $daerah = $_POST["daerah"];
    }

    if (!empty($name) && !empty($tipe) && !empty($tahun) && !empty($transmisi) && !empty($kapasitas) && !empty($daerah) && !empty($plat)){
        $servername = "localhost:3306";
        $username = "root";
        $password = "eagle6803";
  
        $conn = mysqli_connect($servername, $username, $password);
        $selectalreadycreateddatabase = mysqli_select_db($conn, "mobiluxe");
        if (isset($_POST['submit'])) {
            $UserId = $_SESSION["UserId"];

            $sql = "INSERT INTO `car`(`UserId`, `Carname`, `CarTipe`, `CarTahun`, `CarTransmisi`, `CarKapasitas`, `CarPlat`, `CarCity`) VALUES ($UserId, '$name', '$tipe', '$tahun', '$transmisi', $kapasitas, '$plat', '$daerah')";
        
            if (mysqli_query($conn, $sql)) {
                header("location: /Mobiluxe/php/ListMobil1.php");
            }
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>regis Mobil</title>
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

      button {
        background-color: #d9d9d9;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
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

      .form input {
        font-family: "Inter";
        width: 100%;
        /* height: 30px; */
        border: 1px solid #ccc;
        box-sizing: border-box;
        resize: vertical;
        border-radius: 9px;
        background: #e1e1e191;

        margin-bottom: 0px;
        margin-top: 1px;
        padding: 10px;
        padding-left: 10px;
      }

      .form label {
        background-color: #e1e1e191;
        color: black;
        padding: 12px;
        border-radius: 5px;
        display: block;
        text-align: center;
        box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.127);
        font-weight: 1000;
      }

      .submit label {
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

      .form p {
        margin-top: 5px;
        margin-left: 10px;
        color: red;
        font-size: 13px;
      }
    </style>
  </head>
  <body>
    <div style="margin-bottom: 0px">
      <img src="bahan/logo.png" alt="Logo" style="display: inline-flex; width: 25px; height: 25px; margin-top: 3px" />
      <!-- <h3 style="display: inline-flex; margin: 0px; padding-left: 3px; font-family: 'Inter'; font-size: 14px;">MOBILUXE</h3> -->
    </div>
    <!-- <div style="display: relative; height: 190px">
      <div
        style="
          width: 125.24px;
          height: 125.24px;
          top: 20%;
          left: 50%;
          background-color: #d9d9d9;
          margin: auto;
          border-radius: 15px;
          display: relative;
        "
      >
        <img src="Bahan\mobil.png" alt="Gambar" style="width: 90px; height: 80px; position: inherit; margin-left: 15%; margin-top: 20%" />
      </div>
      <div style="position: relative; height: 100px">
        <div
          style="
            position: absolute;
            top: 2%;
            left: 65%;
            transform: translate(-50%, -50%);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ffffff;
            border: 2px solid black;
            text-align: center drop-shadow(0px 10px 10px rgba(0, 0, 0, 0.25)) drop-shadow(0px 10px 10px rgba(0, 0, 0, 0.25));
          "
        ></div>
        <button
          style="
            position: absolute;
            top: 2%;
            left: 65%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            width: 20px;
            height: 40px;
            background-image: url('Bahan\Icon.png');
            background-size: cover;
            background-position: center;
          "
        ></button>
        <input
          type="file"
          id="photo"
          name="photo"
          accept="image/*"
          style="position: absolute; top: 2%; left: 50%; transform: translate(-15%, -50%); opacity: 0; cursor: pointer"
        />
      </div>
    </div> -->

    <div class="form" style="margin-top: 0px">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div style="height: 30px"></div>
        <div style="position: relative; height: 100px; margin-bottom: 80px;">
            <div
              style="
                width: 125.24px;
                height: 125.24px;
                top: 20%;
                left: 50%;
                background-color: #d9d9d9;
                margin: auto;
                border-radius: 30px;
                display: relative;
              ">
                <img src="Bahan\mobil.png" alt="Gambar" style="width: 90px; height: 80px; position: inherit; margin-left: 15%; margin-top: 20%" />
            </div>
            <input type="file" name="photo" accept="image/*">      
        </div>
    
        <h1>Nama Mobil</h1>
        <input type="nama" name="nama" value="<?php echo $name;?>" />
        <p><?php echo $nameErr;?></p>

        <h1>Tipe Mobil</h1>
        <input type="text" name="Tipe" value="<?php echo $tipe;?>" />
        <p><?php echo $tipeErr;?></p>

        <h1>Tahun Mobil</h1>
        <input type="number" name="Tahun" value="<?php echo $tahun;?>"/>
        <p><?php echo $tahunErr;?></p>

        <h1>Transmisi</h1>
        <input type="text" name="Transmisi" value="<?php echo $transmisi;?>"/>
        <p><?php echo $transmisiErr;?></p>

        <h1>Kapasitas Penumpang</h1>
        <input type="number" name="Kapasitas" value="<?php echo $kapasitas;?>" />
        <p><?php echo $kapasitasErr;?></p>

        <h1>Plat Nomor</h1>
        <input type="text" name="Plat" value="<?php echo $plat;?>" />
        <p><?php echo $platErr;?></p>

        <h1>Daerah</h1>
        <input type="text" name="daerah" value="<?php echo $daerah;?>" />
        <p><?php echo $daerahErr;?></p>

        <h1>Foto STNK</h1>
        <label for="photo1">+</label>
        <input type="file" id="photo1" name="photo1" style="display: none" accept="image/*" />
        <!-- <p><?php echo $nameErr;?></p> -->

        <br />
        <div class="submit" style="text-align: center; margin-top: 15px">
          <label for="submit">Save Data</label>
          <input type="submit" id="submit" name="submit" style="display: none" />
        </div>
        <div style="height: 10px"></div>
      </form>
    </div>

    <div  style="height: 65px">
    </div>

    <div class="navbar" style="display: inline-block; text-align: center">
      <img src="Bahan/1.png" onclick="TransactionList()" style="height: 32px; padding-bottom: 18px; padding-top: 15px" />
      <img src="Bahan/2.png" onclick="CarList()" style="height: 36px; padding-top: -20px; padding-bottom: 16px;  background-color: #ededed" />
      <img src="Bahan/3.png" onclick="Home()" style="height: 35px; padding-bottom: 15px; padding-top: 16px" />
      <img src="Bahan/4.png" onclick="CarLocation()" style="height: 37px; padding-bottom: 14px" />
      <img src="Bahan/5.png" onclick="UserPage()" style="height: 35px; width: 34px; padding-bottom: 15px;" />
    </div>
    
    <script>
function addcar() {
            window.location.href='RegisMobil.php';
      }
        function TransactionList() {
        // window.location.href='menu_page_admin.html';
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
