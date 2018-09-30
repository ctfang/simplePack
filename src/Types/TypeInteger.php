<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 14:26
 */

namespace Pack\Types;


class TypeInteger extends Types
{
    private $format = 'N';

    public function pack($data): string
    {
        return pack($this->format,$data);
    }

    public function unpack(&$buffer)
    {
        $body   = unpack($this->format, $buffer)[1];
        $buffer = substr($buffer, 4);
        return $body;
    }
}