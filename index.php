<?php

class Dog {
    private string $name;
    private string $breed;

    public function __construct($name, $breed){
        $this->name = $name;
        $this->breed = $breed;
    }

    public function bark(){
        echo "bark bark";
    }

    #cascads 
}
