<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parc_info_db";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    // Gérer l'erreur de connexion
    echo "Erreur : " . $e->getMessage();
}
?>