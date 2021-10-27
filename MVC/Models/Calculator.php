<?php
class Calculator{
    var $num1=0, $num2=0, $operator="";
    public function __construct($num1, $num2, $operator)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }

    public function calculate(){
        switch ($this->operator){
            case "+":
                return $this->num1 + $this->num2;
            case "-":
                return $this->num1 - $this->num2;
            case "*":
                return $this->num1 * $this->num2;
            case "/":
                return $this->num1 / $this->num2;
            default:
                return false;
        }
    }

}