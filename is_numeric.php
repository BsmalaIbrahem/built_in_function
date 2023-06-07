<?php
  function IsNumber($number){

  	$flag = 1;

  	if($number == 0 && $number !== 0)
  		$flag = 0;

  	if($number === 0 || $number === "0" )
  		$flag = 1;

  	if($number === true)
  		return 0;

  	if($number != (string)(float)$number)
  		return 0;

  	return $flag;
  	
  }


  echo IsNumber("eh");