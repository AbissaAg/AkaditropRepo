<?php

// Inclusion du fichier de connexion
require_once __DIR__ . '/BoutiquePrincipale/models/connection.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// Vérification de la valeur de 'is_active'
$pdo = Connection::connect();
$query = $pdo->prepare("SELECT is_active FROM event WHERE id = :event_id LIMIT 1");
$query->execute([':event_id' => 1]); // Remplace 1 par l'ID spécifique de l'événement si nécessaire
$result = $query->fetch(PDO::FETCH_ASSOC);

if ($result && $result['is_active'] == 1) {
    // Afficher la vue si l'événement est actif
    include __DIR__ . '/Eventviews.php';
} else {
    // Redirection vers BoutiquePrincipale si 'is_active' est égal à 0 ou si l'événement n'est pas trouvé
    header("Location: BoutiquePrincipale");
    exit();
}

?>
