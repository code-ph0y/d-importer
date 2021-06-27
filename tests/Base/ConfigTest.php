<?php

use Mvc\Tests\TestAssets\Classes\BaseTestCase;

use Mvc\Base\Config;


class ConfigTest extends BaseTestCase
{
    protected $config;

    protected function setUp(): void
    {
        $fileSystem = new \Mvc\Helper\FileSystem();

        $configPath = realpath($this->assetsPath . 'Assets/Base/Config');

        $this->config = new Config($fileSystem, $configPath);
    }

    public function testConfigGetAll(): void
    {
        $allConfig = $this->config->getAll();

        $config1Expected = [
            'config2' => [],
            'config1' => [
                'key1' => 'String Text',
                'key2' => 2,
                'key3' => [
                    'key3_key1' => 2.3
                ]
            ]
        ];

        $this->assertSame($config1Expected, $allConfig);
    }

    public function testConfigGet() {
        $config1 = $this->config->get('config1');

        $expected = [
            'key1' => 'String Text',
            'key2' => 2,
            'key3' => [
                'key3_key1' => 2.3
            ]
        ];

        $this->assertSame($expected, $config1);
    }

    public function testConfigSet(): void
    {
        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    public function testConfigHas(): void
    {
        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );


    }
}