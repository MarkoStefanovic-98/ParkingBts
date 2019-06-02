<?php
require "Modele/adminModele.php";
$id_u = $_GET['id'];

suppUser($id_u);

header("location:".BASE_URL."/admin");