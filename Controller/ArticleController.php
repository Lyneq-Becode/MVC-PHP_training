<?php

declare(strict_types = 1);

class ArticleController
{

    private $publish_date;

    public function index(): void
    {
        // Load all required data
        $articles = $this->getArticles();

        // Load the view
        require 'View/articles/index.php';
    }

    // Note: this function can also be used in a repository - the choice is yours
    private function getArticles(): array
    {
        // TODO: prepare the database connection
        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        // TODO: fetch all articles as $rawArticles (as a simple array)

        $databaseController = new DatabaseController();
        $rawArticles = $databaseController->requestAllArticles();

        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['id'],$rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
        }

        return $articles;
    }
    public function getArticleByID(string $id): ?Article
{
    // Load all required data
    $articles = $this->getArticles();

    // Find the article by ID
    foreach ($articles as $article) {
        if ($article->id == $id) {
            return $article;
        }
    }

    return null;
}

    public function show(string $id): void
{
    // Load all required data
    $article = $this->getArticleByID($id);

    // Load the view
    require 'View/articles/show.php';
}

}