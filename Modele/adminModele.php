<?php

    function afficherUser()
    {
        global $bdd;

        $req = $bdd->prepare("SELECT * FROM user where lvl = 2");
        $req->execute();

        return $req->fetchAll();
    }

    function afficherInscrit()
    {
        global $bdd;

        $req = $bdd->prepare("SELECT * FROM user where lvl = 1");
        $req->execute();

        return $req->fetchAll();
    }

    function suppUser($id_u)
    {
        global $bdd;

        $req = $bdd->prepare("DELETE FROM user WHERE id_u =".$id_u);
        $req->execute();

        return $req->fetch();
    }


    function waitList()
    {
        global $bdd;

        $req = $bdd->query("SELECT r.id_r, u.nom, u.prenom, r.lvl, p.nom_p, p.id_p, r.date_deb 
                                      FROM reserver r, user u, place p 
                                      WHERE r.lvl = 0 AND r.id_p = p.id_p AND u.id_u = r.id_u 
                                      ORDER BY r.timestamp DESC");

        return $req;
    }

    function acceptPlace($id_r)
    {
        global $bdd;

        $req = $bdd->prepare("UPDATE reserver SET lvl = 1 WHERE id_r = :id_r");
        $req->bindValue(":id_r", $id_r,  PDO::PARAM_INT);
        $req->execute();

        return $req;
    }

    function acceptInscription($id_u)
    {
        global $bdd;

        $req = $bdd->prepare("UPDATE user SET lvl = 2 WHERE id_u = :id_u");
        $req->bindValue(":id_u", $id_u,  PDO::PARAM_INT);
        $req->execute();

        return $req->fetch();
    }

    function denyPlace($id_p)
    {
        global $bdd;

        $req = $bdd->prepare("UPDATE reserver SET lvl = 2 WHERE id_p = :id_p");
        $req->bindValue(":id_p", $id_p, PDO::PARAM_INT);
        $req->execute();

        return $req->fetch();
    }

    function ajoutPlace($nom_p)
    {
        global $bdd;

        $requete = $bdd->prepare("INSERT INTO place (nom_p) VALUES (:nom_p)");

        $requete->bindValue(":nom_p", $nom_p,PDO::PARAM_STR);
        $requete->execute();

        return $requete->fetch();
    }


    function displayUsedPlace()
    {
        global $bdd;
        
        $req = $bdd->prepare("SELECT p.id_p, p.nom_p, r.date_deb, r.date_fin, u.nom, u.prenom FROM reserver r, place p, user u WHERE p.id_p = r.id_p AND r.id_u = u.id_u AND r.lvl = 1 AND date_fin > CURDATE()");
        $req->execute();
        
        return $req;
    }

    function displayUsedPlaceRefus()
    {
        global $bdd;
        
        $req = $bdd->prepare("SELECT p.id_p, p.nom_p, u.nom, u.prenom FROM reserver r, place p, user u WHERE p.id_p = r.id_p AND r.id_u = u.id_u AND r.lvl = 2");
        $req->execute();
        
        return $req;
    }

    function displayFreePlace()
    {
    global $bdd;
    $req = $bdd->prepare("SELECT * FROM place Pres where Pres.id_p not in
                        (SELECT p.id_p FROM reserver r, place p, user u WHERE p.id_p = r.id_p 
                        AND r.id_u = u.id_u AND r.lvl = 1 AND date_fin > CURDATE())");
    $req->execute();

    return $req;
    }

    function displayHistorique()
    {
    global $bdd;
    $req = $bdd->prepare("SELECT u.nom, u.prenom, r.date_deb, r.date_fin, p.nom_p FROM reserver r, user u, place p WHERE u.id_u = r.id_u AND p.id_p = r.id_p");
    $req->execute();

    return $req;
    }

    function deleteUsedPlace($id_p)
    {
        global $bdd;
        
        $req = $bdd->prepare("DELETE FROM reserver WHERE id_p=".$id_p);
        
        $req->execute();

        return $req->fetch();
    }

    function leCompte($id_u)
    {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM user where lvl = 2 and id_u = :id_u");
    $req->bindValue(":id_u", $id_u,  PDO::PARAM_INT);
    $req->execute();

    return $req->fetchAll();
    }

?>
