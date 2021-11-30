<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once 'Persona.php';
require_once 'Doctor.php';
require_once 'Pacient.php';
require_once 'Diagnoz.php';

$masMedical = array(new Doctor(28, 'Андрей Борисович', 38000, 'Педиатр', 4), new Doctor(33, 'Алексей', 18000, 'Лимфолог', 5), new Doctor(32, 'Михаил Андреевич', 26999, 'Уролог', 88), new Doctor(26 ,'Олександ Андреевич', 33000, 'Педиатр', 4), new Doctor(24, 'Федот Федотов', 25000, 'Мед брат', 21), new Pacient(18, 'Саня', 'It', 26000, 'Ковид', 2, 200, 4), new Pacient(25, 'Артур', 'Менеджер', 24000, 'ГРВИ', 4, 22000, 5), new Pacient(26, 'Майкл', 'Менеджер', 1000, 'Рак', 7, 23000, 5), new Pacient(35, 'Бодя', 'Менеджер', 224000, 'Ковид', 3, 18000, 88), new Pacient(25, 'Артур', 'Менеджер', 24000, 'Рак', 22, 13000, 12), new Pacient(55, 'Анна', 'Продавец', 34000, 'Рак', 14, 16000, 21), new Pacient(65, 'Николай', 'Безработный', 4000, 'ГРВИ', 60, 2500, 21));

//for ($i = 0; $i < count($masMedical); $i++){
//    echo $masMedical[$i]->show().'<br>';
//}

//echo '<strong>Доктора</strong><br>';
//for ($i = 0; $i < count($masMedical); $i++){
//    if ($masMedical[$i] instanceof Doctor){
//        echo $masMedical[$i]->show().'<br>';
//    }
//}
//
//echo '<strong>Пациенты</strong><br>';
//for ($k = 0; $k < count($masMedical); $k++){
//    if ($masMedical[$k] instanceof Pacient){
//        echo $masMedical[$k]->show().'<br>';
//    }
//}
//
//echo '<strong>Имя Артур</strong><br>';
//for ($i = 0; $i < count($masMedical); $i++){
//    if ($masMedical[$i]->getFio() == 'Артур'){
//        echo $masMedical[$i]->show().'<br>';
//    }
//}
//
//echo '<strong>Дети</strong><br>';
//for ($i = 0; $i < count($masMedical); $i++){
//    if ($masMedical[$i] instanceof IChildren){
//        if ($masMedical[$i]->getAge() <= 21) {
//            echo $masMedical[$i]->show();
//            echo $masMedical[$i]->cry($masMedical[$i]->getAge());
//            echo $masMedical[$i]->play($masMedical[$i]->getAge());
//        }
//    }
//}

//echo '<strong>Диагноз РАК</strong><br>';
//for ($i = 0; $i < count($masMedical); $i++){
//    if ($masMedical[$i] instanceof Pacient){
//        if ($masMedical[$i]->getDiagnoz()->getNameDiagnoz() == 'Рак') {
//            echo $masMedical[$i]->show() . '<br>';
//        }
//    }
//
//for ($i = 0; $i < count($masMedical); $i++){
//    if ($masMedical[$i] instanceof Pacient){
//        if ($masMedical[$i]->getDiagnoz()->getTimeDiagnoz() >= 1 && $masMedical[$i]->getDiagnoz()->getTimeDiagnoz() <= 5){
//            echo $masMedical[$i]->show().'<br>';
//        }
//    }
//}
//$ins = $masMedical[0]->getSolary();
//$index = 0;
//for ($i = 0; $i < count($masMedical); $i++){
//
//    if ($masMedical[$i] instanceof Doctor){
//        if ($masMedical[$i]->getSolary() > $ins){
//            $ins = $masMedical[$i]->getSolary();
//            $index = $i;
//        }
//    }
//}
//echo 'Максимальная зарплата у доктора - '.$masMedical[$index]->show();

//$ins = $masMedical[6]->getMoney();
//$id = 0;
//
//for ($i = 0; $i < count($masMedical); $i++){
//    if ($masMedical instanceof Pacient){
//        if ($masMedical[$i]->getMoney() > $ins) {
//            $ins = $masMedical[$i]->getMoney();
//            $id = $masMedical[$i];
//        }
//    }
//}
//echo 'Максимальнаые деньги - '.$masMedical[$id]->show();

//Д.з самый дорогой диагноз
$pacient = [];
for ($i = 0; $i < count($masMedical); $i++){
    if ($masMedical[$i] instanceof Pacient){
        $pacient[] = $masMedical[$i];
    }
}

$doctors = [];
for ($i = 0; $i < count($masMedical); $i++){
    if ($masMedical[$i] instanceof Doctor){
        $doctors[] = $masMedical[$i];
    }
}
for ($i = 0; $i < count($doctors); $i++) {
    //echo $pacient[$i]->show();
    echo $pacient[$i]->doctorAndPacient($pacient[$i]->getMoney(), $pacient[$i]->getDiagnoz()->getPriceDiagnoz(), $doctors[rand(0, count($doctors)-1)]) ;
    echo '<br><br><br><br>';
}

for ($i = 0; $i < count($masMedical); $i++){
    if ($doctors->getNumberPalate() == 4){
        echo 'В палате 4 - '.$pacient[$i]->show();
        echo 'В палате 4 - '.$doctors[$i]->show();
    }
    if ($pacient->getNumberPalate() == 4){

    }
}
//$ins = $pacient[0]->getDiagnoz()->getPriceDiagnoz();
//$ids = 0;
//
//for ($i = 0; $i < count($pacient); $i++){
//    if ($pacient[$i]->getDiagnoz()->getPriceDiagnoz() > $ins){
//        $ins = $pacient[$i]->getDiagnoz()->getPriceDiagnoz();
//        $ids = $i;
//    }
//}
//echo 'Самый дорогой диагноз - '.$pacient[$ids]->show();


?>
</body>
</html>