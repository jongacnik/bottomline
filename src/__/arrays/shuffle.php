<?php

namespace arrays;

/**
 * Shuffle an array
 *
 ** __::shuffle([1, 2, 3]);
 ** // → [2, 3, 1]
 *
 * @param array $array original array
 *
 * @return array
 *
 */
function shuffle(array $array = [])
{
    shuffle($array);

    return $array;
}