<?php

use Ulid\Ulid;

function ulid($lowercase = false)
{
    return (string) Ulid::generate($lowercase);
}
