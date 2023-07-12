<?php include('Maconnexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bodyformulaire">

<div class="formulaire">
<form class="registration-form">
  <h2>Connection</h2>
  <div class="form-group">
    <label for="name">Identifiant :</label>
    <input type="text" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="email">Adresse e-mail :</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>
  </div>
  <!-- <div class="form-group">
    <label for="confirm-password">Confirmer le mot de passe :</label>
    <input type="password" id="confirm-password" name="confirm-password" required>
  </div> -->
  <button type="submit">Se Connecter</button>
</form>
</div>



    



<script src="reservation_de_salle/script.js"></script>
</body>
</html>