<?php

function salaires($pdo) {
    // Affichage des salaires
    $sql = "SELECT salary FROM employees;";
    if ($result = $pdo->query($sql)) {
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {
                echo $row['salary'] . "<br/>";
            }
        }
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}


?>