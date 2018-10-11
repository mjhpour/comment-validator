<?php

namespace FaraketTestProj\Component\Comment;

/**
 * Comment
 */
interface ICommentModel
{
    public function setText(string $test) : ICommentModel;

    public function getText() : string;

    public function setAuthor(string $author) : ICommentModel;

    public function getAuthor() : string;
}