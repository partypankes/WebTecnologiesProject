<?php
$imagePaths = [
    ["type" => "image", "path" => "..\hompage\immagini\IMG1.jpg" , "alt" => "Immagine 1"],
    ["type" => "image", "path" => "..\hompage\immagini\IMG2.jpg", "alt" => "Immagine 2"],
];

$videoPaths = [
    ["type" => "video", "path" => "..\hompage\immagini\VID1.mp4", "alt" => "Video 1"],
    ["type" => "video", "path" => "..\hompage\immagini\VID2.mp4", "alt" => "Video 2"],
    ["type" => "video", "path" => "..\hompage\immagini\VID3.mp4", "alt" => "Video 3"],
    ["type" => "video", "path" => "..\hompage\immagini\VID4.mp4", "alt" => "Video 4"],
    ["type" => "video", "path" => "..\hompage\immagini\VID5.mp4", "alt" => "Video 5"],
    ["type" => "video", "path" => "..\hompage\immagini\VID6.mp4", "alt" => "Video 6"],
    ["type" => "video", "path" => "..\hompage\immagini\VID7.mp4", "alt" => "Video 7"],
];

$mediaPaths = array_merge($imagePaths, $videoPaths);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SapurEat</title>
    <link rel="stylesheet" href="hompage.css">
</head>
<body>
    <div class="top_bar">
        <img src="..\hompage\immagini\logo.png" alt="logo">
        <button>Discover Now</button>
    </div>
    <div class="title">
        <h1>Cook, Snap, Share... <br> and RepEat!</h1>
        <p>Learn and share food-related stories</p>
        <button>Join now</button>
    </div>

    <div class="media-container">
    <?php
        foreach ($mediaPaths as $item) {
            if ($item['type'] === 'image') {
                echo '<img src="' . $item['path'] . '" alt="' . $item['alt'] . '">';
            } elseif ($item['type'] === 'video') {
                echo '<video>
                        <source src="' . $item['path'] . '" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>';
            }
        }
    ?>
    </div>
    <script src="script.js"></script>

        <?php include('../footer/footer.html'); ?>

    
</body>
</html>
