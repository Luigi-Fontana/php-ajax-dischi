$(document).ready(function () {

    var source = $('#card-template').html();
    var template = Handlebars.compile(source);

    $.ajax({
        url: 'server.php',
        method: 'GET',
        success: function (data) {
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
        },
        error: function (err) {
            alert('errore');
        }
    });
});
