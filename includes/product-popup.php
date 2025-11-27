<?php

require __DIR__ . "/product-data.php"; ?>

<?php if (isset($_GET['id'])) : ?>
    <article id="product-popup">
        <span class="product-popup-container">
            <a href="#" class="product-popup-close"><img src="/assets/plus.svg"></a>

            <!-- IMG CAROUSEL  -->
            <section class="product-popup-img-carousel">
                <section class="carousel">

                    <?php $id = $_GET['id'];

                    $count = 0;

                    foreach ($products[$id]['imgURL'] as $productIMG) : ?>
                        <div class="card">
                            <img src=<?= "$productIMG";
                                        if ($count == 0) {
                                            echo ' class="product-popup-img-1"';
                                        } elseif ($count == 1) {
                                            echo ' class="product-popup-img-2"';
                                        }
                                        $count++;
                                        ?>>
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

                        <?php foreach ($products[$id]['color'] as $colors => $color) : ?>

                            <button class="product-popup-color product-popup-color-<?= $color ?>"
                                <?php if ($color !== 'onecolor') { ?>
                                data-img-primary="<?= $products[$id]['dataIMG'][$color][0] ?>"
                                data-img-secondary="<?= $products[$id]['dataIMG'][$color][1] ?>"
                                <?php } else {
                                    echo " disabled";
                                } ?>>
                            </button>

                        <?php endforeach; ?>
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
                                <p>Antal</p>
                                <div class="product-popup-size-amount-choices">
                                    <p class="size-choice-1">1</p>
                                    <p class="size-choice-2">2</p>
                                    <p class="size-choice-3">3</p>
                                </div>
                            </div>
                            <div>
                                <p>Storlek</p>
                                <div class="product-popup-size-amount-choices">

                                    <?php foreach ($products[$id]['size'] as $size) : ?>
                                        <p><?= ucfirst($size) ?></p>
                                    <?php endforeach; ?>

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
<?php endif; ?>