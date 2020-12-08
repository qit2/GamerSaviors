<?php

$conn = new mysqli('localhost', 'root', '123root', 'Literally Games');

if (!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}