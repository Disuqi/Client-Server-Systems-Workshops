<?php
$view = new stdClass();
$view->pageTitle = 'Calculator';
spl_autoload('Models\Calculator', '.php');
if (isset($_POST['submit'])) {
    $operation = explode(' ', trim($_POST['input']));
    if (count($operation) == 3) {
        $first = $operation[0];
        $second = $operation[2];
        $operator = $operation[1];
        $calculator = new Calculator($first, $second, $operator);
        $result = $calculator->calculate();
        setcookie('result', $result, time() + (10 * 365 * 24 * 60 * 60));
    }
    else{
        $result = false;
    }
    if (!$result) {
        $view->result = 'Something went wrong';
    } else {
        $view->result = 'The result is ' . $result . '. ';
        if($_COOKIE['result'] != null){
            $view->result = $view->result . '<br>Last time it was ' . $_COOKIE['result'] ;
        }
    }

}
require_once('Views/calculator.phtml');