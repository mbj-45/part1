<?php
<<<<<<< HEAD
     require_once("../my-config.php");


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
=======
        // if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
            $target_dir = "../uploads/";
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
        // } else {
        //     echo "Message erreur";
        // }
    ?>
>>>>>>> 3e2cd2c99a88dbc591ef67c6fa6af7d58308b1ce

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- js -->
    <script src="../assets/script.js" async></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../assets/style.css" rel="stylesheet">
    <title>Modules d'enregistrement d'image</title>
</head>
<body>
    <div class="formulaire">
        <h1>allPlX</h1>
        <p>Bonjour, Admin</p>
        <p><strong>Quota </strong>7.1 / 50 Mo</p>   
        <p><strong>Total image(s) </strong>: 14</p> 
        <div class="chose">    
            <form action="dashboard-controller.php" method="post" enctype="multipart/form-data">
                <input type="file" name="button" id="fileToUpload">
                <input type="submit" name="button" value="Upload" class="btn btn-primary">
            </form>
        </div>
        <input type="submit" name="button" value="Galery" class="btn btn-primary galery">
    </div>
</body>
</html>









