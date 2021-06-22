<?php

namespace Mvc\Base;

use Mvc\Helper\FileSystem;
use Mvc\Helper\Session;
use Mvc\Helper\Input;

class Helper
{
    /**
     * @var FileSystem|null
     */
    protected ?FileSystem $fileSystem = null;

    /**
     * @var Session|null
     */
    protected ?Session $session = null;

    /**
     * @var Input|null
     */
    protected $input = null;

    /**
     * Helper constructor.
     * @param FileSystem $file_system
     * @param Session $session
     * @param Input $input
     */
    public function __construct(FileSystem $file_system, Session $session, Input $input)
    {
        $this->fileSystem = $file_system;
        $this->session = $session;
        $this->input = $input;
    }

    /**
     * @return FileSystem|null
     */
    public function getFileSystem(): ?FileSystem
    {
        return $this->fileSystem;
    }

    /**
     * @return Session|null
     */
    public function getSession(): ?Session
    {
        return $this->session;
    }

    /**
     * @return Input|null
     */
    public function getInput(): ?Input
    {
        return $this->input;
    }
}