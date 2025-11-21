<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/styles/library-components.css">
    <link rel="stylesheet" href="/styles/shopping-cart.css">
    <link rel="stylesheet" href="/styles/menu.css">
    <link rel="stylesheet" href="/styles/product-popup.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/media-queries.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>

    <header>
        <div class="icon-container">
            <div class="icon-box">
                <!-- HAMBURGER ICON / CHECKBOX -->
                <label for="menu-open"><img src="/assets/hamburger-menu.svg" alt=""></label>
                <input type="checkbox" id="menu-open"></input>

                <!-- MOBILE MENU -->
                <section class="menu-container menu-container-mobile">
                    <nav>
                        <div class="menu-item">
                            <p class="subheading">Meny</p>
                            <img class="menu-close" src="/assets/plus.svg" alt="">
                        </div>

                        <div class="menu-item">
                            <a>Re-purpose</a>
                            <img src="/assets/arrow-forward.svg" alt="">
                        </div>

                        <div class="menu-item">
                            <a>Plagg</a>
                            <img src="/assets/arrow-forward.svg" alt="">
                        </div>

                        <div class="menu-item">
                            <a>Packning</a>
                            <img src="/assets/arrow-forward.svg" alt="">
                        </div>

                        <div class="menu-item">
                            <a>Verktyg</a>
                            <img src="/assets/arrow-forward.svg" alt="">
                        </div>

                        <div class="menu-item">
                            <a class="subheading">Bli medlem</a>
                            <img src="/assets/arrow-forward.svg" alt="">
                        </div>

                        <section>
                            <div class="menu-icons">
                                <img src="/assets/globe.svg" alt="">
                                <img src="/assets/help-circle.svg" alt="">
                                <img src="/assets//mail.svg" alt="">
                            </div>

                            <img src="/assets/logo-tm.svg" alt="">
                    </nav>
                </section>
                <!-- END OF MENU -->
            </div>

            <div class="icon-box"><a><img src="/assets/search.svg"></a></div>
            <div class="icon-box"><a><img class="logo-mobile" src="/assets/logotyp-header-red.svg"></a></div>
            <div class="icon-box"><a><img src="/assets/smile.svg"></a></div>
            <div class="icon-box">
                <!-- SHOPPING CART: HAMBURGER ICON / CHECKBOX -->
                <label for="cart-open"><img src="/assets/shopping-cart.svg" alt=""></label>
                <input type="checkbox" id="cart-open"></input>
                <?php require __DIR__ . "/shopping-cart.php" ?>
            </div>
        </div>


        <!-- DESKTOP -->
        <div class="icon-container-desktop">
            <div>
                <div class="icon-box">
                    <!-- HAMBURGER ICON / CHECKBOX -->
                    <label for="menu-open-desktop"><img src="/assets/hamburger-menu.svg" alt=""></label>
                    <input type="checkbox" id="menu-open-desktop"></input>

                    <!-- DESKTOP MENU -->
                    <section class="menu-container menu-container-desktop">
                        <nav class="menu-desktop">
                            <div class="menu-item">
                                <a class="subheading">Re-purpose</a>
                                <a>Plagg</a>
                                <a>Packning</a>
                                <a>Verktyg</a>
                                <a>Övrigt</a>
                                <a>Objekt 5</a>
                                <a>Visa allt i re-purpose</a>
                            </div>
                            <div class="menu-item">
                                <a class="subheading">Plagg</a>
                                <a>Plagg</a>
                                <a>Packning</a>
                                <a>Verktyg</a>
                                <a>Övrigt</a>
                                <a>Objekt 5</a>
                                <a>Visa allt i re-purpose</a>
                            </div>
                            <div class="menu-item">
                                <a class="subheading">Packning</a>
                                <a>Plagg</a>
                                <a>Packning</a>
                                <a>Verktyg</a>
                                <a>Övrigt</a>
                                <a>Objekt 5</a>
                                <a>Visa allt i re-purpose</a>
                            </div>
                            <div class="menu-item">
                                <a class="subheading">Verktyg</a>
                                <a>Plagg</a>
                                <a>Packning</a>
                                <a>Verktyg</a>
                                <a>Övrigt</a>
                                <a>Objekt 5</a>
                                <a>Visa allt i re-purpose</a>
                            </div>

                        </nav>
                    </section>
                    <!-- END OF MENU -->
                </div>
            </div>
            <div>
                <div class="icon-box"><a><img id="logo-desktop" src="/assets/logotyp-header-red.svg"></a></div>
            </div>
            <div>
                <div class="icon-box"><a><img src="/assets/search.svg"></a></div>
                <div class="icon-box"><a><img src="/assets/smile.svg"></a></div>
                <div class="icon-box">
                    <!-- SHOPPING CART: HAMBURGER ICON / CHECKBOX -->
                    <label for="cart-open-desktop"><img src="/assets/shopping-cart.svg" alt=""></label>
                    <input type="checkbox" id="cart-open-desktop"></input>
                    <?php require __DIR__ . "/shopping-cart.php" ?>

                </div>
            </div>
        </div>
    </header>