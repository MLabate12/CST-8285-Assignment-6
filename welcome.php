<?php
    $firstName = isset($_GET["firstName"]) ? $_GET['firstName'] : "";
    $lastName = isset($_GET["lastName"]) ? $_GET['lastName'] : "";

    if (!empty($firstName) and empty($lastName)) {
        echo "Howdy $firstName";
    } elseif (!empty($lastName) and empty($firstName)) {
        echo "Howdy $lastName";
    } elseif (empty($firstName) and empty($lastName)) {
        echo "Howdy";
    } else {
        echo "Howdy $firstName $lastName";
    }

?>

