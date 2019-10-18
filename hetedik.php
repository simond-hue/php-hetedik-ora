<!DOCTYPE html>
<?php
include("./dbmanager.php");
?>
<head>
	<style type="text/css">
		*{
			background-color: #222222;
		}
	</style>
</head>


<!--A múltkori webshopot folytatjuk
	Törlés
		Az admin oldalon a sorok mellett legyen egy törlés gomb, ami törli az adatbázisból az adott sort
	Hozz létre admin oldal az INSERTnek (auth most még nem kell)
		Ahol be lehet vinni elemeket, és az frissül az előbbi oldalon
	A leírás lehessen szerkeszthető!
		Akár a meglévő, akár egy új admin oldalon jelenjenek meg a leírások egy szerkeszthető mezőben, mindegyik mellett egy ‘mentés’ gomb, ami elmenti az adatbázisba a változtatásokat
	
	Szorgalmi: 
		Pagination - toltsuk fel az adatbazist https://www.mockaroo.com/ vagy hasonló szolgáltatással, hogy minimum 50 adattal rendelkezzen (gyorsan, nem az adat a lényeg)
Egyszerre maximum 10 elemet jelenítsünk meg
Tudjunk végiglapozni mind a 10 elemen.-->
