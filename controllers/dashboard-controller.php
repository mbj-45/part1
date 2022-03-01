<?php
     require_once($_SERVER['DOCUMENT_ROOT']."\LAMANU\TD2_C\\my-config.php");


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Désolé votre fichier doit faire moins de 1 Mo.</br>";
    $uploadOk = 0;
    } else if($imageFileType != "jpg" && $imageFileType != "png") {
    echo "Votre fichier n'est pas une image.</br>";
    $uploadOk = 0;
    } if ($uploadOk == 0) {
        echo "Votre fichier n'a pas été Upload.</br>";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Le fichier ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " a bien été Upload.</br>";
        } 
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement d'images</title>
    <script src="./assets/script.js" async></script>
    <link href="./assets/style.css" rel="stylesheet">
</head>
<body>
    <p>Bonjour, Admin<p>
    <p><b>Quota</b>:</p>
    <p><b>Total image(s)<b>:</p>

    <label for="fileToUpload">veuillez choisir une image :</label>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload"></br>
        <input type="submit" value="Upload Image" name="submit"></br>
    </form>
</body>
</html>