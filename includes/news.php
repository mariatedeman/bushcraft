<!-- CAROUSEL FOR NEWS SECTION ON MOBILE -->

<!-- PONCHO -->
<section class="carousel">
    <div class="card">
        <a href="#product-popup">
            <div class="card-img-container">
                <img src="/assets/products/poncho/PONCHO_green_V1_1080x1080.png">
            </div>
            <div class="card-text">
                <p><strong>Funäs Poncho</strong> <br>
                    4995 SEK</p>
            </div>
        </a>
    </div>

    <!-- PRODUCTS FROM ARRAY -->
    <?php require __DIR__ . "/product-data.php";
    foreach ($products as $product => $product_info) :

        $id = $product; ?>

        <div class="card">
            <a href="?id=<?= urlencode($id) ?>#product-popup-array">
                <div class="card-img-container">
                    <img src="<?= $product_info['imgURL'][0] ?>">
                </div>
                <div class="card-text">
                    <p><strong><?= $product_info['rubrik'] ?></strong> <br>
                        <?= $product_info['pris'] ?></p>
                </div>
            </a>
        </div>
    <?php endforeach ?>
</section>

<!-- GALLERY FOR NEWS SECTION ON DESKTOP -->
<section class="gallery-desktop">
    <!-- PONCHO -->
    <div class="card">
        <a href="#product-popup">
            <div class="card-img-container">
                <img src="/assets/products/poncho/PONCHO_green_V1_1080x1080.png">
            </div>
            <div class="card-text">
                <p><strong>Funäs Poncho</strong> <br>
                    4995 SEK</p>
            </div>
        </a>
    </div>

    <!-- PRODUCTS FROM ARRAY -->
    <?php require __DIR__ . "/product-data.php";
    foreach ($products as $product => $product_info) :

        $id = $product; ?>

        <div class="card">
            <a href="?id=<?= urlencode($id) ?>#product-popup-array">
                <div class="card-img-container">
                    <img src="<?= $product_info['imgURL'][0] ?>">
                </div>
                <div class="card-text">
                    <p><strong><?= $product_info['rubrik'] ?></strong> <br>
                        <?= $product_info['pris'] ?></p>
                </div>
            </a>
        </div>
    <?php endforeach ?>

</section>