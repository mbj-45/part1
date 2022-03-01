<?php
<<<<<<< HEAD
    function check_credentials(array $users){
        $is_credentials_correct = false;
        $username='';
        $quota = 0;
        $index_of_user= -1;
        if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])){
            $username = $_POST['email'];
            $client_password = $_POST['password'];
            $index_of_user = index_of_username($username, $users);
            if ($index_of_user != -1){              
                if(check_password($client_password, $users[$index_of_user]['password'])){
                    $is_credentials_correct = true;
                    $quota= get_user($index_of_user, $users)['quota'];
                }
            }
        }
        if($is_credentials_correct){
            create_session($username, $index_of_user, $quota);
            redirect_to_dashboard();
        }else{
            back_to_login_with_errors();
        }
    }
=======
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
>>>>>>> 3e2cd2c99a88dbc591ef67c6fa6af7d58308b1ce

    function verify_post(){
        return isset($_POST['button']) && isset($_POST['email']) && isset($_POST['password']);
    }
<<<<<<< HEAD


// --------------------------------------------
   #Utilisateur pre"defini
=======
   
>>>>>>> 3e2cd2c99a88dbc591ef67c6fa6af7d58308b1ce
    function verify_credentials(){
        $username ='toto';
        $password = 'azerty';
        return $username == $_POST['email'] && $password == $_POST['password'];
    }
 
    function verify(){
        if (verify_post()){
            if(verify_credentials()){
                // echo 'Vous êtes connecté';
            header("Location: http://part1.test/part1/controllers/dashboard-controller.php");
                
            }else{
                $feedback_error=true;
                require_once(root.'\index.php');
                // echo 'Mot de passe ou nom d\'utilisateur incorrecte';
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