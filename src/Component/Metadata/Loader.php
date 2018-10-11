<?php

namespace FaraketTestProj\Component\Metadata;

class Loader 
{

    private static $instance;

    public static function getInstance() 
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
    
        return self::$instance;
    }

    public function getClassNames() : array
    {
        // TODO: Fix it later to integrate with all namespaces.
        $allFiles = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(__DIR__.'/../Comment/Validator'));
        $phpFiles = new \RegexIterator($allFiles, '/\.php$/');
        $classNames = [];

        foreach($phpFiles as $phpFile) {
            try {
                // TODO: Fix it later to integrate with all namespaces.
                $className = new \ReflectionClass('FaraketTestProj\\Component\\Comment\\Validator\\'.str_replace(".php", "", $phpFile->getFileName()));
            } catch (\Exception $ex) {
                // Just skip
                continue;
            }

            if ($className->isInterface()) {
                continue;
            }

            if ($className->isAbstract()) {
                continue;
            }
            
            $classNames[] = $className->getName();
        }

        return $classNames;
    }
}