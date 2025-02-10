<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="Gabriel Mockers, Gabriel, Mockers, Porfolio, Gmockers, alternance">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>
    <?php if (isset($title)) : ?>
        <?= $title ?>
    <?php else : ?>
        Mon site
    <?php endif ?>
    </title>
</head>
<body>
    <header>
        <div class="title">
            <p> <strong>MOCKERS Gabriel</strong></p>
            <p><em>Recherche d'alternance</em></p>
        </div>
        <div class="header-btn">
            <button>
                <a href="https://github.com/gabriel-mockers-nws">
                Github
                </a>
            </button>
        </div>
    </header>
    <main>
