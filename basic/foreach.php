<?php 

// $datas = array('Max Punkkeh', 'Aziz Kurniawan', 'Indra L Brugman');

// foreach($datas as $data) {
//     echo $data;
//     echo "<br>";
// }

//array_assosiatif
$students = array(
    'Aziz Kurniawan' => 30,
    'Budi' => 29,
    'Charly' => 32
);

foreach($students as $name => $age) {
    echo "My name is ". $name. "I am ". $age;
    echo "<br/>";
}
?>