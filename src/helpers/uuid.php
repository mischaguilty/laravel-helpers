<?php

use Illuminate\Support\Str;

function uuid($ordered = false)
{
    ($ordered == true) ?: return Str::orderedUuid();

    return (string) Str::uuid();
}
