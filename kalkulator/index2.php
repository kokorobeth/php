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
                $hasil = $bil1 + $bil2;
            break;
            case 'kali' : 
                $hasil = $bil1 + $bil2;
            break;
            case 'bagi' :  
                $hasil = $bil1 + $bil2;
            break;
        }
    }
?>


<form action="index2.php" method="post">
    <input type="text" name="bil1" autocomplete="off">
    <input type="text" name="bil2" autocomplete="off">
    <select name="operasi" id="">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
    </select>
    <input type="submit" name="hitung" value="hitung">
    <?php if(isset($_POST['hitung'])): ?>
    <input type="text" name="hasil" value="<?php echo $hasil ?>">
    <?php else : ?>
    <input type="text" name="hasil" value="0">
    <?php endif ?>
</form>