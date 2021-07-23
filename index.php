<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>

<?php

//1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
echo "<h3>Pirma užduotis</h3>";

$aktoriausVardas = "Leonardo";
$aktoriausPavarde = "Di Caprio";

echo "Vardas: $aktoriausVardas <br>";
echo "Pavarde: $aktoriausPavarde <br>";

if (strlen($aktoriausVardas) < strlen($aktoriausPavarde)) {
    echo "Trumpesnis stringas: $aktoriausVardas <br>";
} else {
    echo "Trumpesnis stringas: $aktoriausPavarde <br>";
};

//2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, 
// o pavardę tik mažosioms.
echo "<h3>Antra užduotis</h3>";

echo strtoupper($aktoriausVardas);
echo "<br>";
echo strtolower($aktoriausPavarde);
echo "<br>";

//3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam 
// priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
echo "<h3>Trečia užduotis</h3>";

$vardasPavarde = $aktoriausVardas . " " . $aktoriausPavarde;

echo $vardasPavarde;

//4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam 
// priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
echo "<h3>Ketvirta užduotis</h3>";

$lastThreeLetters = substr($aktoriausVardas, -3) . substr($aktoriausPavarde, -3);

echo "$lastThreeLetters";

//5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.
echo "<h3>Penkta užduotis</h3>";

$stringParis = "An American in Paris";
echo "$stringParis";
echo "<br>";

for ($i=0; $i < strlen($stringParis); $i++) { 
    $letter = substr($stringParis, $i, 1);

    if (strtolower($letter) == "a") {
        $letter = "*";
    };
     
    echo "$letter";
};

//6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
echo "<h3>Šešta užduotis</h3>";
$counter = 0;

for ($i=0; $i < strlen($stringParis) ; $i++) { 
    $letter = substr($stringParis, $i, 1);

    if (strtolower($letter) == "a") {
        $counter++;
    }
};

echo $counter;

//7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. 
// Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
echo "<h3>Septinta užduotis</h3>";

function istrintiBalses($randomString) {
    for ($i=0; $i < strlen($randomString); $i++) { 
        $letter = substr($randomString, $i, 1);
        if (strtolower($letter) != "a" && strtolower($letter) != "e" && strtolower($letter) != "i" && strtolower($letter) != "o" && strtolower($letter) != "u" && strtolower($letter) != "y") {
            echo "$letter";
        };
    };
};

$stringBreakfast = "Breakfast at Tiffany's";
$stringOdessey = "2001: A Space Odyssey";
$stringLife = "It's a Wonderful Life";

echo "$stringParis<br>";
istrintiBalses($stringParis);
echo "<br>";
echo "$stringBreakfast<br>";
istrintiBalses($stringBreakfast);
echo "<br>";
echo "$stringOdessey<br>";
istrintiBalses($stringOdessey);
echo "<br>";
echo "$stringLife<br>";
istrintiBalses($stringLife);

//8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat('-', rand(0,5)). rand(1,9) . ' - A New Hope'; 
// Surasti ir atspausdinti epizodo numerį.
echo "<h3>Aštunta užduotis</h3>";

$stringStarWars = 'Star Wars: Episode '.str_repeat('-', rand(0,5)). rand(1,9) . ' - A New Hope';

echo $stringStarWars;
echo "<br>";
echo "Epizodo numeris: " . substr($stringStarWars, -14, 1);

//9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba 
// lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
echo "<h3>Devinta užduotis</h3>";

function kiekStringeTrumpuZodziu($string) {
    $counter = 0;
    $newString = explode(" ", $string);
    $countStringArray = count($newString);
    for ($i=0; $i < $countStringArray; $i++) { 
        if (strlen($newString[$i]) <= 5) {
            $counter++;
        };
    };
    echo "Trumpesnių nei 5 raidžių žodžių yra: " . $counter;
};

$stringDrinkingJuice = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";

$stringPietuCentras = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale;";

echo $stringDrinkingJuice;
echo "<br>";
kiekStringeTrumpuZodziu($stringDrinkingJuice);
echo "<br>";
echo $stringPietuCentras;
echo "<br>";
kiekStringeTrumpuZodziu($stringPietuCentras);

//10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
echo "<h3>Dešimta užduotis</h3>";

$allLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$newRandomString = substr($allLetters, rand(0, 23), 3);

echo "$newRandomString";

//11. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 
// 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo).
echo "<h3>Vienuolita užduotis</h3>";


?>
    
</body>
</html>