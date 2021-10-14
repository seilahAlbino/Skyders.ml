<?php

    $server = "";
    $user = "";
    $password = "";
    $database = "";

    $db = new mysqli($server, $user, $password, $database);

    if($db->connect_errno){
        echo "<p>Error Found $db->errno -->$db->connect_error</p>";
        die();
    }
?>