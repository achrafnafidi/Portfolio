<?php

try {
  				  $db = new PDO('mysql:host=localhost;dbname=projets','root','') ; //array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // ajout du parametre ERRMODE

   				  $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

   
    
			} catch(Exception $e){

   		 die('ERROR :'.$e->getMessage());
    
			}

?>