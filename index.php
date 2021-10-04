<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$totalPerson = "";
?>

<h2>Game Cards</h2>
<form method="post" action="playcards.php">  
  Total Person: <input type="text" name="totalPerson" value="<?php echo $totalPerson;?>">
  <br><br>
  <input type="submit" name="submit" value="Start Game">  
</form>

</body>
</html>
