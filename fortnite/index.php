<?php

$chapter6 = array(
"Whiffy Whraf",
"Flooded Frogs",
"Magic Mosses",
"Pumped Power",
"Demon's Dojo",
"Twinkle Terrace",
"Lost Lake",
"Brutal Boxcars",
"Nightshift Forest",
"Burd",
"Warrior's Watch",
"Foxy Floodgate",
"Seaport City",
"Shinning Span",
"Shogun's Solitude",
"Canyon Crossing",
"Masked Meadows",
"Hopeful Heights"
);

$chapter1 = [
"Pleasant Park",
"Anarchy Acres",
"Look Lake",
"Tomato Town",
"Wailing Woods",
"Dusty Depot",
"Lonely Lodge",
"Greasy Grove",
"Salty Springs",
"Retail Row",
"Flush Factory",
"Fatal Fields",
"Moisty Mire",
"Chez nous",
"Containers",
"Circuit",
"Prison"
];
?>

<html>
    <header>
<title>Fortnite Random</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</header>

<body>
    <div class="osf">

    <h1>Random</h1>

        <form method="post">
            <input id="chapter1" class="btn_chapter" type="submit" name="chapter1" value = "Chapter 1"> 
            <input id="chapter6" class="btn_chapter" type="submit" name="chapter6" value = "Chapter 6">  
        </form>

        

    </div>

    <div class="osf2">
    <?php 
            if (isset($_POST['chapter1'])){
                $lieu1 = $chapter1[array_rand($chapter1)];
                echo "<div id='result'>".$lieu1."</div>";
                echo '<img src="images/chapter1/'.$lieu1.'.png" width=444 height=250 />';
            }
            if (isset($_POST['chapter6'])){
                $lieu6 = $chapter6[array_rand($chapter6)];
                echo "<div id='result'>".$lieu6."</div>";
                echo '<img src="images/chapter6/'.$lieu6.'.png" width=444 height=250 />';
            }
        ?>

        </div>
    

</body>
</html>