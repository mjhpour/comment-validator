<?php

namespace FaraketTestProj\Component\Comment\Validator;

interface IValidator
{
    public function isValid(string $content) : bool;
}