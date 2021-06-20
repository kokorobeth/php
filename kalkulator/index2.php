<?php 
    if(isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];

        switch($operasi) {
            case 'tambah' :  
                $hasil = $bil1 + $bil2;
            break;
            case 'kurang' :  
                $hasil = $bil1 - $bil2;
            break;
            case 'kali' :  
                $hasil = $bil1 * $bil2;
            break;
            case 'bagi' :  
                $hasil = $bil1 / $bil2;
            break;
        }
    }
?>

<form action="index2.php" method="post">
    <label for="bill">Input #1 Number</label>
    <input type="text" name="bil1" autocomplete="off">
    <br>
    <label for="bill">Input #2 Number</label>
    <input type="text" name="bil2" autocomplete="off">
    <br>
    <label for="operasi">Operation</label>
    <select name="operasi" id="">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
    </select>
    <button type="submit" name="hitung">Count</button>
    <br>
    <label for="hitung">Result</label>
    <?php if(isset($_POST['hitung'])): ?>
    <input type="text" name="hitung" value="<?php echo $hasil ?>">
    <?php else : ?>
    <input type="text" name="hitung" value="0">
    <?php endif ?>
</form>