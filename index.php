<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <!-- <script src="https://kit.fontawesome.com/07f1e373ab.js" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" charset="utf-8"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>SpotiFlix</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="https://www.scdn.co/i/_global/favicon.ico">
        <link rel="stylesheet" href="dist/css/app.css">
    </head>
    <body>
        <header>
            <div class="container flex">
                <div class="header-left">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Ff%2Ff2%2FLogoappliandrospotify.png&f=1&nofb=1" alt="logo">
                </div>
                <div class="header-right">
                    <h2>SPOTIFLIX</h2>
                </div>
            </div>
        </header>
        <main>
            <div class="container flex">
                <?php // Procedimento con solo PHP
                    include 'data.php';
                ?>
                <?php foreach ($discs as $key => $disc) { ?>
                    <div class="card">
                        <div class="card-cover">
                            <img src="<?php echo $disc['cover']; ?>" alt="cover">
                        </div>
                        <div class="card-text">
                            <h4><?php echo $disc['title']; ?></h4>
                            <p><?php echo $disc['author']; ?></p>
                            <small><?php echo $disc['year']; ?></small>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>

        <script src="dist/js/app.js" charset="utf-8"></script>
    </body>
</html>
