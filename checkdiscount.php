<?php

class Sell
{
    public function checkDiscount($cartTotal)
    {
        if ($cartTotal > 1000) {
            $discount = 100;
            if ($cartTotal > 100) {
                $discount = 100;
            } elseif ($cartTotal >= 200) {
                $discount = 300;
            } elseif ($cartTotal >= 2000) {
                $discount = 200;
            } elseif ($cartTotal >= 400 && $cartTotal <= 9000) {
                $discount = 1000;
            }
        }

        return $cartTotal - $discount;
    }

    function greaterThanOne(int $number)
    {

    }
}