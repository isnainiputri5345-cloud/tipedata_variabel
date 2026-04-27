<?php
$nama = "isnaini putri";
$umur = 19;
$tinggi = 151.2;
$kelas = "TI b Semester  4";
$nim = "24TI058";
echo "<br><br> Assalamualaikum wr wb.";
echo "<br><br> Hallo everyone welcome to the my website. this is website aims to learn how to create a website using
    the PHP programming language. Let me introduce myself, my name is $nama, i am $umur years old, i am $tinggi cm tall,
    my class is $kelas, my NIM is $nim , i am from Tangar Vilage.";
?>
<form method="POST">
    masukan sebuah angka : <input type = "number" name ="angka">
    <input type = "sumbit" value = "kirim">

</form>

<?php

if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];

    for ($i = 1; $i<= count ($angka); $i++) {
        echo "<br>Nilai Anda : $i"; 
    }



}


?>