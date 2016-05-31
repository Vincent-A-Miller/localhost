<?php
   $hostName = "localhost";
   $databaseName = "stream";
   $username = "spy";
   $password = "snoopdogg";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
