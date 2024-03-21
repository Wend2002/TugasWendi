<!DOCTYPE html>
<html>
<head>
    <title>Input Data Segitiga</title>
</head>
<body>

<h2>Input Data Segitiga</h2>
<form method="post" action="">
    <?php
    // Form untuk memasukkan data alas dan tinggi segitiga
    for ($i = 1; $i <= 5; $i++) {
        echo "Segitiga ke-$i <br>";
        echo "Alas: <input type='number' name='alas[]'><br>";
        echo "Tinggi: <input type='number' name='tinggi[]'><br><br>";
    }
    ?>
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if(isset($_POST['submit'])){
    // Ambil data alas dan tinggi dari form
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    // Fungsi untuk menghitung luas segitiga
    function hitungLuasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    // Hitung luas segitiga untuk setiap data yang diinput
    for ($i = 0; $i < count($alas); $i++) {
        $luas = hitungLuasSegitiga($alas[$i], $tinggi[$i]);
        echo "Luas segitiga dengan alas $alas[$i] dan tinggi $tinggi[$i] adalah: $luas <br>";
    }
}
?>
</body>
</html>
