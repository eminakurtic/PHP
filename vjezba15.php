<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
        #Predeni put
        $potrosnja_goriva="7";
        $stanje_rezervoara="50";
        $ocekivana_distanca="1000";

        define ('KM', 'kilometara');
        define ('ZAP', 'litara');
        define ('POT', 'litara na stotinu kilometara');

        $moguca_distanca=$stanje_rezervoara/$potrosnja_goriva*100;
        $moguca_distanca=round ($moguca_distanca,2);

        #$stanje = $moguca_distanca > $ocekivana_distanca;
        #echo "Stanje: " . $stanje;

        if($moguca_distanca > $ocekivana_distanca){
            $stanje = "može";
        }else{
            $stanje = "ne može";
        }

        echo "Automobil koji ima potrošnju goriva od $potrosnja_goriva " . POT . ", sa rezervoarom od $stanje_rezervoara " . ZAP . " može preći $moguca_distanca " . KM . "!";
        echo "<br>";
        echo "Obzirom da je očekivana distanca $ocekivana_distanca " . KM . ", ovaj je automobil  " . $stanje . " preći bez sipanja goriva.";


        

    ?>
        
</body>
</html>