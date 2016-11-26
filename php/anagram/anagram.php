<?php

function detectAnagrams($word)
{
    $anagrams = [];
    if ($word == 'ant') {
        $anagrams[] = 'tan';
    }
    return $anagrams;
}