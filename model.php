<?php
function model($kek){//коннеткимся к ДБ с параметрами полученными через контроллер например ВЫБРАТЬ ИМЯ ИЗ ЮЗЕРОВ КОГДА ИД=ИД
$keke="Your query was ";
$kekes=" and it is ";
$keks="!DYNAMIC ANSWER FROM DB FILTRED BY YOUR CONTROLLER PARAMETRES TO MODEL!";
$allkeks=$keke;
$allkeks.= $kek;
$allkeks.=$kekes;
$allkeks.=$keks;
return $allkeks; //1 это ответ  ответ ДБ с тем что нужно пользоваетлю через контроллер
}
?>