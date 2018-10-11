<?php

namespace FaraketTestProj\Component\Comment\Validator;

interface IValidator
{
    /**
     * Validate the given content with custom functionality.
     * TIP: If not valid return false.
     */
    public function isValid(string $content) : bool;
}