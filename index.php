<h2>ND nr.1</h2>

<?php
$array = [];
for ($i = 0; $i < 30; $i++) {
    array_push($array, rand(5, 25));
}
print_r($array);
?>

<h2>ND nr.2</h2>

<?php

echo 'Naudodamiesi 1 uždavinio masyvu:';
echo '<br>';
echo 'a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10.';
echo '<br><br>';
$array2 = $array;
$count2 = 0;
foreach ($array2 as $value) {
    if ($value > 10) {
        $count2++;
    }
}
echo $count2;
echo '<br><br>';
echo 'b) Raskite didžiausią masyvo reikšmę';
echo '<br><br>';
rsort($array2);
print_r($array2[0]);
echo '<br><br>';
echo 'c) Suskaičiuokite visų reikšmių sumą';
echo '<br><br>';
$sum = 0;
foreach ($array2 as $value) {
    $sum += $value;
}
echo $sum;
echo '<br><br>';
echo 'd) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas';
echo '<br><br>';
$array2D = [];
foreach ($array as $key => $value) {
    $element = $value - $key;
    array_push($array2D, $element);
}
print_r($array2D);
echo '<br><br>';
echo 'e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39';
echo '<br><br>';
for ($i = 0; $i < 10; $i++) {
    $elementE = rand(5, 25);
    array_push($array2D, $elementE);
}
print_r($array2D);
echo '<br><br>';
echo 'f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių';
echo '<br><br>';
$arrayEven = [];
$arrayOdd = [];
foreach ($array2D as $key => $value) {
    if ($key % 2 === 0) {
        array_push($arrayEven, $key);
    } else {
        array_push($arrayOdd, $key);
    }
}
print_r($arrayEven);
echo '<br><br>';
print_r($arrayOdd);
echo '<br><br>';
echo 'g) Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15';
echo '<br><br>';
$array2G = $array;
// print_r($array2G);
// echo '<br><br>';
for ($i = 0; $i < count($array2G); $i++) {
    if (($i % 2 === 0) && ($array2G[$i] > 15)) {
        $replacement = array($i => 0);
        $array2G = array_replace($array2G, $replacement);
    }
}
print_r($array2G);
echo '<br><br>';
echo 'h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10';
echo '<br><br>';
// print_r($array);
// echo '<br><br>';
for ($i=0; $i < count($array); $i++) { 
    if ($array[$i] < 10) {
        echo $i;
        break;
    }
}
echo '<br><br>';
echo 'i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą';
echo '<br><br>';
$array2I = $array;
for ($i = 0; $i < count($array2I); $i++) {
    if ($i % 2 === 0) {
        unset($array2I[$i]);
    }
}
print_r($array2I);
?>

<h2>ND nr.3</h2>

<?php

