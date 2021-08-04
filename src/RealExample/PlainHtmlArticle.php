<?php

namespace App\RealExample;

use App\RealExample\ArticleTemplateInterface;

class PlainHtmlArticle implements ArticleTemplateInterface
{
    private string $title;
    private array $metadata;
    private string $picture;
    private string $articleContent;


    public function __construct(string $title, array $metadata, string $picture, string $articleContent)
    {
        $this->title = $title;
        $this->metadata = $metadata;
        $this->picture = $picture;
        $this->articleContent = $articleContent;
    }

    public function renderTitle(): string
    {
        return "<h3>" . $this->title . "</h3>";
    }

    public function renderMetadata(): string
    {
//        return "<p class=\"uk-article-meta\">Author: ". $this->metadata['author']." | Created: ".$this->metadata['created']."</p>";
        return "<p><small>Author: ".$this->metadata['author']."|". $this->metadata['created']."</small></p>";
    }

    public function renderPicture(): string
    {
        return "<img src=\"$this->picture\" alt=\"$this->picture\">";
    }

    public function renderContent(): string
    {
        return $this->articleContent;
    }
    public function renderArticle(): string
    {
        return "<article> Plain HTML" . $this->renderTitle() . $this->renderMetadata() . $this->renderPicture() . $this->renderContent() . "</article>";
    }
}
