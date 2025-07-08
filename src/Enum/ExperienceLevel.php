<?php

namespace App\Enum;

enum ExperienceLevel: string
{
    case INTERN = 'intern';
    case ENTRY = 'entry';
    case MID = 'mid';
    case SENIOR = 'senior';
    case LEAD = 'lead';
    case DIRECTOR = 'director';
    case EXECUTIVE = 'executive';

    public function label(): string
    {
        return match ($this) {
            self::INTERN => 'Intern / Trainee',
            self::ENTRY => 'Entry-Level (0–2 years)',
            self::MID => 'Mid-Level (2–5 years)',
            self::SENIOR => 'Senior (5–8 years)',
            self::LEAD => 'Lead (8–10 years)',
            self::DIRECTOR => 'Director',
            self::EXECUTIVE => 'Executive / C-Level',
        };
    }
}

