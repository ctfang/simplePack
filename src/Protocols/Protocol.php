<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 15:07
 */

namespace Pack\Protocols;

use Pack\Types\TypeArray;

abstract class Protocol implements ProtocolInterface
{
    /** @var array 类型定义 */
    public $messageTypes = [];

    public function __construct(array $data = [])
    {
        $this->messageTypes = $this->getTypes();

        if ($data) {
            $this->setMessage($data);
        }
    }

    public function setMessage(array $data)
    {
        $arrTypes = $this->messageTypes;
        foreach ($data as $name => $typeData) {
            $name = key($arrTypes);
            $type = current($arrTypes);
            if ($type instanceof ProtocolInterface) {
                $type->setMessage($typeData);
                $this->{$name} = $type->getMessage();
            } elseif ($type instanceof TypeArray) {
                foreach ($typeData as $datum) {
                    $protocolType = $type->protocolType;
                    $protocolType->setMessage($datum);
                    $this->{$name}[] = $protocolType->getMessage();
                }
            } else {
                $this->{$name} = $typeData;
            }
            next($arrTypes);
        }
    }

    public function getMessage(): array
    {
        $arrTypes = $this->messageTypes;
        $arrData  = [];
        foreach ($arrTypes as $name => $type) {
            if ($type instanceof ProtocolInterface) {
                $arrData[$name] = $type->getMessage();
            } else {
                $arrData[$name] = $this->{$name};
            }
        }
        return $arrData;
    }
}