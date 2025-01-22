<?php

class DatabaseController
{


    private PDO $PDO;

    function __construct()
    {
        // README: Yeah i know this is not a good practice to hardcode the database credentials, but for the sake of simplicity i will leave it like this.
        $this->PDO = new PDO('mysql:host=localhost;dbname=mvc_database', 'user', 'password');
    }

    public function requestAllArticles(): array
    {

        $request = $this->PDO->query('SELECT * FROM articles');
        return $request->fetchAll();
    }


    public function requestArticleById(string $id): array
    {
        $stmt = $this->PDO->prepare('SELECT * FROM articles WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        var_dump($stmt->fetch());
        return $stmt->fetch();
    }
}