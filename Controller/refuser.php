<?php
require "Modele/adminModele.php";
$id_p = $_GET['id'];
$id_u = $_SESSION['id'];
denyPlace($id_p);
header("location:".BASE_URL."/admin");