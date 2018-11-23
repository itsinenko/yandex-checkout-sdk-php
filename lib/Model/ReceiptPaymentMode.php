<?php

namespace YandexCheckout\Model;

use YandexCheckout\Common\AbstractEnum;

class ReceiptPaymentMode extends AbstractEnum
{
    const FULL_PREPAYMENT = 'full_prepayment';
    const PARTIAL_PREPAYMENT = 'partial_prepayment';
    const ADVANCE = 'advance';
    const FULL_PAYMENT = 'full_payment';
    const PARTIAL_PAYMENT = 'partial_payment';
    const CREDIT = 'credit';
    const CREDIT_PAYMENT = 'credit_payment';

    protected static $validValues = array(
        self::FULL_PREPAYMENT => true,
        self::PARTIAL_PREPAYMENT => true,
        self::ADVANCE => true,
        self::FULL_PAYMENT => true,
        self::PARTIAL_PAYMENT => true,
        self::CREDIT => true,
        self::CREDIT_PAYMENT => true,
    );
}
