<?php

function myFirstFunction() {
    echo "<p>Hello this is my first PHP function</p>";

    
}

function greet ($name, $color){
    echo "<p>Hi, my name is $name and my favorite color is $color<p/>";
}
myFirstFunction ();
greet ('John', 'blue');
greet ('Jane', 'red');

$count = 1;

while($count<11){
    echo "<li>$count</li>";
    $count++;
}

$names = array('Agata', 'Maciek','Franek');
$countNames = 0;
while($countNames<count($names)){
    echo "<li>Hello my dear friend $names[$countNames]</li>";
    $countNames++;
}
?>



<h1><?php bloginfo('name')?></h1>

