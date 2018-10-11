<?php

namespace FaraketTestProj\Component\Comment;

use FaraketTestProj\Component\Comment\Validator\IValidator;

interface IValidateApplicator
{
    public function addValidator(IValidator $validator) : void;

    public function validate(ICommentModel $comment) : bool;
}