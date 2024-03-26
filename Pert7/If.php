<?php 

    $nama_mahasiswa = "-";
    $jurusan_mahasiswa = "-";
    $nilai_tugas_mahasiswa = 0;
    $nilai_uts_mahasiswa = 0;
    $nilai_uas_mahasiswa = 0;
    $total_nilai_mahasiswa = 0;
    $rata_rata_nilai_mahasiswa = 0;

    if(isset($_POST['submit'])) {
        $nama_mahasiswa = $_POST['nama'];
        $jurusan_mahasiswa = $_POST['jurusan'];
        $nilai_tugas_mahasiswa = $_POST['nilai_tugas'];
        $nilai_uts_mahasiswa = $_POST['nilai_uts'];
        $nilai_uas_mahasiswa = $_POST['nilai_uas'];

        $total_nilai_mahasiswa = $nilai_tugas_mahasiswa + $nilai_uts_mahasiswa + $nilai_uas_mahasiswa;
        $rata_rata_nilai_mahasiswa = $total_nilai_mahasiswa / 3;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Sederhana - Pertemuan 2 Tugas 1</title>
</head>
<body>
    <fieldset>
        <h3>Input</h3>
        <form action="" method="POST">
            <label for="nama">Nama : </label>
            <input type="text" name="nama"><br/>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan"><br/>
            <label for="nilai_tugas">Nilai Tugas : </label>
            <input type="text" name="nilai_tugas"><br/>
            <label for="nilai_uts">Nilai UTS : </label>
            <input type="text" name="nilai_uts"><br/>
            <label for="nilai_uas">Nilai UAS : </label>
            <input type="text" name="nilai_uas"><br/>
            <input type="submit" name="submit" value="Hitung">
        </form>
    </fieldset>
    <br>
    <section>
        <fieldset>
            <h3>Output</h3>
            <table width="50%">
                <tr>
                    <td>Nama</td>
                    <td>: <?= $nama_mahasiswa ?></td>
                    <td>Jurusan</td>
                    <td>: <?= $jurusan_mahasiswa ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>: <?= $nilai_tugas_mahasiswa ?></td>
                    <td>Nilai UTS</td>
                    <td>: <?= $nilai_uts_mahasiswa ?></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>: <?= $nilai_uas_mahasiswa ?></td>
                    <td>Rata-rata</td>
                    <td>: <?= $rata_rata_nilai_mahasiswa ?></td>
                </tr>
            </table>
        </fieldset>
    </section>
</body>
</html>
