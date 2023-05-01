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
    $years_list = [];
    foreach ($films_info_list as $key => $values)
    {
        if ($values['year'])
        {
            $years_list[] = $values['year'];
            $years_list = array_unique($years_list);
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
            foreach ($years_list as $key => $value)
            {
                echo "<li class='generated_list'><a class='generated_link' target='_blank' href='./films.php?year=" . $value . "'>". $value."</a></li>";
            }
        ?>
    </ul>
</body>
</html>
