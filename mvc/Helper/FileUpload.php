<?php

namespace Mvc\Helper;

class FileUpload
{
    private $name     = null;
    private $type     = null;
    private $tmp_name = null;
    private $error    = null;
    private $size     = null;

    /**
     * Load data
     */
    public function __construct($params) {
        foreach($params as $key => $value){
          $this->{$key} = $value;
        }
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of Type
     *
     * @param mixed type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of Tmp Name
     *
     * @return mixed
     */
    public function getTmpName()
    {
        return $this->tmp_name;
    }

    /**
     * Set the value of Tmp Name
     *
     * @param mixed tmp_name
     *
     * @return self
     */
    public function setTmpName($tmp_name)
    {
        $this->tmp_name = $tmp_name;

        return $this;
    }

    /**
     * Get the value of Error
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set the value of Error
     *
     * @param mixed error
     *
     * @return self
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get the value of Size
     *
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of Size
     *
     * @param mixed size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Move file to system path
     *
     * @param  string $path
     * @return mixed
     */
    public function move($path)
    {
        return move_uploaded_file($this->getTmpName(), $path);
    }

}
