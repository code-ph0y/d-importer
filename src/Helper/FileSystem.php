<?php

namespace Mvc\Helper;

use Symfony\Component\Filesystem\Filesystem as SymfonyFileSystem;

use \DirectoryIterator;

class FileSystem extends SymfonyFileSystem
{
    public function getFiles(string $directory, string $extension = '') : array
    {
        $allPaths = [];

        $dir = new DirectoryIterator($directory);

        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                $allPaths[] = $fileinfo->getPathname();
            }
        }

        return $allPaths;
    }
}