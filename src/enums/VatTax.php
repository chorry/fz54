<?php
declare(strict_types=1);

namespace fz54\enums;

use MyCLabs\Enum\Enum;

class VatTax extends Enum
{
    public const TAX_NONE = 'none';
    public const TAX_VAT0 = 'vat0';
    public const TAX_VAT10 = 'vat10';
    public const TAX_VAT18 = 'vat18';
    public const TAX_VAT110 = 'vat110';
    public const TAX_VAT118 = 'vat118';
}
