<?php
declare(strict_types=1);

namespace fz54;

class Client
{
    /** @var int */
    public const TAG = 1008; //Телефон или электронный адрес покупателя

    /** @var string */
    private $email;

    /** @var string */
    private $phone;

    public function __construct(?string $email, ?string $phone)
    {
        $this->email = $email;
        $this->phone = $phone;
    }
}
