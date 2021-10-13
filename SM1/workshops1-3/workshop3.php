<?php
//ex1();
//ex2(10);
//ex3(1000, 1000);
//ex4($_POST['factorial']);
ex5();
function ex1(){
    $recordedTemps = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    sort($recordedTemps);
    $listLength = count($recordedTemps);
    $listSum = array_sum($recordedTemps);
    echo "Average: " . $listSum/$listLength;
    echo "<br>List of seven lowest temps: ";
    for($i = 0; $i < 7; $i++){
        if($i == 6){
            echo $recordedTemps[$i] . '.';
        }
        else{
            echo $recordedTemps[$i] . ', ';
        }
    }
    echo "<br>List of seven highest temps: ";
    for($i = $listLength - 8; $i < $listLength; $i++){
        if($i == $listLength - 1){
            echo $recordedTemps[$i] . '.';
        }
        else{
            echo $recordedTemps[$i] . ', ';
        }
    }
}

function ex2($n){
    $num = 1;
    for($i=0; $i<$n;$i++){
        $line='';
        for($a=0; $a<=$i;$a++){
            $line .= strval($num) . ' ';
            $num++;
        }
        echo $line . '<br>';
    }
}

function ex3($n, $m){
    for($i=$n;$i<$m;$i++){
        echo "Icon for 0x". $i ." is " . '&#' . $i . '<br>';
    }
}
function ex4($n){
    $result=1;
    for($i=$n; $i > 0; $i--){
        $result *= $i;
    }
    echo $n . " factorial is " . $result;
}

function ex5(){
    $response = file_get_contents('http://www.classifiedsteam.co.uk/for-sale/5-gauge-locomotives-and-parts');
    $startPoint = strpos($response, '<ul class="listing-card-list listing-grid" id="listing-card-list">');
    $endPoint = strpos($response, "</ul>");
    $length = $endPoint - $startPoint;
    $response = substr($response, $startPoint, $length);
    $itemList = explode('<li class="listing-card">', $response);
    foreach($itemList as $item){
        echo "<li>" . $item . "</li>";
    }
}