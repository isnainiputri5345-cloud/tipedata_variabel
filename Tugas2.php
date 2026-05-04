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


echo "<br><br>=================================================================";
echo "<br><br> Silahkan masukkan  username dan password";

function input($user, $pw)
{
    $correct_user = "Isnaini";
    $correct_pw = "5345";

    if ($user == $correct_user && $pw == $correct_pw) {
        echo "<br>Login berhasil!";
    } else {
        echo "<br>Username atau password salah!";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="kirim">Kirim</button>
</form>

<?php
if (isset($_POST['kirim'])) {
    $user = $_POST['username'];
    $pw = $_POST['password'];
    input($user, $pw);
}
?>