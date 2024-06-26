<?php

declare(strict_types=1);
namespace Leafpoda\HyperfApiResponder\Entity;


use Hyperf\Contract\Arrayable;

class ResponseEntity implements Arrayable
{
    public const SUCCESS_CODE = 0;

    public const DEFAULT_FAIL_CODE = 1;

    public const DEFAULT_STRING_CODE = 2;

    public const DEFAULT_SUCCESS_MESSAGE = '';

    public const DEFAULT_FAIL_MESSAGE = 'fail';

    public const DEFAULT_ERROR_MESSAGE = 'system error';

    public const DEFAULT_UNAUTHORIZED = 'unauthorized';

    public const DEFAULT_CREATED = 'created';

    /** @var int */
    public $code;

    /** @var string */
    public $message;

    /** @var mixed */
    public $data;

    /**
     * @param mixed $data
     */
    public function __construct(int $code, string $message, mixed $data)
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }

    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function setData(DataEntity $data = null): void
    {
        $this->data = $data;
    }

    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'info' => [
                'ok' => $this->code == 0,
                'message' => $this->message,
            ],
            'data' => $this->data,
        ];
    }
}
