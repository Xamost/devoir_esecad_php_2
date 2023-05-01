<?php
/*
#
#               file name : films.php
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
    // On vérifie si on as des paramètre dans la requète, et si ces paramètre utilise la méthode GET
    if(!empty($_GET) and !empty($_GET['year'])) // si il n'est pas vide et que le paramètre est l'année
    {
        // On déclare la variable year et on lui donne la valeur de l'année. (rend le code plus lisible)
        $year = $_GET['year'];
    }else{
        // Sinon on renvoie l'utilisateur sur le landing.
        header('Location: ../index.php');
        exit();
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $year;?> Devoir 2 FILM </title>
</head>
<body>
    <h1>Voici les films pour l'année : <?php echo $year ?></h1>
    <ul>
    <?php
        // génération de la liste des films qui correspondent a l'année entré par l'utilisateur
        foreach ($films_info_list as $key => $values) // On traverse la liste des films
        {
            if ($year == $values['year']) // si l'année entré correspond a l'année du film "i"
            {
                // on génère l'élément de la liste HTML avec les bonne valeur a l'interieur.
                echo "<li><h3>" . $values['name'] . " | d'une durée de : " . $values['duration'] . " | avec une note de : " . $values['grade'] . "</h3></h3></li></br>";
            }
        }
    ?>
    </ul>
</body>
</html>
