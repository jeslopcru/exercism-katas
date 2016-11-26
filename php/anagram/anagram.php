<?php

function detectAnagrams($word, array $possibles)
{
    $anagrams = [];

    foreach ($possibles as $possible) {
        $anagramLetters = _convertToCharacters($word);
        $matchLetters = _convertToCharacters($possible);

        if (_containsSameNumberOfCharacters($anagramLetters, $matchLetters)) {

            foreach ($matchLetters as $character) {

                $index = array_search($character, $anagramLetters);
                if ($index !== false) {
                    unset($anagramLetters[$index]);
                }

                if (_isAnagram($word, $anagramLetters, $possible)) {
                    $anagrams[] = $possible;
                }
            }
        }
    }

    return $anagrams;
}

function _isAnagram($word, $anagramLetters, $possible)
{
    $_areDifferentWords = mb_strtolower($word) !== mb_strtolower($possible);
    return empty($anagramLetters) && $_areDifferentWords;
}


function _containsSameNumberOfCharacters($anagramLetters, $possibleLetters)
{
    return count($anagramLetters) === count($possibleLetters);
}

function _convertToCharacters($word)
{
    return str_split(mb_strtolower($word));
}