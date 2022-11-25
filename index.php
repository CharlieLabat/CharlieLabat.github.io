<?php
include 'header.php';

if (isset($_GET['action'])) {
    $action=$_GET['action'];
}
else{
    $action="";
}
if ($action=='') {
    include 'PAGE/accueil.php';
}
elseif ($action=='veille') {
    include 'PAGE/veille.php';
}
include "footer.php";
?>