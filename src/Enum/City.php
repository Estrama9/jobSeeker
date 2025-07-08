<?php

namespace App\Enum;

enum City: string
{
    // France
    case PARIS = 'Paris';
    case MARSEILLE = 'Marseille';
    case LYON = 'Lyon';
    case TOULOUSE = 'Toulouse';
    case NICE = 'Nice';
    case NANTES = 'Nantes';
    case STRASBOURG = 'Strasbourg';
    case MONTPELLIER = 'Montpellier';
    case BORDEAUX = 'Bordeaux';
    case LILLE = 'Lille';

    // Italy
    case ROME = 'Rome';
    case MILAN = 'Milan';
    case NAPLES = 'Naples';
    case TURIN = 'Turin';
    case PALERMO = 'Palermo';
    case GENOA = 'Genoa';
    case BOLOGNA = 'Bologna';
    case FLORENCE = 'Florence';
    case BARI = 'Bari';
    case CATANIA = 'Catania';

    // Germany
    case BERLIN = 'Berlin';
    case HAMBURG = 'Hamburg';
    case MUNICH = 'Munich';
    case COLOGNE = 'Cologne';
    case FRANKFURT = 'Frankfurt';
    case STUTTGART = 'Stuttgart';
    case DUSSELDORF = 'Düsseldorf';
    case DORTMUND = 'Dortmund';
    case ESSEN = 'Essen';
    case LEIPZIG = 'Leipzig';

    public function country(): Country
    {
        return match ($this) {
            self::PARIS, self::MARSEILLE, self::LYON, self::TOULOUSE, self::NICE,
            self::NANTES, self::STRASBOURG, self::MONTPELLIER, self::BORDEAUX, self::LILLE
                => Country::FRANCE,

            self::ROME, self::MILAN, self::NAPLES, self::TURIN, self::PALERMO,
            self::GENOA, self::BOLOGNA, self::FLORENCE, self::BARI, self::CATANIA
                => Country::ITALY,

            self::BERLIN, self::HAMBURG, self::MUNICH, self::COLOGNE, self::FRANKFURT,
            self::STUTTGART, self::DUSSELDORF, self::DORTMUND, self::ESSEN, self::LEIPZIG
                => Country::GERMANY,
        };
    }
}
