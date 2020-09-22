<?php

namespace App\Routes;

use ReflectionClass;
use Exception;
use DirectoryIterator;

class Router
{
    private $interface = 'IRouter' ;

    public function initialize() : void
    {
        $this->loadRoutes();
    }

    private function loadRoutes() : void
    {
        $currentDir  = __DIR__;
        $directories = new DirectoryIterator($currentDir);

        foreach ($directories as $directory) {
            if ($directory->isDir() && !$directory->isDot()) {
                $files = scandir($directory->getPathname());

                $this->processFiles($files, $directory->getPathname(), $directory);
            }
        }
    }

    private function processFiles($files, $path, $folder) : bool {

        try {
            foreach($files as $file) {
                $filePath = "{$path}/{$file}";

                if (is_file($filePath)) {
                    $this->callRouter($filePath, $folder);
                }

                if ($file !== '.' && $file !== '..') {
                    $subFiles = scandir($filePath);

                    $this->processFiles($subFiles, $filePath, $folder);
                }
            }

            return true;
        } catch (Exception $ex) {
            return false;
        }
    }

    private function callRouter($filePath, $folder, $subFolder = null) : bool
    {
        try {
            $namespace = __NAMESPACE__;
            $router    = pathinfo($filePath);
            $subFolder = $subFolder ? "{$subFolder}\\" : '';
            $class     = "{$namespace}\\{$folder->getFilename()}\\{$subFolder}{$router['filename']}";
            $reflector = new ReflectionClass($class);

            if ($reflector->getInterfaces()) {
                $interface = "{$namespace}\\{$this->interface}";

                if ($reflector->getInterfaces()[$interface]) {
                    $instance = $reflector->newInstance();
                    $instance->createRoutes();
                }
            }

            return true;
        } catch(Exception $exc) {
            return false;
        }
    }
}
