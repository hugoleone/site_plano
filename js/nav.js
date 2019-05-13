function mostrarAtivo(tag){
	var tag_li = document.getElementById('lista_menu');
	var tag_a = tag_li.getElementsByTagName('a');
		for (i=0; i<tag_a.length; i++ ){
		tag_a[i].style.backgroundColor = "";
		tag_a[i].style.color = "";
	}
	tag.style.backgroundColor = "#fff"; // altera o fundo
	tag.style.color = "#008506"; // altera a cor
	tag.style.border = "1px solid #008506"; // insere uma borda
    tag.style.borderRadius = "5px"; // adiciona borda arredondada
}