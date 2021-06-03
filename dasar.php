<?php 

echo "=== Variable ===";
echo "<br>";

$name = "Aziz";
$age = 32;

echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo "<br>";
echo "Hi, my name is $name, I am $age Years old";
echo "<br>";
echo "<br>";

echo "== Update Variable ==";
echo "<br>";
$alamat = "Bandung";
$alamat = "Jakarta";
echo $alamat;
echo "<br>";
echo "<br>";

echo "=== Tipe Data ===";
echo "<br>";
echo "String : ";
$test = "Saya pergi bekerja";
echo $test;
echo "<br>";

echo "Integer : ";
$first_number = 67;
$second_number = 3;
$result = $first_number + $second_number;
echo $result;
echo "<br>";

echo "Float : ";
$first_number = 67.34;
$second_number = 3.2;
$result = $first_number + $second_number;
echo $result;
echo "<br>";

echo "Boolean : ";
echo "<br>";
$x = true;
$y = false;
echo "Nilai x = ". $x;
echo "<br>";
echo "Nilai y = " . $y;
echo "| Bernilai kosong karena $y false";
echo "<br>";

echo "Array : ";
echo "<br>";
$siswa = array('Aziz', 'Bambang', 'Kurniawan');
echo "<br>";

?>