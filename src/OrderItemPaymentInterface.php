<?php

namespace Fiscal\OFD;

/**
 * Interface OrderItemPaymentInterface
 *
 * Apply this interface to your Order item class (i.e. model). If you want to provide payment method and payment object data
 */
interface OrderItemPaymentInterface
{
    /**
     * Payment method. Full prepayment until the transfer of the subject of calculation
     */
    public const METHOD_FULL_PREPAYMENT_UNTIL_TRANSFER = 1;

    /**
     * Payment method. Partial prepayment until the transfer of the subject of the calculation
     */
    public const METHOD_PARTIAL_PREPAYMENT_UNTIL_TRANSFER = 2;

    /**
     * Payment method. Prepaid expense
     */
    public const METHOD_PREPAID_EXPENSE = 3;

    /**
     * Payment method. Full payment at the time of transfer of the subject of the calculation
     */
    public const METHOD_FULL_PAYMENT_AT_THE_TIME_OF_TRANSFER = 4;

    /**
     * Payment method. Partial payment of the subject subject of the calculation at the time of its transfer with subsequent payment on credit
     */
    public const METHOD_PARTIAL_PAYMENT_AT_THE_TIME_OF_TRANSFER_WITH_SUBSEQUENT_PAYMENT_ON_CREDIT = 5;

    /**
     * Payment method. Transfer of the object of calculation without its payment at the time of its transfer with subsequent payment on credit
     */
    public const METHOD_WITHOUT_PAYMENT_AT_THE_TIME_OF_TRANSFER_WITH_SUBSEQUENT_PAYMENT_ON_CREDIT = 6;

    /**
     * Payment method. Payment of the subject of payment after its transfer with payment on credit
     */
    public const METHOD_AFTER_TRANSFER_PAYMENT_ON_CREDIT = 7;

    /**
     * Payment object. Product.
     */
    public const OBJECT_PRODUCT = 1;

    /**
     * Payment object. Excise product.
     */
    public const OBJECT_EXCISE_PRODUCT = 2;

    /**
     * Payment object. Employment.
     */
    public const OBJECT_EMPLOYMENT = 3;

    /**
     * Payment object. Service.
     */
    public const OBJECT_SERVICE = 4;

    /**
     * Payment object. Gambling bet.
     */
    public const OBJECT_GAMBLING_BET = 5;

    /**
     * Payment object. Gambling win.
     */
    public const OBJECT_GAMBLING_WIN = 6;

    /**
     * Payment object. Lottery ticket.
     */
    public const OBJECT_LOTTERY_TICKET = 7;

    /**
     * Payment object. Lottery win.
     */
    public const OBJECT_LOTTERY_WIN = 8;

    /**
     * Payment object. Intellectual result.
     */
    public const OBJECT_INTELLECTUAL_RESULT = 9;

    /**
     * Payment object. Payment.
     */
    public const OBJECT_PAYMENT = 10;

    /**
     * Payment object. Agent's commission
     */
    public const OBJECT_AGENT_COMMISSION = 11;

    /**
     * Payment object. Composite object of calculation
     */
    public const OBJECT_COMPOSITE = 12;

    /**
     * Payment object. Another object of calculation
     */
    public const OBJECT_ANOTHER = 13;

    /**
     * @return int
     */
    public function getPaymentMethod(): int;

    /**
     * @return int
     */
    public function getPaymentObject(): int;
}
