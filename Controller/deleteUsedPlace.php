<?php
    require "Modele/adminModele.php";
    $id_p = $_GET['id'];

    deleteUsedPlace($id_p);

    header("location:".BASE_URL."/admin");