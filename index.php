<?php require_once __DIR__ . "/includes/header.php" ?>

<span class="singel-logos-desktop">
    <img src="assets/logo-singel-red-kin.svg" alt="">
    <img src="assets/logo-singel-red-forma.svg" alt="">
</span>

<section class="hero">
    <div class="hero-container">
        <img src="assets/logotyp_text_symbol.png">
        <div>
            <p class="subheading">Underrubrik</p>
            <button class="button-primary">Button</button>
        </div>
    </div>
</section>

<h2>Nyheter</h2>
<!-- MOBILE: CAROUSEL || DESKTOP: GALLERY -->
<?php require_once __DIR__ . "/includes/news.php" ?>


<!-- SIGN UP SECTION - KINKOLLEKTIVET -->
<section class="img-background-signup">
    <div class="img-background-text">
        <h2>kinkollektivet</h2>
        <p>Bli en del av sveriges största bush craft-kollektiv.
            Köp och sälj begagnad utrustning,
            diskutera spännande ämnen och dela dina bästa tips och råd.</p>
    </div>
    <div class="signup-container">
        <p class="subheading">Bli medlem/ Logga in</p>
        <p>Mejladress</p>
        <!-- TODO: Add input security in seperate file --->
        <?php require_once __DIR__ . "/includes/input.php" ?>
        <button class="button-primary">Skicka verifieringskod</button>
    </div>

</section>


<!-- CHAT SECTION -->
<section class="img-background-chat">
    <div>
        <div class="img-background-text">
            <p>Läs och diskutera bush craft i vårt medlemsforum</p>
            <h2>Kinchatten</h2>
        </div>
        <div class="buttons-container">
            <button class="button-secondary">Button</button>
            <button class="button-secondary">Button</button>
            <button class="button-secondary">Button</button>
            <button class="button-secondary">Button</button>

        </div>
    </div>
</section>

<h2>Kintech</h2>
<!-- MOBILE: CAROUSEL || DESKTOP: GALLERY -->
<?php require_once __DIR__ . "/includes/kintech.php" ?>

<section class="img-background">
    <div>
        <div class="img-background-text">
            <p>Upplev en ny dimension av bushcraft. Designad för dig, drivet av teknik, skapat för planeten.</p>
            <h2>Vår idé</h2>
        </div>
        <button class="button-primary">Om oss</button>
    </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php" ?>