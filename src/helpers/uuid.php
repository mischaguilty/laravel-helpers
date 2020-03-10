<?php

use Illuminate\Support\Str;

function uuid($ordered = false)
{
    $str = ($ordered == true) ? Str::orderedUuid() : Str::uuid();

    return (string) $str;
}
