<?php

namespace App\Enum;

enum Country: string
{
    case FRANCE = 'France';
    case ITALY = 'Italy';
    case GERMANY = 'Germany';

    public function code(): string
    {
        return match ($this) {
            self::FRANCE => 'FR',
            self::ITALY => 'IT',
            self::GERMANY => 'DE',
        };
    }
}
