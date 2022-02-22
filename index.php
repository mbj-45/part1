<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
            $allowed = array("jpg" => "image/jpg", "png" => "image/png");
            $filename = $_FILES["photo"]["name"];
            $filetype = $_FILES["photo"]["type"];
            $filesize = $_FILES["photo"]["size"];

            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(!array_key_exists($ext, $allowed)) {
                echo "Erreur : Veuillez sélectionner un format de fichier valide.";
            }
            $maxsize = 1024 * 1024;
            if($filesize > $maxsize) {
                echo "Error: La taille du fichier est supérieure à la limite autorisée.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<script src="./assets/script.js" async></script>
<link href="./assets/style.css" rel="stylesheet">
</head>
<body>
<label for="fileToUpload">veuillez choisir une image :</label>
    <img id="imgPreview">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <button type="submit">Upload</button>
    </form>
    </body>
</html>