<?php include('Maconnexion.php'); ?>
<!DOCTYPE html>
<html lang="an">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bodyinscription">

<form method="POST" action="inscription.php" class="registration-form2">
  <h2>Inscription</h2>
  <div class="form-group2">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" required>
  </div>
  <div class="form-group2">
    <label for="email">Adresse e-mail :</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div class="form-group2">
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>
  </div>
  <div class="form-group2">
    <label for="confirm-password">Confirmer le mot de passe :</label>
    <input type="password" id="confirm-password" name="confirm-password" required>
  </div>
  <button type="submit2"><a href="<?php include('inscription.php');?>">S'inscrire</a></button>
</form>

    <script src="script.js"></script>
</body>
</html>