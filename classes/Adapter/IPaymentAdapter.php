<?php


namespace Adapter;


interface IPaymentAdapter
{
    public function pay(int $total);
}