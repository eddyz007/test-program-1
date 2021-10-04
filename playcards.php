<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 

<?php
include_once("includes/common.php");

$MsgError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalPerson = $_POST["totalPerson"];
    
    // check if valid input conditions
    if (!is_numeric($totalPerson) || empty($_POST["totalPerson"]) || preg_match("/[\-+]/",$totalPerson)) {
      $MsgError = "Input value does not exist or value is invalid";
    }
}

if(empty($MsgError)){
    /* Get list of cards */
    $cards = get_card_list();

    /* Start distribute the cards to each person */
    $person_cards = distribute_cards($cards, $totalPerson);

    for($x = 0; $x < count($person_cards); $x++){
        echo $person_cards[$x]. "</br>";
    }
} else{
    echo "<h2> Error: " .$MsgError. "</h2>";
}
?>
</body>
</html>