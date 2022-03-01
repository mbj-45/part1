<?php
    const max_file_size = 10 * 1024 * 1024; // 10 Mo max
 
    const formats = [
        "jpg" => "image/jpg",
        "jpeg" => "image/jpeg",
        "gif" => "image/gif",
        "png" => "image/png"
    ];
 
    $users = [
        [
            'username'=> 'alexis',
            'password'=> 'ab4f63f9ac65152575886860dde480a1',
            'formula'=> '',
            'quota'=> '',
        ],
        [
            'username'=> 'marc',
            'password'=> 'ab4f63f9ac65152575886860dde480a1',
            'formula'=> '',
            'quota'=> '',
        ],
        [
            'username'=> 'andré',
            'password'=> 'ab4f63f9ac65152575886860dde480a1',
            'formula'=> '',
            'quota'=> '',
        ]
 
    ];

    function verify_post(){
        return isset($_POST['button']) && isset($_POST['email']) && isset($_POST['password']);
    }
   
    function verify_credentials(){
        $username ='toto';
        $password = 'azerty';
 
        return $username == $_POST['email'] && $password == $_POST['password'];
    }
 
    function verify(){
        if (verify_post()){
            if(verify_credentials()){
                echo 'Vous êtes connecté';
            }else{
                echo 'Mot de passe ou nom d\'utilisateur incorrecte';
            }
        }else{
            echo 'T\'es nul';
        }
    }
 
 
    verify();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../assets/style.css" rel="stylesheet">
</head>
<body>
    
</body>
</html>