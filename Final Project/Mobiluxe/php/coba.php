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
        position: absolute;
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
        padding: 20px 19px 0px;
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <?php
        if(array_key_exists('button8', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
            header("location: halaman_user.php");
        }
        function button2() {
            echo "This is Button2 that is selected";
        }
    ?>

    <div class="center">
    <form method="post">
    <input type="submit" name="button1"
                class="button" value="Button1" />
        
    <input type="submit" id="button2" name="button2"
            class="button" value="Log out" />
    
    <input type="submit" name="button3"
            class="button" value="Button1" />
    
    <input type="submit" id="button2" name="button4"
            class="button" value="Log out" />
    
    <input type="submit" name="button5"
            class="button" value="Button1" />
    
    <input type="submit" id="button2" name="button6"
            class="button" value="Log out" />

    <input type="submit" name="button7"
            class="button" value="Button1" />
    
    <input type="submit" id="button2" name="button8"
            class="button" value="ke halaman user" />
</form>
</div>

    <div class="navbar" style="display: inline-block; text-align: center">
      <img src="Bahan/1.png" onclick="validateForm()" style="height: 32px; padding-bottom: 18px; padding-top: 15px" />
      <img src="Bahan/2.png" onclick="validateForm()" style="height: 36px; padding-top: -20px; padding-bottom: 16px" />
      <img src="Bahan/3.png" onclick="validateForm()" style="height: 35px; padding-bottom: 15px; padding-top: 16px" />
      <img src="Bahan/4.png" onclick="validateForm()" style="height: 37px; padding-bottom: 14px" />
      <img src="Bahan/5.png" onclick="validateForm()" style="height: 35px; width: 34px; padding-bottom: 15px; background-color: #ededed" />
    </div>
  </body>
</html>
