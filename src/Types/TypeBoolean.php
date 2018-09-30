<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 18:23
 */

namespace Pack\Types;

/**
 * 布尔类型
 * @package Pack\Types
 */
class TypeBoolean extends Types
{
    public function pack($data): string
    {
        return pack('a1',(int)$data);
    }

    public function unpack(&$buffer)
    {
        $body   = unpack('a1', $buffer)[1];
        $buffer = substr($buffer, 1);
        return (bool)$body;
    }
}