<?php


class Diagnoz
{
    private $nameDiagnoz;
    private $timeMed;
    private $priceMed;

    public function __construct($nameDiagnoz, $timeMed, $priceMed)
    {
        if (!empty($nameDiagnoz)){
            $this->nameDiagnoz=$nameDiagnoz;
        }else{
            echo 'Не введено название диагноза';
            $this->nameDiagnoz='Пусто';
        }

        if (!empty($timeMed)){
            $this->timeMed=$timeMed;
        }else{
            echo 'Не введено время лечения';
            $this->timeMed='Пусто';
        }

        if (!empty($priceMed)){
            $this->priceMed=$priceMed;
        }else{
            echo 'Не введена цена лечение';
            $this->priceMed=0;
        }
    }

    public function setNameDiagnoz($nameDiagnoz){
        if (!empty($nameDiagnoz)){
            $this->nameDiagnoz=$nameDiagnoz;
        }else{
            echo 'Не введено название диагноза';
            $this->nameDiagnoz='Пусто';
        }
    }
    public function setTimeMed($timeMed){
        if (!empty($timeMed)){
            $this->timeMed=$timeMed;
        }else{
            echo 'Не введено время лечения';
            $this->timeMed='Пусто';
        }
    }
    public function setPriceMed($priceMed){
        if (!empty($priceMed)){
            $this->priceMed=$priceMed;
        }else{
            echo 'Не введена цена лечение';
            $this->priceMed=0;
        }
    }

    public function getNameDiagnoz(){
        return $this->nameDiagnoz;
    }
    public function getTimeDiagnoz(){
        return $this->timeMed;
    }
    public function getPriceDiagnoz(){
        return $this->priceMed;
    }




    public function show(){
        return '<br>-----------------<br>Название дигноза - '.$this->getNameDiagnoz().'<br> Время лечения - '.$this->getTimeDiagnoz().'<br> Цена лечения - '.$this->getPriceDiagnoz().'<br>--------------------<br>';
    }
}