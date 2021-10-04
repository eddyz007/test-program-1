<?php
function get_card_list()
{
    $cards        = [];
    $specialCards = array('1' => 'A', '10' => 'X', '11' => 'J', '12' => 'Q', '13' => 'K');      /* Set special cards */

    /* Add for Spade cards list */
    for($x = 1; $x <= 13; $x++){
        /* Check for special cards */
        if(empty($specialCards[$x])){        
            array_push($cards, 'S-'. $x);
        }
        else{
            array_push($cards, 'S-'. $specialCards[$x]);
        }
    }

    /* Add for Heart cards list */
    for($x = 1; $x <= 13; $x++){
        /* Check for special cards */
        if(empty($specialCards[$x])){        
            array_push($cards, 'H-'. $x);
        }
        else{
            array_push($cards, 'H-'. $specialCards[$x]);
        }
    }

    /* Add for Diamond cards list */
    for($x = 1; $x <= 13; $x++){
        /* Check for special cards */
        if(empty($specialCards[$x])){        
            array_push($cards, 'D-'. $x);
        }
        else{
            array_push($cards, 'D-'. $specialCards[$x]);
        }
    }

    /* Add for Club cards list */
    for($x = 1; $x <= 13; $x++){
        /* Check for special cards */
        if(empty($specialCards[$x])){        
            array_push($cards, 'C-'. $x);
        }
        else{
            array_push($cards, 'C-'. $specialCards[$x]);
        }
    }

    return $cards;
}

function distribute_cards($cards, $total_person)
{
    $person_cards    = [];

    /* Set total card distribute for each person */
    $distribute_card = floor(52/$total_person);

    /* If total card distribute > 13, then set limit to 13.  */
    if($distribute_card > 13){
        $distribute_card = 13;
    }

    /* If total card distribute = 0, set min value to 1 */
    if($distribute_card == 0){
        $distribute_card = 1;
    }

    for($x = 0; $x < $total_person; $x++){
        $list_cards = '';
        
        shuffle($cards);
        $shuffle_cards = array_chunk($cards, $distribute_card);

        foreach($shuffle_cards[$x] as $value){
            $list_cards = $list_cards.$value. ',';
        }

        /* Remove last comma string */
        $list_cards = rtrim($list_cards, ',');

        /* Add card list to each person in array */
        array_push($person_cards, $list_cards);
    }

    return $person_cards;
}
?>