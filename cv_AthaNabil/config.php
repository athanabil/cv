<?php
$host = 'localhost';
$db = 'cv_athanabil';
$user = 'athanabil';
$pwd = 'atha1234';
$conn = mysqli_connect($host, $user, $pwd, $db); // true | false
if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}
