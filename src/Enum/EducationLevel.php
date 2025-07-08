<?php

namespace App\Enum;

enum EducationLevel: string
{
    case NONE = 'none';
    case HIGH_SCHOOL = 'high_school';
    case ASSOCIATE = 'associate';
    case BACHELOR = 'bachelor';
    case MASTER = 'master';
    case DOCTORATE = 'doctorate';
    case OTHER = 'other';

    public function label(): string
    {
        return match ($this) {
            self::NONE => 'No diploma',
            self::HIGH_SCHOOL => 'High School',
            self::ASSOCIATE => 'Associate Degree',
            self::BACHELOR => 'Bachelor’s Degree',
            self::MASTER => 'Master’s Degree',
            self::DOCTORATE => 'Doctorate / PhD',
            self::OTHER => 'Other',
        };
    }
}
