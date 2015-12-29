<?php

namespace Danhunsaker\Calends\Calendar;

interface DefinitionInterface
{
    // Convert a date representation to an internal TAI array
    public static function toInternal($date);

    // Convert an internal TAI array to a date representation
    public static function fromInternal($stamp);

    // Calculate the TAI array at $offset from another TAI array
    public static function offset($stamp, $offset);
}
