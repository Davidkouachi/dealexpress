document.addEventListener('DOMContentLoaded', function() {
    var vehiculeSelect = document.getElementById('vehiculeSelecta');
    var currentYear = new Date().getFullYear();
    var startYear = 2000; // Commencer à partir de 2000

    for (var year = currentYear; year >= startYear; year--) {
        var option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        vehiculeSelect.appendChild(option);
    }
});

// Écouter l'événement d'entrée sur les champs de texte
document.getElementById('prixa').addEventListener('input', function() {
    this.value = formatPrice(this.value);
});

document.getElementById('surfacea').addEventListener('input', function() {
    this.value = formatPrice(this.value);
});

document.getElementById('kma').addEventListener('input', function() {
    this.value = formatPrice(this.value);
});

// Événement pour permettre uniquement les chiffres
document.getElementById('prixa').addEventListener('keypress', function(event) {
    const key = event.key;
    if (isNaN(key)) {
        event.preventDefault();
    }
});

document.getElementById('surfacea').addEventListener('keypress', function(event) {
    const key = event.key;
    if (isNaN(key)) {
        event.preventDefault();
    }
});

document.getElementById('kma').addEventListener('keypress', function(event) {
    const key = event.key;
    if (isNaN(key)) {
        event.preventDefault();
    }
});

// Fonction pour formater le prix avec des points
function formatPrice(input) {
    // Supprimer tous les points existants
    input = input.replace(/\./g, '');

    // Formater le prix avec des points
    return input.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}