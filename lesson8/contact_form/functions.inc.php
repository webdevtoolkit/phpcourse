<?php

function checkEmail($e)
{
 $email_regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
 
 if(!preg_match($email_regexp, $e)  )
 {
	
	return TRUE;
 }
 else
  return FALSE;


}



?>