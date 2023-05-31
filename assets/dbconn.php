<?php

$con = mysqli_connect("localhost","root","","bd_mon_artisant");

if(!$con){
    die('Statut : Echec '. mysqli_connect_error());
}
?>
