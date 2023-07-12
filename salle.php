<?php include('Maconnexion.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Salle</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ma navbar -->
    <nav>
        <div class="logo">
            <img src="img/mon logo.png" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Salles</a></li>
            <li><a href="#">À propos de nous</a></li>
        </ul>
        <div class="user">
            <button><a href="#">S'inscrire</a></button>
            <button><a href="formulaire.php">Se connecter</a></button>
        </div>
    </nav>

    <br>

    <!-- mon carousel -->
    <div class="carousel">
        <div class="carousel-item">
            <img src="img/istockphoto-478919558-612x612.jpg" alt="Image 1">
            <div class="carousel-text">
                <h3>Salle Medium :</h3>
                <p>La salle Medium est idéale pour les réunions de taille moyenne. Avec une capacité de 8 à 12 personnes, elle offre l'espace parfait pour des sessions collaboratives et des réunions d'équipe. Équipée d'un tableau blanc interactif et d'un système de projection, cette salle favorise la créativité et la productivité.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/istockphoto-105869596-612x612.jpg" alt="Image 2">
            <div class="carousel-text">
                <h3>Salle Standard :</h3>
                <p>Notre salle Standard est parfaite pour des réunions formelles et des présentations professionnelles. Avec une capacité pouvant accueillir jusqu'à 20 personnes, cette salle spacieuse offre un environnement confortable et fonctionnel. Équipée d'un système audio de qualité et d'un écran de projection, elle est idéale pour des sessions de formation ou des réunions plus importantes.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/istockphoto-911295362-612x612.jpg" alt="Image 3">
            <div class="carousel-text">
                <h3>Salle Exécutive :</h3>
                <p>La salle Exécutive est conçue pour des réunions haut de gamme et des rencontres importantes. Avec un design élégant et des équipements de pointe, cette salle peut accueillir jusqu'à 30 personnes. Dotée d'un système audio-vidéo de haute qualité, d'une table de conférence sophistiquée et d'un service de restauration sur demande, elle offre l'environnement idéal pour des réunions exécutives et des présentations de prestige.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/istockphoto-480155820-612x612.jpg" alt="Image 4">
            <div class="carousel-text">
                <h3>Salle de Créativité :</h3>
                <p>Notre salle de Créativité est spécialement conçue pour des sessions de brainstorming et des réunions axées sur l'innovation. Avec un espace ouvert et stimulant, elle permet aux équipes de libérer leur créativité. Cette salle est équipée de murs d'écriture, de tables modulables et de sièges confortables pour favoriser les échanges d'idées et les discussions dynamiques. </p>
            </div>
        </div>
    </div>

    <br>
    <hr>
    <br>

    <section class="sec1">
        <p>Découvrez nos salles de réunion exceptionnelles, conçues pour répondre à tous vos besoins professionnels. Avec une attention méticuleuse portée aux détails et un design moderne, nos salles offrent l'environnement idéal pour des réunions productives et inspirantes. <br>
            <br>
            Chaque salle est équipée des dernières technologies, avec des équipements audiovisuels de pointe et un accès Internet haut débit pour vous assurer une connectivité optimale. Que ce soit pour des présentations percutantes, des sessions de brainstorming créatives ou des réunions d'équipe efficaces, nos salles sont parfaitement adaptées à toutes les occasions.
        </p>
        <div>
            <img src="img/cool.jpg" class="image1" alt="">
        </div>
    </section>

    <br>
    <hr>
    <br>

    <!-- deuxieme section -->
    <section class="room-section">
  <div class="room-card">
    <img src="img/sallereunion.jpg" alt="Image 1">
    <h3>Salle Medium :</h3>
    <p>Description de la salle 1</p>
    <button class="reserve-btn">Réserver</button>
  </div>
  <div class="room-card">
    <img src="img/reddesign.jpg" alt="Image 2">
    <h3>Salle Standard :</h3>
    <p>Description de la salle 2</p>
    <button class="reserve-btn">Réserver</button>
  </div>
  <div class="room-card">
    <img src="img/reunion.jpg" alt="Image 3">
    <h3>Salle de Médium :</h3>
    <p>Description de la salle 3</p>
    <button class="reserve-btn">Réserver</button>
  </div>
  <div class="room-card">
    <img src="img/conferences.jpg" alt="Image 4">
    <h3>Salle de Conférences :</h3>
    <p>Description de la salle 4</p>
    <button class="reserve-btn">Réserver</button>
  </div>
</section>


<!-- Modal de réservation -->
<div id="reservation-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Réservation de salle</h2>
    <form class="reservation-form">
      <div class="form-group">
        <label for="user">Utilisateur :</label>
        <input type="text" id="user" name="id_utilisateur" required>
      </div>
      <div class="form-group">
        <label for="room">Salle :</label>
        <select id="room" name="id_salle" required>
          <option value="salle-medium">Salle Medium</option>
          <option value="salle-standard">Salle Standard</option>
          <option value="salle-medium2">Salle de Médium</option>
          <option value="salle-conferences">Salle de Conférences</option>
        </select>
      </div>
      <div class="form-group">
        <label for="start-date">Date de début :</label>
        <input type="date" id="start-date" name="date_debut" required>
        <input type="time" id="start-time" name="heure_debut" required>
      </div>
      <div class="form-group">
        <label for="end-date">Date de fin :</label>
        <input type="date" id="end-date" name="date_fin" required>
        <input type="time" id="end-time" name="heure_fin" required>
      </div>
      <button type="submit">Réserver</button>
    </form>
  </div>
</div>

      <!-- Vos champs de réservation ici -->
    </form>
  </div>
</div>


    <br>
    <hr>
    <br>

    <!-- troisieme section -->
    <section class="sec3">
        <div>
            <img src="img/images.jpg" class="img" alt="">
        </div>

        <p>La flexibilité est notre maître-mot. Nos salles peuvent accueillir des groupes de toutes tailles, des petites réunions intimes aux grandes conférences. Les configurations des sièges peuvent être personnalisées pour s'adapter à vos besoins spécifiques, qu'il s'agisse d'un style théâtre, en U, en salle de classe ou en configuration de tables rondes.<br>
            <br>
            Nous comprenons l'importance de l'ambiance et du confort pour favoriser la productivité. Nos salles sont dotées d'un éclairage naturel abondant, créant une atmosphère lumineuse et stimulante. De plus, nous veillons à ce que l'aménagement soit ergonomique et que le mobilier soit de haute qualité, afin que vous puissiez travailler dans un environnement confortable et propice à la concentration.
        </p>
    </section>

    <br>
    <hr>
    <br>

    <!-- section 4 -->
    <section class="sec4">
        <p> Pour compléter votre expérience, notre équipe dévouée est toujours à votre disposition pour répondre à vos demandes spécifiques et s'assurer que votre réunion se déroule sans accroc. Nous sommes là pour vous accompagner à chaque étape, depuis la réservation initiale jusqu'à la mise en place des équipements nécessaires. <br>
        <br>

Laissez nos salles de réunion être le cadre idéal pour vos rencontres professionnelles. Que ce soit pour des réunions d'affaires, des formations, des présentations clients ou des séances de travail collaboratif, nous avons tout ce dont vous avez besoin pour garantir le succès de vos événements.</p>
    </section>








    <!-- mon footer -->
    <footer>
  <div class="footer-logo">
    <img src="img/mon logo.png" alt="Logo">
  </div>
  <div class="footer-info">
    <h4>À propos de nous</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
  </div>
  <div class="footer-contact">
    <h4>Coordonnées</h4>
    <ul>
      <li><i class="fa fa-envelope"></i> contact@example.com</li>
      <li><i class="fa fa-phone"></i> +123456789</li>
    </ul>
  </div>
</footer>


    <script src="script.js"></script>
</body>

</html>