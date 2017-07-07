<?php
/*
* actualDate - возвращает актуальные даты из списка дат
* @param date {string} delimited - список дат в формате dd.mm.yy
* @param offset {integer} - количество дней от сегодняшней даты, определяющее актуальность даты
* @return {string} delimited
* Пример: [[actualDate? &date=`01.07.17, 05.07.17` &offset=`1`]] - вернет все даты позже или равной завтрашней дате
*/


$date=isset($date)?$date:'';
$offset=isset($offset)?$offset:0;

$actualDate=array();
$nowTime=mktime(0,0,0)+$offset*86400;


if($date){
    $dateArr=explode(',', $date);
    
    foreach($dateArr as $key => $value) {
        $dateArr[$key] = trim($dateArr[$key]);
        if(preg_match('/(\d\d)\.(\d\d).(\d\d)/', $dateArr[$key], $matches)==1){
            if($nowTime<=mktime(0,0,0,$matches[2],$matches[1],$matches[3])){
                $actualDate[]=$dateArr[$key];
            }
            
        }
    }
    
}


return join(', ',$actualDate);
