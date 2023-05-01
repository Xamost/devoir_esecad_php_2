<?php
    $films_info_list = [
        0 => ['year' => '2001', 'name' => 'Le Seigneur des anneaux : La Communauté de l\'anneau', 'duration' => '2h58min', 'grade' => '8.8/10'],
        1 => ['year' => '2002', 'name' => 'Le Seigneur des anneaux : Les Deux Tours', 'duration' => '2h59min', 'grade' => '8.8/10'],
        2 => ['year' => '2003', 'name' => 'Le Seigneur des anneaux : Le Retour du roi', 'duration' => '3h21min', 'grade' => '9.0/10'],
        3 => ['year' => '2001', 'name' => 'Le voyage de Chihiro', 'duration' => '2h05min', 'grade' => '8.6/10'],
        4 => ['year' => '1995', 'name' => 'Toy Story', 'duration' => '1h21min', 'grade' => '8.3/10'],
        5 => ['year' => '2003', 'name' => 'Kill Bill: Volume I', 'duration' => '1h51min', 'grade' => '8.2/10'],
        6 => ['year' => '1977', 'name' => 'La guerre des étoiles', 'duration' => '2h01min', 'grade' => '8.6/10']
    ];
    if(!empty($_GET))
    {
        $year = $_GET['year'];
    }else{
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
    <?php
        echo "<h1> Voici les films pour l'année : " .$year . "</h1></br>";
        echo "<ul>";
        foreach ($films_info_list as $key => $values)
        {
            if ($year == $values['year'])
            {
                echo "<li><h3>" . $values['name'] . " | d'une durée de : " . $values['duration'] . " | avec une note de : " . $values['grade'] . "</h3></h3></li></br>";
            }
        }
        echo "</ul>";
    ?>
</body>
</html>
