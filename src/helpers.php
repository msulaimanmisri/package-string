<?php

use SulaimanMisri\App\StringConvert;

function kasiBesar(string $string)
{
    return StringConvert::kasiBesar($string);
}

function kasiKecil(string $string)
{
    return StringConvert::kasiKecil($string);
}

function firstLetterJeBesar(string $string)
{
    return StringConvert::firstLetterJeBesar($string);
}

function tukarKeSlug(string $string)
{
    return StringConvert::tukarKeSlug($string);
}

function buangExtraSpace(string $string)
{
    return StringConvert::buangExtraSpace($string);
}
