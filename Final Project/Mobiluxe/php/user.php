<?php
  // session_start();
  if(array_key_exists('logOut', $_POST)) {
      // session_destroy();
      header("location: index.php");
    }
    else if(array_key_exists('button2', $_POST)) {
      // header("location: coba.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Halaman User</title>
    <style>
      /* Tampilan untuk layar yang lebih besar dari 768px */
      @media screen and (min-width: 451px) {
        body {
          display: none;
          /* display: block; /* Sembunyikan halaman untuk layar yang lebih besar */
          max-width: 450px;
          margin: auto; */
        }

        .navbar {
          overflow: hidden;
          background-color: rgba(217, 217, 217, 1);
          position: fixed;
          bottom: 0px;
          width: auto;
          border: 1px groove rgba(104, 104, 104, 0.516);
        }
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
    </style>
  </head>
  <body>
    <div class="center">
        <div class="nama">
          <div><img src="Bahan/6.png" onclick="validateForm()" style="height: 40px; margin-left: 25px" /></div>
          <div style="margin-top: -16px; margin-left: 10px"><span style="font-size: 23px; margin-top: 22px">Nama Pengguna</span></div>
        </div>

        <form method="post">
          <hr />
          <p>My Account</p>
          <input type="submit" name="button1" class="button" value="......" />
          
          <p>General</p>
          <input type="submit" id="button2" name="button2" class="button" value="......" />
          
          <p>Others</p>
          <input type="submit" id="button2" name="logOut" class="button" value="Log out" />
      </form>
    </div>
    
    <div class="navbar" style="display: inline-block; text-align: center">
      <img src="Bahan/1.png" onclick="TransactionList()" style="height: 32px; padding-bottom: 18px; padding-top: 15px" />
      <img src="Bahan/2.png" onclick="CarList()" style="height: 36px; padding-top: -20px; padding-bottom: 16px" />
      <img src="Bahan/3.png" onclick="Home()" style="height: 35px; padding-bottom: 15px; padding-top: 16px" />
      <img src="Bahan/4.png" onclick="CarLocation()" style="height: 37px; padding-bottom: 14px" />
      <img src="Bahan/5.png" onclick="UserPage()" style="height: 35px; width: 34px; padding-bottom: 15px; background-color: #ededed" />
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
        window.location.href='halaman_user.php';
      }
    </script>
  </body>
</html>
