<?php
  function string_repeat($string, $repeating_number, $separator){
        for ($i=0; $i < $repeating_number ; $i++) { 
            echo $string . "$separator";
        }
    }
    string_repeat("hello world",4,"*");