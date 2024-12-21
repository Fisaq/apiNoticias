<?php
	$dados = include 'dados.php';
	
	// Garante que $dados seja sempre um array
	$dados = is_array($dados) ? $dados : [];
	
	// Captura o termo de pesquisa (se houver)
	$pesquisa = $_GET['pesquisa'] ?? '';
	
	// Filtra os dados apenas se houver uma pesquisa
	$noticiasExibidas = array_filter($dados, function ($noticia) use ($pesquisa) {
	    return stripos($noticia['titulo'], $pesquisa) !== false || 
	           stripos($noticia['descricao'], $pesquisa) !== false || 
	           stripos($noticia['nomeJornal'], $pesquisa) !== false;
	});
	
	include 'template.php';
?>
