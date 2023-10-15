<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Halaman awal</title>
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
        button {
            background-color: #D9D9D9;
            color: white;
            padding: 12px 20px;
            cursor: pointer;
            width: 100%;

            width: 320px; 
            height: 50px; 
            font-size: 20px;
            color: black;

            border-radius:38cm;  
            border: 1px solid #ccc; 
            border-bottom: 3px solid #aaa; 
            border-right: 3px solid #aaa; 
            /* font-family: 'Inter'; */
        }
    </style>
</head>
<body>
    <br><br><br>
    <h1 style="text-align: center; display: flex; justify-content: center; align-items: top; height: 50px; font-size: 60px; font-family: 'Inter';">MOBILUXE</h1>
    <center>
        <img src="Bahan/Logo.png" alt="Logo" width="300" height="300">
    </center>
    <center>
        <br><br><br>
        <button type="button" onclick="Register()" style="margin-top: 10px;">Register</button>
        <br><br>
        <button type="button" onclick="LogIn()">Log In</button>
    </center>
    <script>
        function Register() {
            window.location.href='Register.php';
        }
        function LogIn() {
            window.location.href='LogIn.php';
          
        }
    </script>
</body>
</html>