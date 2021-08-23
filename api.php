<?php
$Anames = array("Omar", "Mohannad", "Mohammed", "Mazin" , " Saleh" ,"Salem" , "Abdullrahman" , "Fahad" , "Ahmed" , "Ali" , "Sheikh" , "Tariq" , "Sadiq");
$Rnames = array_rand($Anames , 2);
$Rdone = $Anames[$Rnames[0]];
$Rage = (rand(16 , 50));
$Astreet = array("Riyadh AD'Dammam highway road" , "Riyadh Al-Qassim highway road" , "Al-Qassim Al-Madinah road" , "Makkah  Jeddah highway road" , "Jeddah AL-Madinah highway road");
$ASstreet = array_rand($Astreet , 2);
$ASDONE = $Astreet[$ASstreet[0]];
$Birth = array("January" , "February" , "March" ,"April" , "May" , "June" ,"July" , "August" , "September","October","November" ,"December" );
$Bbirth = array_rand($Birth , 2);
$BbDone = $Birth[$Bbirth[0]];
$Year = (rand(1950 , 2004));
$day = (rand(1,30));
$ass = array("Jeddah" , "Al-riyadh" , "Al-Qassim" ,"Makkah" , "AD'Dammam" ,"Madinah" , "Zulfi");
$Ar = array_rand($ass , 2);
$ARS = $ass[$Ar[1]];
$CCodes = (rand(1100 , 2020));
$Weight = (rand(45 , 75));
$Bloodar = array("O+" , "A" , "O" ,"AB+" , "AB-" ,"B");
$Brand = array_rand($Bloodar , 2);
$Bddone = $Bloodar[$Brand[0]];
$Colorr = array("Red" , "Blue" , "Green" , "Gray" , "Yellow" , "White");
$Coran = array_rand($Colorr , 2);
$Color = $Colorr[$Coran[0]];
$Horra = array("Football" , "Basketball" , "Gulf" , "Swimming" , "Kreket" , "Programming" , "Drawing" , "Skitting","Hiking");
$Horan = array_rand($Horra , 2);
$Hobby = $Horra[$Horan[0]];
$Singar = array("Vortex" , "Klash" , "Pitbull" , "Trill" , "Black Pink" , "BTS" , "NY - YO" , "Hellsing" );
$Singran = array_rand($Singar , 2);
$Singer = $Singar[$Singran[0]];

$main = array("Name : "=>$Rdone , "Year : "=>$Year , "Month : "=>$BbDone,"Day : "=>$day , "Country : "=>"Saudi Arabia" , "City : "=>$ARS, "Zip Code : "=>$CCodes , "Weight : "=>$Weight , "Blood type : "=>$BbDone , "Favorite Color :" =>$Color , "Hobby :"=>$Hobby , "Favorite singer : " =>$Singer);
$json = json_encode($main);

echo $json;
?>