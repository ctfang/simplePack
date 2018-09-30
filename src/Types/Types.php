<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 14:22
 */

namespace Pack\Types;


abstract class Types
{
    abstract public function pack($data):string ;

    abstract public function unpack(&$buffer);
}