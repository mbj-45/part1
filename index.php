<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>allPIX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/style.css" rel="stylesheet">

</head>
<body>
    <form class="formulaire" action="verification.php" method="POST">
        <h1>allPlX</h1>
        <div class="login">
            <label>Login</label></br>
            <input type="text" name="username" required></br>
        </div>
        <div class="password">
            <label>Paseword</label></br>
            <input type="password" name="password" required></br>
        </div>
        <input type="submit" id='submit' value='Connexion'>
    </form>
</body>
</html>