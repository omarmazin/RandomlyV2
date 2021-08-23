<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake name</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
$ARS = $ass[$Ar[0]];
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
?>

    <div class="nav">
        <h1>Fake Name Generator</h1>
    </div>


    <div class="center">


        <div class="work">


            <div class="leftsid">
                <img src="Avatar.jpg" alt="">
            </div>
            
            <div class="information">

                <?php echo'<h4>name : '.$Rdone;'</h4>';?>
                <br>
                <?php echo '<h4>'.$BbDone.' / '.$Year.' / '.$day.'</h4>';?>
                <br>
                <?php echo '<h4> Male </h4>';?>
                <br>
                <br>
                <h3 style="color:green; font:bold;">Housing information : </h3>
                <br>
                <h3 ><?php echo '- Street : '.$ASDONE.' - City : '.$ARS.' - zip Code : '.$CCodes; ?></h3>
                <br>
                <br>
                <h4 style="color:green; font:bold;">Physical characteristics</h4>
                <?php echo '<h4>Weight :'.$Weight.'</h4>'?>
                <?php echo '<h4>Blood type :'.$Bddone.'</h4>'?>
                <br>
                <br>
                <h3 style="color:green; font:bold;">Other : </h3>
                <?php echo '<h4>Color :'.$Color.'</h4>'?>
                <?php echo '<h4>Hobby :'.$Hobby.'</h4>'?>
                <?php echo '<h4>Singer :'.$Singer.'</h4>'?>
            </div>
        </div>
    </div>
    <div class="endback">
    
            <div class="left">
                <a href="api.php"><h2>Developer Section</h2></a>
            </div>
            <div class="right">
                <img src="pic1.png" alt="">
            </div>
       
    </div>
    <div class="end">
        <h3>Made With ❤ By <a href="https://instagram.com/omarmazin_"> OmarMazin </a></h3>
    </div>
</body>
</html>