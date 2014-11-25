<?php
	
	include_once('header.inc');
?>
  <article class="content">
    <h1>Cadastrar novo post</h1>
    <section>
    	<form id="contactform" class="rounded" method="post" action="resconsulta.php">
             
            <div class="field">
                <label for="assunto">Assunto:</label>
                <input type="text" class="input" name="assunto" id="assunto" />
                <p class="hint">Assunto Procurado.</p>
            </div>
             
            <input type="submit" name="buscar"  class="button" value="Buscar" />
        </form>
     
    </section>
  <!-- end .content --></article>
<?php
	include_once('footer.inc');
?>