<?php // PRODUCT POPUP PONCHO MED FÄRGVAL 
if (!isset($_GET['id'])) ?>

<article id="product-popup">
    <span class="product-popup-container">
        <a href="#" class="product-popup-close"><img src="/assets/plus.svg"></a>

        <!-- PONCHO - IMG CAROUSEL -->
        <section class="product-popup-img-carousel">
            <section class="carousel">

                <div class="card">
                    <img class="product-popup-img-1" src="/assets/products/poncho/PONCHO_green_V1_1080x1080.png">
                </div>

                <div class="card">
                    <img class="product-popup-img-2" src="/assets/products/poncho/PONCHO_green_closeup_V1_1080x1080.png">
                </div>

                <div class="card">
                    <img src="/assets/products/poncho/PONCHO_turntable.gif">
                </div>

                <div class="card">
                    <img src="/assets/products/poncho/PONCHO_hammock_square.png">
                </div>

                <div class="card">
                    <img src="/assets/products/poncho/PONCHO_lifestyle_backside_panoramic_square.png">
                </div>

                <div class="card">
                    <img src="/assets/products/poncho/PONCHO_lifestyle_front_sqare.png">
                </div>

            </section>
        </section>

        <!-- HEADING AND STAR SECTION -->
        <div>

            <section class="product-popup-heading-star">
                <div>
                    <p class="subheading">Funäs Poncho</p>
                    <p>4995 SEK</p>
                </div>
                <div>
                    <p>x.x</p>
                    <img src="/assets/star.svg" alt="">
                    <p>(x)</p>
                </div>
            </section>

            <!-- PRICE, COLOR, DESCRIPTION -->
            <section class="product-popup-price-color-description">
                <p>Färg</p>
                <div class="product-popup-colors">

                    <button class="product-popup-color product-popup-color-brown"
                        data-img="/assets/products/poncho/PONCHO_brown_V1_1080x1080.png"
                        data-img-secondary="/assets/products/poncho/PONCHO_brown_closeup_V1_1080x1080.png">
                    </button>

                    <button class="product-popup-color product-popup-color-black"
                        data-img="/assets/products/poncho/PONCHO_black_V1_1080x1080.png"
                        data-img-secondary="/assets/products/poncho/PONCHO_black_closeup_V1_1080x1080.png">
                    </button>
                    <button class="product-popup-color product-popup-color-green"
                        data-img="/assets/products/poncho/PONCHO_green_V1_1080x1080.png"
                        data-img-secondary="/assets/products/poncho/PONCHO_green_closeup_V1_1080x1080.png">
                    </button>
                </div>

                <p class="subheading">Beskrivning</p>
                <p class="product-popup-description">En slitstark, väderresistent poncho i teknisk
                    ripstop som snabbt kan konverteras till en bekväm hammock.
                    Förstärkta fästpunkter, vattentäta sömmar och låg vikt gör den idealisk
                    för flexibelt skydd utomhus.</p>
            </section>

        </div>

        <!-- SIZE, AMOUNT, ADD TO CART -->
        <div class="product-popup-choice-community-grid">

            <section class="product-popup-size-amount-section">
                <span>

                    <div class="product-popup-size-amount-container">
                        <div>
                            <p>Storlek</p>
                            <div class="product-popup-size-amount-choices">
                                <p>S</p>
                                <p>M</p>
                                <p>L</p>
                            </div>
                        </div>

                        <div>
                            <p>Antal</p>
                            <div class="product-popup-size-amount-choices">
                                <p class="size-choice-1">1</p>
                                <p class="size-choice-2">2</p>
                                <p class="size-choice-3">3</p>
                            </div>
                        </div>
                    </div>

                    <a><button class="button-primary product-popup-addtocart">Köp</button></a>

                </span>
            </section>

            <!-- COMMUNITY -->
            <section class="product-popup-community-section">
                <div>
                    <p class="subheading">Ställ en fråga</p>
                    <p>Har du en fråga om den här produkten?
                        Ställ den här så svarar någon av våra
                        medlemmar i kinkollektivet.</p>
                    <form>
                        <input type="text" placeholder="Jag undrar om...">
                        <button class="button-primary">Skicka</button>
                    </form>

                </div>
            </section>
        </div>
    </span>
