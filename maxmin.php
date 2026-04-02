<?php
$numbers = array(10, 5, 8, 20, 3);

print_r($numbers);
echo "<br>";
$max = $numbers[0];
$min = $numbers[0];
foreach($numbers as $num) {
    if($num > $max) {
        $max = $num;
    }
    if($num < $min) {
        $min = $num;
    }
}

echo "Maximum Value: " . $max . "<br>";
echo "Minimum Value: " . $min;
?>