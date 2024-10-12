<?php
include('../connect.php');

if (isset($_POST['submit1'])){

    $naziv = mysqli_real_escape_string($conn, $_POST['naziv']);
    $usluga = mysqli_real_escape_string($conn, $_POST['usluga']);
    $cena = mysqli_real_escape_string($conn, $_POST['cena']);

    $sql = "INSERT INTO cenovnik (Naziv, Usluga, Cena) VALUES ('$naziv', '$usluga', '$cena')";

    if (mysqli_query($conn, $sql)) {
        echo "Korisnik uspešno dodat u bazu.";
        header("Location: admin.php");
        exit();
    } else {
        echo "Greška prilikom dodavanja korisnika: " . mysqli_error($conn);
    }
}


include('../connect.php');
if(array_key_exists('btnObrisi', $_POST)){

    $del = 'DELETE FROM cenovnik WHERE id = ' . $_POST['btnObrisi'] . ';';

    if(mysqli_query($conn, $del)){
        header('Location: admin.php');

    }
}
// Dobijanje vrednosti iz forme

$sql = 'SELECT ID, Naziv, Usluga, Cena FROM cenovnik';
$result = mysqli_query($conn, $sql);
$cenovnik = mysqli_fetch_all($result, MYSQLI_ASSOC);


mysqli_close($conn);
