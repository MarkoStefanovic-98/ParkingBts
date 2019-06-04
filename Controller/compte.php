<?php
require "Modele/compteModele.php";


if(isset($_POST['submit_change']))
{

    $id_u = $_POST['id_u'];
    $mdp = SHA1($_POST['mdp']);
    mdppp($_GET['id_u'],$mdp);

    echo '
        <ul class="list-group">
            <div class="container">
                <div class="card card-login mx-auto mt-5">
                <h5>Le mot de passe a été changé avec succès</h5>
                </div>
            </div>
        </ul>';
}
require "View/compteView.php";