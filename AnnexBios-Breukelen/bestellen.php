<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestellen</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/bestellen.css">
</head>

<body>
    <!-- Header -->
    <?php
    include './components/Header/header.php'
        ?>
    <!-- Main -->
    <main>
        <!-- Bestellen -->
        <section id="bestellen">
            <div class="bestellen__wrapper">
                <!-- Titel -->
                <div class="film_title">
                    <h2 class="film_title_">Tickets Bestellen</h2>
                </div>
                <!-- Keuzes -->
                <div class="film_upper_container__checklist">
                    <div class="titel_checkbox checkboxes">
                        <label for="#"><input type="button">Jurrasic World</label>
                    </div>
                    <div class="agenda_checkbox checkboxes">
                        <label for="#"><input type="date">Datum</label>
                    </div>
                    <div class="tijdstip_checkbox checkboxes">
                        <label for="#"><input type="time">Tijdstip</label>
                    </div>
                </div>
                <!-- Bestel Container -->
                <section class="bestel_container">
                    <div class="bestel-film-card">
                        <div class="movie_card__picture">
                            <a href="#"><img src="./assets/images/films/Jurassic-World_-Fallen-Kingdom.jpg" alt=""></a>
                        </div>
                        <div class="movie_card_info__container">
                            <div class="movie_card_info__wrapper">
                                <h2>Jurrasic World</h2>
                                <div class="movie_rate">
                                    <img src="./assets/images/icons/ster.svg" alt="">
                                    <img src="./assets/images/icons/ster.svg" alt="">
                                    <img src="./assets/images/icons/ster.svg" alt="">
                                    <img src="./assets/images/icons/ster.svg" alt="">
                                    <img src="./assets/images/icons/ster_open.svg" alt="">
                                </div>
                                <h3>Release: 7-06-2018</h3>
                                <div class="movie_desc">
                                    <p>Oppenheimer, geschreven en geregisseerd door Christopher Nolan, is een epische
                                        thriller die het fascinerende verhaal vertelt van de raadselachtige man die om
                                        de wereld te redden het risico moet nemen dat deze wordt verwoest.\n\nDe
                                        hoofdrollen worden verto</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bestel-sectie">
                        <div class="bestel-sectie_wrapper">
                            <h2>STAP 1: KIES JE TICKET</h2>
                            <div class="bestel-leeftijd-table">
                                <table>
                                    <tr>
                                        <th class="border-point">Type</th>
                                        <th class="border-point">Prijs</th>
                                        <th class="border-point aantal">Aantal</th>
                                    </tr>
                                    <tr>
                                        <td>Normaal</td>
                                        <td>€9,00</td>
                                        <td><select name="#" id="#">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>Kind t/m 11 jaar</td>
                                        <td>€5,00</td>
                                        <td><select name="#" id="#">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-point">65+</td>
                                        <td class="border-point">€7,00</td>
                                        <td class="border-point">
                                            <select name="#" id="#">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <div class="voucher">
                                    <h2>Vouchercode</h2>
                                    <input type="text" placeholder="code">
                                    <button>Toevoegen</button>
                                </div>
                            </div>
                            <div class="stoelen-reserveren">
                                <h2>STAP 2: KIES JE STOEL</h2>
                                <div class="filmdoek">
                                    <hr>
                                    <p>FILMDOEK</p>
                                </div>
                                <div class="stoelen">
                                    <div class="stoel-parent">
                                        <div class="stoel-wit-laag"></div>
                                        <div class="stoel-child"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="controleer-bestelling">
                                <h2>STAP 3: CONTROLEER JE BESTELLING</h2>
                                <div class="controleer-bestelling__container">
                                    <img src="./assets/images/films/Jurassic-World_-Fallen-Kingdom.jpg" alt="">
                                    <div class="film-info">
                                        <h2>JURASSIC WORLD: FALLEN KINGDOM </h2>
                                        <div class="movie_icons">
                                            <img src="./assets/images/kijkwijzers/kijkwijzer-12.png" alt="">
                                            <img src="./assets/images/kijkwijzers/kijkwijzer-eng.png" alt="">
                                            <img src="./assets/images/kijkwijzers/kijkwijzer-geweld.png" alt="">
                                        </div>
                                        <div class="movie-order-info">
                                            <div class="locatie">
                                                <p><span>Bioscoop:</span> Hellevoetsluit (Zaal 3)</p>
                                            </div>
                                            <div class="wanneer">
                                                <p><span>Wanneer:</span> 11 juni 14:15</p>
                                            </div>
                                            <div class="stoel">
                                                <p><span>Stoelen:</span> Rij 2, stoel 7</p>
                                            </div>
                                            <div class="ticket">
                                                <p><span>Tickets:</span> 1x normaal</p>
                                            </div>
                                            <div class="totaal-ticket">
                                                <span><span> Totaal 1 ticket:</span> €9,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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