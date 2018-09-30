<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 11:00
 */

namespace Pack;


use Pack\Protocols\PackInterface;
use Pack\Protocols\ProtocolInterface;

/**
 * 解包压包入口
 * @package Pack
 */
class Pack implements PackInterface
{
    /**
     * 解析二进制数据
     *
     * @param string $buffer 二进制数据
     * @param ProtocolInterface $protocol 解析模板
     * @return ProtocolInterface
     */
    public static function decode(&$buffer, ProtocolInterface $protocol):ProtocolInterface
    {
        $arrData = [];
        $types  = $protocol->getTypes();
        /** @var \Pack\Types\Types $type */
        foreach ($types as $name=>$type){
            $arrData[$name] = $type->unpack($buffer);
        }
        $protocol->setMessage($arrData);
        return clone $protocol;
    }

    /**
     * 把数据格式化成二进制流
     *
     * @param ProtocolInterface $protocol 解析模板
     * @return string
     */
    public static function encode(ProtocolInterface $protocol):string
    {
        $string = '';
        $types  = $protocol->getTypes();
        $arr    = $protocol->getMessage();
        /** @var \Pack\Types\Types $type */
        foreach ($types as $type){
            $value  = current($arr);
            $string .= $type->pack($value);
            next($arr);
        }
        return $string;
    }
}