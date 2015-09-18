<?php

   // connect to mongodb
   $m = new MongoClient("127.0.0.1");
   echo "Connection to database successfully";
   // select a database
   $db = $m->Hospital;
   echo "Database mydb selected";
   $collection = $db->Patient;
   echo "Collection selected succsessfully";
   $count=$collection->count();
   $count=$count+1;
   $document = array( 
      "P_id"=>$count,
      "Pfirst_name" => $_POST["Pfirst_name"], 
      "Plast_name" =>  $_POST["Plast_name"], 
      "Page" => $_POST["Page"],
      "Pmobile_no" => $_POST["Pmobile_no"],
      "Pemail" => $_POST["Pemail"],
      "Paddress" => $_POST["Paddress"],
      "Ppassword" => $_POST["Ppassword"]
		
   );

   $collection->insert($document);
   echo " Document inserted successfully";
?>
