<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Přidat Foto - Tondův Chrám</title>
</head>
<body>
    <div class="container">
        <h1>Přidat Foto</h1>
        <form action="action.php" method="post" enctype="multipart/form-data">
            <label for="username">Uživatelské jméno:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Heslo:</label>
            <input type="password" id="password" name="password" required>
            <input type="file" name="photo" accept="image/*" required>
            <button type="submit" class="add-photo-button">Nahrát Foto</button>
        </form>
    </div>
</body>
</html>