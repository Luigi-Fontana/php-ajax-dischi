$(document).ready(function () {

    var source = $('#card-template').html();
    var template = Handlebars.compile(source);

    apiCallGet();

    $('#filter').keyup(function(event){ // Funzione ricerca
        var charFilter = $(this).val().toLowerCase(); // Assegno alla variabile il lower case del valore in input
        $('.card').each(function(){ // Faccio una ricerca su tutte le Card
            var highlightText = $(this).find('h4').text().toLowerCase().includes(charFilter); // Assegno a una variabile il check se l'input è incluso nell'h4 in questione
            if (highlightText) { // Check positivo
                $(this).show();
            } else { // Check negativo
                $(this).hide();
            }
        });
    });

    function apiCallGet() { // Classica Funzione di Chiamata API
        $.ajax({
            url: 'server.php',
            method: 'GET',
            success: function (data) {
                printCards(data);
            },
            error: function (err) {
                alert('errore');
            }
        });
    }

    function printCards(data) { // Funzione che stampa dato un array in entrata la lista delle card con Handlebars
        var discs = data;
        for (var i = 0; i < discs.length; i++) {
            disc = discs[i];
            var discCard = {
                cover: disc.cover,
                title: disc.title,
                author: disc.author,
                year: disc.year
            }
            var html = template(discCard);
            $('main .container').append(html);
        }
    }
});
