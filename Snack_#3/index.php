<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
    $numbers = [];

    while (count($numbers) < 15) {
        $number= rand(1, 100);
        if (!in_array($number, $numbers)) {
            $numbers[] = $number;
        };
    };

    echo '<ul>';
    for ($i=0; $i < count($numbers); $i++) {
        echo '<li>' . $numbers[$i] . '</li>';
    }
    echo '</ul>'

; ?>
