<?php

/*
Site:Plano Estadual de Segurança Pública do Amazonas
Autor: DST
Data: 06/05/2019
*/

/* Define a página atual pela URL */
$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'home':
		include 'home.php';
		break;

	case 'plano':
		include 'home.php';
		break;

	case 'sugestao':
		include 'sugestao.php';
		break;	

	case 'video':
		include 'video.php';
		break;

	case 'indicadores':
		include 'indicadores.php';
		break;
	
	case 'resultados':
		include 'resultados.php';
		break;		

	default:
		include 'home.php';
		break;			
}

/* Carrega o footer.php */
include 'footer.php';