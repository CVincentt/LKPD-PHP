<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
        <label for="teks">Masukkan Teks:</label>
        <input type="text" id="teks" name="teks" required>
        <button type="submit">Cek Kalimat</button>
    </form>

    
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $teks = $_POST['teks'];
        preg_match_all('/[^a-zA-Z\s1-9]/', $teks, $matches);

        if(count($matches[0]) > 0) {

            $uniqueSymbols = array_unique($matches[0]);
            echo "Karakter yang terdapat pada kalimat : " . implode(', ', $uniqueSymbols);
        }else { 
            echo "Tidak ada karakter yang terdapat pada kalimat";
        }
    
        }
    ?>
</body>
</html>