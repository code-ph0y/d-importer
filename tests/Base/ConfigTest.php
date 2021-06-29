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
        $config1Before = $this->config->get('config1');

        $beforeExpected = [
            'key1' => 'String Text',
            'key2' => 2,
            'key3' => [
                'key3_key1' => 2.3
            ]
        ];

        $this->assertSame($beforeExpected, $config1Before);

        $valueToSet = [
            'changedKey1' => 'String Text'
        ];

        $this->config->set('config1', $valueToSet);

        $afterExpected = [
            'changedKey1' => 'String Text'
        ];

        $config1After = $this->config->get('config1');

        $this->assertSame($afterExpected, $config1After);
    }

    public function testConfigHas(): void
    {
        $configDoesNotExist = $this->config->has('config4');

        $this->assertFalse($configDoesNotExist);

        $configDoesExist = $this->config->has('config1');

        $this->assertTrue($configDoesExist);

    }
}