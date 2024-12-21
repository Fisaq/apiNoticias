<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isaque News</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="imgs/logo_titulo.png"/>
</head>
<body>

    <header>
        <div class="logo">
            <img src="imgs/logo.png" alt="Logo">
        </div>
        <div class="barra-pesquisa">
            <form action="pesquisa.php" method="GET">
                <input type="text" name="pesquisa" placeholder="Digite para pesquisar..." required>
                <button type="submit">🔍</button>
            </form>
        </div>
    </header>

    <div class="banner">
        MELHOR INFORMADO EM <span>MINUTOS!</span>
    </div>

    <section class="secao-noticias">
        <h2><?= htmlspecialchars($tituloSecao ?? 'ÚLTIMAS NOTÍCIAS') ?></h2>
        <div class="card-noticias">
            <?php if (!empty($noticiasExibidas)): ?>
                <?php foreach ($noticiasExibidas as $noticia): ?>
                    <article class="noticia">
                        <h3><?= htmlspecialchars($noticia['titulo'] ?? 'Sem título') ?></h3>
                        <img src="<?= htmlspecialchars($noticia['imagem'] ?? 'imgs/default.jpg') ?>" alt="Imagem da Notícia">
                        <p><strong>Fonte:</strong> <?= htmlspecialchars($noticia['nomeJornal'] ?? 'Desconhecido') ?></p>
                        <p><strong>Autor:</strong> <?= htmlspecialchars($noticia['autor'] ?? 'Não informado') ?></p>
                        <p><?= htmlspecialchars($noticia['descricao'] ?? 'Sem descrição') ?></p>
                        <a href="<?= htmlspecialchars($noticia['url'] ?? '#') ?>" target="_blank">Ver Notícia</a>
                        <hr>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>
