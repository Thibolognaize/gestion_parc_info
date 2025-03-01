<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Équipement</title>
    <link rel="stylesheet" href="./styles/form_style.css">
    <</head>
<body>
    <a href="index.php">Retour à la Liste des Équipements</a>
    <div class="container">
        <h2>Ajouter un Nouvel Équipement</h2>
        <form action="./db/insert.php" method="post">
            <div>
                <label for="type_equipement">Type d'équipement</label>
                <select id="type_equipement" name="type_equipement" required>
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                    <option value="option4">Option 4</option>
                </select>
            </div>
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
