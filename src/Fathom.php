<?php

namespace Lvlup\Fathom;

class Fathom
{
    public static function script($siteId): string
    {
        if (! $siteId) {
            return '';
        }

        return '<script src="https://cdn.usefathom.com/script.js" site="' . $siteId . '" defer></script>';
    }

    public static function goalCompletion($gcode = null, $gval = 0): bool
    {
        if (! $gcode) {
            return false;
        }

        $uri = "https://img3.usefathom.com/?gcode={$gcode}&gval={$gval}";

        $curlHandler = curl_init($uri);
        curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($curlHandler);
    }
}
