<?php
include 'function.php';

judul("MINI PROJECT PERULANGAN PHP");

// ================= MENU =================
judul("1. Perulangan WHILE");

$angka = 1;
$hasil = "";

while ($angka <= 5) {
    $hasil .= "While ke-$angka <br>";
    $angka++;
}

tampilAngka("Hasil While", $hasil);

garis();

// ================= DO WHILE =================
judul("2. Perulangan DO WHILE");

$angka = 1;
$hasil = "";

do {
    $hasil .= "Do While ke-$angka <br>";
    $angka++;
} while ($angka <= 5);

tampilAngka("Hasil Do While", $hasil);

garis();

// ================= FOR =================
judul("3. Perulangan FOR");

$hasil = "";

for ($i = 1; $i <= 5; $i++) {
    $hasil .= "For ke-$i <br>";
}

tampilAngka("Hasil For", $hasil);

garis();

// ================= FOR INCREMENT =================
judul("4. Perulangan FOR INCREMENT (GENAP)");

$hasil = "";

for ($i = 0; $i <= 10; $i += 2) {
    $hasil .= "For Inc (Genap): $i <br>";
}

tampilAngka("Hasil For Increment", $hasil);

garis();

// ================= KESIMPULAN =================
judul("KESIMPULAN");

echo "
<ul>
<li>While → cek kondisi dulu baru jalan</li>
<li>Do While → jalan dulu minimal 1x</li>
<li>For → cocok untuk jumlah pasti</li>
<li>For Increment → untuk loncatan angka (genap/ganjil)</li>
</ul>
";

?>