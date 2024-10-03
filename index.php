<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // TÖMBÖK
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

    echo "<p><ul><li>". implode("</li><li>", $napok) . "</li></ul></p>";

    // STRINGEK
    echo '<h1>Stringek</h1>';

    $nev = "Mekk Elek";
    $nev2 = "Makk Marci";

    echo "<p> $nev </p>\n";

    echo "<p>Van különbség a \" és az  \" között</p>\n";

    echo "<p>A " .$nev. " és ".$nev2. " barátok</p>\n";

    $minta = "/hello/i";
    $szoveg = "Hello world, hello everyone!";
    
    echo "<p> A minta a szövegben:  ". (preg_match_all($minta, $szoveg) ? "benne van" : "nincs benne"). "</p>";

    // Készítsenek egy osztályt, játék lebonyolításhoz, osztályban legyen egy tömb, amiben a játékosok nevei vannak, egy metódus, 
    // amivel játékost hozzá lehet adni,
    // illetve ami kiírja a játékosokat, 
    // és olyan ami kialakít egy véletlen sorrendet, 
    // és egy olyan ami elforgatja a tömböt és kiírja a játékosokat.
    // és egy olyan ami visszaadja a játékosok számát.

    class Game{
        private $players = [];

        // játékos hozzáadása
        public function addPlayer($playerName){
            $this->players[] = $playerName;
        }
        public function getPlayers(){
            return count($this->players);
        }
        public function printPlayers(){
            echo "<p><ul><li>". implode("</li><li>", $this->players) . "</li></ul></p>";
        }
        public function rotatePlayers() {
            for ($i = 0; $i < count($this->players); $i++) {
                array_push($this->players, array_shift($this->players));
                $this->printPlayers();   
        }
        }
        public function randomize(){
            shuffle($this->players);
            $this->printPlayers();
        }
        
    }

    $game = new Game();
        $game->addPlayer("Józsi");
        $game->addPlayer("Karcsi");
        $game->addPlayer("Béla");
        $game->addPlayer("Kata");
        $game->addPlayer("Erzsi");
        $game->addPlayer("Teri");


        echo "Játékosok:<br>";
        $game->printPlayers();

        echo "Megcserélt sorrend:<br>";
        $game->rotatePlayers();

        echo "Randomizált sorrend:<br>";
        $game->randomize();

        
        echo "Játékosok száma: " . $game->getPlayers();
    
    ?>
</body>
</html>