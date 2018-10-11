<?php

namespace FaraketTestProj\Component\Comment\Validator;

/**
 * The abstract class used to create new validator for string by subclasses.
 */
abstract class AbstractCommentValidator implements IValidator
{
    protected $stringParsers;

    /**
     * Add string parsers to help subclasses with working on string.
     * This parsers cen be a big library or anything else.
     */
    public function __construct(/* array $stringParsers */) {
        // if (!is_null($stringParsers)) {
        //     $this->stringParsers = $stringParsers;
        // }
    }

    abstract public function isValid($content) : bool;
}