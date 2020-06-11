<?php
/**
* declension
*
* Склонение окончания после числительных
*
* @category    snippet
* @version     1.0
* @license     http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
* @internal    @properties
* @internal    @modx_category Helpers
* @internal    @installset base
* @reportissues https://github.com/AndreyMyagkov/Modx/tree/master/snippets/declension
* @author      Created By AndreyMyagkov
* @lastupdate  16/05/2017
*/

/**
* Склонение окончания после числительных
* @param num {int} - числительное
* @param words {string} - варианты написания для количества 1, 2 и 5
* @return string
* Пример
* [[declension? &num=`5` &words=`день,дня,дней`]]
* 5 дней
*/


if(isset($num) && isset($words)){
    
	$count = $num % 100;
	$words=explode(',',$words);
	
	if ($count >= 5 && $count <= 20) {
		return  $words['2'];
	} else {
		$count = $count % 10;
		if ($count == 1) {
			return $words['0'];
		} else if ($count >= 2 && $count <= 4) {
			return  $words['1'];
		} else {
			return  $words['2'];
		}
	}

}
