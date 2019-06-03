<?php
function updateProfilNom($id_u,$nom)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE user SET nom = :nom WHERE id_u = :id_u');
    $req->bindParam(':id_u', $id_u);
    $req->bindParam(':nom', $nom);
    $req->execute();
}

function updateProfilPrenom($id_u,$prenom)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE user SET prenom = :prenom WHERE id_u = :id_u');
    $req->bindParam(':id_u', $id_u);
    $req->bindParam(':prenom', $prenom);
    $req->execute();
}

function updateProfilMail($id_u,$mail)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE user SET mail = :mail WHERE id_u = :id_u');
    $req->bindParam(':id_u', $id_u);
    $req->bindParam(':mail', $mail);
    $req->execute();
}

function updateProfilPassword($id_u,$mdp)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE user SET mdp = :password WHERE id_u = :id_u');
    $req->bindParam(':id_u', $id_u);
    $req->bindParam(':mdp', sha1($mdp));
    $req->execute();
}


?>