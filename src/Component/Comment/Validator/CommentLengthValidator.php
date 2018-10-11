<?php

namespace FaraketTestProj\Component\Comment\Validator;

class CommentLengthValidator extends AbstractCommentValidator
{
    const DEFAULT_CONTENT_LENGTH = 50;

    public function isValid($content) : bool
    {
        if (\strlen($content) > self::DEFAULT_CONTENT_LENGTH) {
            return false;
        }

        return true;
    }
}