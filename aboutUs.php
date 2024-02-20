<?php include 'core/auth.php'?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SapurEat</title>
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/css/aboutUs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<?php
include('structure/_header/baseHeader.php');
?>

<div class="backdrop"></div>
<main class="about-us">


    <!-- Intro -->
    <section class="intro" >
        <div class="intro-icons">
            <i class="fas fa-utensils fa-2x"></i>
            <i class="fas fa-globe fa-2x"></i>
            <i class="fas fa-users fa-2x"></i>
        </div>
        <h2>Scopri SapurEat</h2>
        <p>SapurEat non è semplicemente un sito di ricette; è una rivoluzione culinaria che unisce appassionati di cucina da ogni angolo del mondo. Immagina una piattaforma dove la tua passione per il cibo si trasforma in connessioni, scoperte e avventure senza confini. Con SapurEat, ogni giorno è un'opportunità per esplorare nuove culture attraverso il cibo, condividere le tue creazioni con una comunità che la pensa come te e scoprire ricette che trasformeranno il tuo modo di cucinare e di pensare al cibo.</p>

        <div class="intro-cards">
            <div class="intro_card">
                <i class="fas fa-seedling fa-3x"></i>
                <h3>Nuove Culture</h3>
                <p>Esplora le ricette che portano la cultura direttamente nella tua cucina.</p>
            </div>
            <div class="intro_card">
                <i class="fas fa-share-alt fa-3x"></i>
                <h3>Condividi con la Comunità</h3>
                <p>Unisciti alla nostra comunità e condividi le tue creazioni culinarie.</p>
            </div>
            <div class="intro_card">
                <i class="fas fa-heart fa-3x"></i>
                <h3>Passione per il Cibo</h3>
                <p>Scopri ogni giorno nuove ricette per alimentare la tua passione per il cibo.</p>
            </div>
        </div>


    </section>

    <!-- La Nostra Storia -->
    <section class="our-story-card">
        <i class="fas fa-book-open fa-3x"></i>
        <h2>La Nostra Storia</h2>
        <p>Nata dall'idea di quattro studenti di ingegneria informatica, SapurEat è il risultato di un sogno che mirava a collegare le persone attraverso il linguaggio universale del cibo. Da quelle prime discussioni in aule universitarie, attraverso notti insonni di codifica e brainstorming, fino al lancio della nostra piattaforma, ogni passo è stato guidato dalla nostra passione per il cibo e dalla convinzione che condividere un pasto vada oltre la semplice nutrizione. È un atto di amore, un momento di connessione, una finestra su nuove culture e tradizioni.</p>
    </section>

    <!-- Perché Scegliere SapurEat -->
    <section class="why-choose-us">
        <i class="fas fa-heart fa-3x"></i>
        <h2>Perché Scegliere SapurEat</h2>
        <p>SapurEat è il luogo dove la passione per il cibo si trasforma in connessioni significative, esplorazioni culinarie e condivisione di esperienze indimenticabili. La nostra piattaforma accogliente e intuitiva ti offre l'opportunità di scoprire nuove ricette, condividere le tue creazioni culinarie e connetterti con una comunità globale di food lover. Unisciti a noi e immergiti in un mondo di sapori, colori e tradizioni culinarie.</p>
    </section>

    <!-- Come Funziona -->
    <section class="how-it-works-card">
        <i class="fas fa-cogs fa-3x"></i>
        <h2>Come Funziona</h2>
        <p>Scopri il piacere della cucina con SapurEat. Carica le tue ricette preferite, esplora creazioni culinarie da tutto il mondo e condividi il tuo amore per il cibo con una comunità appassionata. Grazie alla nostra interfaccia intuitiva e alle funzionalità social avanzate, ogni esperienza su SapurEat è un'avventura culinaria senza pari. Siamo qui per ispirarti, connetterti e trasformare il modo in cui vivi il cibo.</p>
    </section>

    <!-- Testimonianze -->
    <section class="testimonials">
        <i class="fas fa-users fa-3x"></i>
        <h2>Testimonianze</h2>
        <p>Le storie di successo dei nostri utenti sono la nostra più grande motivazione. Da cuochi amatoriali a professionisti del settore, la nostra comunità di food lover è ricca di esperienze uniche e ispiratrici. Leggi le testimonianze e scopri come SapurEat ha trasformato la vita culinaria di persone come te in un'avventura senza fine.</p>
    </section>

    <!-- Unisciti a Noi -->
    <section class="join-us-card">
        <i class="fas fa-user-plus fa-3x"></i>
        <h2>Unisciti a Noi</h2>
        <p>Diventa parte della nostra famiglia culinaria su SapurEat. Sia che tu sia un cuoco appassionato, un esperto del gusto o semplicemente un curioso amante del cibo, c'è un posto per te nella nostra comunità. Iscriviti oggi stesso per scoprire nuove ricette, condividere le tue creazioni e connetterti con persone appassionate come te.</p>
    </section>



    <section class="our-team">
        <h2>Il Nostro Team</h2>
        <div class="container">
            <div class="team-members">

                <div class="team-member">
                    <i class="fas fa-database fa-3x"></i>
                    <h3>Daniele De Luca</h3>
                    <p>Magister Back-End</p>
                    <p>Architetto delle fondamenta digitali di SapurEat, Daniele tesse le complesse reti dei nostri server con precisione chirurgica. La sua abilità nel dare vita alle funzionalità più complesse in modo fluido e sicuro è la spina dorsale della nostra piattaforma.</p>
                </div>

                <div class="team-member">
                    <i class="fas fa-paint-brush fa-3x"></i>
                    <h3>Raffaele Festa</h3>
                    <p>Artista del Front-End & Animatore JavaScript</p>
                    <p>Raffaele porta magia e vita nell'interfaccia di SapurEat, creando un'esperienza utente che danza sullo schermo. Le sue animazioni sono la poesia visiva che invita e incanta, rendendo ogni interazione un momento di scoperta.</p>
                </div>

                <div class="team-member">
                    <i class="fas fa-drafting-compass fa-3x"></i>
                    <h3>Aniello De Luca</h3>
                    <p>Esteta del Design & CSS Guru</p>
                    <p>Aniello è il maestro del design che veste SapurEat di eleganza e funzionalità. Con un occhio infallibile per il dettaglio e la simmetria, Aniello plasma l'esperienza visiva del sito, assicurando che sia sempre un piacere per gli occhi.</p>
                </div>

                <div class="team-member">
                    <i class="fas fa-user-shield fa-3x"></i>
                    <h3>Marco D'Agostino</h3>
                    <p>Custode dei Dati & Esperto di Autenticazione</p>
                    <p>Marco è il guardiano dei portali di SapurEat, assicurando che ogni dato sia protetto e ogni accesso verificato. La sua dedizione alla sicurezza e alla privacy è il nostro baluardo nella tutela dei nostri utenti e delle loro creazioni culinarie.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="experience">
        <h2>Esperienza SapurEat</h2>
        <p>Partecipa alle nostre sfide di cucina, interagisci con la comunità e lasciati ispirare da ricette uniche.</p>
        <div class="stats">
            <div class="stat">
                <i class="fas fa-recipe fa-3x"></i>
                <h3>100+ Ricette</h3>
            </div>
            <div class="stat">
                <i class="fas fa-users fa-3x"></i>
                <h3>Comunità in Crescita</h3>
            </div>
        </div>
    </section>

</main>
<?php
include('structure/footer.html');
?>

</body>
</html>


