<?php 
var_dump($_POST);

?>
<?php
    function verify_post(){
        return isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password']);
    }
   
    function verify_credentials(){
        $username ='toto';
        $password = 'azerty';
 
        return $username == $_POST['username'] && $password == $_POST['password'];
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