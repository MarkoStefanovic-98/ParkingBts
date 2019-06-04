<?php
require "Modele/adminModele.php";
$id_r = $_GET['id_r'];

acceptPlace($id_r);
header("location:".BASE_URL."/admin");
