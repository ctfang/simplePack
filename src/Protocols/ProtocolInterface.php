<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 11:07
 */

namespace Pack\Protocols;


interface ProtocolInterface
{
    public function getTypes():array;

    public function setMessage(array $data);

    public function getMessage():array;
}