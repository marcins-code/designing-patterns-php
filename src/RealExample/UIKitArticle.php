<?php

namespace App\RealExample;

class UIKitArticle implements ArticleTemplateInterface
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
        return "<h1 class=\"uk-heading-medium\">$this->title</h1>";
    }

    public function renderMetadata(): string
    {
        return "<p class=\"uk-article-meta\">Author: ". $this->metadata['author']." | Created: ".$this->metadata['created']."</p>";
//        return $this->metadata['author'];
    }

    public function renderPicture(): string
    {
        return "<img src=\"$this->picture\" alt=\"$this->picture\"  class=\"uk-flex uk-flex-left\">";
    }

    public function renderContent(): string
    {
        return $this->articleContent;
    }

    public function renderArticle(): string
    {
        return "<article>UIKIT" . $this->renderTitle() . $this->renderMetadata() . $this->renderPicture() . $this->renderContent() . "</article>";
    }

}
