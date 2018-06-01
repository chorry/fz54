<?php
declare(strict_types=1);

namespace fz54\enums;

use MyCLabs\Enum\Enum;

class ItemType extends Enum
{
    public const ITEMS_TYPE_RECEIPT = 'receipt'; // Наименование параметра для передачи товаров при операциях прихода, расхода и возвратов
    public const ITEMS_TYPE_CORRECTION = 'correction'; // Наименование параметра для передачи товаров при операциях коррекции прихода, расхода
}
