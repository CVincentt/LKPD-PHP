<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action="" method="POST">
            <label for="masukan uang"></label>
            <input type="number" id="uang" name="uang">
            <button type="submit">cari</button>
        </form>
    </div>
</body>
</html>

<?php 
function koin($uang) {
    $arr = [];

    $koinUang = substr($uang, -3);
    
    if ($koinUang % 500 != $koinUang) {
        $koinUang -= 500;
        array_push($arr, "Rp. 500");
}

    if ($koinUang % 200 != $koinUang) {
        $koinUang -= 200;
        array_push($arr, "Rp. 200");
}

    if ($koinUang % 100 != $koinUang) {
        $koinUang -= 100;
        array_push($arr, "Rp. 100");
}

    echo "Jenis koin untuk Uang Rp. " . number_format($uang,0,'.','.') . " : <br>";
    echo "<ul>";
    foreach ($arr as $value) {
        echo "<li>  $value  </li>";
    }echo "<ul>";
}

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $duit = $_POST['uang'];
        koin($duit);
    }


?>