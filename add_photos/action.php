<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK && isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] !== 'admin' || $_POST['password'] !== 'Tupoun') {
            echo "Neplatné uživatelské jméno nebo heslo.";
            exit;
        }
        $uploadDir = '../images/';
        $uploadFile = $uploadDir . basename($_FILES['photo']['name']);

        // Check if the file is an image
        $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
        $validImageTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($imageFileType, $validImageTypes)) {
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
                header('Location: ../index.php');
            } else {
                echo "Chyba při nahrávání souboru.";
            }
        } else {
            echo "Nepodporovaný formát souboru.";
        }
    } else {
        echo "Chyba při nahrávání souboru.";
    }
}
?>