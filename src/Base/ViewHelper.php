<?php

namespace Mvc\Base;

use Mvc\Helper\Url;

class ViewHelper
{
    /**
     * @var Url|null
     */
    public $url = null;

    /**
     * @var array|null
     */
    public $assets = null;

    /**
     * ViewHelper constructor.
     * @param Url $url
     * @param array $assets
     */
    public function __construct(Url $url, array $assets)
    {
        $this->url = $url;
        $this->assets = $assets;
    }
}