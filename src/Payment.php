<?php
declare(strict_types=1);
namespace fz54;
class Payment
{
    /**
     * @var int
     */
    private $type;

    /**
     * @var float
     */
    private $sum = 0.0;

    public function __construct(int $type = \PaymentType::PAYMENT_TYPE_ELECTRON, float $sum = 0.0)
    {
        $this->setType($type);
        $this->setSum($sum);
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'sum' => $this->getSum(),
            'type' => $this->getType()
        ];
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sum;
    }

    /**
     * @param float $sum
     */
    public function setSum(float $sum): void
    {
        $this->sum = $sum;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }
}
