<?php
include('./db/db_config.php'); 

// Requête pour récupérer les données des équipements
$sql = "SELECT * FROM equipements";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Équipements</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <a href="form.php">Ajouter un Nouvel Équipement</a>
    <h1>Liste des Équipements</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Numéro de Série</th>
                <th>Date d'Achat</th>
                <th>Statut</th>
                <th>Emplacement</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Afficher les données de chaque équipement
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['type_equipement']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['marque']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['modele']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['numero_serie']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['date_achat']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['statut']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['emplacement']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Aucun équipement trouvé</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
$conn->close();
?>
