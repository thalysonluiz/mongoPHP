<?php

	include_once('header.inc');
?>
  <article class="content">
    <h1>Cadastrar novo post</h1>
    <section>
    	<form id="contactform" class="rounded" method="post" action="receiver.php">
             
            <div class="field">
                <label for="titulo">Título:</label>
                <input type="text" class="input" name="titulo" id="titulo" />
                <p class="hint">Título do Livro.</p>
            </div>
                          
            <div class="field">
                <label for="descricao">Descrição:</label>
                <textarea class="input textarea" name="descricao" id="descricao"></textarea>
                <p class="hint">Descrição do Livro.</p>
            </div>
             
            <input type="submit" name="cadastrar"  class="button" value="Cadastrar" />
        </form>
     
    </section>
  <!-- end .content --></article>
<?php
	include_once('footer.inc');
?>