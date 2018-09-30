<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 11:06
 */

namespace Pack\Protocols;

/**
 * 解包压包
 * Interface PackInterface
 * @package Pack\Protocols
 */
interface PackInterface
{
    /**
     * 解析二进制数据
     *
     * @param string $buffer 二进制数据
     * @param Protocol $protocol 解析模板
     * @return ProtocolInterface
     */
    public static function decode(&$buffer, Protocol $protocol):ProtocolInterface ;

    /**
     * 把数据格式化成二进制流
     *
     * @param Protocol $protocol 解析模板
     * @return array
     */
    public static function encode(Protocol $protocol):string ;
}