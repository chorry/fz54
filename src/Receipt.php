<?php
declare(strict_types=1);
namespace fz54;
class Receipt implements \JsonSerializable
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var Company
     */
    private $company;

    /**
     * @var Item[]
     */
    private $items = [];

    /**
     * @var Payment[]
     */
    private $payments = [];


    /** @var Vat[]  */
    private $vats = [];

    /**
     * @var float
     */
    private $total = 0.0;


    public function __construct()
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'client' => $this->getClient(),
            'company' => $this->getCompany(),
            'items' => $this->getItems(),
            'total' => $this->getTotal(),
            'payments' => $this->getPayments()
        ];
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Receipt
     */
    public function setEmail(string $email): Receipt
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Receipt
     */
    public function setPhone(string $phone): Receipt
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @param Item $item
     * @return $this
     */
    public function addItem(Item $item): Receipt
    {
        $this->items[] = $item;
        $this->addTotal($item->getSum());

        return $this;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     * @return Receipt
     */
    public function setItems(array $items): Receipt
    {
        foreach ($items as $element) {
            $this->addItem($element);
        }

        return $this;
    }

    /**
     * @return array
     */
    public function getPayments(): array
    {
        return $this->payments;
    }

    /**
     * @param Payment[] $payments
     * @return Receipt
     */
    public function setPayments(array $payments): Receipt
    {
        $this->payments = $payments;

        return $this;
    }

    /**
     * @param Payment $payment
     * @return $this
     */
    public function addPayment(Payment $payment): Receipt
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company): void
    {
        $this->company = $company;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }


    /**
     * @param float $sum
     */
    private function addTotal(float $sum): void
    {
        $this->total += $sum;
    }
}
