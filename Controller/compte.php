<?php
require "Modele/compteModele.php";


if(isset($_POST['submit_change']))
{

    $id_u = $_POST['id_u'];
    $mdp = SHA1($_POST['mdp']);
    mdppp($_GET['id_u'],$mdp);

    echo 'C BON !';
}
require "View/compteView.php";