<?php
class Calc {
    public $num1;
    public $num2;
    public $operation;


    function __construct($firstnum, $secondnum, $operation) {
        $this->num1 = $firstnum;
        $this->num2 = $secondnum;
        $this->operation = $operation;
    }

    public function calcMethod() {
      switch ($this->operation) {
        case 'add':
            $result = $this->num1 + $this->num2;
            break;
        case 'sub':
            $result = $this->num1 - $this->num2;
            break;
        case 'mul':
            $result = $this->num1 * $this->num2;
            break;
        case 'div':
            $result = $this->num1 / $this->num2;
            break;    
        default:
            $result = "Error";
            break;
      }



    public function addition($num1 , $num2){
        return $this->num1 + $this->num2;
    } 
    public function addition($num1 , $num2){
        return $this->num1 - $this->num2;
    }
    public function addition($num1 , $num2){
        return $this->num1 * $this->num2;
    } 
    public function addition($num1 , $num2){
        return $this->num1 / $this->num2;
    } 
     
    





}
public function display(){
    echo $result;
}    
}



?>