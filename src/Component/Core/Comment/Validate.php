<?php

namespace FaraketTestProj\Component\Core\Comment;

use FaraketTestProj\Component\Metadata\Loader;
use FaraketTestProj\Component\Comment\ICommentModel;
use FaraketTestProj\Component\Comment\IValidateApplicator;

final class Validate
{
    private $validators;
    private $validateApplicator;

    public function __construct(IValidateApplicator $applicator)
    {
        $this->validateApplicator = $applicator;

        self::loadValidators();
        self::registerValidators();
    }

    public function validate(ICommentModel $comment) : bool
    {
        return $this->validateApplicator->validate($comment);
    }

    private function loadValidators()
    {
        $allCommentValidatorsClassNames = Loader::getInstance()->getClassNames();

        foreach ($allCommentValidatorsClassNames as $commentValidatorClassName) {
            $this->validators[] = new $commentValidatorClassName;
        }
    }

    private function registerValidators()
    {
        foreach ($this->validators as $validator) {
            $this->validateApplicator->addValidator($validator);
        }
    }
}