
<?php
function generateCards(int $numberOfCards) : array
{
    if ($numberOfCards === 32 || $numberOfCards === 52) {
        $deck = array();
        if ($numberOfCards == 32)
            $countingBeginning = 7;
        else
            $countingBeginning = 2;
        for ($i = $countingBeginning; $i <= 14; $i++) {
            switch ($i) {
                case 2 :
                    $deck[$i]["Name"] = "Deux";
                    break;
                case 3 :
                    $deck[$i]["Name"] = "Trois";
                    break;
                case 4 :
                    $deck[$i]["Name"] = "Quatre";
                    break;
                case 5 :
                    $deck[$i]["Name"] = "Cinq";
                    break;
                case 6 :
                    $deck[$i]["Name"] = "Six";
                    break;
                case 7 :
                    $deck[$i]["Name"] = "Sept";
                    break;
                case 8 :
                    $deck[$i]["Name"] = "Huit";
                    break;
                case 9 :
                    $deck[$i]["Name"] = "Neuf";
                    break;
                case 10 :
                    $deck[$i]["Name"] = "Dix";
                    break;
                case 11 :
                    $deck[$i]["Name"] = "Valet";
                    break;
                case 12 :
                    $deck[$i]["Name"] = "Dame";
                    break;
                case 13 :
                    $deck[$i]["Name"] = "Roi";
                    break;
                case 14 :
                    $deck[$i]["Name"] = "As";
                    break;
                default:
                    break;
            }
            for ($j = 0; $j < 4; $j++) {
                switch ($j) {
                    case 0 :
                        $deck[$i][][$j] = "Pique";
                        break;
                    case 1 :
                        $deck[$i][][$j] = "Coeur";
                        break;
                    case 2 :
                        $deck[$i][][$j] = "Trèfle";
                        break;
                    case 3 :
                        $deck[$i][][$j] = "Carreau";
                        break;
                    default:
                        break;
                }
            }

        }
        return $deck;
    } else {
        return false;
    }

}

function distribution($deck){
    $joueur1 = [];


}
