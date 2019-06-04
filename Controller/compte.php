<?php
require "Modele/compteModele.php";


if(isset($_POST['submit_nom']))
{

    $id_u = $_POST['id_u'];
    $nom = $_POST['nom'];
    updateProfilNom($_GET['id_u'],$nom);

    echo '
        <ul class="list-group">
            <div class="container">
                <div class="card card-login mx-auto mt-5">
                <h5>Le nom a été changé avec succès</h5>
                </div>
            </div>
        </ul>';
}

if(isset($_POST['submit_prenom']))
{

    $id_u = $_POST['id_u'];
    $prenom = $_POST['prenom'];
    updateProfilPrenom($_GET['id_u'],$prenom);

    echo '
        <ul class="list-group">
            <div class="container">
                <div class="card card-login mx-auto mt-5">
                <h5>Le prenom a été changé avec succès</h5>
                </div>
            </div>
        </ul>';
}

if(isset($_POST['submit_mail']))
{

    $id_u = $_POST['id_u'];
    $mail = $_POST['mail'];
    updateProfilMail($_GET['id_u'],$mail);

    echo '
        <ul class="list-group">
            <div class="container">
                <div class="card card-login mx-auto mt-5">
                <h5>Le mail a été changé avec succès</h5>
                </div>
            </div>
        </ul>';
}

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