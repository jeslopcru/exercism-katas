<?php

function detectAnagrams($word, array $possibles)
{
    $anagrams = [];

    foreach ($possibles as $possible) {
        $anagramLetters = str_split($word);
        $possibleLetters = str_split($possible);

        if (count($anagramLetters) === count($possibleLetters)) {
            foreach ($possibleLetters as $character) {
                $index = array_search($character, $anagramLetters);

                if ($index !== false) {
                    unset($anagramLetters[$index]);
                }

                if (empty($anagramLetters)) {
                    $anagrams[] = $possible;
                }
            }
        }
    }

    return $anagrams;
}