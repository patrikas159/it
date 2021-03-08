<?php

namespace JobsApp;

class Darbuotojai {
    private $pareigybes;
    private $name;
    private $lastName;
    private $idNumber;
    private $salary;


    public function __construct($pareigybes,$name,$lastName,$idNumber,$salary)
    {
        $this->pareigybes=$pareigybes;
        $this->name=$name;
        $this->lastName=$lastName;
        $this->idNumber=$idNumber;
        $this->salary=$salary;


    }


    public function showData()
    {
        return[
            $this->pareigybes,
            $this->name,
            $this->lastName,
            $this->idNumber,
            $this->salary,
        ];
    }


}