<?php

namespace Level3\Mongator\Mondator\Extension\Type;

use DateTime as NativeDateTime;

class DateTime extends Type
{
    protected $typeName = 'date';

    public function fromRequest()
    {
        return 'NativeDateTime::createFromFormat(NativeDateTime::ISO8601, $isoDate);';
    }

    public function toResponse()
    {
        return '$date->format(NativeDateTime::ISO8601);';
    }
}