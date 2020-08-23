<?php
	$http = 'http://';
	$urllocal = '/luma_JRF_site';
	$title = 'JRF - Site';

#Retorna a página
	$URL = str_replace($urllocal, '', $_SERVER['REQUEST_URI']);
	$geturl = explode('/', $URL);
	$params = count($geturl);
	$pagina = explode('?', $geturl[1]);
	$pagina = reset($pagina);
	$fileSys = 'index.php';

# carrega os estilos/scripts
	$home = false;
	$url_site = $http . $_SERVER['SERVER_NAME'] . $urllocal;
	
	switch ($pagina) {
		case '' :
		case 'home' :
			$file = 'page_home.php';
			$title_page = $title;
			$home = true;
			break;
			
		case 'componentslist':
			$file = 'page_components.php';
			$title_page = 'Components - '.$title;
			break;
		
		case 'institucional':
			$file = 'page_institucional.php';
			$title_page = 'Institucional - '.$title;
			break;

		case 'atendimento':
			$file = 'page_atendimento.php';
			$title_page = 'Atendimento - '.$title;
			break;

		case 'acompanhe':
			$file = 'page_acompanhe.php';
			$title_page = 'Acompanhe seu seguro - '.$title;
			break;

		case 'matriz':
			$file = 'page_matriz.php';
			$title_page = 'Matriz - '.$title;
			break;

		case 'servicos':
			$file = 'page_servicos.php';
			$title_page = 'Servicçs - '.$title;
			break;


		case 'grupo':
			$file = 'page_grupo.php';
			$title_page = 'Grupo - '.$title;
			break;
		
		default :
			header("HTTP/1.0 404 Not Found");
			$file = 'erro404.php';
			$title_page = 'Página não encontrada - '.$title;
			break;
	}

#Monta a base url
	$base_page = '<base href="' . $url_site . '/" />';
	include($fileSys);

?>