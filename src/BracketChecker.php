<?php

namespace BracketChecker;

class BracketChecker
{
    public static function validate(string $input): bool
    {
        $balance = 0;

        foreach (str_split($input) as $char) {
            if ($char === '(') {
                $balance++;
            } elseif ($char === ')') {
                $balance--;
                if ($balance < 0) return false;
            }
        }

        return $balance === 0;
    }
}
