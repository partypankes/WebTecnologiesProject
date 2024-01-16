<!DOCTYPE html>
<html lang="en">

<!-- head section contains metadata and scripts that are not displayed on the page itself -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homemade Pizza Recipe - Delicious and Easy</title>
    <meta name="description" content="A delicious and easy homemade pizza recipe by John Doe">
    <meta name="author" content="John Doe">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="details.css">
</head>

<!-- body section contains the main content of the page -->
<body>
<main>
    <section id="title">
        <div class="text">
            <h1>Delicious and Easy Homemade Pizza Recipe</h1>
            <p>By John Doe - 11 Jan 2022 - 5-minute read</p>
            <p style="color: black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus ipsum eu purus malesuada,
                sed dignissim ipsum interdum. Integer sit amet interdum ex. Nam vehicula libero id justo molestie imperdiet.
                Quisque auctor elit tincidunt lorem fermentum dapibus. Sed placerat pulvinar risus. Aenean libero magna,
                sagittis eget quam id, feugiat consectetur arcu. Mauris ullamcorper ipsum et dignissim mattis.
                Cras eu nisl elementum nisi ornare tincidunt.Donec non rhoncus eros, sit amet semper nisl.
                Phasellus consequat ac quam eget iaculis. Maecenas tellus mi, molestie nec ligula sit amet, rutrum fermentum
                lorem.
            </p>
        </div>
        <div class="photo">
            <img src="immagine_prova.jpg" alt="Homemade Pizza">
        </div>
    </section>


    <section id="details">
        <section id="contents">
            <h2>Contents</h2>
            <ul>
                <li><a href="#" onclick="caricaContenuto('ingredienti')" data-section="ingredients">Ingredients</a></li>
                <li><a href="#" onclick="caricaContenuto('preparazione')" data-section="preparation">Preparation</a></li>
                <li><a href="#" onclick="caricaContenuto('serving')" data-section="servingSuggestions">Serving Suggestions</a></li>
                <li><a href="#" onclick="caricaContenuto('tips')" data-section="tipsTricks">Tips & Tricks</a></li>
            </ul>

        </section>

        <section id="recipe-content">

        </section>

    </section>


    <section id="gallery">
        <h2>Recipe Gallery</h2>
        <p>Browse through user-uploaded images of recipe variations</p>
        <ul>
            <li><img src="image1.jpg" alt="Homemade Pizza Variation 1"></li>
            <li><img src="image2.jpg" alt="Homemade Pizza Variation 2"></li>
            <li><img src="image3.jpg" alt="Homemade Pizza Variation 3"></li>
        </ul>
    </section>
</main>

<footer>
    <p>Copyright © 2022 John Doe</p>
</footer>

<script src="detailsjs.js"></script>

</body>

</html>