<!-- CAROUSEL FOR NEWS SECTION ON MOBILE -->

<section class="carousel">

    <?php require __DIR__ . "/product-data.php";
    foreach ($products as $product => $product_info) :

        $id = $product; ?>

        <div class="card">
            <a href="?id=<?= urlencode($id) ?>#product-popup">
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

    <?php require __DIR__ . "/product-data.php";
    foreach ($products as $product => $product_info) :

        $id = $product; ?>

        <div class="card">
            <a href="?id=<?= urlencode($id) ?>#product-popup">
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