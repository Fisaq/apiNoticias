# Projeto - Portal de Notícias

### Autor: Isaque Ferreira de Paula Reis

Neste projeto eu desenvolvi uma aplicação que replica um portal de notícias, possibilitando que o usuário pesquise alguma notícia em específico nos principais portais internacionais. Também é possível ver as últimas notícias do mundo, seu título, descrição e o link para a notícia no portal oficial.

## Descrição do Projeto

Este projeto foi desenvolvido utilizando a linguagem **PHP** e a biblioteca **CURL**, que possibilita a requisição e manipulação de dados de uma API. Neste projeto eu utilizei a NEWS API, cuja a documentação pode ser acessada [aqui](https://newsapi.org/).

## Como foi feito?

A implementação do código foi separada em arquivos de acordo com cada funcionalidade, visando facilitar a organização e mautenção do código.

### dados.php

No arquivo *dados.php* foi implementado a requisição dos dados na api utilizando a biblioteca CURL. O retorno da api é armazenado em um array com as chaves a serem utilizadas no front-end (template.php). Após a extração e armazenamento, o array é exportado para ser acessado por outros arquivos.

### template.php

No arquivo *template.php* foi implementada toda a interface do site, que exibe os dados do array resultante do retorno da api.

### busca.php

No arquivo *busca.php* foi implementado a lógica de pesquisa do site. O usuário faz uma pesquisa na barra e chama o arquivo "busca.php", que verifica se o termo inserido pelo usuário consta no título, descriçãoo ou no nome do jornal das noticias retornadas pela API.

### style.css

O arquivo *style.php* é necessário para estilizar o arquivo "template.php" deixando a página web com uma estética mais agradável.

### index.php

É o arquivo principal que é chamado quando o script é executado,. Basicamente chama os arquivos "dados.php" e "template.php", que serão executados.
