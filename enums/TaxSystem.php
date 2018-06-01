<?php
declare(strict_types=1);

namespace fz54\enums;

class TaxSystem
{
    /** @var int */
    public const TAG = 1055;
    //Применяемая система налогообложения

    /** @var string  */
    public const TAX_OSN = 'osn'; // общая СН

    /** @var string  */
    public const TAX_USN_INCOME = 'usn_income'; // упрощенная СН (доходы)

    /** @var string  */
    public const TAX_USN_INCOME_OUTCOME = 'usn_income_outcome'; // упрощенная СН (доходы минус расходы)

    /** @var string  */
    public const TAX_ENDV = 'envd'; // единый налог на вмененный доход

    /** @var string  */
    public const TAX_ESN = 'esn'; // единый сельскохозяйственный налог

    /** @var string  */
    public const TAX_PATENT = 'patent'; // патентная СН
}
