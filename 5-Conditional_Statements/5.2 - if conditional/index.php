<?php
$test1 = 10;
$test2 = 6;
if($test1 == $test2){
    echo "<ul> <li>gelijk</li> </ul>";
}

if($test1 != $test2){
    echo "<ul> <li>Ongelijk</li> </ul>";
}

if($test1 === $test2){
    echo "<ul> <li>Identiek</li> </ul>";
}

if($test1 > $test2){
    echo "<ul> <li>Test1 is groter dan test2</li> </ul>";
}

if($test1 < $test2){
    echo "<ul> <li>Test1 is kleiner dan test2</li> </ul>";
}

if($test1 >= $test2){
    echo "<ul> <li>Test 1 is groter of gelijk aan test2</li> </ul>";
}

if($test1 <= $test2){
    echo "<ul> <li>Test1 is kleiner of gelijk aan test2</li> </ul>";
}
?>
