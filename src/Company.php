<?php
declare(strict_types=1);

namespace fz54;

use fz54\enums\TaxSystem;

class Company
{
    public const TAG = 1117; //TAG:1117 Адрес электронной почты отправителя чека

    /** @var string */
    private $email; //Электронная почта отправителя чека. Максимальная длина строки – 64 символа.

    /** @var TaxSystem */
    private $taxationSystem; //sno
    /** @var string */
    private $inn;
    /** @var string */
    private $paymentAddress;

    public function __construct(TaxSystem $taxSystem, string $inn, string $paymentAddress)
    {
        $this->taxationSystem = $taxSystem;
        $this->inn = $inn;
        $this->paymentAddress = $paymentAddress;
    }
}
