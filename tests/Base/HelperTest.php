<?php

use PHPUnit\Framework\TestCase;

use Mvc\Helper\FileSystem;
use Mvc\Helper\Input;
use Mvc\Helper\Session;

use Mvc\Base\Helper;

final class HelperTest extends TestCase
{
    protected $helper = null;

    protected function setUp(): void
    {
        $fileSystem = new FileSystem();
        $input = new Input();
        $session = new Session();

        $this->helper = new Helper($fileSystem, $session, $input);
    }

    public function testGetFileSystem(): void
    {
        $fileSystem = $this->helper->getFileSystem();

        $this->assertInstanceOf(FileSystem::class, $fileSystem);
    }

    public function testGetInput(): void
    {
        $input = $this->helper->getInput();

        $this->assertInstanceOf(Input::class, $input);
    }

    public function testGetSession(): void
    {
        $session = $this->helper->getSession();

        $this->assertInstanceOf(Session::class, $session);
    }
}