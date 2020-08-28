<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizzeria Pale's | Porvoo</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/images/favicon.ico">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/custom.css">
        
    </head>

    <body class="page-border">
        <div class="container">

            <div class="row mt-5 mb-5">
                <div class="m-4">
                    <img src="/images/logo.png" class="header-img ml-auto mr-auto" alt="Pale's Pizza">
                </div>
            </div>

            <div class="row">
                <div class="m-auto text-center">
                    <h1 class="main-title">
                        Pale's on
                        <u><a href="#contact" class="info-link">porvoolainen</a></u>
                        pizzeria, jonka pizzoissa yhdistyvät hitaasti nostatettu maukas pohja sekä laadukkaat raaka-aineet.
                    </h1>
                    <p class="font-weight-bold mt-5 text-1">
                        POIKKEUSAUKIOLOT
                    </p>
                    <p class="text-2">
                        SULJETTU pe-la 10.-11.4.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="mt-5">
                    <h1 class="pizza-header">PIZZA</h1>
                </div>

                <div>
                    <h3 class="menu-item-header mt-4">NYC CHEESE 8,90€</h3>
                    <p class="menu-item-content">Tomaattikastike, juusto</p>
                </div>

                <div>
                    <h3 class="menu-item-header mt-4">MARGHERITA 9,90€</h3>
                    <p class="menu-item-content">Tomaattikastike, fior di latte mozzarella, parmesan, basilika</p>
                </div>

                <div>
                    <h3 class="menu-item-header mt-4">SALAMI 9,90€</h3>
                    <p class="menu-item-content">Tomaattikastike, juusto, salami</p>
                </div>

                <div>
                    <h3 class="menu-item-header mt-4">DIAVOLA 12,90€</h3>
                    <p class="menu-item-content">Tomaattikastike, fior di latte mozzarella, tulinen salami, pippurinen oliiviöljy, persilja</p>
                </div>

                <div>
                    <h3 class="menu-item-header mt-4">CARBONARA (VALKOINEN) 11,90€</h3>
                    <p class="menu-item-content">Juusto, pekoni, Carbonara-kastike, pecorinojuusto, mustapippuri</p>
                </div>
            </div>

            <div class="col mt-5">
                <div>
                    <h3 class="menu-item-header mt-4">0,33 LIMU 2€</h3>
                    <p class="menu-item-content">Coca-Cola, Coca-Cola Zero, Fanta, Vichy</p>
                </div>
            </div>

            <div class="row border-top mt-5 m-3">
                <div class="col mt-5">
                    <h4 class="footer-item-header">AUKIOLOAJAT</h4>
                    <p class="footer-item-content">Ma: 11-20</p>
                    <p class="footer-item-content">Ti: 11-20</p>
                    <p class="footer-item-content">Ke: 11-20</p>
                    <p class="footer-item-content">To: 11-20</p>
                    <p class="footer-item-content">Pe: 11-20</p>
                    <p class="footer-item-content">La: 11-20</p>
                    <p class="footer-item-content">Su: 11-20</p>
                </div>

                <div class="col mt-5">
                    <h4 class="footer-item-header" id="contact">YHTEYSTIEDOT</h4>
                    <p class="footer-item-content">Mannerheiminkatu 16</p>
                    <p class="footer-item-content">06100 Porvoo</p>
                    <p class="footer-item-content">p. +358452581672</p>
                </div>

                <div class="col mt-5">
                    <h4 class="footer-item-header">
                        <img src="/images/payment.png" class="footer-img ml-auto mr-auto" alt="Pale's Pizza">
                        <span>MAKSUVÄLINEET</span>
                    </h4>
                    <p class="footer-item-content">Pankkikortti, lounaskortti ja -seteli</p>
                </div>
            </div>
      
        </div>
    </body>
</html>
