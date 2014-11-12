<?php
    // connect to mongodb
   $m = new MongoClient();
   //echo "Connection to database successfully\n";
   // select a database
   $db = $m->mybiblio;
   //echo "Database mybiblio selected\n";
   //$collection = $db->createCollection("books");
   //echo "Collection created succsessfully\n";
   $collection = $db->books;
   //echo "Collection selected succsessfully\n";
   
   $titulo = $_POST['titulo'];
   $descricao = $_POST['descricao'];
   
   $document = array( 
      "titulo" => "$titulo", 
      "descricao" => "$descricao"
   );
   
   $insert = $collection->insert($document);
   
   if($insert)
		echo 'Success';
	else
		echo 'Fail';
		
	header('Location: index.php'); 
	 
?>