<?php

namespace App\RealExample;

class ArticleTypesCreator extends ArticleCreator
{
    private string $title;
    private array $metadata;
    private string $picture;
    private string $articleContent;
    private string|bool $type;


    public function __construct(string $title, array $metadata, string $picture, string $articleContent, string $type)

    {
        $this->title = $title;
        $this->metadata = $metadata;
        $this->picture = $picture;
        $this->articleContent = $articleContent;
        $this->type = $type;
    }

    public function getArticleTemplate(): ArticleTemplateInterface
    {
        if ($this->type === 'bootstrap') {
            return new BootstrapArticle($this->title, $this->metadata, $this->picture, $this->articleContent);
        } else if ($this->type === 'uikit') {
            return new UIKitArticle($this->title, $this->metadata, $this->picture, $this->articleContent);
        } else {
            return new PlainHtmlArticle($this->title, $this->metadata, $this->picture, $this->articleContent);
        }
    }
}
