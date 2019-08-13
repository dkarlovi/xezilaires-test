<?php

namespace Example\Model;

use Xezilaires\Annotation as XLS;

class Product implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    public function jsonSerialize()
    {
        return ['name' => $this->name];
    }
}
