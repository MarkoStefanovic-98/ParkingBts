<?php
//========== CONTROLLER ==========
require "Modele/userModele.php";

if($_SESSION['lvl'] == 2)
{

    $id_u = $_SESSION['id_u'];
    $reponse = displayReservedPlace($id_u);
    $info = displayInfo($id_u);
}
else
{
    header("location: index.php");

}


require "View/userView.php"
?>