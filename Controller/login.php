<?php 

require "Modele/loginModele.php";

if(isset($_POST['submit']))
{
    $mail = $_POST['mail'];
    $mdp = sha1($_POST['mdp']);

    $requete = $bdd->prepare("SELECT * FROM user WHERE mail = :mail AND mdp = :mdp");
    $requete->bindValue(":mail",$mail,PDO::PARAM_STR);
    $requete->bindValue(":mdp",$mdp,PDO::PARAM_STR);
    $requete->execute();

    if($reponse = $requete->fetch())
    {
        $_SESSION['connecte'] = true;
        $_SESSION['id_u'] = $reponse['id_u'];
        $_SESSION['lvl'] = $reponse['lvl'];
<<<<<<< HEAD

=======
    
>>>>>>> maj admin
    if($SESSION['lvl'] = 2){
        
        header('Location:'.BASE_URL.'/accueil');
        
                            }  
    if($SESSION['lvl'] = 3){
        
        header('Location:'.BASE_URL.'/admin');
        
                            }
    }
    else
    {
        echo "Mauvais identifiant";
    }
}

require "View/loginView.php"
?>