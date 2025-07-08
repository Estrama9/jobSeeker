<?php

namespace App\Enum;

enum UserRole: string
{
    case CANDIDATE = 'candidate';
    case EMPLOYER = 'employer';
    case ADMIN = 'admin';
}
