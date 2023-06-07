<?php
  function Round_($number){
  	if($number >= (int)$number+.5)
  		echo (int)$number +1;
  	else
  		echo (int) $number;
  }

  Round_(1000.53);