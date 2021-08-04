<?php

namespace App\RealExample;

use App\RealExample\ArticleTemplateInterface;

class BootstrapArticle implements ArticleTemplateInterface
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
        return "<h1 class=\"display-6\">$this->title</h1>";
    }

    public function renderMetadata(): string
    {
        return "<p><small>Author: ".$this->metadata['author']."|". $this->metadata['created']."</small></p>";
    }

    public function renderPicture(): string
    {
        return "<img src=\"$this->picture\" alt=\"$this->picture\"  class=\"rounded float-start\">";
    }

    public function renderContent(): string
    {
        return $this->articleContent;
    }

    public function renderArticle()
    {
        return "<article> Boostrap " . $this->renderTitle() . $this->renderMetadata() . $this->renderPicture() . $this->renderContent() . "</article>";
    }
}
