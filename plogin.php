<?php

ini_set('display_errors',1);
session_start();
$_SESSION["user"]=$_POST["P_id"];

#Configure Mongodb
$connection = new MongoClient("127.0.0.1");
$db=$connection->Hospital;
$collection=$db->Patient;
$collection1=$db->Doctor;


$drpassword=$_POST["Drpassword"];
$drid=$_POST["Dr_id"];

$ppassword=$_POST["Ppassword"];
$pid=$_POST["P_id"];

if (isset($_POST['P_id']))    
{    
          // Instructions if $_POST['P_id'] exist   
echo"IT does<br>"; 
}  
if (isset($_POST['Ppassword']))    
{    
          // Instructions if $_POST['Ppassword'] exist   
echo"IT does"; 
} 


if (isset($_POST['Dr_id']))    
{    
          // Instructions if $_POST['P_id'] exist   
echo"Dr cha pan ahe<br>"; 
}  
if (isset($_POST['Drpassword']))    
{    
          // Instructions if $_POST['Ppassword'] exist   
echo"Dr cha pan ahe"; 
} 


#To check if pid present or not
$search=$collection->find();
foreach ($search as $document) 
{
	if($document["P_id"]==$pid)
		{
			#To check pwd with pid
			$login_search=$collection->find();
			foreach ($login_search as $login_document) 
			{
				if($login_document["Ppassword"]==$ppassword)
				{
					echo "Login Successful<br>";
				}	
				else
				{echo "login failed<br>";}
			}
			
		}	
}

$search=$collection1->find();
foreach ($search as $document) 
{
	if($document["Dr_id"]==$drid)
		{
			#To check pwd with pid
			$login_search=$collection->find();
			foreach ($login_search as $login_document) 
			{
				if($login_document["Drpassword"]==$drpassword)
				{
					echo "Login Successful<br>";
				}	
				else
				{echo "login failed<br>";}
			}
			
		}	
}


?>
