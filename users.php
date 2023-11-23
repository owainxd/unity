<?php
require('menu.php');

session_start(); // Démarrer la session (assurez-vous d'appeler ceci au début de chaque page PHP)

// Vérifier si l'utilisateur est connecté en tant qu'admin
if (isset($_SESSION['pseudo']) && $_SESSION['pseudo'] === 'admin') {
    // L'utilisateur est administrateur, continuer avec l'affichage de la page Players
} else {
    // L'utilisateur n'est pas administrateur, rediriger vers une autre page ou afficher un message d'erreur
    header("Location: connexion.php"); // Redirection vers une autre page
    // ou
    echo "Accès interdit. Vous devez être administrateur pour accéder à cette page.";
    // Vous pouvez également afficher un lien de retour ou un bouton pour rediriger l'utilisateur vers une autre page.
    exit; // Terminer l'exécution du script
}

// Le reste du contenu de la page Players ici
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-4">
        <h1>Liste des joueurs</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Pseudo</th>
                    <th>Country</th>
                    <th>Subscribed</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'list_players.php';
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>' .
                            '<td>' . $row['id_player'] . '</td>' .
                            '<td>' . $row['email'] . '</td>' .
                            '<td>' . $row['pseudo'] . '</td>' .
                            '<td>' . $row['country'] . '</td>' .
                            '<td>' . $row['subscribed'] . '</td>' .
                            '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="5">Aucun joueur trouvé.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>