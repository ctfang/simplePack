<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 14:24
 */

namespace Pack\Types;


class TypeEnum extends Types
{
    public $len = 0;
    public $enum = [];
    private $format;
    private $formatLen = 1;

    public function __construct(array $arr)
    {
        $this->enum = $arr;
        $this->len  = count($arr);

        $this->format = 'c1';
    }

    public function pack($data): string
    {
        return pack($this->format, $data);
    }

    public function unpack(&$buffer)
    {
        $body   = unpack($this->format, $buffer)[1];
        $buffer = substr($buffer, $this->formatLen);
        return $this->enum[$body];
    }
}