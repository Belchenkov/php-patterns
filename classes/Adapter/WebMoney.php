<?php


namespace Adapter;


class WebMoney implements IPayment
{
    private array $params;

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function getForm(int $total): void
    {
        echo "Payment form " . $total;
    }
}