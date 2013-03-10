<?php

//get_date_spanish(time(), true, 'month'); # return Enero
//get_date_spanish(time(), true, 'month_mini'); # return ENE
//get_date_spanish(time(), true, 'Y'); # return 2007
//get_date_spanish(time());#return 06 de septiempre, 12:31 hs

function get_date_spanish( $time, $part = false, $formatDate = '' ){
	#Declare n compatible arrays
	$month = array("","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiempre", "Octubre", "Noviembre", "Diciembre");#n
	$month_execute = "n"; #format for array month

	$month_mini = array("","ENE", "FEB", "MAR", "ABR", "MAY", "JUN", "JUL", "AGO", "SEP", "DIC");#n
	$month_mini_execute = "n"; #format for array month

	$day = array("domingo","lunes","martes","miércoles","jueves","viernes","sábado"); #w
	$day_execute = "w";

	$day_mini 	= array("DOM","LUN","MAR","MIE","JUE","VIE","SAB"); #w
	$day_mini_execute = "w";

	/*
	 Other examples:
	Whether it's a leap year
	$leapyear = array("Este año febrero tendrá 28 días"."Si, estamos en un año bisiesto, un día más para trabajar!"); #l
	$leapyear_execute = "L";
	*/

	#Content array exception print "HOY", position content the name array. Duplicate value and key for optimization in comparative
	$print_hoy = array("month"=>"month", "month_mini"=>"month_mini");

	if( $part === false ){
	return date("d", $time) . " de " . $month[date("n",$time)] . ", ". date("H:i",$time) ." hs";
	}elseif( $part === true ){
	//if( ! empty( $print_hoy[$formatDate] ) && date("d-m-Y", $time ) == date("d-m-Y") ) return "HOY"; #Exception HOY
	if( ! empty( ${$formatDate} ) && !empty( ${$formatDate}[date(${$formatDate.'_execute'},$time)] ) ) return ${$formatDate}[date(${$formatDate.'_execute'},$time)];
		else return date($formatDate, $time);
	}
	else{
		return date("d-m-Y H:i", $time);
	}
}
?>