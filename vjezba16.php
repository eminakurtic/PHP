<?php

#Useri koje imamo na sistemu (uloge)
    $user = 1;
    $admin = 2;
    $superadmin = 4;

#User koji se loguje
    $loggedUser = 2;

    $allowedUser = $admin | $superadmin;
        #0011        0001  |    0010

    if(($loggedUser & $allowedUser) != 0){
        echo "This user is  allowed";
    }else{
        echo "User is not allowed";
    }


#Matematika rješenja
#$allowedUser 0011
#$loggedUser  0010
#Vršiti operaciju AND
#Rezultat     0010

?>