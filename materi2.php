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