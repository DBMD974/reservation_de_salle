<?php

include('Maconnexion.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Valider et sécuriser les données (ex: vérification de la validité de l'email, hachage du mot de passe, etc.)

  // Connectez-vous à votre base de données
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'utilisateurs';

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insérer les données dans la table utilisateur
    $sql = "INSERT INTO utilisateur (nom, email, password) VALUES (:nom, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nom', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $passwordHash); // Remplacez $passwordHash par le hachage sécurisé de votre mot de passe

    // Exécutez la requête
    $stmt->execute();

    // Redirigez l'utilisateur vers une page de succès ou affichez un message de succès
    header('Location: inscription_success.php');
    exit();
  } catch (PDOException $e) {
    // Gérez les erreurs de connexion à la base de données
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
  }
}
?>
