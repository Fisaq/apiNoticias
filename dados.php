<?php
    $curl = curl_init();
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $API_KEY = "4fb040a8851c4ec7b8d00f0e9f31ef07";
    $listaNoticias = [];
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://newsapi.org/v2/top-headlines?country=us&apiKey=$API_KEY",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array('User-Agent: ' . $userAgent),
    ));
    
    $resposta = curl_exec($curl);
    curl_close($curl);
    
    if ($resposta) {
        $dados = json_decode($resposta);
        foreach ($dados->articles as $noticia) {
            $listaNoticias[] = [
                "nomeJornal" => $noticia->source->name ?? 'Desconhecido',
                "autor" => $noticia->author ?? 'Não informado',
                "titulo" => $noticia->title ?? 'Sem título',
                "descricao" => $noticia->description ?? 'Sem descrição',
                "url" => $noticia->url ?? '#',
                "imagem" => $noticia->urlToImage ?? 'imgs/default.jpg',
                "dataPublicado" => $noticia->publishedAt ?? 'Sem data',
                "conteudo" => $noticia->content ?? 'Sem conteúdo',
            ];
        }
    }
?>