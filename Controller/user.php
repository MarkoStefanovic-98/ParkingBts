<?php
//========== CONTROLLER ==========
require "Modele/userModele.php";

if($_SESSION['lvl'] == 2)
{

    $id_u = $_SESSION['id_u'];
    $reponse = displayReservedPlace($id_u);
    $info = displayInfo($id_u);
}
elseif($_SESSION['lvl'] == 1)
{
   echo'<h1>Veuillez patientez que l\'administateur valide votre inscription</h1>';
}
{
    header("location: index.php");

}

require "View/userView.php"
?>