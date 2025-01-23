<?php

declare(strict_types=1);

class Article
{
    public int $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;
    public ?string $author;

    public function __construct(int $id, string $title, ?string $description, ?string $publishDate, ?string $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
        $this->author = $author;
    }

    public function formatPublishDate($format = 'Y-d-m h:i'): string
    {
        return date($format, strtotime($this->publishDate));
    }

    public function render(): void
    {
        require 'View/includes/article.php';
    }
}