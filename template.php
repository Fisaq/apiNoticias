<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isaque News</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-principal">
        <header>
            <img src="imgs/logo.png" alt="Logo">
            <h1>MELHOR INFORMADO EM <span>MINUTOS!</span></h1>
            <form action="pesquisa.php" method="GET">
                <input type="text" name="query" placeholder="Digite para pesquisar sobre algum tópico..." required>
                <button type="submit">Pesquisar</button>
            </form>
        </header>

        <h1>Últimas Notícias</h1>
        <?php if (!empty($listaNoticias)): ?>
            <?php foreach ($listaNoticias as $noticia): ?>
                <article class="noticia">
                    <h2><?= htmlspecialchars($noticia['titulo']) ?></h2>
                    <img src="<?= htmlspecialchars($noticia['imagem']) ?>" alt="Imagem da Notícia">
                    <p><strong>Fonte:</strong> <?= htmlspecialchars($noticia['nomeJornal']) ?></p>
                    <p><strong>Autor:</strong> <?= htmlspecialchars($noticia['autor']) ?></p>
                    <p><?= htmlspecialchars($noticia['descricao']) ?></p>
                    <a href="<?= htmlspecialchars($noticia['url']) ?>" target="_blank">Ver Notícia</a>
                    <hr>
                </article>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Não foi possível carregar as notícias no momento. Tente novamente mais tarde.</p>
        <?php endif; ?>
    </div>
</body>
</html>