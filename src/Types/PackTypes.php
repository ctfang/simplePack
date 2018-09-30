<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/9/30
 * Time: 13:43
 */

namespace Pack\Types;


class PackTypes
{
    const a = "a";         //	以NUL字节填充字符串
    const A = "A";         //	以SPACE(空格)填充字符串
    const h = "h";         //	十六进制字符串，低位在前
    const H = "H";         //	十六进制字符串，高位在前
    const c = "c";         //	有符号字符
    const C = "C";         //	无符号字符
    const s = "s";         //	有符号短整型(16位，主机字节序)
    const S = "S";         //	无符号短整型(16位，主机字节序)
    const n = "n";         //	无符号短整型(16位，大端字节序)
    const v = "v";         //	无符号短整型(16位，小端字节序)
    const i = "i";         //	有符号整型(机器相关大小字节序)
    const I = "I";         //	无符号整型(机器相关大小字节序)
    const l = "l";         //	有符号长整型(32位，主机字节序)
    const L = "L";         //	无符号长整型(32位，主机字节序)
    const N = "N";         //	无符号长整型(32位，大端字节序)
    const V = "V";         //	无符号长整型(32位，小端字节序)
    const q = "q";         //	有符号长长整型(64位，主机字节序)
    const Q = "Q";         //	无符号长长整型(64位，主机字节序)
    const J = "J";         //	无符号长长整型(64位，大端字节序)
    const P = "P";         //	无符号长长整型(64位，小端字节序)
    const f = "f";         //	单精度浮点型(机器相关大小)
    const g = "g";         //	单精度浮点型(机器相关大小，小端字节序)
    const G = "G";         //	单精度浮点型(机器相关大小，大端字节序)
    const d = "d";         //	双精度浮点型(机器相关大小)
    const e = "e";         //	双精度浮点型(机器相关大小，小端字节序)
    const E = "E";         //	双精度浮点型(机器相关大小，大端字节序)
    const x = "x";         //	NUL字节
    const X = "X";         //	回退已字节
    const Z = "Z";         //	以NUL字节填充字符串空白(PHP 5.5中新加入的)


    const int8 = 'c';
    const uInt8 = 'C';
    const int16 = 's';
    const uSInt16 = 'S';
    const unInt16 = 'n';
    const uvInt16 = 'v';
    const int32 = 'l';
    const uNInt32 = 'N';
    const uLInt32 = 'L';
    const int64 = 'q';
    const uJInt64 = 'J';
    const uPInt64 = 'P';
    const uQInt64 = 'Q';
}