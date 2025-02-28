<?php
include('./db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $numero_serie = $_POST['numero_serie'];
    $date_achat = $_POST['date_achat'];
    $statut = $_POST['statut'];
    $emplacement = $_POST['emplacement'];

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO equipements (marque, modele, numero_serie, date_achat, statut, emplacement)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $marque, $modele, $numero_serie, $date_achat, $statut, $emplacement);

    if ($stmt->execute()) {
        echo "Nouvel équipement ajouté avec succès.";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
