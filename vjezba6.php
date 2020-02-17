<?php

$trenutnaGodina = date ("Y");
$godinaRodenja = 1996;

$brojGodina = $trenutnaGodina - $godinaRodenja;
echo " Korisnik ima " . $brojGodina . " godina! ";

// Funkcija print()
echo "<br><br>";
echo print ("Hello");

// Jednostruki i dvostruki navodnici
echo "<br><br>";
$varijabla = "25";

// Dvostruki interpoliraju varijable, jednostruki ne
echo " Ja imam " . $varijabla . " godina! ";
echo ' Ja imam ' . $varijabla . ' godina!';

echo " Ja imam $varijabla godina!";
echo ' Ja imam $varijabla godina!';

echo " Ja imam [$varijabla] godina!";
echo ' Ja imam [$varijabla]godina!';

echo " Ja imam {$varijabla} godina!";
echp ' Ja imam {$varijabla} godina!';

?>