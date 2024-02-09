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
<?php include '../_header/nonRegistratoHeader.html' ?>
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
            <table id="ingredienti">
                <tr>
                    <th>Ingrediente</th>
                    <th>Quantità</th>ricetta
                </tr>
                <tr>
                    <td>Pasta</td>
                    <td>500g</td>
                </tr>
                <tr>
                    <td>Pomodori</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Aglio</td>
                    <td>2 spicchi</td>
                </tr>
                <tr>
                    <td>Olio d'oliva</td>
                    <td>2 cucchiai</td>
                </tr>
                <tr>
                    <td>Sale</td>
                    <td>q.b.</td>
                </tr>
                <tr>
                    <td>Basilico</td>
                    <td>A piacere</td>
                </tr>
            </table>
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