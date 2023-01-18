<?php


namespace App;


class Checkout
{
    public function begin(Receipt $receipt, PaymentMethodInterface $paymentMethod)
    {
        $paymentMethod->acceptPayment($receipt);
    }

    public function acceptPayment($receipt)
    {
        // accept the cash.
    }
}
