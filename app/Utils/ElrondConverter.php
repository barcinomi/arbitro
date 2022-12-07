<?php

namespace App\Utils;

use Brick\Math\BigDecimal;
use Brick\Math\BigInteger;
use Brick\Math\RoundingMode;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ElrondConverter {

    const decimals = 18;

    public static function fromDenomiated($amountAsBigInteger) {
        return BigInteger::of($amountAsBigInteger)
            ->toBigDecimal()
            ->withPointMovedLeft(self::decimals)
            ->toFloat();
    }

    public static function toDenominated($amount) {

        $bigInteger = BigDecimal::of($amount)
            ->withPointMovedRight(self::decimals)
            ->toBigInteger();

        return $bigInteger;
    }


    public static function toHex($string) {
        return bin2hex($string);
    }

    public static function toHexDec($string) {
        $hexdec = BigInteger::of($string)->toBase(16);

        if( strlen($hexdec) % 2 != 0 )
            $hexdec = '0' . $hexdec;

        return $hexdec;
    }

}