<?php

namespace YandexCheckout\Model;

use YandexCheckout\Common\AbstractEnum;

class ReceiptPaymentSubject extends AbstractEnum
{
    const COMMODITY = 'commodity';
    const EXCISE = 'excise';
    const JOB = 'job';
    const SERVICE = 'service';
    const GAMBLING_BET = 'gambling_bet';
    const GAMBLING_PRIZE = 'gambling_prize';
    const LOTTERY = 'lottery';
    const LOTTERY_PRIZE = 'lottery_prize';
    const INTELLECTUAL_ACTIVITY = 'intellectual_activity';
    const PAYMENT = 'payment';
    const AGENT_COMMISSION = 'agent_commission';
    const COMPOSITE = 'composite';
    const ANOTHER = 'another';

    protected static $validValues = array(
        self::COMMODITY => true,
        self::EXCISE => true,
        self::JOB => true,
        self::SERVICE => true,
        self::GAMBLING_BET => true,
        self::GAMBLING_PRIZE => true,
        self::LOTTERY => true,
        self::LOTTERY_PRIZE => true,
        self::INTELLECTUAL_ACTIVITY => true,
        self::PAYMENT => true,
        self::AGENT_COMMISSION => true,
        self::COMPOSITE => true,
        self::ANOTHER => true,
    );
}
