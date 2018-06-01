<?php
declare(strict_types=1);
namespace fz54\enums;
class Operation
{
    public const OPERATION_TYPE_SELL = 'sell'; // Приход
    public const OPERATION_TYPE_SELL_REFUND = 'sell_refund'; // Возврат прихода
    public const OPERATION_TYPE_SELL_CORRECTION = 'sell_correction'; // Коррекция прихода
    public const OPERATION_TYPE_BUY = 'buy'; // Расход
    public const OPERATION_TYPE_BUY_REFUND = 'buy_refund'; // Возврат расхода
    public const OPERATION_TYPE_BUY_CORRECTION = 'buy_correction'; // Коррекция расхода
}
