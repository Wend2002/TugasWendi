<?php 

    if(isset($_POST['submit'])) {
        $awal_angka = $_POST['nilai_awal'];
        $akhir_angka = $_POST['nilai_akhir'];

        $deret_angka = "";
        $jumlah_angka = 0;
        $total_nilai_angka = "";
        $total_deret_angka = 0;
        for ($i = $awal_angka; $i <= $akhir_angka; $i++) {
            if($i % 2 == 0 && $i % 3 == 0) {
                $deret_angka .= $i . ", ";
                $jumlah_angka++;
                $total_nilai_angka .= $i . " + ";
                $total_deret_angka += $i;
            }
        }

        $total_nilai_angka .= " = " . $total_deret_angka;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4 - Tugas 1 </title>
</head>
<body>
    <form action="" method="POST">
            <label for="nilai_awal">Nilai awal</label>
            <input type="number" name="nilai_awal"><br>
            <label for="nilai_akhir">Nilai Akhir</label>
            <input type="number" name="nilai_akhir"><br>
            <input type="submit" name="submit" value="submit">
    </form>

    <p>Deret Bilangan : <?= $deret_angka ?? ""; ?></p>
    <p>Jumlah Bilangan : <?= $jumlah_angka ?? ""; ?></p>
    <p>Jumlah Nilai Bilangan : <?= $total_nilai_angka ?? ""; ?></p>
</body>
</html>
