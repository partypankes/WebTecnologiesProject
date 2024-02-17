<?php
    if(isset($_SESSION['loggedin'])){
        echo '<div class="bg-logged">
                <video id="bg-video-logged" src="resources/videos/video_prova.mp4" autoplay muted loop disablePictureInPicture></video>
    <div class="bn-intro">
        <div class="content">
            <p id="intro">Benvenuto <span id="key">' . $_SESSION['username'] . '</span>...</p>
            <p id="sub">Su SapurEat lasciati ispirare da 100+ ricette scelte dagli utenti, lanciati in un mondo culinario tutto nuovo</p>
        </div>';
    }else{
        echo '<script>document.addEventListener("DOMContentLoaded", function() {hideSection();});
</script>
    <div class="bg">
        <video id="bg-video" src="resources/videos/video_prova.mp4" autoplay muted loop disablePictureInPicture></video>

        <div class="bn-intro">
            <div class="content">
                <p id="intro">Cerca ora la tua <span id="key">Ispirazione</span>...</p>
                <p id="sub">Cerca qui la tua ricetta e scopri una lista di piatti scelti e condivisi dagli utenti migliori.<br>Crea il tuo piatto, crea la tua storia </p>
            </div>';
    }

    include('structure/search-bar.php');


    echo '</div>
         </div>';