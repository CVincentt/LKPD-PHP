<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Total Pembayaran</title>
</head>
<body>
    <div class="form">
        <form action="" method="POST">
            <label for="totalPembelian">Total Pembelian:</label>
            <input type="number" id="totalPembe" name="totalPembelian" required>
            
            <label for="date">Hari:</label>
            <select name="date" id="date" required>
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
                <option value="sabtu">Sabtu</option>
                <option value="minggu">Minggu</option>
            </select>
            
            <button type="su">Hitung</button>
        </form>
    </div>

    <?php
        function hitungTotalPembayaran($totalPembelian, $hariIni) {
            $diskonHariSelasa = 0.05;
            $diskonSeratusRibu = 0.07;
            $totalPembayaran = $totalPembelian;

            if ($hariIni == 'selasa') {
                $totalPembayaran -= $totalPembayaran * $diskonHariSelasa;
            }

            if ($totalPembelian >= 100000) {
                $totalPembayaran -= $totalPembayaran * $diskonSeratusRibu;
            }

            return $totalPembayaran;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $beli = $_POST['totalPembelian'];
            $hari = $_POST['date'];
            $totalBayar = hitungTotalPembayaran($beli, $hari);
            
            echo "<p>Total yang harus dibayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</p>";
        }
    ?>
</body>
</html>