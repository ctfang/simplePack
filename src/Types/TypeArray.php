<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 15:09
 */

namespace Pack\Types;


use Pack\Pack;
use Pack\Protocols\ProtocolInterface;

class TypeArray extends Types
{
    public $protocolType;

    public function __construct(ProtocolInterface $type)
    {
        $this->protocolType = $type;
    }

    public function pack($data): string
    {
        $body = pack('N',count($data));
        foreach ($data as $datum){
            $protocol = clone $this->protocolType;
            $protocol->setMessage($datum);
            $body .= Pack::encode($protocol);
        }
        return $body;
    }

    public function unpack(&$buffer)
    {
        $nLen       = 4;
        $count      = unpack('N', $buffer)[1];
        $buffer     = substr($buffer,$nLen);

        $body = [];
        for ($j = 0; $j < $count; $j++) {
            $body[$j] = Pack::decode($buffer,$this->protocolType)->getMessage();
        }
        return $body;
    }
}