<?php 
    header("Content-type: application/json; charset=utf-8");
    $propnumber=$_GET['p'];
    echo file_get_contents("https://rtsvvmc.in/propdet.php?p=$propnumber");
