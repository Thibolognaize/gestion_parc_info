<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Équipement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="index.php">Retour à la Liste des Équipements</a>
    <div class="container">
        <h2>Ajouter un Nouvel Équipement</h2>
        <form action="ajouter_equipement.php" method="post">
            <div>
                <label for="marque">Marque</label>
                <input type="text" id="marque" name="marque" required>
            </div>
            <div>
                <label for="modele">Modèle</label>
                <input type="text" id="modele" name="modele" required>
            </div>
            <div>
                <label for="numero_serie">Numéro de Série</label>
                <input type="text" id="numero_serie" name="numero_serie" required>
            </div>
            <div>
                <label for="date_achat">Date d'Achat</label>
                <input type="date" id="date_achat" name="date_achat" required>
            </div>
            <div>
                <label for="statut">Statut</label>
                <select id="statut" name="statut" required>
                    <option value="actif">Actif</option>
                    <option value="maintenance">Maintenance</option>
                    <option value="retire">Retiré</option>
                </select>
            </div>
            <div>
                <label for="emplacement">Emplacement</label>
                <input type="text" id="emplacement" name="emplacement" required>
            </div>
            <button type="submit">Ajouter</button>
        </form>
    </div>
</body>
</html>
