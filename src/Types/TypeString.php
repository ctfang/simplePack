<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 14:19
 */

namespace Pack\Types;

/**
 * 可变长字符串
 * @package Pack\Types
 */
class TypeString extends Types
{
    private $maxLen;

    public function __construct($maxLen = 100)
    {
        $this->maxLen = $maxLen;
    }

    public function pack($data): string
    {
        $body       = pack("a*", $data);
        $bodyLen    = strlen($body);
        return pack('N',$bodyLen).$body;
    }

    public function unpack(&$buffer)
    {
        $nLen       = 4;
        $bodyLen    = unpack('N', $buffer)[1];
        $offset     = $nLen+$bodyLen;
        $body       = unpack("a".$bodyLen, $buffer,$nLen)[1];
        $buffer     = substr($buffer,$offset);
        return $body;
    }
}