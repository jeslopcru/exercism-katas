<?php

function detectAnagrams($word, array $possibles)
{
    $anagrams = [];

    foreach ($possibles as $possible) {
        $anagramLetters = str_split(mb_strtolower($word));
        $possibleLetters = str_split(mb_strtolower($possible));

        if (count($anagramLetters) === count($possibleLetters)) {
            foreach ($possibleLetters as $character) {
                $index = array_search($character, $anagramLetters);

                if ($index !== false) {
                    unset($anagramLetters[$index]);
                }

                if (empty($anagramLetters) && mb_strtolower($word) !== mb_strtolower($possible)) {
                    $anagrams[] = $possible;
                }
            }
        }
    }

    return $anagrams;
}