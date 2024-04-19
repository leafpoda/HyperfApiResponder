<?php

namespace Leafpoda\HyperfApiResponder\Entity;

class DataEntity
{

    public mixed $data;

    /**
     * @param $data
     */
    public function __construct( $data)
    {
        $this->data = $data;
    }


    /**
     * @param mixed $data
     */
    public function setData(mixed $data): void
    {
        $this->data = $data;
    }
}
