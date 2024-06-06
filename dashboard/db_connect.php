<?php
// Dane do połączenia z bazą danych
$servername = "localhost"; // adres serwera
$username = "root"; // nazwa użytkownika
$password = ""; // hasło
$dbname = "panel"; // nazwa bazy danych

// Tworzenie połączenia
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Sprawdzanie połączenia
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
