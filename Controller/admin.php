
<?php
    //Controller Supprimer user
    require "Modele/adminModele.php";

    if($_SESSION['lvl'] == 3)
    {
        $r = afficherUser();
        
        if(isset($_GET['id']))
        {
            suppUser($_GET['id']);
            header("location:".BASE_URL."/adminController");
        }
    }
    else
    {
        header("location: index.php");
    }

    if(isset($_POST['submit_place']))
    {
        $nom_p = $_POST['nom_p'];
        ajoutPlace($nom_p);
        header("location:".BASE_URL."/admin");
    }
    
    $req = waitList();

    $usedPlace = displayUsedPlace();
    $usedPlaceRefus = displayUsedPlaceRefus();
    $acceptme = afficherInscrit();

    require "View/adminView.php";


?>