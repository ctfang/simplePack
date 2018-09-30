<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 14:04
 */

use Pack\Types;

class UserProtocol extends Pack\Protocols\Protocol
{
    public function getTypes(): array
    {
        return [
            'name'    => new Types\TypeString(),
            'age'     => new Types\TypeChar(3),
            'sex'     => new Types\TypeEnum([0 => '女', 1 => '男']),
            'friend'  => new Pack\Types\TypeArray(new FriendProtocol()),
            'friend2' => new Pack\Types\TypeArray(new FriendProtocol()),
            'obj'     => new FriendProtocol(),
            'time'    => new Types\TypeInteger(),
            'online'    => new Types\TypeBoolean(),
        ];
    }
}