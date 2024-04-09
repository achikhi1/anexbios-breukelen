<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies & Series</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/overzicht.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/getAllData.js" defer></script>
</head>

<body>
    <!-- Header -->
    <?php
    include './components/Header/header.php'
        ?>
    <!-- Main -->
    <main>
        <!-- Film Agenda XL -->
        <section id="film_agenda_xl__container">
            <div class="bg_img">
                <img src="./assets/images/header/header_afbeelding.jpg" alt="Header Afbeelding Bioscoop">
            </div>
            <section id="film_agenda">
                <div class="film_agenda__wrapper">
                    <div class="film_upper__container">
                        <!-- Title -->
                        <div class="film_agenda_title">
                            <h2>Film Agenda</h2>
                        </div>
                        <!-- Keuzes -->
                        <div class="film_upper_container__checklist">
                            <img src="./assets/images/icons/settings.png" alt="">
                            <div class="film_checkbox checkboxes">
                                <label for="#"><input type="checkbox">Films</label>
                            </div>
                            <div class="deze_week_checkbox checkboxes">
                                <label for="#"><input type="checkbox">Deze Week</label>
                            </div>
                            <div class="vandaag_checkbox checkboxes">
                                <label for="#"><input type="checkbox">Vandaag</label>
                            </div>
                            <div class="categorie_checkbox checkboxes">
                                <label for="#"><input type="checkbox">Categorie</label>
                            </div>
                        </div>
                    </div>
                    <!-- Movie Cards -->
                    <div class="movie_card__container">
                        <!-- Card -->
                    </div>
                </div>
            </section>
            <div class="bg_img-black">
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
<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
Something is wrong with the XAMPP installation :-(
