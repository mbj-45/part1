<?php 
var_dump($_POST);

?>
<?php
    function verify_post(){
        return isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password']);
    }
   #Utilisateur pre"defini
    function verify_credentials(){
        $username ='toto';
        $password = 'azerty';
 
        return $username == $_POST['email'] && $password == $_POST['password'];
    }
    // fonction de vérification d'une connexion bien fait**
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