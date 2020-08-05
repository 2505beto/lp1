<?php
class ordenar{
    public $array;

    public function __construct($numero){
        $this->array=$numero;
    }
    public function orden(){
        sort($this->array);
        foreach ($this->array as $orden) {
            echo $orden."<br>";
        }    
        
    }
}