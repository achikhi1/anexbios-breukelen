<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/film.css">
    <script src="./assets/js/getDataById.js" defer></script>
</head>

<body>
    <!-- Header -->
    <?php
    include './components/Header/header.php'
        ?>
    <!-- Main -->
    <main>
        <!-- Film -->
        <section id="film__container">
            <div class="film__wrapper">
                <!-- Title -->
                <div class="film_tile">
                </div>
                <!-- Info -->
                <div class="film_poster_and_info__container">
                    <!-- Left -->
                    <div class="film_poster">
                    </div>
                    <!-- Right -->
                    <div class="film_info__container">
                        <div class="film_info__wrapper">
                            <div class="movie_rate">
                                <img src="./assets/images/icons/ster.svg" alt="">
                                <img src="./assets/images/icons/ster.svg" alt="">
                                <img src="./assets/images/icons/ster.svg" alt="">
                                <img src="./assets/images/icons/ster.svg" alt="">
                                <img src="./assets/images/icons/ster_open.svg" alt="">
                            </div>
                            <div class="movie_icons">
                                <img src="./assets/images/kijkwijzers/kijkwijzer-12.png" alt="">
                                <img src="./assets/images/kijkwijzers/kijkwijzer-eng.png" alt="">
                                <img src="./assets/images/kijkwijzers/kijkwijzer-geweld.png" alt="">
                            </div>
                            <h3 class="release_date"></h3>
                            <div class="movie_desc">
                            </div>
                            <div class="movie_info">
                                <div class="genre">
                                    <p class="genre_text_bold">Genre <span>Actie</span></p>
                                </div>
                                <div class="filmlengte">
                                    <p class="genre_text_bold">Filmlengte <span>128 minutes</span></p>
                                </div>
                                <div class="land">
                                    <p class="genre_text_bold">Land <span>USA</span></p>
                                </div>
                                <div class="imdb_score">
                                    <p class="genre_text_bold">Imdb score <span>8.3/10</span></p>
                                </div>
                                <div class="regisseur">
                                    <p class="genre_text_bold">Regisseur <span>Juan Antonio Bayona</span></p>
                                </div>
                                <div class="acteurs">
                                    <p class="genre_text_bold">Acteurs</p>
                                </div>
                                <div class="actor_profile">
                                    <div class="actor_card">
                                        <img src="./assets/images/acteurs/" alt="">
                                        <p>Bryce Dallas Howard</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button><a href="bestellen.php">Koop Je Tickets</a></button>
                <div class="trailer_video">
                    <iframe src="https://www.youtube.com/embed/uYPbbksJxIg">
                    </iframe>
                </div>
            </div>
        </section>
        
    </main>
    <!-- End Main -->
    <!-- Footer -->
    <?php
    // include './components/Footer/footer.php'
    ?>
</body>

</html>