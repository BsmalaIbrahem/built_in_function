<?php
    function isNull($string){
    	if($string === "")
    		return true;
    	if($string === false)
    		return true;
    	if($string === 0)
    		return true;
    	if($string === [])
    	return false;
    }

    echo isNull(0);