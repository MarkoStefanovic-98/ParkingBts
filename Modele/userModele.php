<?php
// Reserve de place lvl 0 pour en attente 1 pour accepté et 2 refusé
function reservePlace($id_u, $deb, $fin)
{
    global $bdd;
    $req1 = $bdd->query("SELECT MIN(id_p) AS numPlace FROM place WHERE id_p NOT IN (SELECT p.id_p FROM reserver r, place p, user u WHERE p.id_p = r.id_p AND r.id_u = u.id_u AND (r.lvl = 1 OR r.lvl = 0) AND date_fin > CURDATE())");
    $req1->execute();
    $row1 = $req1->fetch(PDO::FETCH_ASSOC);

    $req = $bdd->prepare("INSERT INTO reserver(id_u, id_p, date_deb, date_fin, lvl, timestamp) VALUES (:id_u, :id_p, :deb, :fin, 0, NOW())");
    $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
    $req->bindValue(":id_p",$row1["numPlace"], PDO::PARAM_INT);
    $req->bindValue(":deb", $deb, PDO::PARAM_STR);
    $req->bindValue(":fin", $fin, PDO::PARAM_STR);
    $req->execute();
    return $req;
}
// liste des places reserve
function displayReservedPlace($id_u)
{
    global $bdd;
    $req = $bdd->prepare("SELECT p.nom_p, r.date_deb, r.date_fin FROM place p, user u, reserver r WHERE r.id_p = p.id_p AND r.id_u = u.id_u AND u.id_u=".$id_u);
    $req->execute();
    return $req;
}
// info utilisateur
function displayInfo($id_u)
{
    global $bdd;
    $req = $bdd->prepare("SELECT * FROM user WHERE id_u =".$id_u);
    $req->execute();
    return $req->fetch();
}
//Liste des places
function displayPlaceAttente($id_u)
{
    global $bdd;
    $req = $bdd->prepare("SELECT p.nom_p, r.date_deb, r.date_fin FROM place p, user u, reserver r WHERE r.id_p = p.id_p AND r.id_u = u.id_u AND u.id_u = :id_u AND r.lvl = 0");
    $req->bindValue("id_u", $id_u, PDO::PARAM_INT);
    $req->execute();
    return $req;
}
// liste des place valide
function displayPlaceValide($id_u)
{
    global $bdd;
    $req = $bdd->prepare("SELECT p.nom_p, o.date_deb FROM place p, user u, occuper o WHERE o.id_p = p.id_p AND o.id_u = u.id_u AND u.id_u = :id_u AND o.lvl = 1");
    $req->bindValue("id_u", $id_u, PDO::PARAM_INT);
    $req->execute();
    return $req;
}
// liste place refuse
function displayPlaceDeny($id_u)
{
    global $bdd;
    $req = $bdd->prepare("SELECT p.nom_p, o.date_deb FROM place p, user u, occuper o WHERE o.id_p = p.id_p AND o.id_u = u.id_u AND u.id_u = :id_u AND o.lvl = 2");
    $req->bindValue("id_u", $id_u, PDO::PARAM_INT);
    $req->execute();
    return $req;
}
?>