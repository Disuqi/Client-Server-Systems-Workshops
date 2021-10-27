<?php
$view = new stdClass();
$view->pageTitle = 'Calculator';
spl_autoload('Models\Calculator', '.php');
if (isset($_POST['submit'])) {
    $operation = explode(' ', $_POST['input']);
    if (count($operation) == 3) {
        $first = $operation[0];
        $second = $operation[2];
        $operator = $operation[1];
        $calculator = new Calculator($first, $second, $operator);
        $result = $calculator->calculate();
    }
    else{
        $result = false;
    }
    if (!$result) {
        $view->result = 'Something went wrong';
    } else {
        $view->result = 'The result is ' . $result . '.';
    }

}
require_once('Views/calculator.phtml');