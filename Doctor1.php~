<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
   // select a database
   $db = $m->Hospital;
   echo "Database mydb selected";
   $collection = $db->Doctor;
   echo "Collection selected succsessfully";
   $count=$collection->count();
   $count=$count+1;
   $document = array( 
      "Dr_id"=>$count,
      "Drfirst_name" => $_POST["Drfirst_name"], 
      "Drlast_name" =>  $_POST["Drlast_name"], 
      "Drage" => $_POST["Drage"],
      "Drqualification" => $_POST["Drqualification"],
      "Drmobile_no" => $_POST["Drmobile_no"],
      "Dremail" => $_POST["Dremail"],
      "Draddress" => $_POST["Draddress"],
      "Drpassword" => $_POST["Drpassword"]
		
   );

   $collection->insert($document);
   echo " Document inserted successfully";
?>
