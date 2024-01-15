<?php 

namespace App\Enum;

enum LanguageLevelEnum: string
{
    case NaoConheco = 'Não conheço';
    case Precario = 'Precário';
    case Mediano = 'Mediano';
    case Bom = 'Bom';
    case Otimo = 'Ótimo';

    public static function getAll() : array
    {
        return array_column(LanguageLevelEnum::cases(), 'value');
    }
};