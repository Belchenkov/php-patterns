<?php


namespace Adapter;


class PaymentAdapter implements IPaymentAdapter
{
    private IPayment $payObject;

    public function __construct(IPayment $payObject)
    {
        $this->payObject = $payObject;
    }

    public function pay(int $total): void
    {
        $this->payObject->getForm($total);
    }
}