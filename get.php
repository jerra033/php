<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form method="get">
   <label for="naam">Naam:</label>
   <input type="text" name="naam" id="naam"><br>

   <label for="Achternaam">AchterNaam:</label>
   <input type="text" name="AchterNaam" id="AchterNaam"><br>

   <label for="Leeftijd">Leeftijd:</label>
   <input type="text" name="Leeftijd" id="Leeftijd"><br>

   <label for="Email">Naam:</label>
   <input type="text" name="Email" id="Email"><br>
    
   <label for="Adres">Naam:</label>
   <input type="text" name="Adres" id="Adres"><br>

</form>
<?php
if (isset($get['submit'])){
    $Naam = $post['Naam'];
    $Achternaam = $get['Achternaam'];
    $Leeftijd = $get['Leeftid'];
    $Email = $get['Email'];
    $Adres = $get['Adres'];
}

echo "<p>Naam $naam<P>";
echo "<p>AchterNaam $naam<P>";
echo "<p>Leeftijd $Lijftijd<P>";
echo "<p>Email $Email<P>";
echo "<p>Adres $adres<P>";
?>
  
</body>
</html>