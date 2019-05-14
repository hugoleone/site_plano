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
include 'views/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'home':
		include 'views/home.php';
		break;

	case 'plano':
		include 'views/home.php';
		break;

	case 'sugestao':
		include 'views/sugestao.php';
		break;	

	case 'video':
		include 'views/video.php';
		break;

	case 'indicadores':
		include 'views/indicadores.php';
		break;
	
	case 'resultados':
		include 'views/resultados.php';
		break;		

	default:
		include 'views/home.php';
		break;			
}

/* Carrega o footer.php */
include 'views/footer.php';