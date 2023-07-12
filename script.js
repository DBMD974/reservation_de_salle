// pour les boutton de mes cards dans la pages salle.php
// Récupérer les éléments nécessaires
const reserveButtons = document.querySelectorAll('.reserve-btn');
const modal = document.getElementById('reservation-modal');
const closeBtn = document.getElementsByClassName('close')[0];

// Fonction pour ouvrir le modal
function openModal() {
  modal.style.display = 'block';
}

// Fonction pour fermer le modal
function closeModal() {
  modal.style.display = 'none';
}

// Ajouter les écouteurs d'événements
reserveButtons.forEach(button => {
  button.addEventListener('click', openModal);
});

closeBtn.addEventListener('click', closeModal);

// Fermer le modal lorsque l'utilisateur clique en dehors de la fenêtre du modal
window.addEventListener('click', (event) => {
  if (event.target == modal) {
    closeModal();
  }
});








































































// pour le formulaire
$('button').click(function(e) {
    e.preventDefault();
    $('main').addClass('flip');
  });
  