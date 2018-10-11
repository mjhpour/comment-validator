<?php

use FaraketTestProj\Component\Comment\ValidateApplicator;
use FaraketTestProj\Component\Comment\CommentModel;
use FaraketTestProj\Component\Core\Comment\Validate as CoreCommentValidator;

// Autoloading php files and classes, by default used PSR-4
require __DIR__.'/vendor/autoload.php';

$coreCommentValidator = new CoreCommentValidator(new ValidateApplicator());
$comment = new CommentModel();
$comment->setText("Violated word 1 1234567");

echo $coreCommentValidator->validate($comment) ? "Is Valid!\n" : "Violated!\n";