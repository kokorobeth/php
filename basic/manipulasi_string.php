
<?php  
echo "<h3>Menghitung Jumlah karakter dengan strlen()</h3>";
$kalimat = "Belajar PHP dengan Aziz Kurniawan";
echo $kalimat;
echo "<br>";
echo "Jumlah Kalimat : " . strlen($kalimat);


echo "<h3>Menghitung Jumlah kata pada string dengan str_word_count()</h3>";
$kata = "Belajar PHP dengan Aziz Kurniawan";
echo $kata;
echo "<br>";
echo "Jumlah Kata : " . str_word_count($kata);

echo "<h3>Membalik string dengan strrev()</h3>";
$kata_dibalik = "Belajar PHP dengan Aziz Kurniawan";
echo $kata;
echo "<br>";
echo "Kalimat yang dibalik : " . strrev($kata_dibalik);

echo "<h3>Memfilter dan Mengganti string dengan str_replace()</h3>";
$kata_replace = "Belajar PHP dengan Aziz Kurniawan";
echo $kata;
echo "<br>";
echo "Kalimat yang direplace : " . str_replace('Belajar','Tutorial', $kata_replace);

?>