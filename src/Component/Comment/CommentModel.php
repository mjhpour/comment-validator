<?php

namespace FaraketTestProj\Component\Comment;

class CommentModel implements ICommentModel
{
    /**
     * @var string
     */
    private $text;
    
    /**
     * @var string
     */
    private $author;

    public function setText(string $text) : ICommentModel
    {
        $this->text = $text;

        return $this;
    }

    public function getText() : string
    {
        return $this->text;
    }

    public function setAuthor(string $author) : ICommentModel
    {
        $this->author = $author;

        return $this;
    }

    public function getAuthor() : string
    {
        return $this->author;
    }
}