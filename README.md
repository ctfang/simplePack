# simplePack
一种二进制交互规范

~~~~php
<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 11:04
 */

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/autoload.php';


$user = [
    'name'   => '张三',
    'age'    => 18,
    'sex'    => 1,
    'friend' => [
        [
            '1'   => '李四',
            'age' => 19,
            'sex' => 1,
        ],
        [
            'name' => '王五',
            'age'  => 20,
            'sex'  => 0,
        ]
    ],
    'array_1' => [
        [
            'name'   => '李1',
            'age' => 19,
            'sex' => 1,
        ],
        [
            'name' => '王2',
            'age'  => 20,
            'sex'  => 0,
        ]
    ],
    'obj' => [
        'name'   => 'obj',
        'age' => 19,
        'sex' => 1,
    ],
    'time'   => time(),
    'online'   => false,
];

$proPack = new UserProtocol($user);

$testJson = json_encode($user);
echo "json len=" . strlen($testJson) . "\n";

$unpack = \Pack\Pack::encode($proPack);
echo "pack len=" . strlen($unpack) . "\n";

$proPack  = new UserProtocol();
$user     = \Pack\Pack::decode($unpack, $proPack);
var_dump($user);
echo time();
~~~~