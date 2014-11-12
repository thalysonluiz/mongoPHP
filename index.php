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
?>
  <article class="content">
    <h1>Últimos Posts</h1>
    <section>
    	<?php
			$cursor = $collection->find();
			$qtdeBooks = $cursor->count();
			
			if($qtdeBooks > 0){
			   // iterate cursor to display title of documents
			   foreach ($cursor as $document) {
				  echo "<h4>".$document["titulo"]."</h4>";
				  echo "<p>".$document["descricao"]."</p><hr />";
			   }
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