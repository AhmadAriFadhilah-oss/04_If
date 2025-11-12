<?php
$username = $_POST['username'];
$password = $_POST['pass'];
if (($username == "bebek") && ($password == "bebek12") ||
    ($username == "amir") && ($password == "passamir")) {
    echo "Login sukses";
} else {
    echo "Login gagal";
}
?>