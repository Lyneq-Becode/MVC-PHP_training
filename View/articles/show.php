<?php require 'View/includes/header.php'?>

<?php $articles = (new DatabaseController())->requestAllArticles();  ?>

<section class="container">

    <article class="article">
        <h1 class="article-title"><?= $article->title ?></h1>
        <p class="article-date"> Published on: <?= $article->formatPublishDate() ?></p>
        <p class="article-description"><?= $article->description ?></p>

        <div class="article-Links">
            <?php if ($article->id > 1) : ?>
                <a href="index.php?page=articles-show&id=<?= $article->id - 1 ?>" class="pagination">Previous article</a>
            <?php else: ?>
                <a  class="pagination disabled">Next article</a>
            <?php endif; ?>


            <?php if ($article->id < count($articles)) : ?>
                <a href="index.php?page=articles-show&id=<?= $article->id + 1 ?>" class="pagination">Next article</a>
            <?php else: ?>
                <a style="cursor: not-allowed" class="pagination disabled">Next article</a>
            <?php endif; ?>
<!--            <a href="" class="pagination">Previous article</a>-->
<!--            <a href="#" class="pagination">Next article</a>-->
        </div>

    </article>

</section>

<?php require 'View/includes/footer.php'?>