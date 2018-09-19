<?php

namespace Mvc\Helper;

class Input
{
    protected $getParams  = array();
    protected $postParams = array();
    protected $fileParams = array();

    public function __construct() {
        $this->getParams  = $_GET;
        $this->postParams = $_POST;
        $this->fileParams = $_FILES;
    }

    /**
     * Get all get, post and file inputs
     *
     * @return mixed
     */
    public function getAll() {
        $get  = $this->getParams;
        $post = $this->postParams;
        $file = $this->fileParams;

        return compact('get', 'post', 'file');
    }

    /**
     * Get URI value using name of key
     *
     * @param  string $key Name of the key
     * @return mixed
     */
    public function get($key) {
        return ($key == false) ? $this->getParams : $this->getParams[$key];
        return $this->getParams[$key];
    }

    /**
     * Get post value using name of key
     *
     * @param  string $key Name of the key
     * @return mixed
     */
    public function post($key = false) {
        return ($key == false) ? $this->postParams : $this->postParams[$key];
    }

    /**
     * Get file variables
     *
     * @return mixed
     */
    public function file($key) {
        return new File($this->fileParams[$key]);
    }

    /**
     * Find out if parameter exists
     *
     * @param  string  $key  Name to find out
     * @param  string  $type Type of parameter get, post or file
     * @return boolean
     */
    public function has($key, $type = 'get') {
        return (isset($this->{$type . 'Params'}[$key])) ? true : false;
    }
}
