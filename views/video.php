<div id="menu">
	<div class="navbar-header">
		<button type="button" style="margin-top: 25px" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_lista" aria-expanded="false">
			<span style="background-color: #9bbd46" class="icon-bar"></span>
			<span style="background-color: #9bbd46" class="icon-bar"></span>
			<span style="background-color: #9bbd46" class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse" id="menu_lista">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="?i=plano"><img src="../img/botao1.jpg"></a></li>
			<li><a href="?i=sugestao"><img src="../img/botao2.jpg"></a></li>
			<li><a href="?i=video"><img src="../img/botao3.1.jpg"></a></li>
			<li><a href="?i=indicadores"><img src="../img/botao4.jpg"></a></li>
			<li><a href="?i=resultados"><img src="../img/botao5.jpg"></a></li>	
		</ul>
	</div>	
	<div id="pesquisar">
		<input type="text" placeholder="O que você procura?" />
		<i class="fa fa-search"></i>
	</div>	
</div>

<div id="middle">
    <form>
        <h2>ENVIE SEU VÍDEO</h2>
        <p class="posicao">Ajude a contruir o plano estadual de Segurança Pública</p>
    	<fieldset class="grupo">
    	    <div class="campo">
    	        <label for="nome">NOME *</label>
    	        <input type="text" id="nome" name="nome" style="width: 80em" value="" />
    	    </div>
    	</fieldset> 

    	<div class="campo">
    	    <label for="email">E-MAIL *</label>
    	    <input type="email" id="email" name="email" style="width: 40em" value="" />
    	</div>

    	<div class="campo">
    	    <label for="telefone">TELEFONE *</label>
    	    <input type="text" id="telefone" name="telefone" style="width: 40em"  value="" />
    	</div>

    	<fieldset class="grupo">
    	    <div class="campo">
    	        <label for="cidade">CIDADE *</label>
    	        <input type="text" id="cidade" name="cidade" style="width: 40em" value="" />
    	    </div>
    	</fieldset>

        <button id="botao">CARREGAR VÍDEO</button>

        <div class="campo">
            <label id="termos" class="campo">TERMOS DE USO *</label>
            <label class="campo">
                <input type="checkbox" name="newsletter" value="1"> Li e concordo com os <a href="#">Termos de uso.</a>
            </label>
        </div>
    </form>

    <div id="enviar">
      <input type="submit" name="botao" value="ENVIAR MEU VÍDEO" class="botaoEnviar" />
   </div>
</div>