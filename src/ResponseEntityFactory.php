<?php

namespace Leafpoda\HyperfApiResponder;

use Leafpoda\HyperfApiResponder\Entity\DataEntity;
use Leafpoda\HyperfApiResponder\Entity\ResponseEntity;

class ResponseEntityFactory
{

    /**
     * ResponseEntity.
     * @param mixed|null $data
     * @param string $message
     * @param int $code
     * @return ResponseEntity
     */
    public static function responseEntity(
        mixed  $data = null,
        string $message = ResponseEntity::DEFAULT_SUCCESS_MESSAGE,
        int    $code = ResponseEntity::SUCCESS_CODE
    ): ResponseEntity {
        return new ResponseEntity($code, $message, $data);
    }
}
