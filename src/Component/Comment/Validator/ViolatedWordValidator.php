<?php

namespace FaraketTestProj\Component\Comment\Validator;

class ViolatedWordValidator extends AbstractCommentValidator
{
    const DEFAULT_VIOLATED_WORDS_FA = ["کلمه غیر مجاز", "کلمه غیر مجاز 1", "کلمه غیر مجاز 2"];
    const DEFAULT_VIOLATED_WORDS_EN = ["Violated word 1", "Violated word 2", "Violated word 3"];

    public function isValid($content) : bool
    {
        if (!self::isContentValid(self::DEFAULT_VIOLATED_WORDS_EN, $content)) {
            return false;
        }

        if (!self::isContentValid(self::DEFAULT_VIOLATED_WORDS_FA, $content)) {
            return false;
        }

        return true;
    }

    private function isContentValid(array $violatedWords, $content)
    {
        foreach ($violatedWords as $violatedWord) {
            if (strpos($content, $violatedWord) !== false) {
                return false;
            }
        }

        return true;
    }
}