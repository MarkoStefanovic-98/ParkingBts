<?php
//========== CONTROLLER ==========
require "Modele/userModele.php";

if($_SESSION['lvl'] == 2)
{

    $id_u = $_SESSION['id_u'];

    $reponse = displayReservedPlace($id_u);
    $info = displayInfo($id_u);
    $demande = displayPlaceAttente($id_u);
    $valide = displayPlaceValide($id_u);


    if(isset($_POST['submite']))
    {
        $deb = $_POST['deb'];
        $fin = $_POST['fin'];

        reservePlace($id_u, $deb, $fin);

       header("location:".BASE_URL."/user?id_u=".$_SESSION['id_u']."");
    }
}
else
{
    header("location: index.php");
}


require "View/userView.php"
?>