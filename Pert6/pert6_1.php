<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Lingkaran</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Luas Lingkaran</h2>
    <table>
        <tr>
            <th>Lingkaran ke-</th>
            <th>Jari-Jari</th>
            <th>Luas</th>
        </tr>
        <?php
        // Definisikan data jari-jari lingkaran dalam array
        $data_jari = array(5, 6, 7, 8, 9); // Contoh data jari-jari

        // Fungsi untuk menghitung luas lingkaran
        function hitungLuasLingkaran($jari) {
            return pi() * pow($jari, 2);
        }

        // Hitung dan tampilkan luas lingkaran untuk setiap data
        for ($i = 0; $i < count($data_jari); $i++) {
            $luas = hitungLuasLingkaran($data_jari[$i]);
            echo "<tr>";
            echo "<td>Lingkaran " . ($i + 1) . "</td>";
            echo "<td>" . $data_jari[$i] . "</td>";
            echo "<td>" . $luas . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
