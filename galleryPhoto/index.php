<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Lending</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #6b5b5b;
        }

        h1 {
            margin: 0;
            padding: 20px;
            color: #f4f4f4;
            background-color: #800000;
            text-align: center;
            border-bottom: 2px solid #800000;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #800000;
            border-bottom: 2px solid #ffe6f2;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: #ffffff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #778899;
        }

        th {
            background-color: #778899;
            color: #f4f4f4;
            padding: 12px;
            text-align: center;
        }

        td a {
            text-decoration: none;
            padding: 8px 12px;
            margin: 2px;
            display: inline-block;
            background-color: #800000;
            color: #ffffff;
            border-radius: 3px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ffe6f2;
            padding: 12px;
            text-align: left;
        }

        img {
            max-width: 100%; /* Make the image responsive */
            height: auto;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            max-height: 150px; /* Set a maximum height for the images */
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
    <?php
        session_start();
        if(!isset($_SESSION['userid'])){
    ?>
            <ul>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
    <?php
        }else{
    ?>   
         <h1><b>GALLERY FOTO</b>!</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="album.php">Album</a></li>
            <li><a href="foto.php">Foto</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    <?php
        }
    ?>
    

    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Uploader</th>
            <th>Jumlah Like</th>
            <th>Lihat Komentar</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $sql = mysqli_query($conn, "SELECT * FROM foto,user WHERE foto.userid=user.userid ORDER BY foto.fotoid DESC");
            while($data=mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?=$data['judulfoto']?></td>
                <td><?=$data['deskripsifoto']?></td>
                <td>
                    <img src="gambar/<?=$data['lokasifile']?>" width="200px">
                </td>
                <td><?=$data['namalengkap']?></td>
                <td>
                    <?php
                        $fotoid=$data['fotoid'];
                        $sql2=mysqli_query($conn,"SELECT * FROM likefoto WHERE fotoid='$fotoid'");
                        echo mysqli_num_rows($sql2);
                    ?>
                </td>
                <td>
                    <a href="lihatkomentar.php?fotoid=<?=$data['fotoid']?>">Lihat Komentar</a>
                </td>
                <td>
                    <a href="like.php?fotoid=<?=$data['fotoid']?>">Like</a>
                    <a href="like.php?fotoid=<?=$data['fotoid']?>">Unlike</a>
                    <a href="komentar.php?fotoid=<?=$data['fotoid']?>">Komentar</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
    <footer>Copyright © Sabrina 2024 </footer>
</body>
</html>


