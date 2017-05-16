<?php
/**
* monthToPeriods
*
* Сниппет преобразует список месяцев в периоды
*
* @category Helpers
* @version 1.0
* @author: Andrey Myagkov <andreyoren@gmail.com>
*
* @param $month {string} - список месяцев
* @param $shortly {boolean} - объединяет периоды, попадающие на новый год
* @return string
*
* Пример:
* [[monthToPeriods? &month=`1,2,3,7,11,12`]]
* январь — март, июль, ноябрь — декабрь
*
* [[monthToPeriods? &month=`1,2,3,7,11,12` &shortly=`1`]]
* ноябрь — март, июль
*/


$month=array_map('intval', explode(',', $month));

$shortly=(isset($shortly))?$shortly:0;


$m=array('','январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь');
$output='';

sort($month);

if($shortly && in_array(1, $month) && in_array(12, $month)){
    
    for($i=count($month)-1; $i>=0; $i--) {
        if (isset($month[$i-1]) && (($month[$i]-1)!==$month[$i-1])){
            $month=array_merge(array_slice ($month, $i), array_splice($month,0,$i));
            
            break;
        }
    }
    
}

if(!function_exists('getSeparator')){
    function getSeparator($arr, $k){
        if( !isset($arr[$k+1]) ) { return;}
        if( (($arr[$k]+1)==$arr[$k+1]) || (($arr[$k]+1)==$arr[$k+1]+12) ) {
            return ' — ';
            
        } else {
            return ', ';
        }
    }
}

foreach($month as $k=>$v){

    if($k==0){
        $output.=$m[$v].getSeparator($month, $k);
        continue;
    }
    if (isset($month[$k+1]) && ( (($month[$k]+1)==$month[$k+1]) || ( ($month[$k]+1)==$month[$k+1]+12 ) )   ){
         if (isset($month[$k-1]) && ( (($month[$k]-1)!==$month[$k-1]) && ( ($month[$k]+11)!==$month[$k-1])  ) ){
            $output.=$m[$v].getSeparator($month, $k); 
         }
    } else {
        $output.=$m[$v].getSeparator($month, $k);
    }
    
}



return $output;
?>