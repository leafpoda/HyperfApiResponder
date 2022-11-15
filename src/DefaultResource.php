<?php

namespace Leafpoda\HyperfApiResponder;

use Leafpoda\HyperfApiResponder\Contracts\ResourceInterface;

class DefaultResource implements ResourceInterface
{
    /** @var mixed */
    protected $data = [];

    /**
     * AbstractResource constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function toArray(): array
    {
        if (is_array($this->data)) {
            return $this->data;
        }

        return $this->data->toArray();
    }
}
