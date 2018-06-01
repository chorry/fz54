<?php
declare(strict_types=1);
namespace fz54;
class Item
{
    /** @var string */
    private $name;
    /** @var float */
    private $price;
    /** @var float */
    private $quantity;
    /** @var float */
    private $sum;
    /** @var string */
    private $measurementUnit;
    /** @var SplEnum */
    private $paymentMethod; //TODO: enum: full_payment
    /** @var \PaymentObject */
    private $paymentObject;
    /** @var Vat */
    private $vat;


    public function __construct($name, $price, $quantity)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setQuantity($quantity);
        $this->setSum($price * $quantity);
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'quantity' => $this->getQuantity(),
            'sum' => $this->getSum(),
            'VatTax' => $this->getTax(),
            'tax_sum' => $this->getTaxSum()
        ];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     */
    public function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
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
     * @return string
     */
    public function getMeasurementUnit(): string
    {
        return $this->measurementUnit;
    }

    /**
     * @param string $measurementUnit
     */
    public function setMeasurementUnit(string $measurementUnit): void
    {
        $this->measurementUnit = $measurementUnit;
    }

    /**
     * @return SplEnum
     */
    public function getPaymentMethod(): SplEnum
    {
        return $this->paymentMethod;
    }

    /**
     * @param SplEnum $paymentMethod
     */
    public function setPaymentMethod(SplEnum $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return PaymentObject
     */
    public function getPaymentObject(): PaymentObject
    {
        return $this->paymentObject;
    }

    /**
     * @param PaymentObject $paymentObject
     */
    public function setPaymentObject(PaymentObject $paymentObject): void
    {
        $this->paymentObject = $paymentObject;
    }

    /**
     * @return Vat
     */
    public function getVat(): Vat
    {
        return $this->vat;
    }

    /**
     * @param Vat $vat
     */
    public function setVat(Vat $vat): void
    {
        $this->vat = $vat;
    }
}
