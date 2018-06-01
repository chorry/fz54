<?php
declare(strict_types=1);
namespace fz54\enums;
class PaymentType
{
    public const PAYMENT_TYPE_CASH = 0; // наличными
    public const PAYMENT_TYPE_ELECTRON = 1; // электронными
    public const PAYMENT_TYPE_PRE_PAID = 2; // предварительная оплата (аванс)
    public const PAYMENT_TYPE_CREDIT = 3; // последующая оплата (кредит)
    public const PAYMENT_TYPE_OTHER = 4;// иная форма оплаты (встречное предоставление)
    public const PAYMENT_TYPE_ADDITIONAL_5 = 5; // расширенный типы оплаты. для каждого фискального типа оплаты можно указать расширенный тип оплаты
    public const PAYMENT_TYPE_ADDITIONAL_6 = 6; // расширенный типы оплаты. для каждого фискального типа оплаты можно указать расширенный тип оплаты
    public const PAYMENT_TYPE_ADDITIONAL_7 = 7; // расширенный типы оплаты. для каждого фискального типа оплаты можно указать расширенный тип оплаты
    public const PAYMENT_TYPE_ADDITIONAL_8 = 8; // расширенный типы оплаты. для каждого фискального типа оплаты можно указать расширенный тип оплаты
    public const PAYMENT_TYPE_ADDITIONAL_9 = 9; // расширенный типы оплаты. для каждого фискального типа оплаты можно указать расширенный тип оплаты
}
