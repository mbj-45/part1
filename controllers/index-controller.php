<?php 
var_dump($_POST);

?>
<?php
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

    function verify_post(){
        return isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password']);
    }


// --------------------------------------------
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