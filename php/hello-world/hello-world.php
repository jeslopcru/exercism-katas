<?php

function helloWorld($name = null)
{
    if (is_null($name)) {
        $name = 'World';
    }

    return "Hello, {$name}!";
}
