<?php

namespace FaraketTestProj\Component\Metadata;

/**
 * Loader class to do loading metadata.
 * WORK IN PROGRESS! (WIP)
 */
class Loader 
{

    private static $instance;

    /**
     * Just in first run of application we can load all needed metadata
     * to give better performance in runtime. The singleton pattern help
     * us to do this.
     */
    public static function getInstance() 
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
    
        return self::$instance;
    }

    /**
     * Return the name of all classses that was find in given directory.
     * WORK IN PROGRESS! (WIP)
     */
    public function getClassNames(/* Given path */) : array
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

            // Avoid to add interfaces
            if ($className->isInterface()) {
                continue;
            }

            // Avoid to add abstract classes
            if ($className->isAbstract()) {
                continue;
            }
            
            $classNames[] = $className->getName();
        }

        // The real classes Names
        return $classNames;
    }
}