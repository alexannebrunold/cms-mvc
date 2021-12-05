<?php


class ArticleEntity
{
    private $id;
    private $title;
    private $published_date;
    // NOTE: rename me to author_id ?
    private $user_id;
    private $image;
    private $content;


    public function getId()
    {
        return $this->id;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setUserId(string $user_id)
    {
        $this->user_id = $user_id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }


    public function getDate()
    {
        return $this->published_date;
    }


    public function getArticle()
    {
        $article['post_title'] = $this->title;
        $article['article_image'] = $this->image;
        $article['user_id'] = $this->user_id;
        $article['article_content'] = $this->content;
        $article['article_published_date'] = $this->published_date;

        return $article;
    }
}
