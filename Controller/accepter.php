<?php
require "Modele/adminModele.php";
$id_p = $_GET['id'];
$id_u = $_SESSION['id'];
acceptPlace($id_p);
header("location:".BASE_URL."/admin");
/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 02/06/2019
 * Time: 18:44
 */