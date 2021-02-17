<?php
$yhteys = mysqli_connect("localhost", "trtkp20a3", "trtkp20a3passwd");
if (!$yhteys) {
    die("Yhteyden muodostaminen tietokantaan epÃ¤onnistui!: " . mysqli_connect_error());
}

$tietokanta=mysqli_select_db($yhteys, "trtkp20a3");

if (!$tietokanta) {
    die("Tietokannan valinta epÃ¤onnistui!: " . mysqli_connect_error());
}
$nimi=$_POST['nimi'];
$email=$_POST['email'];
$viesti=$_POST['viesti'];
$sql="INSERT INTO Team8_vieraskirja(nimi,email,viesti) VALUES('$nimi','$email','$viesti')";
if (!mysqli_query($yhteys,$sql))
{
die('Virhe: ' . mysqli_error($yhteys));
}
else
echo "Viesti lisÃ¤tty tietokantaan!";
mysqli_close($yhteys);
header("Location:Vieraskirja.html");
exit;
?>
