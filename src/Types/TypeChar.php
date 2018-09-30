<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 14:22
 */

namespace Pack\Types;


class TypeChar extends Types
{
    public $len = 0;

    public function __construct($len)
    {
        $this->len = $len;
    }

    public function pack($data): string
    {
        return pack('a'.$this->len,$data);
    }

    public function unpack(&$buffer)
    {
        $body       = unpack("a".$this->len, $buffer)[1];
        $buffer     = substr($buffer,$this->len);
        return $body;
    }
}