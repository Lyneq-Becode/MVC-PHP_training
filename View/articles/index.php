<?php require 'View/includes/header.php'?>

<section class="container">
    <h1>Articles</h1>
    <ul>
        <?php foreach ($articles as $article) : ?>
            <li>
                <a href="index.php?page=articles-show&id=<?= $article->id ?>"><?= $article->title ?></a>
                (<?= $article->formatPublishDate() ?>)
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require 'View/includes/footer.php'?>