<?php
  function string_to_array($string){
  	$index = 0;
  	$array = [];
  	while(@$string[$index] != null){
  		$array[$index] = $string[$index];
  		$index++;
  	}
  	return $array;

  }
  $a = string_to_array("hello world");
  