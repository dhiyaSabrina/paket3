<?php
    session_start();
    if (isset($_SESSION['userid'])) {
        echo"<script>alert('Maaf Anda Sudah Login, Silahkan Logout terlebih dahulu');window.location.replace('index.php');</script>";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Tambahkan link untuk ikon Font Awesome -->
    <title>Halaman Login</title>
    <style>
        /* Global Reset */
        body, h1, h2, h3, p, ul, li, table, th, td {
            margin: 0 auto;
            padding: 0;
        }

        /* Body Styles */
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f4f4f4;
            color: #333;
            background-image: url('background4.jpg'); /* Ganti 'background4.jpg' dengan URL atau path gambar background Anda */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
         
        }

        /* Container Styles */
        .container {
            max-width: 800px;
            margin: 50px auto; /* Tambahkan jarak atas dan bawah */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Tambahkan transparansi pada background container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Header Styles */
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #800000;
        }

        /* Form Styles */
        form {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="submit"] {
            width: 100%; /* Ubah lebar input menjadi 100% */
            padding: 10px; /* Ubah padding agar lebih lapang */
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #800000;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #778899; /* Ubah warna hover agar lebih gelap */
        }

        /* Responsive Styles */
        @media (max-width: 600px) {
            ul li {
                display: block;
                margin-bottom: 10px;
            }

            table {
                font-size: 14px;
            }
        }
        footer {
            background-color: #800000;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 0 0 8px 8px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Login</h1>
        <form action="proses_login.php" method="post">
            <table>
                <tr>
                    <td><b><i class="fas fa-user"></i> Username</b></td> <!-- Tambahkan ikon Font Awesome untuk username -->
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><b><i class="fas fa-lock"></i> Password</b></td> <!-- Tambahkan ikon Font Awesome untuk password -->
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
        <p style="text-align: center;">Don't have an account? <a href="register.php">Create Account</a></p>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('form')
        form.addEventListener('submit', (e) => {
            alert('Login berhasil')
        })
    })
</script>
<footer>Copyright © Sabrina 2024 </footer>
</html>
