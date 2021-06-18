<?php 
echo "Array part I | Membuat dan memanggil array secara biasa";
echo "<br>";
echo "<br>";
$fruits = array('Orange', 'Mango', 'Banana', 'Apel', 'Watermelon');
echo $fruits[2];
echo "<br>";
echo "<br>";

echo "Array part II | Membuat dan memberi penamaan pada isi array";
echo "<br>";
echo "<br>";
$fruits = array (
    'watermelon' => "So sweet",
    'orange' => "fresh fuite",
    'Banana' => "I like banana",
    'Mango' => "Good for health"
);
echo "Watermelon is " . $fruits['watermelon'];
echo "<br>";

echo "Array part III | Menerapkan array pada for";
echo "<br>";
echo "<br>";
//membuat array dengan nama buah-buahan
$fruits = array('Watermeon', 'Mango', 'Apel', 'Banana');
//count() menghitung isi array
for($x = 0; $x < count($fruits); $x++) {
    echo $fruits[$x]. "<br/>";
}
echo "<br>";

?>