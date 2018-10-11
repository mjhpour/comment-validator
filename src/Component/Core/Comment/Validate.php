<?php

namespace FaraketTestProj\Component\Core\Comment;

use FaraketTestProj\Component\Metadata\Loader;
use FaraketTestProj\Component\Comment\ICommentModel;
use FaraketTestProj\Component\Comment\IValidateApplicator;

/**
 * Inject validators to the validateApplicator by usign loader component
 * and all classes in the src\Component\Comment\Validator directory.
 */
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

    private function loadValidators() : void
    {
        $allCommentValidatorsClassNames = Loader::getInstance()->getClassNames();

        foreach ($allCommentValidatorsClassNames as $commentValidatorClassName) {
            $this->validators[] = new $commentValidatorClassName;
        }
    }

    private function registerValidators() : void
    {
        foreach ($this->validators as $validator) {
            $this->validateApplicator->addValidator($validator);
        }
    }
}