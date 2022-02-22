<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./assets/script.js"></script>
    <link href="./assets/style.css" rel="stylesheet">
</head>
<body>
    <p>Veuillez choisir une image :<p>
    <form action="" method="post" enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" value="20000">
  <label>Votre fichier</label> :
  <input type="file" name="mon_fichier"><br>
  <input type="submit" value="Envoyer">
</form>
</body>
</html>