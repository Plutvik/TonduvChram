<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tondův Chrám</title>
</head>
<body>
    <div class="container">
        <h1>Tondův Chrám</h1>
        <div class="gallery">
            <?php
                $images = glob("images/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
                foreach($images as $image) {
                    echo "<a href='$image'><img src='$image' alt='image'></a>";
                }
            ?>
        </div>
    </div>
</body>
</html>