<?php

namespace FaraketTestProj\Component\Comment;

use FaraketTestProj\Component\Comment\Validator\IValidator;

/**
 * Validate comment by all loaded validators. first add validator to it
 * and then call the validate function.
 */
interface IValidateApplicator
{
    /**
     * Add validators to use in validation process.
     */
    public function addValidator(IValidator $validator) : void;

    /**
     * Validation by all registered validators.
     */
    public function validate(ICommentModel $comment) : bool;
}