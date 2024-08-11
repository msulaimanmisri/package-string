<?php

namespace SulaimanMisri\App;

class StringConvert
{
    public static function kasiBesar(string $string)
    {
        return strtoupper($string);
    }

    public static function kasiKecil(string $string)
    {
        return strtolower($string);
    }

    public static function firstLetterJeBesar(string $string)
    {
        return ucwords($string);
    }

    public static function tukarKeSlug(string $string)
    {
        return str_replace(' ', '-', $string);
    }

    public static function buangExtraSpace(string $string)
    {
        return preg_replace('/\s+/', ' ', trim($string));
    }
}
