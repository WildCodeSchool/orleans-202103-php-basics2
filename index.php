<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Bascis 2</h1>

<ul>
<?php for ($i = 0; $i <= 9 ; $i++) { ?>
    <li><?php echo $i; ?></li>
<?php } ?>
</ul>
<br/>

<?php
for ($i = 0; $i <= 10 ; $i++) {
    echo $i;
}
?>

<br/>

<?php
for ($i = 1; $i <= 10 ; $i++) {
    echo $i;
}
?>

<br/>

<?php
for ($i = 10; $i >= 0 ; $i--) {
    echo $i;
}
?>

<br/>

<?php
for ($i = 25; $i <= 50; $i += 5) {
    echo $i;
}
?>

<br/>

<?php
for ($i = 10; $i >= -10; $i -= 3) {
    echo $i;
}
?>

<h2>Conditions</h2>
<?php
$name = 'Darth Vader';
if ($name === 'Darth Vader' || $name === 'Darth Sidious') {
    $name = 'Yoda';
    echo 'Sith';
} elseif ($name === 'Yoda') {
    echo 'Jedi';
} else {
    echo 'Sans doute une personne sans pouvoir';
}

?>

<h2>Tableaux indéxés numériquement</h2>

<?php
    $jedis = [
        'Obi-Wan Kenobi',
        'Yoda',
        'Luke Skywalker',
        'Windu',
        'Qui-gon Jinn',
    ];

    $jedis[] = 'Rey';

    var_dump($jedis);
    sort($jedis);
    var_dump($jedis);

    echo 'Le plus vieux jedi est ' . $jedis[1];

    for($i = 0; $i < count($jedis) ; $i++ ) {
        echo $jedis[$i] . strlen($jedis[$i]);
    }
    ?>
    <br/>
    <?php
    foreach($jedis as $jedi) {
        echo $jedi;
    }

    $character = 'Luke';
    //$character = [0 => 'L', 1 => 'u', 2=>'k', 3=>'e'];
    for($i = 0; $i < strlen($character) ; $i++ ) {
        echo $character[$i] . '-';
    }

    $characters = [
        'Yoda' => 900,
        'Leia' => 19,
        'Luke Skywalker' => 19,
        'Darth Vader' => 46,
        'Chewbacca' => 200,
    ];

    $characters['Han Solo'] = 29;
    var_dump($characters);

    // sort rsort => tri sur les valeurs, reset clés (indexé)
 
    // asort arsort => tri sur les valeurs, conserve les clés (associatifs)
    // ksort krsort => tri sur les clés
    asort($characters);

    var_dump($characters);

    ?>
    <ul>
        <?php foreach($characters as $name => $age) { ?>
            <li><?php echo $name . ':' . $age ?></li>
        <?php } ?>
    </ul>


    <ul>
        <?php foreach($characters as $name => $age) { 
            if($age >= 100) { ?>
            <li>
                <?php echo $name . ':' . $age ?>
            </li>
            <?php 
            }
        } ?>
    </ul>

    <h2>Tableaux multi</h2>

    <?php
    $raceCharacters = [
        'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
        'Sith' => ['Darth Vader', 'Darth Maul', 'Dooku'],
        'Gungan' => ['Jar Jar Binks'],
        'Human' => ['Han Solo', 'Leia'],
    ];

    //$siths = ['Darth Vader', 'Darth Maul', 'Dooku'];
    //$siths[] = 'Web';

    $raceCharacters['Sith'][] = 'Web';

    var_dump($raceCharacters);


    foreach($raceCharacters as $race => $characters) { ?>
        <h2><?php echo $race; ?></h2>
        <ul>
            <?php foreach($characters as $character) { ?>
                <li><?php echo $character ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <ul>
        <?php foreach($raceCharacters as $race => $characters) { ?>          
            <li><?php echo $race . ':' . count($characters) ?></li>       
        <?php } ?>
    </ul>

</body>
</html>