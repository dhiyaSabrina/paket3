<?php
    include "koneksi.php";
    session_start();

    $username=$_POST['username'];
    $password=$_POST['password'];
    

    $sql=mysqli_query($conn,"select * from user where username='$username' and password='$password'");

    $cek=mysqli_num_rows($sql);

    if($cek==1){
        while($data=mysqli_fetch_array($sql)){
            $_SESSION['userid']=$data['userid'];
            $_SESSION['namalengkap']=$data['namalengkap'];

        }
        header("location:home.php");
    }else{
        header("location:login.php");
    }

    
?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 400px;
        margin: 100px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        background-color: #45a049;
    }
</style>