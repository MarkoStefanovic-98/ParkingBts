<?php
    require "modele/adminModele.php";
    $id_u = $_GET ['id'];

    acceptInscription($id_u);

    header("location:".BASE_URL."/admin");
?>