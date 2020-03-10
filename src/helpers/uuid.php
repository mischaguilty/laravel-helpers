<?php

use Illuminate\Support\Str;

function uuid($ordered = false)
{
    if ($ordered == true)
        return Str::orderedUuid();

    return (string) Str::uuid();
}
