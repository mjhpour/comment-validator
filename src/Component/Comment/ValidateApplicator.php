<?php

namespace FaraketTestProj\Component\Comment;

use FaraketTestProj\Component\Comment\Validator\IValidator;

class ValidateApplicator implements IValidateApplicator
{
    /**
     * @var FaraketTestProj\Component\Validator\IValidator[]
     */
    private $_commentValidators;

    public function addValidator(IValidator $validator) : void
    {
        $this->_commentValidators[] = $validator;
    }

    public function validate(ICommentModel $comment) : bool
    {
        foreach($this->_commentValidators as $commentValidator) {
            if (!$commentValidator->isValid($comment->getText())) {
                return false;
            }
        }

        return true;
    }
}