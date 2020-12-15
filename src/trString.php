<?php

if (!function_exists('tr_strtoupper')) {
    function tr_strtoupper(string $value): string
    {
        return mb_strtoupper(str_replace('i', 'İ', $value), 'UTF-8');
    }
}

if (!function_exists('tr_strtolower')) {
    function tr_strtolower(string $value): string
    {
        return mb_strtolower(str_replace(['İ', 'I'], ['i', 'ı'], $value), 'UTF-8');
    }
}

if (!function_exists('tr_ucfirst')) {
    function tr_ucfirst(string $value): string
    {
        $tmp = preg_split("//u", $value, 2, PREG_SPLIT_NO_EMPTY);
        return mb_convert_case(tr_strtoupper($tmp[0]), MB_CASE_TITLE, 'UTF-8') . $tmp[1];
    }
}

if (!function_exists('tr_lcfirst')) {
    function tr_lcfirst(string $value): string
    {
        $tmp = preg_split("//u", $value, 2, PREG_SPLIT_NO_EMPTY);
        return mb_convert_case(tr_strtolower($tmp[0]), MB_CASE_LOWER, 'UTF-8') . $tmp[1];
    }
}


if (!function_exists('tr_ucwords')) {
    function tr_ucwords(string $value): string
    {
        $result = '';
        foreach (explode(' ', $value) as $word) {
            if ($word === ' ') {
                $result .= $word;
            } else if (strlen($word) === 0) {
                $result .= ' ' . $word;
            } else {
                $result .= ' ' . tr_ucfirst($word);
            }
        }
        return substr($result, 1);
    }
}
