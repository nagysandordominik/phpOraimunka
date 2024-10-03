<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h1>Tömbök</h1>';
    $nevek = array('alma', 'körte', 'szilva');
    echo "<p>$nevek[1]</p>";
    print_r($nevek);
    echo "<br>";

    echo "<p>"; for($i = 0; $i < count($nevek); $i++){
        echo "$nevek[$i] ";
    };  
    echo "</p>";

    echo "<p>"; foreach($nevek as $nev){
        echo "$nev ";
    };  
    echo "</p>";

    $napok = array('hétfő', 'kedd', 'szerda', 'csütörtök', 'péntek', 'szombat', 'vasárnap');

    // Asszociatív tömb
    $gazda = array('Buksi' => 'Tercsi', 'fifi' => 'Kata', 'michelangelo' => 'Józsi');
    echo "<p> Buksi gazdája {$gazda['Buksi']}</p>";

    echo '<h1>Stringek</h1>';
    
    
    ?>
</body>
</html>