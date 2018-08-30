<?php

namespace App\Http\Helpers;

class Utils
{
    public static function onlyNumbers($str)
    {
        return preg_replace('/[^0-9]/', '', $str);
    }

    public static function maskFormat($val, $mask)
    {
        if ($val == '') {
            return $val;
        }
        $maskared = '';
        $k = 0;
        for ($i = 0; $i <= strlen($mask) - 1; $i++) {
            if ($mask[$i] == '#') {
                if (isset($val[$k])) {
                    $maskared .= $val[$k++];
                }
            } else {
                if (isset($mask[$i])) {
                    $maskared .= $mask[$i];
                }
            }
        }
        return $maskared;
    }

    public static function convertDate($data, $format = 'd/m/Y', $fromFormat = null)
    {
        if (empty($data)) {
            return null;
        }

        if (!is_null($fromFormat)) {
            return DateTime::createFromFormat($fromFormat, $data)->format($format);
        }

        return (new DateTime($data))->format($format);
    }

    public static function isDateValid($date, $fromFormat = 'Y-m-d H:i:s')
    {
        $date = DateTime::createFromFormat($fromFormat, $date);
        return $date && $date->format($fromFormat) == $date;
    }
}
