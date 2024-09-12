<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jawaban Quiz</title>
</head>
<body>
    <h1>Form Jawaban Quiz</h1>
    <form action="" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="jawaban1">Soal 1:</label>
        <input type="text" id="jawaban1" name="jawaban[]" required><br>

        <label for="jawaban2">Soal 2:</label>
        <input type="text" id="jawaban2" name="jawaban[]" required><br>

        <label for="jawaban3">Soal 3:</label>
        <input type="text" id="jawaban3" name="jawaban[]" required><br>

        <label for="jawaban4">Soal 4:</label>
        <input type="text" id="jawaban4" name="jawaban[]" required><br>

        <label for="jawaban5">Soal 5:</label>
        <input type="text" id="jawaban5" name="jawaban[]" required><br>

        <label for="jawaban6">Soal 6:</label>
        <input type="text" id="jawaban6" name="jawaban[]" required><br>

        <label for="jawaban7">Soal 7:</label>
        <input type="text" id="jawaban7" name="jawaban[]" required><br>

        <label for="jawaban8">Soal 8:</label>
        <input type="text" id="jawaban8" name="jawaban[]" required><br>

        <label for="jawaban9">Soal 9:</label>
        <input type="text" id="jawaban9" name="jawaban[]" required><br>

        <label for="jawaban10">Soal 10:</label>
        <input type="text" id="jawaban10" name="jawaban[]" required><br><br>

        <input type="submit" value="Kirim Jawaban">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $arrJawaban = $_POST['jawaban'];

    function cekJawaban($nama, $arrJawaban) {
        $jawabanKunci = ['A', 'C', 'D', 'A', 'B', 'D', 'B', 'C', 'E', 'E'];
        $arrBenar = [];

        foreach ($jawabanKunci as $key => $value) {
            if (isset($arrJawaban[$key]) && strtoupper($arrJawaban[$key]) == $value) {
                $arrBenar[$key] = 1;
            } else {
                $arrBenar[$key] = 0;
            }
        }

        echo "Nama : $nama <br>";
        echo "Jumlah Jawaban Benar : <b>" . count(array_keys($arrBenar, 1)) . "</b><br>";
        echo "Jumlah Jawaban Salah : <b>" . count(array_keys($arrBenar, 0)) . "</b><br>";
    }

    cekJawaban($nama, $arrJawaban);
}
?>
