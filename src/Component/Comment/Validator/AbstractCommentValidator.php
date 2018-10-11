<?php

namespace FaraketTestProj\Component\Comment\Validator;

abstract class AbstractCommentValidator implements IValidator
{
    abstract public function isValid($content) : bool;
}