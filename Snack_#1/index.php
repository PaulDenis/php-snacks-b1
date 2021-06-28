<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema 
Olimpia Milano - Cantù | 55-60-->

<?php 
    $calendario = [
        [
            'casa' => ['nome' => 'Clippers', 'punti' => 106],
            'ospiti' => ['nome' => 'Suns', 'punti' => 92]
        ],
        [
            'casa' => ['nome' => 'Bucks', 'punti' => 125],
            'ospiti' => ['nome' => 'Hawks', 'punti' => 91]
        ],
        [
            'casa' => ['nome' => 'Nuggets', 'punti' => 102],
            'ospiti' => ['nome' => 'Suns', 'punti' => 116]
        ],
        [
            'casa' => ['nome' => 'Clippers', 'punti' => 132],
            'ospiti' => ['nome' => 'Jazz', 'punti' => 106]
        ],
        [
            'casa' => ['nome' => 'Grizzlies', 'punti' => 111],
            'ospiti' => ['nome' => 'Jazz', 'punti' => 121]
        ]
    ];
    
    for ($i = 0; $i < count($calendario); $i++) {
        echo "<ul>";
        echo "<li> " . $calendario[$i]['casa']['nome'] . " - " . $calendario[$i]['ospiti']['nome'] . " | " . $calendario[$i]['casa']['punti'] . "-" . $calendario[$i]['ospiti']['punti']  . "</li>";
        echo "</ul>";
    }

; ?>