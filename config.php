<?php 
//mengakses config.php
include 'conect.php';
//
$user = $_POST['username'];
$pass = $_POST['pass'];

$login = mysqli_query($conn,"SELECT * FROM user WHERE username ='$user' and pasword = '$pass'");
$cek = mysqli_num_rows ($login);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login successful";
    // echo "berhasil login successful";
    header ("location: DataTabel.php");
    // echo "
    //     <script>
    //         alert('Login successful');
    //         document.location.href = 'indexdua.php';
    //     </script>
    //     ";
    // header("location: index.php");
}
else {
    echo "
        <script>
            alert('Login gagal');
            document.location.href = 'login.php';
        </script>
        ";
    // header("location: index.php");
}

?>