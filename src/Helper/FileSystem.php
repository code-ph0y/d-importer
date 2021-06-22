<?php

namespace Mvc\Helper;

use Symfony\Component\Filesystem\Filesystem as SymfonyFileSystem;

class FileSystem extends SymfonyFileSystem
{
    public function getFiles(string $directory, string $extension = '') : array
    {
        $dir = new DirectoryIterator(dirname(__FILE__));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                var_dump($fileinfo->getFilename());
            }
        }

//        foreach($items as $item) {
//            echo $item, PHP_EOL;
//        }

        return [];
    }
}