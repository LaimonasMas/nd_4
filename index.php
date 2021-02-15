<h2>ND nr.1</h2>

<?php
// echo '<pre>';
echo 'Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.';
$array = [];
// echo '<pre>';
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
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < 10) {
        echo $i;
        break;
    }
}
echo '<br><br>';
echo 'i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą';
echo '<br><br>';
$array2I = $array;
// foreach ($array2I as $key => $value) {
//     if ($key % 2 === 0) {
//         unset($array2I[$key]);
//     }
// }
$ilgis = count($array2I);
for ($i = 0; $i < $ilgis; $i++) {
    if ($i % 2 === 0) {
        unset($array2I[$i]);
    }
}
print_r($array2I);
echo '<br><br>';

echo count($array2I);
?>

<h2>ND nr.3</h2>

<?php

echo 'Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.';
// echo '<br><br>';
$array3 = [];
for ($i = 0; $i < 200; $i++) {
    $randLetter = chr(rand(65, 68));
    array_push($array3, $randLetter);
}
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;
foreach ($array3 as $key => $value) {
    ($value === 'A') ? $countA++ : '';
    ($value === 'B') ? $countB++ : '';
    ($value === 'C') ? $countC++ : '';
    ($value === 'D') ? $countD++ : '';
}
echo '<pre>';
// print_r($array3);
echo '</pre>';
echo '<br>';
echo "'A' raidžių yra: $countA";
echo '<br>';
echo "'B' raidžių yra: $countB";
echo '<br>';
echo "'C' raidžių yra: $countC";
echo '<br>';
echo "'D' raidžių yra: $countD";
?>

<h2>ND nr.4</h2>

<?php

echo 'Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.';

$array4 = $array3;
// echo '<pre>';
sort($array4);
print_r($array4);
?>

<h2>ND nr.5</h2>

<?php

echo 'Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote.';
echo '<br>';
$array5A = [];
$array5B = [];
$array5C = [];
for ($i = 0; $i < 200; $i++) {
    $randLetter = chr(rand(65, 68));
    array_push($array5A, $randLetter);
}
for ($i = 0; $i < 200; $i++) {
    $randLetter = chr(rand(65, 68));
    array_push($array5B, $randLetter);
}
for ($i = 0; $i < 200; $i++) {
    $randLetter = chr(rand(65, 68));
    array_push($array5C, $randLetter);
}
// echo '<br><br>';
// print_r($array5A);
// echo '<br><br>';
// print_r($array5B);
// echo '<br><br>';
// print_r($array5C);
$array5D = [];
for ($i=0; $i < 200; $i++) {
    $element5 = $array5A[$i].$array5B[$i].$array5C[$i]; 
    array_push($array5D, $element5);
}
echo '<pre>';
// print_r($array5D);
// echo '<br>';
$array6D = [];
foreach ($array5D as $value) {
    if (!in_array($value, $array6D)) {
        array_push($array6D, $value);
    }
}
echo '</pre>';
print_r($array6D);
echo '<br>';
echo '</pre>';

echo 'Iš viso skirtingų kombinacijų yra: '. count($array6D);
?>

<h2>ND nr.6</h2>

<?php

echo 'Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).';
echo '<br><br>';
$array6A = [];
$array6B = [];
for($i = 0; $i < 100; $i++) {
    $element = rand(100, 999);
    array_push($array6A, $element);
    $element2 = rand(100, 999);
    array_push($array6B, $element2);
}
$array6C = [];
$array6F = [];
foreach($array6A as $value) {
    if (!in_array($value, $array6C)) {
        array_push($array6C, $value);
    }
}
foreach ($array6B as $value) {
    if (!in_array($value, $array6F)) {
        array_push($array6F, $value);
    }
}
// echo '<pre>';
// sort($array6C);
print_r($array6C);
echo '<br><br>';
// sort($array6F);
print_r($array6F);
echo '<br>';
?>

<h2>ND nr.7</h2>

<?php

echo 'Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.';
echo '<br><br>';
$array7A = $array6A;
$array7B = $array6B;
$array7C = [];
for ($i = 0; $i < 100; $i++) {
    if(!in_array($array7A[$i], $array7B)) {
        array_push($array7C, $array7A[$i]);
    }
}
// sort($array7C);
print_r($array7C);
?>

<h2>ND nr.8</h2>

<?php

echo 'Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.';
echo '<br><br>';
$array8A = $array6A;
$array8B = $array6B;
$array8C = [];
for ($i = 0; $i < 100; $i++) {
    if(in_array($array8A[$i], $array8B)) {
        array_push($array8C, $array8A[$i]);
        // $array8C[$i] = $array8A[$i];
    }
}
// sort($array8C);
print_r($array8C);
?>
 
<h2>ND nr.9</h2>

<?php

echo 'Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės būtų iš antrojo masyvo.';
echo '<br><br>';
print_r($array6A);
echo '<br><br>';
print_r($array6B);
echo '<br><br>';
for ($i=0; $i < 100; $i++) { 
    $array9[$array6A[$i]] = $array6B[$i];
}
// echo '<pre>';
print_r($array9);
?>

<h2>ND nr.10</h2>

<?php

echo 'Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.';
echo '<br><br>';
$num1 = rand(5, 25);
$num2 = rand(5, 25);
$array10 = [$num1, $num2];
for ($i=0; $i < 8; $i++) { 
    $array10[$i+2] = $array10[$i] + $array10[$i+1];
}
echo '<pre>';
print_r($array10);
// echo '</pre>';
?>

<h2>ND nr.11</h2>

<?php

echo 'Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)';
echo '<br><br>';

// sukuriam masyva su atsitiktiniais skaiciais
$array11 = []; 
while (count($array11) < 101) {
    $numb11 = rand(0, 300);
    if (!in_array($numb11, $array11)) {
        array_push($array11, $numb11);
    }
}
echo '<pre>';

echo 'Pradine suma: ' . array_sum($array11);
echo '<br><br>';


// isrusiuojam didejimo tvarka
sort($array11); 
print_r($array11);
echo '<br><br>';

// padarom du atskirus masyvus su kas atra reiksme
$array11A = [];
$array11B = [];
for ($i = 0; $i < count($array11); $i+=2) {
    array_push($array11A, $array11[$i]);
}
for ($i = 1; $i < count($array11); $i+=2) {
    array_push($array11B, $array11[$i]);    
}
echo '<br><br>';
print_r($array11A);

// sumuoju kaire puse be didziausios reiksmes
$sum11A = array_sum($array11A) - $array11A[50];
echo '<br><br>';
echo 'Suma A be didziausios reiksmes: ' . $sum11A;

echo '<br><br>';
// apverciam antra masyva
rsort($array11B);
print_r($array11B);

// sumuoju desine puse
$sum11B = array_sum($array11B);
echo '<br><br>';
echo 'Suma B: ' . $sum11B;
echo '<br><br>';

// randu skirtuma
$subtraction = $sum11B - $sum11A;
echo 'Skirtumas yra: ' . $subtraction;

// sujungiam masyvus
$array11C = array_merge($array11A, $array11B);
echo '<br><br>';
print_r($array11C);
echo '<br><br>';

echo 'Paskute suma: ' . array_sum($array11C);