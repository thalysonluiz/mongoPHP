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

	include_once('header.inc');
	$id = $_GET['id']; 
?>
  <article class="content">
    <h1>Post</h1>
    <section>
    	<?php
			//$query = array('_id' => $id);
			//print_r($query);
			$cursor = $collection->findOne(array('_id' => new MongoId($id)));
			//$qtdeBooks = $cursor->count();
			//print_r($cursor);
			if($cursor){
				echo "<h4>".$cursor["titulo"]."</h4>";
				echo "<p>".$cursor["descricao"]."</p>";
				  
				echo '<a href="index.php">Voltar</a><hr />';
				echo '<a href="#">Comentários</a><hr />';
			   
			}
			else{
				echo "<p>Nenhum post cadastrado!</p>";
			}
		?>
     
    </section>
  <!-- end .content --></article>
<?php
	include_once('footer.inc');
?>