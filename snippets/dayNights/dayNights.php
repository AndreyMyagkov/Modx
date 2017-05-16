<?php
/**
* Возращает продолжительность тура в днях и ночах
* @param days {int} - продолжительность в днях или
* @param nights {int} - продолжительность в ночах
* @param daysWords {string} - варианты написания дней для количества 1, 2 и 5
* @param nightsWords {string} - варианты написания ночей для количества 1, 2 и 5
* @param separator {string} - разделитель между днями и ночами
* Требует наличия снипета declension
* Пример [[dayNights? &days=`5` &daysWords=`день,дня,дней` &nightsWords=`ночь,ночи,ночей` &separator=` / `]]  => 5 дней / 4 ночи
*/
	
$separator=isset($separator)?$separator:' / ';	
$daysWords=isset($daysWords)?$daysWords:'день,дня,дней';
$nightsWords=isset($nightsWords)?$nightsWords:'ночь,ночи,ночей';

$ret='';
if (isset($days)||isset($nights)){

	if(isset($days)) {
		settype($days, 'integer');
		$nights=$days-1;
		
	} else {
		settype($nights, 'integer');
		$days=$nights+1;
	    
	}
	
	$ret= $days.' '.$modx->runSnippet('declension',   array( 'num' => $days, 'words'=>$daysWords));
	if ($nights>0){
	    $ret.=$separator.$nights.' '.$modx->runSnippet('declension',   array( 'num' => $nights, 'words'=>$nightsWords));
	    
	}

	return $ret;
}