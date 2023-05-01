<?php
/*
#
#               file name : index.php
#               autor : Thomas Loudoux
#
*/


    // liste de tous les films (prototype d'une base de donnée)
    $films_info_list = [
        0 => ['year' => '2001', 'name' => 'Le Seigneur des anneaux : La Communauté de l\'anneau', 'duration' => '2h58min', 'grade' => '8.8/10'],
        1 => ['year' => '2002', 'name' => 'Le Seigneur des anneaux : Les Deux Tours', 'duration' => '2h59min', 'grade' => '8.8/10'],
        2 => ['year' => '2003', 'name' => 'Le Seigneur des anneaux : Le Retour du roi', 'duration' => '3h21min', 'grade' => '9.0/10'],
        3 => ['year' => '2001', 'name' => 'Le voyage de Chihiro', 'duration' => '2h05min', 'grade' => '8.6/10'],
        4 => ['year' => '1995', 'name' => 'Toy Story', 'duration' => '1h21min', 'grade' => '8.3/10'],
        5 => ['year' => '2003', 'name' => 'Kill Bill: Volume I', 'duration' => '1h51min', 'grade' => '8.2/10'],
        6 => ['year' => '1977', 'name' => 'La guerre des étoiles', 'duration' => '2h01min', 'grade' => '8.6/10']
    ];
    // déclaration de la liste des année des films enregistrer Non obligatoire mais ça rend le code plus lisible plus tard Théoriquement on prendrais la valeur la plus ancienne et on incrémenterais automatiquement pour générer ce genre de liste avec une vrais base de donnée.
    $years_list = [];
    foreach ($films_info_list as $key => $values) // on traverse la liste des films
    {
        if ($values['year'] and !empty($values['year']) and $values['year'] != "") // si il y a une valeur année on l'ajoute à la liste, cela évite toute erreur qui ferais planter le système
        {
            $years_list[] = $values['year'];  // on ajoute l'année a la liste des années
            $years_list = array_unique($years_list); // on retire tous les doublon de la liste pour afficher qu'un seul lien si on a plusieur films ayant la même année.
        }
    }

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devoir 2</title>
</head>
<body>
    <header>
        <h1>Films par année : </h1>
    </header>
    <ul>
        <?php
            foreach ($years_list as $key => $value) // génération de la liste de lien
            {
                // j'ai ajouter des class pour facilité un ajout de style a la page, le lien va chercher le fichier films.php qui est à la racine du projet, le seul paramètre est l'année puisqu'on applique un filtre unique pour la recherche de films.
                echo "<li class='generated_list'><a class='generated_link' target='_blank' href='./films.php?year=" . $value . "'>". $value."</a></li>";
            }
        ?>
    </ul>
</body>
</html>
