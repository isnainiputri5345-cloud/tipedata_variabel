<?php
echo "Hello word!!";

$nama = "isnaini putri";
$umur = 19;
$tinggi = 151.2;
$kelas = "TI b Semester  4";
echo "<br> Perkenalkan nama saya $nama, umur saya $umur, tinggi badan saya $tinggi, kelas saya $kelas saya disini lagi belajar pemrograman weeb";
echo "<br> disini saya akan menceritakan pengalaman pertama saya dalam membuat website dengan menggunakan bahasa pemrograman php";
echo "<br>day 1 membuat codingan adalah dengan cara tipe dtaa string , perbedaan yang saya alaami selama menggunakan php dan python adlah disaaat membuat variBbel dan caraa menampilkan nya.";
echo "<br> kalo di python caraa menampilkan nya dengan menggunakan ";

echo "<br><br>=================================================================";

$nilai = 20;
$nilai4 = 15;
$nilai3 = 2;

$hasil = $nilai * $nilai4 + $nilai3;

echo "<br> Hasil dari $nilai x $nilai4 + $nilai3 adalah $hasil <br>";
if ($hasil >= 100){
    echo " <br> anda mendpatkan nilai A";
} else if ($hasil < 80){
    echo "<br> anda mendapatkan nilai B";
} else if ($hasil == 50){
    echo "<br> anda mendapatkan nilai C";
} else{
    echo "<br> anda mendapatkan nilai rendah";
}

echo "<br><br>=================================================================";
if ($hasil %2 == 0 ){
    echo " <br> nilai bilangan nya genap";
} else{
    echo " nilai bilangan nya ganjil";
}

echo "<br><br>=================================================================";
$nilai1 = 20;
$nilai2 = 4;

echo "<br> Penjumlahan: " . ($nilai1 + $nilai2);
echo " <br> Pengurangan: " . ($nilai1 - $nilai2);
echo "<br> Perkalian: " . ($nilai1 * $nilai2);
echo "<br> Pembagian: " . ($nilai1 / $nilai2);
echo "<br> Modulus: " . ($nilai1 % $nilai2);
echo "<br> Pangkat: " . ($nilai1 ** $nilai2);

$umur = 18;
if($umur >= 18){
    echo " <br> anda bisa membuat sim";
} else if ($umur < 16){
    echo " anda hanya akan mendapatkan pelatihan mengemudi";
} else{
    echo "anda belum cukup umur untuk belajar mengemudi";
}

?>