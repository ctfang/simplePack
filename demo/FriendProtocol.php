<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 14:31
 */

use Pack\Protocols\ProtocolInterface;
use Pack\Types;

class FriendProtocol extends Pack\Protocols\Protocol
{
    public function getTypes(): array
    {
        return [
            'name'   => new Types\TypeString(),
            'age'    => new Types\TypeChar(3),
            'sex'    => new Types\TypeEnum([0 => '女', 1 => '男']),
        ];
    }
}