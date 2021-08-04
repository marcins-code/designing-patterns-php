<?php

namespace App\RealExample;

abstract class ArticleCreator
{
    abstract public function getArticleTemplate(): ArticleTemplateInterface;

    public function createArticle():string
    {
        $article = $this->getArticleTemplate();
        return $article->renderArticle();
    }
}
