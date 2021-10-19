<?php
$view = new stdClass();
$view->pageTitle = 'Converter';
spl_autoload('Models\Converter', '.php');
if(isset($_POST['submit'])){
    $converter = new Converter($_POST["number"], $_POST['unit']);
    $result = $converter->convert();
    if (!$result)
    {
        $view->result = 'Not a valid number.';
    }
    else
    {
        $view->result = 'Converting ' . $_POST['number'] . ' from ' . $_POST['unit'] . ' is ' . $result . '.';
	}

}
require_once('Views/converter.phtml');