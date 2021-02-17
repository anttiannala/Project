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
$result = mysqli_query($yhteys,"SELECT nimi,viesti FROM Team8_vieraskirja");
while($row = mysqli_fetch_array($result))
{ ?>
<h3><?php echo $row['name']; ?></h3>
<p><?php echo $row['message']; ?></p>
<?php }
mysqli_close($yhteys);
?>