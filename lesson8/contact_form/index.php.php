<?php
  include_once 'functions.inc.php';
   
   $error_flag = 0;
 
  //Note use of isset � Determines if a variable is set and is not NULL
  if(!isset($_POST['firstname']))
  {
    
    include 'contact.html.php';
  
  
  }
  else
  {
   $recordData['firstname'] = $_POST['firstname'];
   $recordData['lastname'] = $lastname = $_POST['lastname'];
   $recordData['email'] = $_POST['email'];
   $recordData['username'] = $_POST['username'];
   $recordData['password1'] = $_POST['password1'];
   $recordData['dateRecorded'] = time();
   $password2 = $_POST['password2'];
   //$recordData['tel_no'] = $_POST['tel_no'];
   
   $email_regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
   $password_regexp = "/[0-9]/";
   //Create variables
   //Uppercase letters
   //Create associative array for outputting errors
   if(!$recordData['firstname'])
   {
   
    $errors['firstname'] = "First name is required!";
    //echo $errors['firstname'];
    $error_flag++;
   }
   
   if(!$lastname)
   {
    $errors['lastname'] = "Last name is required!";
    //echo "Last name is required!";
	$error_flag++;
    
   }
   
   if($email_flag = checkemail($recordData['email']))
   {
    $errors['email'] = "Please provide valid email address";
    $error_flag++;
   
   
   }
   
   
   
   
   if($recordData['password1'] && $password2)
	   if (strcmp($recordData['password1'],$password2) == 0) {
	    if(!preg_match($password_regexp, $recordData['password1'])  )
		{
		 $errors['password'] = "Password requires at least one digit!";
		 //echo "Password must contain at least one digit.";
		 $error_flag++;
		}
		
	   
	   }
	   else
	   {
		$errors['password'] = "Passwords do not match!";
		$error_flag++;
	   }
	else
	{
	 $errors['password'] = "Please enter password!";
	 $error_flag++;
	
	}
	
	if(!$recordData['username'] || strlen($recordData['username']) < 6)
	{
	 $errors['username'] = "User name must be six characters or more";
	 $error_flag++;
	 //echo "Username must be six or more characters";  
	
	}
	
	if($error_flag)
	{
	 include 'errors.html.php';
	
	}
	else
	{
	 $recordData['firstname'] = ucfirst($recordData['firstname']);
	 $recordData['lastname'] = ucfirst($recordData['lastname']);
	 //$recordData[] = $firstname
	 
	 //var_dump($recordData);
	 foreach($recordData as $row)
	 {
	  echo $row . "<br>";
	 
	 }
	
	}
  
 

}

?>