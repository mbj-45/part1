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
    <form class="formulaire" action="../part1/controllers/index-controller.php" method="POST">
        <h1>allPlX</h1>
        <div class="login">
            <label>Login*</label></br>
            <input value="email" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="password">
            <label>Pasword*</label></br>
            <input value="password" name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button value="login" name="login" type="submit" class="btn btn-success">Connexion</button>
    </form>
</body>
</html>