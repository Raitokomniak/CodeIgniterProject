<html>
<?php
$asiakas=array(
	array("en"=>'Teppo', "sn"=>'Testi'),
	array("en"=>'Jussi', "sn"=>'Jussinen'),
	array("en"=>'Pekka', "sn"=>'Pekkanen'),
	array("en"=>'Jorma', "sn"=>'Jormanen'),
	);
?>




<body>

<h1>Jou jou</h1>

<?php 
echo 'Eka etunimi '  .$asiakas[0]['en'];
echo '<br>';
echo 'Toka sukunimi ' .$asiakas[1]['sn'];
?>

<hr/>


<table>
<?php


foreach($asiakas as $rivi)
{
	echo'<tr><td>'.$rivi['en'].'</td><td>'.$rivi['sn'].'</td></tr>';
}
?>

</table>

</body>

</html>
