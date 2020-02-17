<?php
    
    # Ovo je komentar
    // Ovo je komentar 2

    /*
    echo $ime;
    echo $ime . $prezime;
    echo $ime . " " . $prezime;
    echo $prezime;
    */

    /**
     * Komentar
     * Komentar - višelinijski - standardizovan
     * Komentar
     */

{ // Kod o Batmanu
    $ime = "Bruce";
    $prezime = "Wayne";
    $imeprezime = $ime  . " " . $prezime;
}
// Primjer bloka koda u if-else strukturi
if($ime == "Bruce"){
    echo "Da!";
}

// Primjer bloka koda u for petlji
for ($i = 0; $i < 5; $i++){
    echo $prezime . " ";
}


?>