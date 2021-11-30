<?php

trait TPalata
{
    private $numberPalate;

    public function setNumberPalate($numberPalate)
    {
        if (!empty($numberPalate) && $numberPalate < 1000){
            $this->numberPalate=$numberPalate;
        }elseif (!empty($numberPalate) && $numberPalate > 1){
            $this->numberPalate=$numberPalate;
        }else{
            $this->numberPalate=0;
            echo 'Не введен номер палаты';
        }
    }

    public function getNumberPalate(){
        return $this->numberPalate;
    }
}
?>