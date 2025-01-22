<?php require 'View/includes/header.php'?>

<?php
$articles = (new DatabaseController())->requestAllArticles();

$articlesZero = $articles[0];
$articlesOne = $articles[1];
?>

<section class="container">
    <h1>Welcome to BeCode</h1>
    <p>This is the home page of the MVC project.</p>
    <div class="article">
        <h2 class="article-title"><?= $articlesZero["title"] ?></h2>
        <p class="article-description"><?= $articlesZero["description"] ?></p>
        <p class="article-date">Published on: <?= date('F j, Y', strtotime($articlesZero["publish_date"])) ?></p>
    </div>

    <div class="article">
        <h2 class="article-title"><?= $articlesOne["title"] ?></h2>
        <p class="article-description"><?= $articlesOne["description"] ?></p>
        <p class="article-date">Published on: <?= date('F j, Y', strtotime($articlesOne["publish_date"])) ?></p>
    </div>
</section>

<?php require 'View/includes/footer.php'?>