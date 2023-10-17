<?php
$servername = "localhost";
$username = "username";
$password = "password";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create the database
$sql = "CREATE DATABASE users";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
// Create the tables
$sql = "CREATE TABLE users.personal_data (
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table personal_data created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "CREATE TABLE users.private_data (
  id_card_image BLOB NOT NULL,
  pdf_file BLOB NOT NULL,
  doc_file BLOB NOT NULL,
  xls_file BLOB NOT NULL,
  video_file BLOB NOT NULL,
  aes_encrypted_data BLOB NOT NULL,
  rc4_encrypted_data BLOB NOT NULL,
  de_encrypted_data BLOB NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table private_data created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
//mysqli_real_escape_string()  escapes special characters in a string for use in an SQL statement
$id_card_image = mysqli_real_escape_string($conn, $id_card_image);
$pdf_file = mysqli_real_escape_string($conn, $pdf_file);
$doc_file = mysqli_real_escape_string($conn, $doc_file);
$xls_file = mysqli_real_escape_string($conn, $xls_file);