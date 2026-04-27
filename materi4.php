<?php
function salam()
{
    echo "assalamualaikum";
    echo "<br><br>today we learned about function for php language, function ini berfungsi untuk membuat sebuah fungsi untuk digunakan berkali-kali.
    so kita belajar buat function and this is first function";
}

salam();
echo "<br><br>=================================================================";

function tambah(int $a, int $b)
{
    $jumlah = $a + $b;
    echo "<br><br>";
    echo $jumlah;
    echo "<br><br> this is function for Penjumlahan ";
}
echo "<br><br>=================================================================";

function kali(int $a, int $b)
{
    $jumlah = $a * $b;
    echo "<br><br>";
    echo $jumlah;
    echo "<br><br> this is function the second for Perkalian";
}

function bagi(int $a, int $b)
{
    $jumlah = $a / $b;
    echo "<br><br>";
    echo $jumlah;
    echo "<br><br> this is function the second for Pembagian ";
}


function kurang(int $a, int $b)
{
    $jumlah = $a - $b;
    echo "<br><br>";
    echo $jumlah;
    echo "<br><br> this is function the second for Pengurangan";
}

?>

<form method="POST">
    <input type= "number" name="angka1">
    <input type= "number" name="angka2">
    <button type= "submit" name="kirim">Kirim</button>
</form>


<?php

if (isset($_POST['kirim'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    tambah($angka1, $angka2);
    echo "<br><br>";
    kali($angka1, $angka2);
    echo "<br><br>";
    bagi($angka1, $angka2);
    echo "<br><br>";
    kurang($angka1, $angka2);


}

?>
