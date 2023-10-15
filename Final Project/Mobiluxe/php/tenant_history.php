<?php
  // session_start();

// DATABASE
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Tenant History</title>
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
        margin-bottom: -3px;
      }

      .image {
        width: 90%;
        height: 90%;
      }

      button {
        display: block;
        width: 90%;

        margin: auto;
        margin-top: 10px;
        margin-bottom: 20px;

        text-align: center;

        border: 0px;
        border-radius: 21px;
      }
    </style>
  </head>
  <body>
    <div class="center">
      <h2>Tenant History</h2>
      <div class="box">
        <div class="image"></div>
      </div>

      <p style="margin-top: 30px">Nomor Resi<span style="margin-left: 49px">: </span></p>
      <p>Tanggal Transaksi<span style="margin-left: 10px">: </span></p>
      <p>Tanggal Mulai<span style="margin-left: 33px">: </span></p>
      <p>Tanggal Selesai<span style="margin-left: 27px">: </span></p>
      <p>Status <span style="margin-left: 84px">: </span></p>
      <p>Nama Perental <span style="margin-left: 28px">: </span></p>
      <p>Nama Penyewa <span style="margin-left: 23px">: </span></p>
      <p>Total Biaya <span style="margin-left: 48px">: </span></p>

      <br />
    </div>

    <?php
    $condition = 0; // nanti di isi kondisi dari transaksi

    if ($condition == 1 || $condition == 2) {
      echo '<div class="center" style="margin-top: -5px">';
      echo '<p style="padding-top: 15px">Lokasi Pengambilan :</p>';
      echo '<p style="margin-top: 7px">cololol</p>';
      echo '<p>Lokasi Pengembalian :</p>';
      echo '<p style="margin-top: 7px">cololol</p>';

      echo '<br />';
      echo '</div>';
    }
    
    $condition = 0; // nanti di isi kondisi dari transaksi

    if ($condition == 1 || $condition == 2) {
        echo '<form id="EditData" method="POST" ac>';
            echo '<button onclick="EditTransaction()"><h3 style="margin-top: 10px; margin-bottom: 10px">Edit</h3></button>';
        echo '</form>';

        echo '<div  style="height: 43px">';
        echo '</div>';
    }else{
      echo '<div  style="height: 65px">';
      echo '</div>';
    }
    ?>
    
    <div class="navbar" style="display: inline-block; text-align: center">
      <img src="Bahan/1.png" onclick="TransactionList()" style="height: 32px; padding-bottom: 18px; padding-top: 15px; background-color: #ededed" />
      <img src="Bahan/2.png" onclick="CarList()" style="height: 36px; padding-top: -20px; padding-bottom: 16px" />
      <img src="Bahan/3.png" onclick="Home()" style="height: 35px; padding-bottom: 15px; padding-top: 16px" />
      <img src="Bahan/4.png" onclick="CarLocation()" style="height: 37px; padding-bottom: 14px" />
      <img src="Bahan/5.png" onclick="UserPage()" style="height: 35px; width: 34px; padding-bottom: 15px" />
    </div>

    <script>
        function EditTransaction() {
            
            <?php
              if ($condition == 1) {
                echo 'var confirmed = confirm("Are you sure you want to edit this record?");';
                echo 'if (confirmed) {';
                  echo 'alert("cool")';
                  echo 'var form = document.getElementById("EditData");';
                  echo 'form.action="Back/Tenant_Confirmation_acc.php";';
                  
                  echo ' form.submit();';

                echo '}else{';
                  echo 'alert("wow")';
                  echo 'var form = document.getElementById("EditData");';
                  echo 'form.action="Back/Tenant_Confirmation_dcc.php";';
                    
                  echo 'form.submit();';
              }else{
                echo 'var confirmed = confirm("Are you sure you want to edit this record?");';
                echo 'if (confirmed) {';
                  echo 'alert("cool")';
                  // echo 'var form = document.getElementById("EditData");';
                  // echo 'form.action="Back/Tenant_Confirmation_acc.php";';
                  
                  // echo ' form.submit();';

                echo '}else{';
                  echo 'alert("wow")';
                  // echo 'var form = document.getElementById("EditData");';
                  // echo 'form.action="Back/Tenant_Confirmation_dcc.php";';
                    
                  // echo 'form.submit();';
              }
            ?>
        }

            //           if (confirmed) {
            //     alert("cool")
            //     var form = document.getElementById("EditData");
            //     form.action="Back/Tenant_Confirmation_acc.php";
                
            //     form.submit();
            // }else{
            //     alert("wow")
            //     var form = document.getElementById("EditData");
            //     form.action="Back/Tenant_Confirmation_dcc.php";
                
            //     form.submit();
            // }
          // }else{
            
          // }
            
        }

        function TransactionList() {
            // window.location.href='menu_page_admin.html';
        }
        function CarList() {
            // window.location.href='menu_page_admin.html';
        }
        function Home() {
            // window.location.href='menu_page_admin.html';
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
