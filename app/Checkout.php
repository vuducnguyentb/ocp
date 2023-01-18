<?php


namespace App;


class Checkout
{
    public function begin(Receipt $receipt)
    {
        $this->acceptPayment($receipt);
    }

    public function acceptPayment($receipt)
    {
        // accept the cash.
    }
}
