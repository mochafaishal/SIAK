<?php
include 'base.class.php';
$db = new Db;
$con = mysqli_connect($db->get('server'),$db->get('username'),$db->get('password'),$db->get('db'));

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 