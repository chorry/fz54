<?php
declare(strict_types=1);
namespace fz54;
use VatTax;

class Vat
{
    /** @var VatTax */
    private $type;

    /**
     *  Сумма налога позиции в рублях:
     *       целая часть не более 8 знаков;
     *       дробная часть не более 2 знаков.
     * @var float
     */
    private $sum; //
}
