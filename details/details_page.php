<?php include 'query_function.php' ?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homemade Pizza Recipe - Delicious and Easy</title>
    <meta name="description" content="A delicious and easy homemade pizza recipe by John Doe">
    <meta name="author" content="John Doe">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="details.css">
</head>


<body>
<?php include '../_header/provaheader_1.html' ?>
<main>
    <section id="title">
        <div class="text"><?php name_and_user(4)?>
        </div>
        <div class="photo">
            <img src="<?php echo immagine_banner(4)?>" alt="Homemade Pizza">
        </div>
    </section>


    <section id="details">
        <div id="contents">
            <h2>Contents</h2>
            <ul>
                <li><a  onclick="caricaContenuto('ingredienti')" data-section="ingredients">Ingredients</a></li>
                <li><a  onclick="caricaContenuto('preparazione')" data-section="preparation">Preparation</a></li>
                <li><a  onclick="caricaContenuto('serving')" data-section="servingSuggestions">Serving Suggestions</a></li>
                <li><a  onclick="caricaContenuto('tips')" data-section="tipsTricks">Tips & Tricks</a></li>
            </ul>

        </div>

        <div id="recipe-content">

        </div>

    </section>


    <section id="gallery">
        <div class="textGallery">
            <h2>Recipe Gallery</h2>
            <p>Browse through user-uploaded images of recipe variations</p>
        </div>

       


    </section>
</main>

<?php include ('../footer/footer.html'); ?>

<script src="detailsjs.js"></script>

</body>

</html>