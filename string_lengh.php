<?php
   function string_length($string){
   	$index = 0;
   	while(@$string[$index] != null){
   		$index++;
   	}
   	$length = $index;
   	return $length;
   }


   echo string_length("123");