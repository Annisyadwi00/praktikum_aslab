<?php

//cara deklarasi variable di PHP: $ (dollar)

    $nama = "Annisya Dwi Chaerani";

    echo $nama;

echo $nama . "<br>";

const PHI = 3.14;

echo PHI;


$namalengkap = $nama . "Annisya";

echo "<br>" .$namalengkap. "<br>";


$books  = array("PHP For Beginner","Javascript For Beginner","Bootstrap For Beginner");
$authors = ["Rasmus Lerdorf","Brendan Eich","Mark Otto"];

$authors[0] = "Annisya Dwi Chaerani";

var_dump($books);
var_dump($authors);

echo "<ul>";
for ($i = 0; $i < count($authors); $i++) {
    echo "<li>". $authors[$i] ."</li>";
}

echo "</ul>";

function sum(){
    $sum = 0;
}