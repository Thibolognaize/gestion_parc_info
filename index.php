<?php
include('./db_config.php'); // Assurez-vous d'ajouter un point-virgule ici

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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Liste des Équipements</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
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
