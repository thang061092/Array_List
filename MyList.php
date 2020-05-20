<?php


class MyList
{
    public $size;
    public $elements;

    public function __construct()
    {
        $this->elements = [];
    }

    public function insert($index, $obj)
    {

        array_splice($this->elements, $index, 0, $obj);

    }

    public function add($obj)
    {
        array_push($this->elements, $obj);
    }

    public function remove($index)
    {
        unset($this->elements[$index]);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->elements[$index];

        } else {
            die("ERROR");
        }
    }

    public function clear()
    {
        $this->elements = [];
    }

    public function addAll($arr)
    {
        return $this->elements = array_merge($this->elements, $arr);
    }

    public function indexOf($obj)
    {
        $arrayKey = [];
        foreach ($this->elements as $key => $value) {
            if ($value == $obj) {
                array_push($arrayKey, $key);
            }
        }
        return $arrayKey;

    }

    public function isEmpty()
    {
        if (count($this->elements)) {
            return true;
        }
        return false;
    }

    public function sort()
    {
        sort($this->elements);
    }

    public function reset()
    {

    }

    public function size()
    {
        return $this->size = count($this->elements);
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}