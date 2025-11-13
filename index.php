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
        <p class="subheading">Rubrik</p>
        <p>Undertext</p>
        <input type="text" placeholder="E-mail">
        <button class="button-primary">Button</button>
    </div>

</section>


<!-- CHAT SECTION -->
<section class="img-background-chat">
    <div>
        <div class="img-background-text">
            <h2>Text</h2>
            <p class="subheading">Underrubrik</p>
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
            <p class="subheading">Underrubrik</p>
            <h2>Text</h2>
        </div>
        <button class="button-secondary">Button</button>
    </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php" ?>