</article>

<!-- END OF PRODUCT POPUP PONCHO -->


<!-- IMG CAROUSEL ----- ARRAY INFO -->
<?php if (isset($_GET['id'])) : ?>
    <article id="product-popup-array">
        <span class="product-popup-container">
            <a href="#" class="product-popup-close"><img src="/assets/plus.svg"></a>

            <!-- IMG CAROUSEL WITH ARRAY INFO -->
            <section class="product-popup-img-carousel">
                <section class="carousel">

                    <?php require_once __DIR__ . "/product-data.php";

                    $id = $_GET['id'];

                    foreach ($products[$id]['imgURL'] as $productIMG) : ?>
                        <div class="card">
                            <img src="<?= $productIMG ?>">
                        </div>
                    <?php
                    endforeach ?>

                </section>
            </section>

            <!-- HEADING AND STAR SECTION -->
            <div>

                <section class="product-popup-heading-star">
                    <div>
                        <p class="subheading"><?= $products[$id]['rubrik'] ?></p>
                        <p>Pris <?= $products[$id]['pris'] ?></p>
                    </div>
                    <div>
                        <p>x.x</p>
                        <img src="/assets/star.svg" alt="">
                        <p>(x)</p>
                    </div>
                </section>

                <!-- PRICE, COLOR, DESCRIPTION -->
                <section class="product-popup-price-color-description">
                    <p>Färg</p>
                    <div class="product-popup-colors">

                        <button class="product-popup-color product-popup-color-brown"
                            data-img="/assets/products/poncho/PONCHO_brown_V1_1080x1080.png"
                            data-img-secondary="/assets/products/poncho/PONCHO_brown_closeup_V1_1080x1080.png">
                        </button>

                        <button class="product-popup-color product-popup-color-black"
                            data-img="/assets/products/poncho/PONCHO_black_V1_1080x1080.png"
                            data-img-secondary="/assets/products/poncho/PONCHO_black_closeup_V1_1080x1080.png">
                        </button>
                        <button class="product-popup-color product-popup-color-green"
                            data-img="/assets/products/poncho/PONCHO_green_V1_1080x1080.png"
                            data-img-secondary="/assets/products/poncho/PONCHO_green_closeup_V1_1080x1080.png">
                        </button>
                    </div>

                    <p class="subheading">Beskrivning</p>
                    <p class="product-popup-description"><?= $products[$id]['beskrivning'] ?></p>
                </section>

            </div>

            <!-- SIZE, AMOUNT, ADD TO CART -->
            <div class="product-popup-choice-community-grid">

                <section class="product-popup-size-amount-section">
                    <span>

                        <div class="product-popup-size-amount-container">
                            <div>
                                <p>Storlek</p>
                                <div class="product-popup-size-amount-choices">
                                    <p>S</p>
                                    <p>M</p>
                                    <p>L</p>
                                </div>
                            </div>

                            <div>
                                <p>Antal</p>
                                <div class="product-popup-size-amount-choices">
                                    <p class="size-choice-1">1</p>
                                    <p class="size-choice-2">2</p>
                                    <p class="size-choice-3">3</p>
                                </div>
                            </div>
                        </div>

                        <a><button class="button-primary product-popup-addtocart">Köp</button></a>

                    </span>
                </section>

                <!-- COMMUNITY -->
                <section class="product-popup-community-section">
                    <div>
                        <p class="subheading">Ställ en fråga</p>
                        <p>Har du en fråga om den här produkten?
                            Ställ den här så svarar någon av våra
                            medlemmar i kinkollektivet.</p>
                        <form>
                            <input type="text" placeholder="Jag undrar om...">
                            <button class="button-primary">Skicka</button>
                        </form>

                    </div>
                </section>
            </div>
        </span>
    </article>

<?php endif ?>