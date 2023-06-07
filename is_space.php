<?php 
  function Is_space($string){
  	$index = 0;
  	while(@$string[$index] != null){
  		if($string[$index] != " ")
  			return 0;
  		$index++;
  	}
  	if($string == null)
  		return 0;

  	return true;
  }

  echo Is_space("   ");