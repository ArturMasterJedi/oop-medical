<?php


abstract class Persona
{
    private $age;
    private $fio;

    public function __construct($age, $fio)
    {
        if (!empty($age)){
            $this->age=$age;
        }else{
            $this->age=0;
            echo 'Не введен возраст';
        }

        if (!empty($fio)){
            $this->fio=$fio;
        }else{
            $this->fio='NULL';
            echo 'Не введено ФИО персоны';
        }
    }

    public function setAge($age){
        if (!empty($age)){
            $this->age=$age;
        }else{
            $this->age=0;
            echo 'Не введен возраст';
        }
    }

    public function setFio($fio){
        if (!empty($fio)){
            $this->fio=$fio;
        }else{
            $this->fio='NULL';
            echo 'Не введено ФИО персоны';
        }
    }

    public function getAge(){
        return $this->age;
    }
    public function getFio(){
        return $this->fio;
    }

    public function show(){
        return 'Возраст человека - '.$this->getAge().'<br>Ф.И.О - '.$this->getFio().'<br>';
    }
}