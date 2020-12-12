<?php

$conn = new mysqli('localhost', 'root', 'qtt0210', 'final_project');

if (!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}