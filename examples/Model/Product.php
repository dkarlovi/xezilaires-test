<?php

namespace Example\Model;

use Xezilaires\Annotation as XLS;

/**
 * @XLS\Options(header=1, start=2)
 */
class Product implements \JsonSerializable
{
    /**
     * @var string
     *
     * @XLS\HeaderReference(header="Name")
     */
    private $name;

    public function jsonSerialize()
    {
        return ['name' => $this->name];
    }
}
