<?php
  include "string_lengh.php";
  function string_reverse($string){
  	$length = string_length($string);
  	$index = $length - 1;
  	$string_reverse = "";
  	while($index >= 0){
  		$string_reverse .= $string[$index];
  		$index--;
  	}
  	return $string_reverse;

  }
  echo string_reverse("bosi");
