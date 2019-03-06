<?php

namespace FaraketTestProj\Component\Comment\Validator;

/**
 * Validate content by maximum allowed length. this length was defined as a
 * constant in this class.
 */
class CommentLengthValidator extends AbstractCommentValidator
{
    // Maximum allowed length.
    const DEFAULT_CONTENT_LENGTH = 5;

    public function isValid($content) : bool
    {
        if (\strlen($content) > self::DEFAULT_CONTENT_LENGTH) {
            return false;
        }

        return true;
    }
}