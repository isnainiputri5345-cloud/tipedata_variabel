<?php
function intro()
{
    $nama = "isnaini putri";
    $umur = 19;
    $tinggi = 151.2;
    $kelas = "TI b Semester  4";
    $nim = "24TI058";
    echo "<br><br> Assalamualaikum wr wb.";
    echo "<br><br> Hallo everyone welcome to the my website. this is website aims to learn how to create a website using
    the PHP programming language. Let me introduce myself, my name is $nama, i am $umur years old, i am $tinggi cm tall,
    my class is $kelas, my NIM is $nim , i am from Tangar Vilage.";
    echo "<br><br> Today we learn about functions. do you know function?";
    echo " <br><br> Fungsi (function) pada PHP adalah blok kode terstruktur yang dirancang untuk melakukan tugas tertentu, 
    dapat digunakan kembali (reusable), dan dipanggil berulang kali tanpa menulis ulang instruksi di dalamnya.
     Fungsi memudahkan pengelolaan, meningkatkan efisiensi, dan merapikan kode program.";
}

intro();
echo "<br><br>=================================================================";

function tambah(int $a, int $b)
{
    $jumlah = $a + $b;
    echo "<br><br>";
    echo $jumlah;
    echo "<br><br> this is function for Penjumlahan";
}

function kali(int $a, int $b)
{
    $jumlah = $a * $b;
    echo "<br><br>";
    echo $jumlah;
    echo "<br><br> this is function for Perkalian";
}

function bagi(int $a, int $b)
{
    $jumlah = $a / $b;
    echo "<br><br>";
    echo $jumlah;
    echo "<br><br> this is function for Pembagian";
}

function kurang(int $a, int $b)
{
    $jumlah = $a - $b;
    echo "<br><br>";
    echo $jumlah;
    echo "<br><br> this is function for Pengurangan";
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