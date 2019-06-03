<?php
require "Modele/compteModele.php";
//$leCompte = leCompte(id_u);
//$updatemdp = updateProfilPassword($id_u,$mdp);

if(isset($_POST['submitchange']))
{
    $mdp = $_POST['mdp'];
    updateProfilPassword($id_u,$mdp);
    header("location:".BASE_URL."/compte?id_u".$_GET['id_u']);
}



require "View/compteView.php";
?>