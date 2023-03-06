<?php
$username = $_POST['ussername'];
$password = $_POST['password'];

if($username == "Kayla" && $password == "Kayla"){
    echo "Login berhasil";
} else{
    echo "Login gagal";
}