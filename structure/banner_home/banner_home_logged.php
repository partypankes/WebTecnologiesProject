<link rel="stylesheet" href="assets/global.css">
<link rel="stylesheet" href="assets/css/banners_homepage/logged_banner_home.css">

<div class="bg-logged">
    <video id="bg-video-logged" src="resources/videos/cover_home_logged.mp4" autoplay muted loop disablePictureInPicture></video>

    <div class="benvenuto-content">
        <?php
            echo '<p id="intro">Benvenuto <span id="key">' . $_SESSION['username'] . '</span>...</p>';
        ?>
        <p id="sub">Su SapurEat lasciati ispirare da 100+ ricette scelte dagli utenti, lanciati in un mondo culinario tutto nuovo</p>

    </div>
    <?php
    include('structure/search-bar.php')
    ?>
</div>