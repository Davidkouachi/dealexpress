document.addEventListener("DOMContentLoaded", function() {

    var vehiculeSelect = document.getElementById('vehiculeSelect');
    var currentYear = new Date().getFullYear();
    var startYear = 2000; // Commencer à partir de 2021

    for (var year = currentYear; year >= startYear; year--) {
        var option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        if (year === currentYear) {
            option.selected = true; // Sélectionner automatiquement l'année en cours
        }
        vehiculeSelect.appendChild(option);
    }

    $(document).ready(function() {
        $('#rech_categorie').on('change', function() {
            sum();
        });
    });

    function sum() {

        const rech = $('#rech_categorie').val();

        // Hide all sections initially
        document.getElementById('rech_autre').style.display = 'none';
        document.getElementById('rech_immobilier').style.display = 'none';
        document.getElementById('rech_vehicule').style.display = 'none';
        document.getElementById('rech_marque').style.display = 'none';
        document.getElementById('rech_km').style.display = 'none';
        document.getElementById('rech_annee').style.display = 'none';

        // Show the appropriate section based on the selected value
        if (rech === 'immobilier') {
            document.getElementById('rech_immobilier').style.display = 'block';
        } else if (rech === 'vehicule') {
            document.getElementById('rech_vehicule').style.display = 'block';
            document.getElementById('rech_marque').style.display = 'block';
            document.getElementById('rech_km').style.display = 'block';
            document.getElementById('rech_annee').style.display = 'block';
        } else {
            document.getElementById('rech_autre').style.display = 'block';
        }
    }

    // Initialize the display based on the current selection
    sum();
});
// Fonction pour formater le prix avec des points
function formatPrice(input) {
    // Supprimer tous les points existants
    input = input.replace(/\./g, '');

    // Formater le prix avec des points
    return input.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// Écouter l'événement d'entrée sur les champs de texte
document.getElementById('min-price').addEventListener('input', function() {
    this.value = formatPrice(this.value);
});

document.getElementById('max-price').addEventListener('input', function() {
    this.value = formatPrice(this.value);
});

// Événement pour permettre uniquement les chiffres
document.getElementById('min-price').addEventListener('keypress', function(event) {
    const key = event.key;
    if (isNaN(key)) {
        event.preventDefault();
    }
});

document.getElementById('max-price').addEventListener('keypress', function(event) {
    const key = event.key;
    if (isNaN(key)) {
        event.preventDefault();
    }
});
