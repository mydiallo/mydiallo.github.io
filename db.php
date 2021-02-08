<?php
$servername = "localhost";
$username = "id15917916_membre_snf";
$password = "Sop_naby_france0!";
$dbname = "id15917916_sop_naby_fr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}