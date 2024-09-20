<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>

        <style>
        body {
            font-family: arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
        }

        form {
            text-align: center;
            background-color: #fff;
            border: 2px solid #ccc;
            padding: 25px;
            border-radius: 10px;
            width: 300px;
            margin: 0 auto;
        }

        table {
            width: 150px;
        }

        table td {
            padding: 10px;
            text-align: center;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 30px;
        }

        button[name="login"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 20px 70px;
            cursor: pointer;
            border-radius: 40px;
        }

        button[name="login"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td><button name="login">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if (isset($_POST['login'])){
   // echo "proses";
   $username=$_POST['username'];
   $password=$_POST['password'];
   $query=mysqli_query($koneksi,"select * from user where username='$username' AND password='$password'");
   $cek = mysqli_num_rows($query);
   // echo $cek;
   if($cek>0){
     //berhasil login
     session_start();
     $_SESSION['status']="sukses";
     $_SESSION['username']=$_POST['username'];
     $_SESSION['password']=$_POST['password'];
    header('location:index.php'); 
   }

}

?>
<style>
 body {
  background-image: url(back3.jpg);
 }  
</style>